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
	    $this->load->view("public/head",array("title"=>"Megooll | Услуги  SEO | Расскажем о продвижении и оптимизации сайта",
		"desc"=>"Прежде, чем заниматься сео ознакомьтесь с нашей статьей. В ней вы узнаете о SEO оптимизации чуточку больше, что позволит вам избежать лишних неприятностей при поиске специалиста по сео, который будет заниматься продвижением вашего сайта в поисковиках."));
	    $this->load->view("public/menu");
	    $this->load->view("seo");
	    $this->load->view("public/footer",array("css"=>array(CSS."seo.css")));
	}
}
