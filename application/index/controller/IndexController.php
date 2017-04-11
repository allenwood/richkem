<?php

namespace application\index\controller;

/**
 * Homepage controller
 * Class IndexController
 * @package application\index\controller
 */
/**
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

    public function guide(){
        return view('guide');
    }

    /**
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function slide(){
        return view('slide');
    }

    /**
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function features(){
        return view("features");
    }

    /**
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function category(){
        return view('category');
    }

    /**
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function products(){
        return view('products');
    }

    /**
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function topevents(){
        return view('topevents');
    }

    /**
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function latestevents(){
        return view('latestevents');
    }

    /**
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function clients(){
        return view('clients');
    }

}
