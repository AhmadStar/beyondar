<?php

namespace Botble\Casestudy2\Http\Controllers;

use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Casestudy2\Http\Requests\Casestudy2Request;
use Botble\Casestudy2\Models\Casestudy2;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Casestudy2\Tables\Casestudy2Table;
use Botble\Casestudy2\Forms\Casestudy2Form;

class Casestudy2Controller extends BaseController
{
    public function __construct()
    {
        $this
            ->breadcrumb()
            ->add(trans(trans('plugins/casestudy2::casestudy2.name')), route('casestudy2.index'));
    }

    public function index(Casestudy2Table $table)
    {
        $this->pageTitle(trans('plugins/casestudy2::casestudy2.name'));

        return $table->renderTable();
    }

    public function create()
    {
        $this->pageTitle(trans('plugins/casestudy2::casestudy2.create'));

        return Casestudy2Form::create()->renderForm();
    }

    public function store(Casestudy2Request $request)
    {
        $AllImages=[];
        foreach ($request->input('images') as $img){
            if($img)
                $AllImages[]=$img;
        }

        // Get all input data except 'images'
        $data = $request->except('images');

       // dd($data);
        $caseStudy = Casestudy2::query()->create($data);

        if($AllImages)
        $caseStudy->images =json_encode($AllImages);
        $caseStudy->save();
        $caseStudy->createSlug();

//        $form = Casestudy2Form::create()->setRequest($request);
//
//        $form->save();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('casestudy2.index'))
            ->setNextUrl(route('casestudy2.edit',$caseStudy->id))
            ->setMessage(trans('core/base::notices.create_success_message'));
    }

    public function edit(Casestudy2 $casestudy2)
    {
        $this->pageTitle(trans('core/base::forms.edit_item', ['name' => $casestudy2->name]));

        return Casestudy2Form::createFromModel($casestudy2)->renderForm();
    }

    public function update(Casestudy2 $casestudy2, Casestudy2Request $request)
    {
        Casestudy2Form::createFromModel($casestudy2)
            ->setRequest($request)
            ->save();

        return $this
            ->httpResponse()
            ->setPreviousUrl(route('casestudy2.index'))
            ->setMessage(trans('core/base::notices.update_success_message'));
    }

    public function destroy(Casestudy2 $casestudy2)
    {
        return DeleteResourceAction::make($casestudy2);
    }
}
