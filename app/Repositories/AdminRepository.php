<?php

namespace App\Repositories;

use App\Admin;

class AdminRepository extends CommonRepository
{
    public function getAdminByUsername($username) {
        $res = Admin::where('username', $username)->first();
        return $res;
    }

//    public function updateStatusById($id, $status) {
//        if(!is_numeric($status)) {
//            throw_exception("status不能为非数字");
//        }
//        if(!$id || !is_numeric($id)) {
//            throw_exception("ID不合法");
//        }
//        $data['status'] = $status;
//        return  $this->_db->where('admin_id='.$id)->save($data); // 根据条件更新记录
//
//    }
}