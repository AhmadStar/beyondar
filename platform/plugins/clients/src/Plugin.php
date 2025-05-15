<?php

namespace Botble\Clients;

use Illuminate\Support\Facades\Schema;
use Botble\PluginManagement\Abstracts\PluginOperationAbstract;

class Plugin extends PluginOperationAbstract
{
    public static function remove(): void
    {
        Schema::dropIfExists('Clients');
        Schema::dropIfExists('Clients_translations');
    }
}
