<?php

namespace Botble\Clients\Forms\Settings;

use Botble\Clients\Http\Requests\Settings\ClientsRequest;
use Botble\Setting\Forms\SettingForm;

class ClientsForm extends SettingForm
{
    public function buildForm(): void
    {
        parent::buildForm();

        $this
            ->setSectionTitle('Setting title')
            ->setSectionDescription('Setting description')
            ->setValidatorClass(ClientsRequest::class);
    }
}
