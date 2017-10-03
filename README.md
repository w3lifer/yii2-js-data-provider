# yii2-js-data-provider

- [Installation](#installation)
- [Usage](#usage)

## Installation

``` shell
composer require w3lifer/yii2-js-data-provider
```

## Usage

``` php
/**
 * @var $this yii\web\View
 */

use w3lifer\yii2\JsDataProvider;

JsDataProvider::widget([
    'varPostfix' => 'AB',
    'data' => [
        'a' => 1,
        'b' => 2,
    ],
]);

JsDataProvider::widget([
    'varPostfix' => 'CD',
    'data' => [
        'c' => 4,
        'd' => 5,
    ],
]);
```

The code above registers the following JavaScript in the `<head>` section:

``` html
<script type="text/javascript">
  var JSDP_AB = {"a":1,"b":2};
  var JSDP_CD = {"c":4,"d":5};
</script>
```
