<?php
/**
 * Created by PhpStorm.
 * User: CODINGNET - http://codingnet.ru
 * Date: 26.08.2017
 * Time: 22:07
 */

namespace codingnet\datepicker;


use yii\web\AssetBundle;

class BootstrapDatepickerAsset extends AssetBundle
{
    /**
     * @inherit
     */
    public $sourcePath = '@bower/bootstrap-datepicker';

    /**
     * @inherit
     */
    public $css = [
        'dist/css/bootstrap-datepicker3.standalone.min.css'
    ];

    /**
     * @inherit
     */
    public $js = [
        'dist/js/bootstrap-datepicker.min.js',
    ];

    public function init()
    {
        parent::init();
    }
}
