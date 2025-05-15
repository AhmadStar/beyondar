<?php

namespace Botble\Clients\PanelSections;

use Botble\Base\PanelSections\PanelSection;

class ClientsPanelSection extends PanelSection
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
