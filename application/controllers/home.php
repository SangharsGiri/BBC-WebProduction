<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
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

    public function index()
    {
        $data['categories'] = $this->crud->get_active_home_categories('igc_package_category');
        $data['services'] = $this->crud->get_active_records('igc_services');
        $data['latest_news'] = $this->crud->get_active_content_records('igc_content');
        $data['themes_news'] = $this->crud->get_active_themes_records('igc_content');
        $data['slide_news'] = $this->crud->get_active_slide_records('igc_content');
        $data['featured_news'] = $this->crud->get_active_featured_records('igc_content');
        $data['special_news'] = $this->crud->get_active_special_records('igc_content');
        $data['product_category'] = $this->crud->get_active_records('igc_package_category');
        $data['services_detail'] = $this->crud->get_active_services('igc_services');
        $data['our_team'] = $this->crud->get_active_records('igc_portfolio');
        $data['review'] = $this->crud->get_active_review('igc_review');
        $data['sliders'] = $this->crud->get_active_records('igc_slider');
        $data['clients'] = $this->crud->get_active_records('igc_clients');
        $data['scripts'] = array('form_validator','validate');
        $data['portfolios'] = $this->crud->get_home_work('igc_portfolio');
        $data['blogs'] = $this->crud->get_active_cat_news('igc_content');
        $data['blogs_offset1'] = $this->crud->get_active_cat_news_offset1('igc_content');
        $data['blogs_offset2'] = $this->crud->get_active_cat_news_offset2('igc_content');
        $data['blogs_offset3'] = $this->crud->get_active_cat_news_offset3('igc_content');
        $data['blogs_offset4'] = $this->crud->get_active_cat_news_offset4('igc_content');
        $data['blogs_offset5'] = $this->crud->get_active_cat_news_offset5('igc_content');
        $data['shortcodes'] = $this->crud->get_active_cat_news_shortcode('igc_content');
        $data['shortcodes1'] = $this->crud->get_active_cat_news_shortcode1('igc_content');
        $data['shortcodes_offset1'] = $this->crud->get_active_cat_news_shortcodeoffset1('igc_content');
        $data['latest_blog_articles'] = $this->crud->get_active_latest_blog_articles('igc_content');
        $data['latest_blog_articles2'] = $this->crud->get_active_latest_blog_articles2('igc_content');
        $data['latest_blog_articles1'] = $this->crud->get_active_latest_blog_articles1('igc_content');
        $data['articles_in_the_last_hour'] = $this->crud->get_active_articles_in_the_last_hour('igc_content');
        $data['latest_blog'] = $this->crud->get_active_latest_blog('igc_content');
        $data['footer_category'] = $this->crud->get_active_footer_category('igc_content');
        $data['author_name'] = $this->crud->get_active_author_name('igc_content');
        $data['popular_article'] = $this->crud->get_active_popular_article('igc_content');
        $data['gadget_world'] = $this->crud->get_active_gadget_world('igc_content');
        $data['world_wide'] = $this->crud->get_active_world_wide('igc_content');
        // $data['world_wide1'] = $this->crud->get_active_world_wide1('igc_content');
        $data['world_wide2'] = $this->crud->get_active_world_wide2('igc_content');
        $data['gadget_world1'] = $this->crud->get_active_gadget_world1('igc_content');
        $data['gadget_world_small'] = $this->crud->get_active_gadget_world_small('igc_content');
        $data['gadget_world2'] = $this->crud->get_active_gadget_world2('igc_content');
        $data['gadget_world2_small'] = $this->crud->get_active_gadget_world2_small('igc_content');
        $data['latest_articles'] = $this->crud->get_active_latest_articles('igc_content');
        $data['latest_popular_articles'] = $this->crud->get_active_latest_popular_articles('igc_content');
        $data['active_breaking_news'] = $this->crud->get_active_breaking_news('igc_content');
        $data['national_news'] = $this->crud->get_active_national_news('igc_content');
        // $data['national_news1'] = $this->crud->get_active_national_news1('igc_content');
        $data['national_news2'] = $this->crud->get_active_national_news2('igc_content');
        $data['international_news'] = $this->crud->get_active_international_news('igc_content');
        // $data['international_news1'] = $this->crud->get_active_international_news1('igc_content');
        $data['international_news2'] = $this->crud->get_active_international_news2('igc_content');
        $data['province3_news'] = $this->crud->get_active_province3_news('igc_content');
        // $data['province3_news1'] = $this->crud->get_active_province3_news1('igc_content');
        $data['province3_news2'] = $this->crud->get_active_province3_news2('igc_content');
        $data['province4_news'] = $this->crud->get_active_province4_news('igc_content');
        // $data['province4_news1'] = $this->crud->get_active_province4_news1('igc_content');
        $data['province4_news2'] = $this->crud->get_active_province4_news2('igc_content');
        $data['province5_news'] = $this->crud->get_active_province5_news('igc_content');
        // $data['province5_news1'] = $this->crud->get_active_province5_news1('igc_content');
        $data['province5_news2'] = $this->crud->get_active_province5_news2('igc_content');
        $data['province6_news'] = $this->crud->get_active_province6_news('igc_content');
        // $data['province6_news1'] = $this->crud->get_active_province6_news1('igc_content');
        $data['province6_news2'] = $this->crud->get_active_province6_news2('igc_content');
        $data['province7_news'] = $this->crud->get_active_province7_news('igc_content');
        // $data['province7_news1'] = $this->crud->get_active_province7_news1('igc_content');
        $data['province7_news2'] = $this->crud->get_active_province7_news2('igc_content');
        $data['contact_number'] = $this->package->get_contact('igc_site_settings');
        $data['ads'] = $this->crud->get_active_ads('igc_content');
        
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
        $this->load->view('index');
        $this->load->view('footer');
    }


    public function product_cat()
    {

        $data['categories'] = $this->crud->get_active_records('igc_package_category');

        $data['menu'] = "";
        $this->load->view('header', $data);
        $this->load->view('other_header');
        $this->load->view('package/all_cats');
        $this->load->view('footer');


    }






 public function qa()
    {
        $data['categories'] = $this->crud->get_active_records('igc_package_category');
        $data['services'] = $this->crud->get_active_records('igc_services');
        $data['product_category'] = $this->crud->get_active_records('igc_package_category');
        $data['services_detail'] = $this->crud->get_active_services('igc_services');
        $data['our_team'] = $this->crud->get_active_records('igc_portfolio');
        $data['review'] = $this->crud->get_active_review('igc_review');
        $data['sliders'] = $this->crud->get_active_records('igc_slider');
        $data['clients'] = $this->crud->get_active_records('igc_clients');
        $data['scripts'] = array('form_validator','validate');


        
       
        $data['menu'] = "home";

        
      
         $this->load->view('header', $data);
        $this->load->view('qa', $data);
         $this->load->view('footer');
    }



    public function Getdestination(){
        $keyword=$this->input->post('keyword');
        $data=$this->crud->Getdestination($keyword); 

            echo(json_encode($data));         
        
    }

    public function Getregion(){
        $keyword=$this->input->post('keyword');
        $data=$this->crud->Getregion($keyword); 

            echo(json_encode($data));         
        
    }

    public function all($slug)
    {

            $data['categories'] = $this->crud->get_active_not_delete_records($slug,'category_code', 'igc_package_category');

            $data['menu'] = "";
            $this->load->view('header', $data);
            $this->load->view('other_header');
            $this->load->view('package/all_categories');
            $this->load->view('footer');
     

    }

