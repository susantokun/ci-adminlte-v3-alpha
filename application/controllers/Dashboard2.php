<?php
#===================================================|
# Please DO NOT modify this information :			      |
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		  : 2018-05-25T06:25:59+07:00
# @Email 		  : susantokun.com@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Dashboard2.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-05-25T06:32:04+07:00
#===================================================|

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard2 extends CI_Controller
{
    public function index()
    {
        $this->load->view('dashboard2');
    }
}
