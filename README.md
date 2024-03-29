RunroomSeoBundle
================

[![Latest Stable Version](https://poser.pugx.org/runroom-packages/seo-bundle/v/stable)](https://packagist.org/packages/runroom-packages/seo-bundle)
[![Latest Unstable Version](https://poser.pugx.org/runroom-packages/seo-bundle/v/unstable)](https://packagist.org/packages/runroom-packages/seo-bundle)
[![License](https://poser.pugx.org/runroom-packages/seo-bundle/license)](https://packagist.org/packages/runroom-packages/seo-bundle)

[![Total Downloads](https://poser.pugx.org/runroom-packages/seo-bundle/downloads)](https://packagist.org/packages/runroom-packages/seo-bundle)
[![Monthly Downloads](https://poser.pugx.org/runroom-packages/seo-bundle/d/monthly)](https://packagist.org/packages/runroom-packages/seo-bundle)
[![Daily Downloads](https://poser.pugx.org/runroom-packages/seo-bundle/d/daily)](https://packagist.org/packages/runroom-packages/seo-bundle)

This bundle allows you to manage some basic SEO meta tags directly on the Sonata Backoffice. It also gives some utilities to integrate with the [RunroomRenderEventBundle](https://github.com/Runroom/RunroomRenderEventBundle).

## Installation

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

```bash
composer require runroom-packages/seo-bundle
```

### Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles in `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Runroom\RenderEventBundle\RunroomSeoBundle::class => ['all' => true],
];
```

## Contribute

The sources of this package are contained in the Runroom monorepo. We welcome contributions for this package on [runroom/runroom-packages](https://github.com/Runroom/runroom-packages).

## License

This bundle is under the [MIT license](LICENSE).