//    public function captcha_setting()
//    {
//        $this->load->helper('captcha');
//
//        $values = array(
//            'word' => '',
//            'word_length' => 4,
//            'img_path' => 'img/captcha/',
//            'img_url' => base_url() .'img/captcha/',
//            'font_path' => base_url() . 'system/fonts/texb.ttf',
//
//            'img_width' => '175',
//            'img_height' => 55,
//            'expiration' => 3600
//        );
//        $data = create_captcha($values);
//
//
//        $this->session->set_userdata('captcha', $data);
//
//        echo $data['image'];
//
//    }


    public function subscribe()
    {
        $this->load->library('form_validation');
        if($this->input->post()) {


            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

            if ($this->form_validation->run()) {


                $email = $this->input->post('email');

                $check_email = $this->crud->get_not_deleted_detail($email, 'email', 'igc_subscribe_users');

                if (!empty($check_email)) {
                    $this->session->set_flashdata('error', 'Email already exist.');
                    redirect('home');
                } else {
                    $insert['email'] = $email;
                    $insert['created'] = date('Y-m-d:H:i:s');
                    $insert['active_status'] = '0';
                    $insert['delete_status'] = '0';
                    $result = $this->crud->insert($insert, 'igc_subscribe_users');
                    if ($result) {

                        $subscribe_email = $this->input->post('email');

                        $subscribe_email_admin = "amritnepcom@gmail.com";

                        $this->subscribe_mail($subscribe_email);
                        $this->admin_subscribe_mail($subscribe_email_admin);

                        $this->session->set_flashdata('success', 'You are successfully registered in Subscribe Users.');
                        redirect('home');
                    } else {
                        $this->session->set_flashdata('error', 'Unable to registered in Subscribe Users');
                        redirect('home');
                    }
                }
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Email.');
                redirect('home');
            }
        }
    }

    //function to send Subscribe  email
    public function subscribe_mail($subscribe_email)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings->get_site_settings();

        $server = $this->site_settings->get_mail_info();

        $password = $this->encrypt->decode($server['password']);



        $admin_mails = $this->site_settings->get_admin_mails('Booking');


        $this->load->library('mailer');

        $mail  = new PHPMailer();



        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>'.$site_settings['subscription_title'].'</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    <div style="margin:0 0 10px"> <img alt="" src="'.base_url().'theme/img/logo.png"> </div>
    <p align="center">'.$site_settings['subscription'].'</p>    
   
    <table width="100%" cellspacing="0" cellpadding="5" border="0">        
        
      <td colspan="2" style="background:#EEE; text-align:left;">
            
