<?php

namespace Botble\Projects\PanelSections;

use Botble\Base\PanelSections\PanelSection;

class ProjectsPanelSection extends PanelSection
{
    public function setup(): void
    {
        $this
            ->setId('settings.{id}')
            ->setTitle('{title}')
            ->withItems([
                //
            ]);
    }
}
