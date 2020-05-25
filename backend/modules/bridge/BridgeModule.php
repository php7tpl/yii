<?php

namespace backend\modules\bridge;

use yii\base\BootstrapInterface;
use yii\web\Application as WebApplication;

/**
 * Class BridgeModule
 *
 * Main module for Bridge admin panel. Register your custom modules as submodules to this class in your config file.
 *
 * @package Bridge\Core
 */
class BridgeModule extends \Bridge\Core\BridgeModule implements BootstrapInterface
{
    /**
     * @inheritDoc
     */
    protected function registerRoutes(WebApplication $app)
    {
        $app->getUrlManager()->addRules([
            ['class' => 'yii\web\UrlRule', 'pattern' => '/', 'route' => 'admin/default/index'],
            ['class' => 'yii\web\UrlRule', 'pattern' => '/<id:\w+>', 'route' => '/default/view'],
            ['class' => 'yii\web\UrlRule', 'pattern' => '/<controller:[\w\-]+>/<action:[\w\-]+>', 'route' => '/<controller>/<action>'],
            ['class' => 'yii\web\UrlRule', 'pattern' => '/<module:[\w\-]+>/<controller:[\w\-]+>/<action:[\w\-]+>', 'route' => '/<module>/<controller>/<action>'],
        ], false);
    }
}
