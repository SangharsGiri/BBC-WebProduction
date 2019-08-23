<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Exchange extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('crud_model','crud');
        $this->load->model('forex_model','forex');
    }

    function index($month=null,$day=null,$year=null){
        $date=(!empty($desired_date))?$desired_date:date('Y-m-d');
        $year=(!empty($year))?$year:date('Y');
        $month=(!empty($month))?$month:date('m');
        $day=(!empty($day))?$day:date('d');
        $forex=file_get_contents('https://nrb.org.np/exportForexJSON.php?YY='.$year.'&MM='.$month.'&DD='.$day.'&YY1='.$year.'&MM1='.$month.'&DD1='.$day);
        $forex2=json_decode($forex,true);
        $new_date=(empty($year))?date('Y-m-d'):$year.'/'.$month.'/'.$day;
        $data['new_date']=date('F d, Y',strtotime($new_date));
        $data['today']=$forex2['Conversion']['Currency'];
        $data['currency']=$this->forex->get_active_forex_exchange();

        print_r(json_encode($data));
    }

    public function hello(){
        $this->load->view('forex/exchange');
    }
}