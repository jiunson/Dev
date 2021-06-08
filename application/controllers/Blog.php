<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    // 클래스 생성자
    public function __construct()
    {
        parent::__construct();
    }

    private function _utility()
    {
        // private를 만들려면 _를 함수 앞에 붙여주세요.
    }

    // 컨트롤러가 먼저 호출, 재정의 함수
    /*
    public function _remap($method, $params = array())
    {
        $method = 'process_'.$method;
        if (method_exists($this, $method))
        {
            return call_user_func_array(array($this, $method), $params);
        }
        show_404();
    }
    */

    // 최종 데이터를 전송
    public function _output($output)
    {
        echo $output;
    }

    public function index()
    {
        $this->load->model('user');

        $data['todo_list'] = array('Clean House', 'Call Mon', 'Rung Errands');

        $data['title'] = 'My Real Title';
        $data['heading'] = 'My Real Heading';

        $this->load->view('blogview', $data);
    }

    public function comments()
    {
        echo 'Look at this!';
    }
}