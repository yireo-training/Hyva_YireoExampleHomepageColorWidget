<?php declare(strict_types=1);

namespace Hyva\YireoExampleHomepageColorWidget\Plugin;

use Yireo\ExampleHomepageColorWidget\Block\ExampleWidget;

class ChangeExampleWidgetTemplate
{
    // @todo: Register this plugin through di.xml
    public function beforeToHtml(ExampleWidget $block)
    {
        $block->setTemplate('Hyva_YireoExampleHomepageColorWidget::example.phtml');
    }
}
