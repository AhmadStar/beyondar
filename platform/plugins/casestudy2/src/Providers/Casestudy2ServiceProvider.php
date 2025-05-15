<?php

namespace Botble\Casestudy2\Providers;

use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Base\Facades\DashboardMenu;
use Botble\Casestudy2\Models\Casestudy2;

class Casestudy2ServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/casestudy2')
            ->loadHelpers()
            ->loadAndPublishConfigurations(["permissions"])
            ->loadAndPublishTranslations()
            ->loadRoutes()
            ->loadAndPublishViews()
            ->loadMigrations();
            
            if (defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
                \Botble\LanguageAdvanced\Supports\LanguageAdvancedManager::registerModule(Casestudy2::class, [
                    'name',
                ]);
            }
            
            DashboardMenu::default()->beforeRetrieving(function () {
                DashboardMenu::registerItem([
                    'id' => 'cms-plugins-casestudy2',
                    'priority' => 5,
                    'parent_id' => null,
                    'name' => 'plugins/casestudy2::casestudy2.name',
                    'icon' => 'fa fa-list',
                    'url' => route('casestudy2.index'),
                    'permissions' => ['casestudy2.index'],
                ]);
            });
    }
}
