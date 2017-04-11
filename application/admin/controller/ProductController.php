<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 4/11/2017
 * Time: 4:52 PM
 */

namespace application\admin\controller;


class ProductController extends CommonController
{
    public function lists(){
        return view('lists');
    }

    public function category(){
     return view('category');
    }
}