<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 4/11/2017
 * Time: 3:50 PM
 */

namespace application\index\controller;


use think\Controller;

/**
 * Search
 * Class SearchController
 * @package application\index\controller
 */
class SearchController extends Controller
{
    /**
     * search action
     * @return string
     * @author Allen <wudi@wdcloud.cc>
     */
    public function find(){
        return 'Search result';
    }

    /**
     * Search Result
     * @return \think\response\View
     * @author Allen <wudi@wdcloud.cc>
     */
    public function result(){
        return view('result');
    }


}