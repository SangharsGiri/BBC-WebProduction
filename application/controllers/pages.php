<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pages extends CI_Controller {
	 public function __Construct()
    {
        parent::__Construct();
        $this->load->model('login_model', 'login');
        $this->load->model('package_model','package');
        $this->load->model('crud_model', 'crud');
        $this->load->model('content_model','content');
        $this->load->model('site_settings_model', 'site_settings');
        $this->load->database();
        $this->load->helper('text');
       

    }
	public function print_pdf($page = 'home')
	{
		// Load CI Library
		//$this->load->library('fpdf');
		$filename =  somefile;
		$content = 'My Content';
		$basepath = getcwd;
		// Create PDF
		$this->fpdf->fpdf('P','mm','A4');
		$this->fpdf->AddPage();
		$this->fpdf->SetFont('Arial','B',16);
		$this->fpdf->Cell(40, 10, $content);
		$this->fpdf->Output($basepath.'/pdf/'.$filename.'.pdf');   // print to the filesystem, save for future download
		$this->fpdf->Output($filename.'.pdf', 'D');                // send to browser and force download, not saved on filesystem
	}
	public function contact()
    {
        // $data['categories'] = $this->crud->get_active_home_categories('igc_package_category');
        // $data['services'] = $this->crud->get_active_records('igc_services');
        
        $data['contact_number'] = $this->package->get_contact('igc_site_settings');
        // exit();
        /* var_dump( $data['footer_category'] );
         exit();
        */
        
//        $data['inbound_categories'] = $this->package->get_show_front('IH',0,6);
//        $data['outbound_categories'] = $this->package->get_show_front('OB',0,4);
//        $data['other_categories'] = $this->package->get_show_front('OTH',0,3);
//        $data['special_packages'] = $this->package->get_package_info('special', '0', '8');
//        $data['adventures'] =  $this->package->get_adventure_front(0, 4);
//        $data['forex_detail'] = $this->crud->get_forex(date('Y-m-d'), 0, 4);
//        $data['tour_fixed_departure'] = $this->package->show_front_departures('tour','0','4');
//        $data['trek_fixed_departure'] = $this->package->show_front_departures('trek','0','4');
//        $data['services_offers']= $this->content->get_service_offer_list('0','10');
//        $data['emagazine'] = $this->content->get_emagazine();
        
//        $popup = $this->crud->get_popup();
//        if(!empty($popup)){
//            $data['popup'] = $popup;
//            $data['scripts'] =  array('themes/js/form-validator/jquery.form-validator','themes/js/fancy-box/jquery-1.10.1.min','themes/js/fancy-box/jquery.mousewheel-3.0.6.pack','themes/css/fancy-box/jquery.fancybox.js?v=2.1.5');
//            $data['styles'] =  array('themes/css/fancy-box/jquery.fancybox.css?v=2.1.5');
//
//        }else{
//            $data['popup'] = $popup;
//           $data['scripts'] =  array('themes/js/form-validator/jquery.form-validator');
//
//        }
       
        $data['menu'] = "home";
//        $data['auto'] = $this->crud->get_all('igc_destination');
//        $data['auto'] = $this->crud->get_all('igc_regions');
        
      
        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }
}
?>