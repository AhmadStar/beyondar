<?php

namespace Botble\Clients\Http\Controllers\Settings;

use Botble\Base\Forms\FormBuilder;
use Botble\Clients\Forms\Settings\ClientsForm;
use Botble\Clients\Http\Requests\Settings\ClientsRequest;
use Botble\Setting\Http\Controllers\SettingController;

class ClientsController extends SettingController
{
    public function edit(FormBuilder $formBuilder)
    {
        $this->pageTitle('Page title');

        return $formBuilder->create(ClientsForm::class)->renderForm();
    }

    public function update(ClientsRequest $request)
    {
        return $this->performUpdate($request->validated());
    }
}
