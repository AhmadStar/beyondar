<?php

namespace Botble\Services\Forms;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Forms\FieldOptions\ContentFieldOption;
use Botble\Base\Forms\FieldOptions\DescriptionFieldOption;
use Botble\Base\Forms\Fields\EditorField;
use Botble\Base\Forms\Fields\TextareaField;
use Botble\Base\Forms\FormAbstract;
use Botble\Services\Http\Requests\ServicesRequest;
use Botble\Services\Models\Services;

class ServicesForm extends FormAbstract
{
    public function setup(): void
    {
        $this
            ->setupModel(new Services())
            ->setValidatorClass(ServicesRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label' => trans('core/base::forms.name'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('description', TextareaField::class, DescriptionFieldOption::make()->toArray())

            ->add('content', EditorField::class, ContentFieldOption::make()->allowedShortcodes()->toArray())
            ->add('list', 'editor', [
                'label' => __('list'),
                'label_attr' => ['class' => 'control-label'],
                'attr' => [
                    'with-short-code' => false, // if true, it will add a button to select shortcode
                    'without-buttons' => false, // if true, all buttons will be hidden
                ],
            ])


            ->add('status', 'customSelect', [
                'label' => trans('core/base::tables.status'),
                'required' => true,
                'choices' => BaseStatusEnum::labels(),
            ])
            ->add('icon', 'mediaImage', [
                'label' => __('Icon'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('img1', 'mediaImage', [
                'label' => __('Image 1'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->add('img2', 'mediaImage', [
                'label' => __('Image 2'),
                'label_attr' => ['class' => 'control-label'],
            ])

            ->setBreakFieldPoint('status');
    }
}