Thanking you<br />
 '.$site_settings['contact_details'].'</td>
        </tr>
        

        </tbody>
    </table>
</div>
</body>
</html>' ;



        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = "Welcome to ".$site_settings['site_name'];


        $mail->MsgHTML($body);


        $address = $subscribe_email;

        $mail->AddAddress($address, $server['send_from_name']);
//        print_r( $mail);
//        exit();
        // foreach($admin_mails as $bcc)
        // {
        //     $mail->AddBCC($bcc['email'], $bcc['full_name']);
        // }

        $mail->send();




//     if($mail->Send())
//     {
//         echo "success";
//         exit;
//     }
//        else{
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            exit;
//        }

    }



 public function admin_subscribe_mail($subscribe_email_admin)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings->get_site_settings();

        $server = $this->site_settings->get_mail_info();

        $password = $this->encrypt->decode($server['password']);



        $admin_mails = $this->site_settings->get_admin_mails('Booking');


        $this->load->library('mailer');

        $mail  = new PHPMailer();



        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Subscription Confirmation</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    
    <h3>New User Subscription</h3>    
    <p><strong>Email:</strong>  '.$this->input->post('email').'</p>
    
</div>
</body>
</html>' ;



        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = "New user subscription ".$site_settings['site_name'];


        $mail->MsgHTML($body);


        $address = $subscribe_email_admin;

        $mail->AddAddress($address, $server['send_from_name']);
//        print_r( $mail);
//        exit();
        // foreach($admin_mails as $bcc)
        // {
        //     $mail->AddBCC($bcc['email'], $bcc['full_name']);
        // }

        $mail->send();




