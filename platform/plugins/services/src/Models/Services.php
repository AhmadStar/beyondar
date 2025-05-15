<?php

namespace Botble\Services\Models;

use Botble\Base\Casts\SafeContent;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Models\BaseModel;

/**
 * @method static \Botble\Base\Models\BaseQueryBuilder<static> query()
 */
class Services extends BaseModel
{
    protected $table = 'services';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'content',
        'list',
        'img1',
        'img2',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
        'name' => SafeContent::class,
    ];
}
