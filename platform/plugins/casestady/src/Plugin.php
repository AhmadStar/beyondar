<?php

namespace Botble\CaseStady;

use Illuminate\Support\Facades\Schema;
use Botble\PluginManagement\Abstracts\PluginOperationAbstract;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        Schema::dropIfExists('caseStudies');
        Schema::dropIfExists('caseStudies_translations');
    }
}
