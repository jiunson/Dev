<?php

class User_model extends CI_Model {

    public $title;
    public $content;
    public $date;

    public function __construct()
    {
        parent::__construct();
    }
}