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
use SeoHelper;
use Botble\SeoHelper\SeoOpenGraph;
use RvMedia;
use Botble\Base\Enums\BaseStatusEnum;
use Botble\SeoHelper\SeoMeta;
use Botble\SeoHelper\Entities\MiscTags;
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

        // If the project is still not found, handle the case (e.g., return a 404 response)
        if (!$project) {
            abort(404, 'Project not found');
        }

        if (!$project) {
            abort(404);
        }

        \App::setLocale($lang);

        SeoHelper::setTitle($project->title)
            ->setDescription(substr($project->summary, 0, 155));

        $meta = new SeoOpenGraph;
        if ($project->picture) {
            $meta->setImage(RvMedia::getImageUrl($project->picture, 'medium'));
        }
        $meta->setDescription(substr($project->summary, 0, 155));
        $meta->setUrl('https://holistiquetraining.com/en/project/' . $project->slug);
        $meta->setTitle($project->title);
        $meta->setType('Course');

        // canonical
        $seometa = new SeoMeta;
        $canonical = new MiscTags;
        $canonical->setUrl('https://holistiquetraining.com/en/course/' . $project->slug);
        $seometa->misc($canonical);
        $seometa->setTitle($project->title);
        $seometa->setDescription(substr($project->summary, 0, 155));
        SeoHelper::setSeoMeta($seometa);

        SeoHelper::setSeoOpenGraph($meta);


        return Theme::scope('project', ['project' => $project], 'default_view')
            ->render();
    }

    public function GetProjects($lang = 'en', $slug = '')
    {
        dd('dasd asda sda sd');
        
        if ($slug === ''){
            $slug = $lang;
            $lang = 'en';
        }

        \App::setLocale($lang);

        // Attempt to retrieve by ID first
        $projects = Projects::get();
        
        return Theme::scope('projects', ['projects' => $projects])
            ->render();
    }

}
