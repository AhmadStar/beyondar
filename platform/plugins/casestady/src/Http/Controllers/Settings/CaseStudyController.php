<?php

namespace Botble\CaseStady\Http\Controllers\Settings;

use Botble\Base\Forms\FormBuilder;
use Botble\CaseStady\Forms\Settings\CaseStudyForm;
use Botble\CaseStady\Http\Requests\Settings\CaseStudyRequest;
use Botble\Setting\Http\Controllers\SettingController;

class CaseStudyController extends SettingController
{
    public function edit(FormBuilder $formBuilder)
    {
        $this->pageTitle('Page title');

        return $formBuilder->create(CaseStudyForm::class)->renderForm();
    }

    public function update(CaseStudyRequest $request)
    {
        return $this->performUpdate($request->validated());
    }
}