//     if($mail->Send())
//     {
//         echo "success";
//         exit;
//     }
//        else{
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            exit;
//        }

    }






 public function feedback()
    {
        $this->load->library('form_validation');
        if($this->input->post()) {
            
            $this->form_validation->set_rules('name', 'Name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');

            $this->form_validation->set_rules('country', 'country', 'trim');
            $this->form_validation->set_rules('company', 'company', 'trim');
            $this->form_validation->set_rules('industry', 'industry', 'trim');
            $this->form_validation->set_rules('services', 'services', 'trim');
            $this->form_validation->set_rules('solution', 'solution', 'trim');

            $this->form_validation->set_rules('message', 'Message', 'trim');
            if ($this->form_validation->run()) {


                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $country = $this->input->post('country');
                $company = $this->input->post('company');
                $industry = $this->input->post('industry');
                $services = $this->input->post('services');
                $solution = $this->input->post('solution');
                $message = $this->input->post('message');
                
                $insert['name'] = $name;
                $insert['email'] = $email;
                $insert['phone'] = $phone;
                $insert['country'] = $country;
                $insert['company'] = $company;
                $insert['industry'] = $industry;
                $insert['services'] = $services;
                $insert['solution'] = $solution;
                $insert['message'] = $message;
                $insert['created'] = date('Y-m-d:H:i:s');
                $insert['active_status'] = '1';
                $insert['delete_status'] = '0';
                $result = $this->crud->insert($insert, 'igc_contact_feedback');
                if ($result) {
                    
                   $feedback_email = $this->input->post('email');
                   $feedback_email_admin = "almawadait@gmail.com";

                        // print_r($feedback_email);
                        // exit();

//                      $mail_send = $this->send_mail($feedback_email);
                        $this->feed_mail($feedback_email);

                        $this->admin_feed_mail($feedback_email_admin);
                    
                    $this->session->set_flashdata('success', 'Your feedback successfully send.');
                    redirect('home');
                } else {
                    $this->session->set_flashdata('error', 'Unable to send in feedback ');
                    redirect('home');
                }
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Email.');
                redirect('home');
            }
        }
    }
    
    
    
    public function feed_mail($feedback_email)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings->get_site_settings();

        $server = $this->site_settings->get_mail_info();

        $password = $this->encrypt->decode($server['password']);



        $admin_mails = $this->site_settings->get_admin_mails('Booking');


        $this->load->library('mailer');

        $mail  = new PHPMailer();

        

        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Feedback Confirmation</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    <div style="margin:0 0 10px"> <img alt="" src="'.base_url().'theme/img/logo.png"> </div>
    <p align="center">Congratulations !! Feedback Successfully Submitted</p>
    <p align="center">Our Customer Support Team will contact to you soon. Thank you very much to giving feedback to us.</p>
    <h3 align="center">Your Feedback Details </h3>
    <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <p>Dear, '.$this->input->post('name').'</p>
        <p><strong>Email:</strong>  '.$this->input->post('email').'</p>
        <p><strong>Phone:</strong> '.$this->input->post('phone').'</p>
        <p><strong>Country:</strong> '.$this->input->post('country').'</p>
        <p><strong>Company:</strong> '.$this->input->post('company').'</p>
        <p><strong>Industry:</strong> '.$this->input->post('industry').'</p>
        <p><strong>Services/Technology:</strong> '.$this->input->post('services').'</p>
        <p><strong>Solution/Category:</strong> '.$this->input->post('solution').'</p>
         
        
        <tr>
            <td>
            
             <p><h3>Message:</h3> '.$this->input->post('message').'</p>
           
            </td>
        </tr>
        <tr>
            
            
            
      <td colspan="2" style="background:#EEE; text-align:left;">
            
Thanking you<br />
 '.$site_settings['contact_details'].'</td>
        </tr>
        

        </tbody>
    </table>
</div>
</body>
</html>' ;



        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = "New feedback to ".$site_settings['site_name'];


        $mail->MsgHTML($body);


        $address = $feedback_email;

        $mail->AddAddress($address, $server['send_from_name']);
//        print_r( $mail);
//        exit();
        // foreach($admin_mails as $bcc)
        // {
        //     $mail->AddBCC($bcc['email'], $bcc['full_name']);
        // }

        $mail->send();




//     if($mail->Send())
//     {
//         echo "success";
//         exit;
//     }
//        else{
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            exit;
//        }

    }
    
    
    
     public function admin_feed_mail($feedback_email_admin)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings->get_site_settings();

        $server = $this->site_settings->get_mail_info();

        $password = $this->encrypt->decode($server['password']);



        $admin_mails = $this->site_settings->get_admin_mails('Booking');


        $this->load->library('mailer');

        $mail  = new PHPMailer();

        

        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Feedback Confirmation</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    
   
    <h3 align="center">New Feedback Details </h3>
    <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <p>Dear, '.$this->input->post('name').'</p>
         <p><strong>Email:</strong>  '.$this->input->post('email').'</p>
        <p><strong>Phone:</strong> '.$this->input->post('phone').'</p>
        <p><strong>Country:</strong> '.$this->input->post('country').'</p>
        <p><strong>Company:</strong> '.$this->input->post('company').'</p>
        <p><strong>Industry:</strong> '.$this->input->post('industry').'</p>
        <p><strong>Services/Technology:</strong> '.$this->input->post('services').'</p>
        <p><strong>Solution/Category:</strong> '.$this->input->post('solution').'</p>
         
        
        <tr>
            <td>
            
             <p><h3>Message:</h3> '.$this->input->post('message').'</p>
           
            </td>
        </tr>
        

        </tbody>
    </table>
