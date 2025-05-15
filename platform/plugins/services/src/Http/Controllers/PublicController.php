<?php

namespace Botble\Services\Http\Controllers;

use Botble\Base\Http\Actions\DeleteResourceAction;
use Botble\Services\Http\Requests\ServicesRequest;
use Botble\Services\Models\Services;
use Botble\Base\Facades\PageTitle;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Services\Tables\ServicesTable;
use Botble\Services\Forms\ServicesForm;
use Illuminate\Http\Request;

class PublicController extends BaseController
{
    public function __construct()
    {
        $this
            ->breadcrumb()
            ->add(trans(trans('plugins/services::services.name')), route('services.index'));
    }

    public function service($slug,Request $request)
    {
        $services=\Botble\Services\Models\Services::all();

        $service=\Botble\Services\Models\Services::where(['slug'=>$slug])->first();
        //dd($service);
        $this->pageTitle(trans('Services'));

        return \Theme::scope('services', compact('service','services'))
            ->render();
    }


}
