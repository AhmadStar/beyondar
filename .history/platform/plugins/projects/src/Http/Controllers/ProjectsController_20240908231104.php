<?php

namespace Botble\Projects\Http\Controllers;

use Botble\Base\Events\CreatedContentEvent;
use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Projects\Http\Requests\ProjectsRequest;
use Botble\Projects\Models\Projects;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Projects\Tables\ProjectsTable;
use Botble\Projects\Forms\ProjectsForm;

class ProjectsController extends BaseController
{
    public function __construct()
    {
        $this
            ->breadcrumb()
            ->add(trans(trans('plugins/projects::projects.name')), route('projects.index'));
    }

    public function index(ProjectsTable $table)
    {
        $this->pageTitle(trans('plugins/projects::projects.name'));

        return $table->renderTable();
    }

    public function create()
    {
        $this->pageTitle(trans('plugins/projects::projects.create'));

        return ProjectsForm::create()->renderForm();
    }

    public function store(ProjectsRequest $request)
    {

        $AllImages=[];
        foreach ($request->input('images') as $img){
            if($img)
                $AllImages[]=$img;
        }

        // Get all input data except 'images'
        $data = $request->except('images');

        $projects = Projects::query()->create($data);

        $projects->images =json_encode($AllImages);
        $projects->save();
        $projects->createSlug();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('projects.index'))
            ->setNextUrl(route('projects.edit', $projects->getModel()->getKey()))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function edit(Projects $projects)
    {
        $this->pageTitle(trans('core/base::forms.edit_item', ['name' => $projects->name]));

        return ProjectsForm::createFromModel($projects)->renderForm();
    }

    public function update(Projects $projects, ProjectsRequest $request)
    {

       
        $projects->fill($request->input());

        $projects->save();

        $AllImages=[];
        foreach ($request->input('images') as $img){
            if($img)
                $AllImages[]=$img;
        }
        $projects->images =json_encode($AllImages);
        $projects->save();
        $projects->createSlug();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('projects.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));

    }

    public function destroy(Projects $projects)
    {
        return DeleteResourceAction::make($projects);
    }
}
