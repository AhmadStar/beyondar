<?php

namespace Botble\Casestudy2\Forms\Settings;

use Botble\Casestudy2\Http\Requests\Settings\Casestudy2Request;
use Botble\Setting\Forms\SettingForm;

class Casestudy2Form extends SettingForm
{
    public function buildForm(): void
    {
        parent::buildForm();

        $this
            ->setSectionTitle('Setting title')
            ->setSectionDescription('Setting description')
            ->setValidatorClass(Casestudy2Request::class);
    }
}
