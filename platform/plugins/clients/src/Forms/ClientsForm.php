<?php

namespace Botble\Clients\Forms;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\Base\Forms\FieldOptions\ContentFieldOption;
use Botble\Base\Forms\Fields\EditorField;
use Botble\Base\Forms\FormAbstract;
use Botble\Clients\Http\Requests\ClientsRequest;
use Botble\Clients\Models\Clients;

class ClientsForm extends FormAbstract
{
    public function setup(): void
    {
        $this
            ->setupModel(new Clients())
            ->setValidatorClass(ClientsRequest::class)
            ->withCustomFields()
            ->add('name', 'text', [
                'label' => trans('core/base::forms.name'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 120,
                ],
            ])
            ->add('link', 'text', [
                'label' => trans('link'),
                'required' => true,
                'attr' => [
                    'placeholder' => trans('core/base::forms.name_placeholder'),
                    'data-counter' => 250,
                ],
            ])
            ->add('content', EditorField::class, ContentFieldOption::make()->allowedShortcodes()->toArray())


            ->add('status', 'customSelect', [
                'label' => trans('core/base::tables.status'),
                'required' => true,
                'choices' => BaseStatusEnum::labels(),
            ])
            ->add('logo', 'mediaImage', [
                'label' => __('logo'),
                'label_attr' => ['class' => 'control-label'],
            ])
            ->setBreakFieldPoint('status');
    }
}
