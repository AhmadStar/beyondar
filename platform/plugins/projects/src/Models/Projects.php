<?php

namespace Botble\Projects\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @method static \Botble\Base\Models\BaseQueryBuilder<static> query()
 */
class Projects extends BaseModel
{
    protected $table = 'projects';

    protected $fillable = [
        'name',
        'description',
        'goal',
        'planning',
        'slug',
        'content',
        'image',
        'images',
        'status',
        'service',
        'client',
        'website',
        'date',
        'industry',
        'category'
    ];

    protected function images(): Attribute
    {
        return Attribute::make(
            get: function (?string $value): array {
                try {
                    if ($value === '[null]') {
                        return [];
                    }

                    $images = json_decode((string) $value, true);

                    if (is_array($images)) {
                        $images = array_filter($images);
                    }

                    return $images ?: [];
                } catch (Exception) {
                    return [];
                }
            }
        );
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get: function (?string $value) {
                $firstImage = Arr::first($this->images) ?: null;

                if ($this->is_variation) {
                    return $firstImage;
                }

                return $value ?: $firstImage;
            }
        );
    }

    protected $casts = [
        'status' => BaseStatusEnum::class,
        'name' => SafeContent::class,
    ];

    public function createSlug()
    {
        $slug = Str::slug($this->name, '-',false);
        $index = 1;
        $baseSlug = $slug;
        while (Projects::where('slug', $slug)->where('id', '!=', $this->id)->count() > 0) {
            $slug = $baseSlug . '-' . $index++;
        }

        if (empty($slug)) {
            $slug = time();
        }

        $this->slug = $slug;
        $this->save();
        return $slug;
    }
}
