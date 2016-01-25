<?php

class Controller_Test extends Controller_Template
{

	public function action_session()
	{
		$data["subnav"] = array('session'=> 'active' );
		$this->template->title = 'Test &raquo; Session';
		$this->template->content = View::forge('test/session', $data);
	}
	public function action_core()
	{
        //日付
//        $work=strtotime("2015/12/10 10:12:13");


        //日付返還（a fuel/core/config/date.php
        $work=Date::create_from_string("2011-12-10 10:23:13" ,"mysql");
        $data['aaa']=$work->format("%Y/%m/%d");
        

		$this->template->title = 'Coreいろいろ';
		$this->template->content = View::forge('test/core', $data);
	}

}
