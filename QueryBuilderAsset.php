<?php

namespace vrtc\querybuilder;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [jquery QueryBuilder library](https://github.com/mistic100/jQuery-QueryBuilder)
 *
 * @author Kindeev <dkindeev@mail.ru>
 */
class QueryBuilderAsset extends AssetBundle {

    public $sourcePath = '@vendor/vrtc/yii2-querybuilder/jQuery-QueryBuilder/dist';

    public $js = [
        'js/query-builder.standalone.min.js',
        'i18n/query-builder.ru.js',
    ];

    public $css = [
        'css/query-builder.default.min.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

} 
