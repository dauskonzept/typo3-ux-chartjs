[![Latest Stable Version](http://poser.pugx.org/svenpetersen/typo3-ux-chartjs/v)](https://packagist.org/packages/svenpetersen/typo3-ux-chartjs)
[![Total Downloads](http://poser.pugx.org/svenpetersen/typo3-ux-chartjs/downloads)](https://packagist.org/packages/svenpetersen/typo3-ux-chartjs)
[![Monthly Downloads](http://poser.pugx.org/svenpetersen/typo3-ux-chartjs/d/monthly)](https://packagist.org/packages/svenpetersen/typo3-ux-vue)
[![Latest Unstable Version](http://poser.pugx.org/svenpetersen/typo3-ux-chartjs/v/unstable)](https://packagist.org/packages/svenpetersen/typo3-ux-vue)
[![License](http://poser.pugx.org/svenpetersen/typo3-ux-vue/license)](https://packagist.org/packages/svenpetersen/typo3-ux-vue)
[![PHP Version Require](http://poser.pugx.org/svenpetersen/typo3-ux-vue/require/php)](https://packagist.org/packages/svenpetersen/typo3-ux-vue)

TYPO3 Extension "typo3-ux-vue"
=================================

## What does it do?
Easily build Chart.js in PHP and render them in Fluid templates.

It acts as a wrapper for symfony/ux-chartjs package.

## Installation
The recommended way to install the extension is by
using [Composer](https://getcomposer.org/). In your Composer based TYPO3 project
root, just run:
<pre>composer require svenpetersen/typo3-ux-chartjs</pre>

## Setup
Before you start, make sure you have [EXT:typo3_encore](https://github.com/sabbelasichon/typo3_encore).
This extensions integrates [Webpack Encore](https://symfony.com/doc/current/frontend.html) into TYPO3.

Follow the [Symfony UX Chart.js official documentation](https://symfony.com/bundles/ux-chartjs/current/index.html).

Additionally:

    # Add this line to your package.json dependencies:
    "@symfony/ux-chartjs": "file:vendor/symfony/ux-chartjs/assets",

    # Install Chart.js
    $ npm i chartjs

    # or
    $ yarn add chartjs

    # Add these lines to your controllers.json:
    "@symfony/ux-chartjs": {
        "chart": {
            "enabled": true,
            "fetch": "eager"
        }
    },

    # run
    $ npm install --force
    $ npm run watch

    # or
    $ yarn install --force
    $ yarn watch

## Usage
In any fluid template: Just register the Namespace and use the provided ViewHelper to render your chart:

    <html xmlns:ux="http://typo3.org/ns/SvenPetersen/UX/Chartjs/ViewHelpers">
        <ux:chart chart="{chart}" />
    </html>

Please refer to the [symfony/ux-chartjs](https://ux.symfony.com/chartjs) docs for further information.

## Contributing

Please refer to the [contributing](CONTRIBUTING.md) document included in this
repository.
