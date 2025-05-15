<?php

namespace Botble\Casestudy2;

use Illuminate\Support\Facades\Schema;
use Botble\PluginManagement\Abstracts\PluginOperationAbstract;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        Schema::dropIfExists('Casestudy2s');
        Schema::dropIfExists('Casestudy2s_translations');
    }
}
