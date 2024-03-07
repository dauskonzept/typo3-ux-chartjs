<?php

declare(strict_types=1);

namespace DSKZPT\UX\Chartjs\ViewHelpers;

use Ssch\Typo3Encore\ViewHelpers\Stimulus\AbstractViewHelper;
use Symfony\UX\Chartjs\Model\Chart;

class RenderChartViewHelper extends AbstractViewHelper
{
    protected $escapeOutput = false;

    public function initializeArguments(): void
    {
        $this->registerArgument('chart', Chart::class, 'Chart to render', true);
        $this->registerArgument('attributes', 'array', 'Attributes to configure the chart', false, []);
    }

    public function render(): string
    {
        $attributes = $this->arguments['attributes'];
        assert(is_array($attributes));

        $chart = $this->arguments['chart'];
        assert($chart instanceof Chart);

        $chart->setAttributes(array_merge($chart->getAttributes(), $attributes));
        $stimulusAttributes = $this->renderStimulusController(
            '@symfony/ux-chartjs/chart',
            ['view' => $chart->createView()]
        )->__toString();

        return sprintf('<canvas %s></canvas>', $stimulusAttributes);
    }
}
