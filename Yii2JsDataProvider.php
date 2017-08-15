<?php

namespace w3lifer\yii2JsDataProvider;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

/**
 * Yii2 JS data provider.
 */
class Yii2JsDataProvider extends Widget
{
    /**
     * @var string
     */
    private $varPrefix = 'Y2JSDP_';

    /**
     * @var string
     */
    public $varPostfix = '';

    /**
     * @var array Data for transmission. They will be JSON encoded.
     */
    public $data = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        if (!$this->varPostfix) {
            throw new InvalidConfigException(
                'Missing required value for ' .
                    self::className() . '::$varPostfix property.'
            );
        }
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $js =
            'var ' . $this->varPrefix . $this->varPostfix . ' = ' .
                Json::htmlEncode($this->data) . ';';
        $this->view->registerJs($js, View::POS_HEAD);
    }
}
