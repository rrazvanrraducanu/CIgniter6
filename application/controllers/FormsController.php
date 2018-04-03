<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormsController extends CI_Controller {

	public function index()
	{
	$this->load->view('forma');
	}
         public function copy1(){
            $var1="";
            if(isset($_POST["text1"])){
            $var2=$_POST["text1"];
        }
        else {
            $var2="";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       $this->load->view('forma1',$data);
	} 
        public function copy2(){
            $var1="";
            if($this->input->post('text1')){
            $var2=$this->input->post('text1');
        }
        else {
            $var2="";
   }
       $data['var1']=$var1;
       $data['var2']=$var2;
       $this->load->view('forma1',$data);
	} 

}

