# Change Log

- [6.0.0 October 28, 2017](#600-october-28-2017)
- [5.0.0 October 3, 2017](#500-october-3-2017)
- [4.0.0 August 17, 2017](#400-august-17-2017)
- [3.0.0 August 16, 2017](#300-august-16-2017)
- [2.0.0 July 22, 2017](#200-july-22-2017)
- [1.0.0 July 18, 2017](#100-july-18-2017)

## 6.0.0 October 28, 2017

- Removed `$varPrefix` property
- `$varPrefix` property renamed to `$var`

## 5.0.0 October 3, 2017

- `w3lifer\yii2JsDataProvider\Yii2JsDataProvider` -> `w3lifer\yii2\JsDataProvider`
- `private $varPrefix = 'Y2JSDP_';` -> `protected $varPrefix = 'JSDP_';`
- `public $varPostfix = '';` -> `public $varPostfix;`
- `Json::htmlEncode($this->data)` -> `Json::htmlEncode((object) $this->data)`

## 4.0.0 August 17, 2017

- Preventing the registration of the same postfix

## 3.0.0 August 16, 2017

- Added unchangeable `$varPrefix` property with the `Y2JSDP_` value by default
- Added required `$varPostfix` property
- Removed `$scriptPosition` property

## 2.0.0 July 22, 2017

- `JS_DATA_PROVIDER` renamed to `YII2_JS_DATA_PROVIDER`

## 1.0.0 July 16, 2017

- Initial release
