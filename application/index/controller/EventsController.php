<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 4/11/2017
 * Time: 2:24 PM
 */

namespace application\index\controller;


use think\Controller;

/**
 * Events
 * Class EventsController
 * @package application\index\controller
 */
class EventsController extends Controller
{
    /**
     * Events list
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function index(){
        return view('index');
    }

    /**
     * Event detail
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function detail(){
        return view('detail');
    }

    /**
     * latest events
     * @return string
     * @author Allen <wudi@wdcloud.cc>
     */
    public function latest(){
        return 'latest data';
    }

    /**
     * event category
     * @return string
     * @author Allen <wudi@wdcloud.cc>
     */
    public function category(){
        return 'event category';
    }

    /**
     * events archive
     * @return string
     * @author Allen <wudi@wdcloud.cc>
     */
    public function archive(){
        return 'events archive';
    }
}