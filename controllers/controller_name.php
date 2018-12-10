<?php
require_once('vendor/autoload.php');
require_once('application/libraries/S3.php');
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_name extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('S3_upload');
        $this->load->library('S3');
    }

    public function addImages($id)
    {       
        $filesCount = count($_FILES['files']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['file']['name']     = $_FILES['files']['name'][$i];
                $_FILES['file']['type']     = $_FILES['files']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                $_FILES['file']['error']    = $_FILES['files']['error'][$i];
                $_FILES['file']['size']     = $_FILES['files']['size'][$i];

                $dir = dirname($_FILES["file"]["tmp_name"]);
                $destination = $dir . DIRECTORY_SEPARATOR . $_FILES["file"]["name"];
                rename($_FILES["file"]["tmp_name"], $destination);

                $upload = $this->s3_upload->upload_file($destination);                
            }     
    }

}