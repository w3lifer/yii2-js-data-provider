<?php

namespace w3lifer\yii2;

use yii\base\InvalidConfigException;
use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

/**
 * JS data provider.
 */
class JsDataProvider extends Widget
{
    /**
     * @var string
     */
    protected $varPrefix = 'JSDP_';

    /**
     * @var string
     */
    public $varPostfix;

    /**
     * @var array
     */
    private static $registeredVarPostfixes = [];

    /**
     * @var array Data for transmission (will be JSON encoded).
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
        if (in_array($this->varPostfix, self::$registeredVarPostfixes)) {
            throw new InvalidConfigException(
                'The specified ' .
                    self::className() . '::$varPostfix ' .
                        'is already registered.'
            );
        }
        self::$registeredVarPostfixes[] = $this->varPostfix;
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $js =
            'var ' . $this->varPrefix . $this->varPostfix . ' = ' .
                Json::htmlEncode((object) $this->data) . ';';
        $this->view->registerJs($js, View::POS_HEAD);
    }
}
