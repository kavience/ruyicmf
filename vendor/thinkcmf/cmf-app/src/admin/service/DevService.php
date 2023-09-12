<?php
// +----------------------------------------------------------------------
// | RuYiCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-present http://www.ruyicmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: kavience <kavience@gmail.com>
// +----------------------------------------------------------------------
namespace app\admin\service;


use app\admin\model\AdminMenuModel;

class DevService
{
    /**
     * 获取所有友情链接
     */
    public static function devMenus()
    {
        $devMenuId = AdminMenuModel::where(['app' => 'admin', 'controller' => 'Dev', 'action' => 'index'])->value('id');
        return AdminMenuModel::where('parent_id', $devMenuId)->where('type', 1)->order('list_order asc')->select();
    }

}
