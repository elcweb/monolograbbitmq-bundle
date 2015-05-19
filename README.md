MonologRabbitmqBundle
=====================

[![Latest Stable Version](https://poser.pugx.org/elcweb/monolograbbitmq-bundle/v/stable.png)](https://packagist.org/packages/elcweb/monolograbbitmq-bundle)
[![Total Downloads](https://poser.pugx.org/elcweb/monolograbbitmq-bundle/downloads.png)](https://packagist.org/packages/elcweb/monolograbbitmq-bundle)

Installation
------------

### Step 1: Download using composer

```js
{
    "require": {
        "elcweb/monolograbbitmq-bundle"     : "dev-master"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update elcweb/monolograbbitmq-bundle
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Elcweb\MonologRabbitmqBundle\MonologRabbitmqBundle(),
    );
}
```

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

    Resources/meta/LICENSE

