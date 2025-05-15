<?php

namespace Botble\Casestudy2\Http\Controllers\Settings;

use Botble\Base\Forms\FormBuilder;
use Botble\Casestudy2\Forms\Settings\Casestudy2Form;
use Botble\Casestudy2\Http\Requests\Settings\Casestudy2Request;
use Botble\Setting\Http\Controllers\SettingController;

class Casestudy2Controller extends SettingController
{
    public function edit(FormBuilder $formBuilder)
    {
        $this->pageTitle('Page title');

        return $formBuilder->create(Casestudy2Form::class)->renderForm();
    }

    public function update(Casestudy2Request $request)
    {
        return $this->performUpdate($request->validated());
    }
}