</div>
</body>
</html>' ;



        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = "New Feedback feedback to ".$site_settings['site_name'];


        $mail->MsgHTML($body);


        $address = $feedback_email_admin;

        $mail->AddAddress($address, $server['send_from_name']);
//        print_r( $mail);
//        exit();
        // foreach($admin_mails as $bcc)
        // {
        //     $mail->AddBCC($bcc['email'], $bcc['full_name']);
        // }

        $mail->send();




//     if($mail->Send())
//     {
//         echo "success";
//         exit;
//     }
//        else{
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            exit;
//        }

    }

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function business_query()
    {
        $this->load->library('form_validation');
        if($this->input->post()) {

            $this->form_validation->set_rules('fullname', 'Full Name', 'trim');
            $this->form_validation->set_rules('company_name', 'Company Name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');
            $this->form_validation->set_rules('organization_type', 'Organization Type', 'trim');
            $this->form_validation->set_rules('query', 'Query', 'trim');

            
            if ($this->form_validation->run()) {


                $fullname = $this->input->post('fullname');
                $company_name = $this->input->post('company_name');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $organization_type = $this->input->post('organization_type');
                $query = $this->input->post('query');

                
                

                $insert['fullname'] = $fullname;
                $insert['company_name'] = $company_name;
                $insert['email'] = $email;
                $insert['phone'] = $phone;
                $insert['organization_type'] = $organization_type;
                $insert['query'] = $query;

                $insert['created'] = date('Y-m-d:H:i:s');
                $insert['active_status'] = '1';
                $insert['delete_status'] = '0';
                $result = $this->crud->insert($insert, 'igc_package_booking');
                if ($result) {
                    
                   $receiver_address = $this->input->post('email');
                   $receiver_address_admin = "almawadait@gmail.com";

                        // print_r($receiver_address);
                        // exit();

//                      $mail_send = $this->send_mail($receiver_address);

                        $this->send_mail($receiver_address);
                        $this->admin_send_mail($receiver_address_admin);
                    
                    $this->session->set_flashdata('success', 'Your Enquiry successfully send.');
                    redirect('home');
                } else {
                    $this->session->set_flashdata('error', 'Unable to send in Enquiry ');
                    redirect('home');
                }
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Email.');
                redirect('home');
            }
        }
    }


public function send_mail($receiver_address)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings->get_site_settings();

        $server = $this->site_settings->get_mail_info();

        $password = $this->encrypt->decode($server['password']);



        $admin_mails = $this->site_settings->get_admin_mails('Booking');


        $this->load->library('mailer');

        $mail  = new PHPMailer();

        //$body = file_get_contents('https://www.incentiveholidays.com/photo-contest.html');

//        $session = $this->session->userdata();


        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Quote Confirmation</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    <div style="margin:0 0 10px"> <img alt="" src="'.base_url().'/themes/images/find_user.png"> </div>
    <p align="center">Congratulations !! Quote Successfully Placed</p>
    <p align="center">Our support  department will notify you as soon as possible. Thank you very much to placing quote with us</p>
    <h3 align="center">Your quote Details are as follows</h3>
    <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <p><strong>Name: </strong> '.$this->input->post('fullname').'</p>
        <p><strong>Company Name: </strong>  '.$this->input->post('company_name').'</p>
        <p><strong>Email: </strong> '.$this->input->post('email').'</p>
         <p><strong>Phone: </strong> '.$this->input->post('phone').'</p>
        <p><strong>Organization Type: </strong> '.$this->input->post('organization_type').'</p>
       
        <tr>
            <td>
            
             <p><h3>Requirement for Detail: </h3> '.$this->input->post('query').'</p>
           
            </td>
        </tr>
        
        <tr>
            
            
            
      <td colspan="2" style="background:#EEE; text-align:left;">
            
