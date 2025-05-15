<?php

namespace Botble\Projects\Http\Controllers\Settings;

use Botble\Base\Forms\FormBuilder;
use Botble\Projects\Forms\Settings\ProjectsForm;
use Botble\Projects\Http\Requests\Settings\ProjectsRequest;
use Botble\Setting\Http\Controllers\SettingController;

class ProjectsController extends SettingController
{
    public function edit(FormBuilder $formBuilder)
    {
        $this->pageTitle('Page title');

        return $formBuilder->create(ProjectsForm::class)->renderForm();
    }

    public function update(ProjectsRequest $request)
    {
        return $this->performUpdate($request->validated());
    }
}
