<?php

namespace Botble\Casestudy2\PanelSections;

use Botble\Base\PanelSections\PanelSection;

class Casestudy2PanelSection extends PanelSection
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
