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

}
