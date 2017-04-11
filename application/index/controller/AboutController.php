<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 4/11/2017
 * Time: 2:20 PM
 */

namespace application\index\controller;


use think\Controller;

/**
 * Intro about the company
 * Class AboutController
 * @package application\index\controller
 */
class AboutController extends Controller
{
    /**
     * index page
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function index(){
        return view('index');
    }

    /**
     * basic description about the company
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function intro(){
        return view('intro');
    }

    /**
     * honours
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function honour(){
        return view('honour');
    }

    /**
     * enterprise features
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function features(){
        return view('features');
    }


}