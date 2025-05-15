<?php

namespace Botble\Projects\Forms\Settings;

use Botble\Projects\Http\Requests\Settings\ProjectsRequest;
use Botble\Setting\Forms\SettingForm;

class ProjectsForm extends SettingForm
{
    public function buildForm(): void
    {
        parent::buildForm();

        $this
            ->setSectionTitle('Setting title')
            ->setSectionDescription('Setting description')
            ->setValidatorClass(ProjectsRequest::class);
    }
}
