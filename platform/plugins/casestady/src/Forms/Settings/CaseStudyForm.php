<?php

namespace Botble\CaseStady\Forms\Settings;

use Botble\CaseStady\Http\Requests\Settings\CaseStudyRequest;
use Botble\Setting\Forms\SettingForm;

class CaseStudyForm extends SettingForm
{
    public function buildForm(): void
    {
        parent::buildForm();

        $this
            ->setSectionTitle('Setting title')
            ->setSectionDescription('Setting description')
            ->setValidatorClass(CaseStudyRequest::class);
    }
}
