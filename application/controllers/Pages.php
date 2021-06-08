<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function view($page = 'home')
	{
        // 페이지가 존재하는지 확인
        echo(APPPATH.'views/pages/'.$page.'.php');
		if (!file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
            show_404();
        }
        $data['title'] = ucfirst($page);    // 대문자 변경

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);

        //log_message("error", "Error Message");
	}
}
