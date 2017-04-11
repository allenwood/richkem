<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 4/11/2017
 * Time: 2:23 PM
 */

namespace application\index\controller;


use think\Controller;

/**
 * Products list and info page
 * Class ProductController
 * @package application\index\controller
 */
class ProductController extends Controller
{
    /**
     * Products list
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function index(){
        return view('index');
    }

    /**
     * navbar menu for product category
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function nav(){
        return view('nav');
    }

    /**
     * prodcut category process
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function category(){
        return view('category');
    }

    /**
     * product detail
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function detail(){
        return view('detail');
    }
}