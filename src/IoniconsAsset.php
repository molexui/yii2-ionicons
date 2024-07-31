<?php

/**
 * @copyright Copyright &copy; Agus Suhartono, molexui.github.io, 2024
 * @package yii2-adminlte3
 * @subpackage yii2-widget-alert
 * @version 1.0.0
 */

namespace molexui\fontawesome;

use yii\web\AssetBundle;

/**
 * Asset bundle for AdminLte3 for Yii2.
 *
 * @author Agus Suhartono <agus.suhartono@gmail.com>
 * @since 1.0.0
 */
class IoniconsAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    
    public $css = [
        'css/ionicons.min.css',
    ];
}
