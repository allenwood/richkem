<?php
namespace Home\Controller;
use Common\Controller\HomebaseController;

class NewsController extends HomebaseController{
	
	function index(){
		$this->display();
	}

	function detail(){
        $this->display();
    }
}