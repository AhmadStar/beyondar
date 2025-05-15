<?php

namespace Botble\Clients\Http\Controllers;

use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Clients\Http\Requests\ClientsRequest;
use Botble\Clients\Models\Clients;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Clients\Tables\ClientsTable;
use Botble\Clients\Forms\ClientsForm;

class ClientsController extends BaseController
{
    public function __construct()
    {
        $this
            ->breadcrumb()
            ->add(trans(trans('plugins/clients::clients.name')), route('clients.index'));
    }

    public function index(ClientsTable $table)
    {
        $this->pageTitle(trans('plugins/clients::clients.name'));

        return $table->renderTable();
    }

    public function create()
    {
        $this->pageTitle(trans('plugins/clients::clients.create'));

        return ClientsForm::create()->renderForm();
    }

    public function store(ClientsRequest $request)
    {
        $form = ClientsForm::create()->setRequest($request);

        $form->save();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('clients.index'))
            ->setNextUrl(route('clients.edit', $form->getModel()->getKey()))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function edit(Clients $clients)
    {
        $this->pageTitle(trans('core/base::forms.edit_item', ['name' => $clients->name]));

        return ClientsForm::createFromModel($clients)->renderForm();
    }

    public function update(Clients $clients, ClientsRequest $request)
    {
        ClientsForm::createFromModel($clients)
            ->setRequest($request)
            ->save();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('clients.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    public function destroy(Clients $clients)
    {
        return DeleteResourceAction::make($clients);
    }
}
