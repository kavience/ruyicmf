<?php
// +----------------------------------------------------------------------
// | RuYiCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-present http://www.ruyicmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: kavience < kavience@gmail.com>
// +----------------------------------------------------------------------
namespace app\admin;

use app\admin\command\PublishApp;
use app\admin\command\PublishPlugin;
use app\admin\command\PublishTheme;
use app\admin\command\UninstallApp;
use app\admin\command\UninstallPlugin;
use think\Service;

class AppStoreService extends Service
{

    public function boot()
    {
        $this->commands([
            PublishApp::class,
            PublishPlugin::class,
            PublishTheme::class,
            UninstallApp::class,
            UninstallPlugin::class,
        ]);
    }

}
