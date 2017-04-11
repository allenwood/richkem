<?php
/**
 * Created by PhpStorm.
 * User: allen
 * Date: 4/11/2017
 * Time: 2:25 PM
 */

namespace application\index\controller;


use think\Controller;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }
}