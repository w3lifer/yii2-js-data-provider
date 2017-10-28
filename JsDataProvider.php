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
    public $var;

    /**
     * @var array
     */
    private static $registeredVars = [];

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
        if (!$this->var) {
            throw new InvalidConfigException(
                'Missing required value for ' .
                    self::className() . '::$var property.'
            );
        }
        if (in_array($this->var, self::$registeredVars)) {
            throw new InvalidConfigException(
                'The specified variable is already registered.'
            );
        }
        self::$registeredVars[] = $this->var;
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $js =
            'var ' . $this->var . ' = ' .
                Json::htmlEncode((object) $this->data) . ';';
        $this->view->registerJs($js, View::POS_HEAD);
    }
}
