<?php

namespace w3lifer\yii2JsDataProvider;

use yii\base\Widget;
use yii\helpers\Json;
use yii\web\View;

class Yii2JsDataProvider extends Widget
{
    /**
     * @var string JS variable name.
     */
    public $varName = 'JS_DATA_PROVIDER';

    /**
     * @var array Data for transmission. It will be JSON encoded.
     */
    public $data = [];

    /**
     * @var int Script position.
     * @see View::registerJs()
     */
    public $scriptPosition = View::POS_HEAD;

    /**
     * @inheritdoc
     */
    public function run()
    {
        $js =
            'var ' . $this->varName . ' = ' .
                Json::htmlEncode($this->data) . ';';
        $this->view->registerJs($js, $this->scriptPosition);
    }
}
