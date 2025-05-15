<?php

namespace Botble\CaseStady\Forms;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Forms\FieldOptions\ContentFieldOption;
use Botble\Base\Forms\FieldOptions\IsFeaturedFieldOption;
use Botble\Base\Forms\Fields\EditorField;
use Botble\Base\Forms\Fields\MediaImageField;
use Botble\Base\Forms\Fields\MediaImagesField;
use Botble\Base\Forms\Fields\OnOffField;
use Botble\Base\Forms\FormAbstract;
use Botble\CaseStady\Http\Requests\CaseStudyRequest;
use Botble\CaseStady\Models\CaseStudy;
use Botble\Theme\ThemeOption\Fields\TextareaField;

class CaseStudyForm extends FormAbstract
{
    public function setup(): void
    {
        $projectId = null;
        if ($this->getModel()) {
            $projectId = $this->getModel()->id;
           // dd($this->getModel());
        }
        $this
            ->model(CaseStudy::class)
            //->setupModel(new CaseStudy())
            ->setValidatorClass(CaseStudyRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label' => trans('core/base::forms.name'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add(
                'is_featured',
                OnOffField::class,
                IsFeaturedFieldOption::make()
                    ->toArray()
            )
            ->add('description', \Botble\Base\Forms\Fields\TextareaField::class, [])
//            ->add('goal', 'editor', [
//                'label'=> __('Goal'),
//                'label_attr' => ['class' => 'control-label'],
//                'attr' => [
//                    'with-short-code' => false, // if true, it will add a button to select shortcode
//                    'without-buttons' => false, // if true, all buttons will be hidden
//                ],
//            ])
//            ->add('planning', 'editor', [
//                'label'=> __('Planning'),
//                'label_attr' => ['class' => 'control-label'],
//                'attr' => [
//                    'with-short-code' => false, // if true, it will add a button to select shortcode
//                    'without-buttons' => false, // if true, all buttons will be hidden
//                ],
//            ])

            ->add('content', EditorField::class, ContentFieldOption::make()->allowedShortcodes()->toArray())
            ->add('image', MediaImageField::class)
//            ->add('images[]', 'mediaImages', [
//                'label' => __('images'),
//                'label_attr' => ['class' => 'control-label'],
//                'values' => $this->model ? json_decode($this->images, true) : [],
//            ])
            ->add('images[]', MediaImagesField::class, [
                'label' => trans('plugins/ecommerce::products.form.image'),
                'value' => $projectId && is_array($this->getModel()->images)
                    ? json_encode($this->getModel()->images)
                    : json_encode([]),
                'values' => $projectId && is_array($this->getModel()->images)
                    ? $this->getModel()->images
                    : [],
            ])
            ->add('status', 'customSelect', [
                'label' => trans('core/base::tables.status'),
                'required' => true,
                'choices' => BaseStatusEnum::labels(),
            ])
            ->add('client', 'text', [
                'label' => trans('Client'),
                'attr' => [

                ],
            ])
//            ->add('service', 'text', [
//                'label' => trans('Service'),
//                'attr' => [
//
//                ],
//            ])
//            ->add('industry', 'text', [
//                'label' => trans('Industry'),
//                'attr' => [
//
//                ],
//            ])

            ->add('date', 'datePicker', [
                'label' => __('Date'),
                'label_attr' => ['class' => 'control-label'],
                'default_value' => now(config('app.timezone'))->format('Y/m/d'),
            ])
//            ->add('website', 'text', [
//                'label' => trans('website'),
//                'attr' => [
//                    'data-counter' => 120,
//                ],
//            ])
            ->setBreakFieldPoint('status');
    }
}
