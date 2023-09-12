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
namespace app\admin\model;

use think\Model;


class RecycleBinModel extends Model
{
    /**
     * 模型名称
     * @var string
     */
    protected $name = 'recycle_bin';

    protected $autoWriteTimestamp = true;
    protected $update = false;

    public function user()
    {
        return $this->belongsTo('UserModel', 'user_id');
    }


}