Thanking you<br />
 '.$site_settings['contact_details'].'</td>
        </tr>
        

        </tbody>
    </table>
</div>
</body>
</html>' ;



        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = "Thank you for your quote with ".$site_settings['site_name'];


        $mail->MsgHTML($body);


        $address = $receiver_address;

        $mail->AddAddress($address, $server['send_from_name']);
//        print_r( $mail);
//        exit();
        // foreach($admin_mails as $bcc)
        // {
        //     $mail->AddBCC($bcc['email'], $bcc['full_name']);
        // }

        $mail->send();




//     if($mail->Send())
//     {
//         echo "success";
//         exit;
//     }
//        else{
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            exit;
//        }

    }



public function admin_send_mail($receiver_address_admin)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings->get_site_settings();

        $server = $this->site_settings->get_mail_info();

        $password = $this->encrypt->decode($server['password']);



        $admin_mails = $this->site_settings->get_admin_mails('Booking');


        $this->load->library('mailer');

        $mail  = new PHPMailer();

        //$body = file_get_contents('https://www.incentiveholidays.com/photo-contest.html');

//        $session = $this->session->userdata();


        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Quote Confirmation</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
  
    
    <h3 align="center">New Quote Details are as follows</h3>
    <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <p><strong>Name: </strong> '.$this->input->post('fullname').'</p>
        <p><strong>Company Name:</strong>  '.$this->input->post('company_name').'</p>
        <p><strong>Email:</strong> '.$this->input->post('email').'</p>
         <p><strong>Phone:</strong> '.$this->input->post('phone').'</p>
        <p><strong>Organization Type:</strong> '.$this->input->post('organization_type').'</p>
       
        <tr>
            <td>
            
             <p><h3>Requirement for detail:</h3> '.$this->input->post('query').'</p>
           
            </td>
        </tr>
        
       
        

        </tbody>
    </table>
</div>
</body>
</html>' ;



        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = "New Quote  ".$site_settings['site_name'];


        $mail->MsgHTML($body);


        $address = $receiver_address_admin;

        $mail->AddAddress($address, $server['send_from_name']);
//        print_r( $mail);
//        exit();
        // foreach($admin_mails as $bcc)
        // {
        //     $mail->AddBCC($bcc['email'], $bcc['full_name']);
        // }

        $mail->send();




//     if($mail->Send())
//     {
//         echo "success";
//         exit;
//     }
//        else{
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            exit;
//        }

    }




    public function questions()
    {
        $this->load->library('form_validation');
        if($this->input->post()) {

            $this->form_validation->set_rules('fullname', 'Full Name', 'trim');
            $this->form_validation->set_rules('email', 'Email', 'trim');
            $this->form_validation->set_rules('phone', 'Phone', 'trim');

            $this->form_validation->set_rules('query', 'Query', 'trim');


            if ($this->form_validation->run()) {


                $fullname = $this->input->post('fullname');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');

                $query = $this->input->post('query');




                $insert['fullname'] = $fullname;
                $insert['email'] = $email;
                $insert['phone'] = $phone;

                $insert['query'] = $query;

                $insert['created'] = date('Y-m-d:H:i:s');
                $insert['active_status'] = '1';
                $insert['delete_status'] = '0';
                $result = $this->crud->insert($insert, 'igc_qa');
                if ($result) {

                    $receiver_address_qa = $this->input->post('email');
                    $receiver_address_qa_admin = "almawadait@gmail.com";

                    // print_r($receiver_address);
                    // exit();

//                      $mail_send = $this->send_mail($receiver_address);

                    $this->qa_send_mail($receiver_address_qa);
                    $this->qa_admin_send_mail($receiver_address_qa_admin);

                    $this->session->set_flashdata('success', 'Your question successfully send.');
                    redirect('home');
                } else {
                    $this->session->set_flashdata('error', 'Unable to send in question ');
                    redirect('home');
                }
            }
            else{
                $this->session->set_flashdata('error', 'Invalid Email.');
                redirect('home');
            }
        }
    }


    public function qa_send_mail($receiver_address_qa)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings->get_site_settings();

        $server = $this->site_settings->get_mail_info();

        $password = $this->encrypt->decode($server['password']);



        $admin_mails = $this->site_settings->get_admin_mails('Booking');


        $this->load->library('mailer');

        $mail  = new PHPMailer();




        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Enquirey Confirmation</title>
