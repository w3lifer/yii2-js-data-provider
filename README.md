# Yii2JsDataProvider

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

use w3lifer\yii2JsDataProvider\Yii2JsDataProvider;

Yii2JsDataProvider::widget([
    'data' => [
        'a' => 1,
        'b' => 2,
    ],
]);
```

The code above registers the following JavaScript in the `<head>` section:

``` html
<script type="text/javascript">var JS_DATA_PROVIDER = {"a":1,"b":2};</script>
```
