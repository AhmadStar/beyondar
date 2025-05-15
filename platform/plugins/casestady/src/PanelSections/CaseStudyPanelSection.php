<?php

namespace Botble\CaseStady\PanelSections;

use Botble\Base\PanelSections\PanelSection;

class CaseStudyPanelSection extends PanelSection
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