</head>

<body>
<div style="width:90%;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    <div style="margin:0 0 10px"> <img alt="" src="'.base_url().'/themes/images/find_user.png"> </div>
    
    <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <p>Dear, '.$this->input->post('fullname').'</p>
        <p>Thank you very much to asking question with us and we hope that you will be satisfied with the answer provide from our team. As per your request we have sent you the
        following details based on your question.</p>
       
        <tr>
            <td>
            
             <p><h3>Question and Answer Detail:</h3> '.$this->input->post('query').'</p>
           
            </td>
        </tr>
        
        <tr>
            
            
            
      <td colspan="2" style="background:#EEE; text-align:left;">
            
Thanking you<br />
 '.$site_settings['contact_details'].'</td>
        </tr>
        

        </tbody>
    </table>
</div>
</body>
</html>' ;



        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = "Question and Answer with ".$site_settings['site_name'];


        $mail->MsgHTML($body);


        $address = $receiver_address_qa;

        $mail->AddAddress($address, $server['send_from_name']);
//        print_r( $mail);
//        exit();
        // foreach($admin_mails as $bcc)
        // {
        //     $mail->AddBCC($bcc['email'], $bcc['full_name']);
        // }

        $mail->send();




//     if($mail->Send())
//     {
//         echo "success";
//         exit;
//     }
//        else{
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            exit;
//        }

    }



    public function qa_admin_send_mail($receiver_address_qa_admin)
    {
        $this->load->library('encrypt');

        $site_settings = $this->site_settings->get_site_settings();

        $server = $this->site_settings->get_mail_info();

        $password = $this->encrypt->decode($server['password']);



        $admin_mails = $this->site_settings->get_admin_mails('Booking');


        $this->load->library('mailer');

        $mail  = new PHPMailer();



        $body = '<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Question and Answer Confirmation</title>
</head>

<body>
<div style="width:90%;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
  
    
    <h3 align="left">New Question and Answer Details are as follows</h3>
    
    <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <h4>User Detail</h4>
        <p><strong>Name:</strong> '.$this->input->post('fullname').',
        
        <strong>Email:</strong> '.$this->input->post('email').',
        <strong>Phone:</strong> '.$this->input->post('phone').'</p>
      
        <tr>
            <td>
            
             <p><h3>Question and Answer:</h3> '.$this->input->post('query').'</p>
           
            </td>
        </tr>
        
       
        

        </tbody>
    </table>
</div>
</body>
</html>' ;



        if($server['smtp_connect'] == "true")
        {
            $mail->IsSMTP(); // telling the class to use SMTP
        }
        // $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

        $mail->SMTPAuth   = true;                  // enable SMTP authentication

        $mail->SMTPSecure = $server['server_prefix'];                 // sets the prefix to the servier

        $mail->Host       =  $server['host'];      // sets GMAIL as the SMTP server

        $mail->Port       = $server['port'];                  // set the SMTP port for the GMAIL server

        $mail->Username   = $server['username'];  // GMAIL username

        $mail->Password   = $password;          // GMAIL password

        $mail->SetFrom($server['send_from_email'], $server['send_from_name']);

        $mail->AddReplyTo($server['reply_to_email'],$server['reply_to_name']);

        $mail->Subject    = "New Question and Answer with  ".$site_settings['site_name'];


        $mail->MsgHTML($body);


        $address = $receiver_address_qa_admin;

        $mail->AddAddress($address, $server['send_from_name']);
//        print_r( $mail);
//        exit();
        // foreach($admin_mails as $bcc)
        // {
        //     $mail->AddBCC($bcc['email'], $bcc['full_name']);
        // }

        $mail->send();




//     if($mail->Send())
//     {
//         echo "success";
//         exit;
//     }
//        else{
//            echo "Mailer Error: " . $mail->ErrorInfo;
//            exit;
//        }

    }







}
?>