<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 4/11/2017
 * Time: 2:25 PM
 */

namespace application\index\controller;


use think\Controller;

/**
 * Contact page
 * Class ContactController
 * @package application\index\controller
 */
class ContactController extends Controller
{
    /**
     * contact page
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function index(){
        return view('index');
    }

    /**
     * Sending message action
     * @return string
     * @author Allen <wudi@wdcloud.cc>
     */
    public function msg(){
        return 'msg data process';
    }

    /**
     * message arrived info
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function arrived(){
        return view('arrived');
    }

    //TODO::location map solutions
    public function map(){
        return view('map');
    }

}