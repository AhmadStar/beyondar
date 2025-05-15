<?php

namespace Botble\CaseStady\Providers;

use Botble\Base\Supports\ServiceProvider;
use Botble\Base\Traits\LoadAndPublishDataTrait;
use Botble\Base\Facades\DashboardMenu;
use Botble\CaseStady\Models\CaseStudy;

class CaseStudyServiceProvider extends ServiceProvider
{
    use LoadAndPublishDataTrait;

    public function boot(): void
    {
        $this
            ->setNamespace('plugins/casestudy')
            ->loadHelpers()
            ->loadAndPublishConfigurations(["permissions"])
            ->loadAndPublishTranslations()
            ->loadRoutes()
            ->loadAndPublishViews()
            ->loadMigrations();
            
            if (defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
                \Botble\LanguageAdvanced\Supports\LanguageAdvancedManager::registerModule(CaseStudy::class, [
                    'name',
                ]);
            }
            
            DashboardMenu::default()->beforeRetrieving(function () {
                DashboardMenu::registerItem([
                    'id' => 'cms-plugins-casestudy',
                    'priority' => 5,
                    'parent_id' => null,
                    'name' => 'plugins/casestudy::casestudy.name',
                    'icon' => 'fa fa-list',
                    'url' => route('casestudy.index'),
                    'permissions' => ['casestudy.index'],
                ]);
            });
    }
}
