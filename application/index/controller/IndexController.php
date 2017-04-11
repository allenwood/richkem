<?php

namespace application\index\controller;

/**
 * Homepage controller
 * Class IndexController
 * @package application\index\controller
 */
class IndexController {

    /**
     * Hompage index action method
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function index() {

        return view('index');
    }
}
