# Dog breeds bundle

## Installation

**Add DogBreedsBundle by running this command**

```bash
$ composer.phar require velikonja/dog-breeds-bundle "@stable"
```

**Enable the bundle in AppKernel**

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Velikonja\DogBreedsBundle\VelikonjaDogBreedsBundle(),
    );
}
```
