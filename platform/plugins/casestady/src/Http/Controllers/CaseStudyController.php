<?php

namespace Botble\CaseStady\Http\Controllers;

use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\CaseStady\Http\Requests\CaseStudyRequest;
use Botble\CaseStady\Models\CaseStudy;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Http\Controllers\BaseController;
use Botble\CaseStady\Tables\CaseStudyTable;
use Botble\CaseStady\Forms\CaseStudyForm;

class CaseStudyController extends BaseController
{
    public function __construct()
    {
        $this
            ->breadcrumb()
            ->add(trans(trans('plugins/casestudy::casestudy.name')), route('casestudy.index'));
    }

    public function index(CaseStudyTable $table)
    {
        $this->pageTitle(trans('plugins/casestudy::casestudy.name'));

        return $table->renderTable();
    }

    public function create()
    {
        $this->pageTitle(trans('plugins/casestudy::casestudy.create'));

        return CaseStudyForm::create()->renderForm();
    }

    public function store(CaseStudyRequest $request)
    {
        $form = CaseStudyForm::create()->setRequest($request);

        $form->save();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('casestudy.index'))
            ->setNextUrl(route('casestudy.edit', $form->getModel()->getKey()))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function edit(CaseStudy $caseStudy)
    {
        $this->pageTitle(trans('core/base::forms.edit_item', ['name' => $caseStudy->name]));

        dd($caseStudy);
        return CaseStudyForm::createFromModel($caseStudy)->renderForm();
    }

    public function update(CaseStudy $caseStudy, CaseStudyRequest $request)
    {
        $images=$request->input('images');

        $data = $request->except('images');
        $caseStudy->fill($data);
        $caseStudy->save();
        //dd($request->input());
       // CaseStudyForm::createFromModel($caseStudy)
         //   ->setRequest($request)
        //    ->save();
        $AllImages=[];
        foreach ($images as $img){
            if($img)
                $AllImages[]=$img;
        }
        $caseStudy->images =json_encode($AllImages);
       
        $caseStudy->createSlug();
        $caseStudy->save();
        return $this
            ->httpResponse()
            ->setPreviousUrl(route('casestudy.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    public function destroy(CaseStudy $caseStudy)
    {
        return DeleteResourceAction::make($caseStudy);
    }
}
