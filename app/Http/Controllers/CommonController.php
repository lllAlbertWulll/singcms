<?php

namespace App\Http\Controllers;

use App\Repositories\CommonRepository;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    protected $commonRepository;

    public function __construct(CommonRepository $commonRepository)
    {
        $this->commonRepository = $commonRepository;
//        parent::__construct();
        //$this->__init();
    }

    private function __init()
    {
        // 如果已经登录
        $isLogin = $this->isLogin();
        if (!$isLogin) {
            // 跳转到登录页面
            // TODO::
            $this->redirect('login');
        }
    }


}
