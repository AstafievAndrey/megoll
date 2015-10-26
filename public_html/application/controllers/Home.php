<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
        $data['title']="Разработка и продвижение мобильных приложений и сайтов в Казани";
        $data['des']="Закажи мобильное приложение и получи Landing page в подарок с уникальным дизайном! Продвижение "
                . "  с помощью контекстной рекламы. Акция длиться до января! ";
		$this->load->view('home',$data);
	}
	
	public function seo() {
	    $this->load->view("public/head",array("title"=>"seo","desc"=>"описание"));
	    $this->load->view("public/menu");
	    $this->load->view("seo");
	}
}
