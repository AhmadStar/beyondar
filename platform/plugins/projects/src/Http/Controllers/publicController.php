<?php

namespace Botble\Projects\Http\Controllers;

use Botble\Projects\Models\Projects;
use Botble\Base\Http\Controllers\BaseController;
use Botble\Theme\Facades\Theme;

class PublicController extends BaseController
{

    public function GetProject($lang = 'en', $slug = '')
    {
        if ($slug === ''){
            $slug = $lang;
            $lang = 'en';
        }

        \App::setLocale($lang);

        // Attempt to retrieve by ID first
        $project = Projects::find(1);

        // If not found by ID, attempt to retrieve by slug
        if (!$project) {
            $project = Projects::where('slug', $slug)->first();
        }

        if (!$project) {
            abort(404, 'Project not found');
        }

        \App::setLocale($lang);

        return Theme::scope('project', ['project' => $project], 'default_view')
            ->render();
    }

    public function GetProjects($lang = 'en')
    {
        \App::setLocale($lang);

        $projects = Projects::get();
        
        return Theme::scope('projects', ['projects' => $projects])
            ->render();
    }
}
