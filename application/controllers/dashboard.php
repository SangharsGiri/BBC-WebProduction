<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();
        $this->load->model('login_model', 'login');
        $this->load->model('package_model','package');
        $this->load->model('crud_model', 'crud');
        $this->load->model('content_model','content');
         $this->load->model('site_settings_model', 'site_settings');

       

    }

    public function index()
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
        $data['portfolios'] = $this->crud->get_home_work('igc_portfolio');

        

        $data['menu'] = "Dashboard";
//        $data['auto'] = $this->crud->get_all('igc_destination');
//        $data['auto'] = $this->crud->get_all('igc_regions');
        
      
        $this->load->view('user/header', $data);
        $this->load->view('user/dashboard');
        $this->load->view('user/footer');
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

                        $subscribe_email_admin = "almawadait@gmail.com";

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
    <title>Subscription Confirmation</title>
</head>

<body>
<div style="width:580px;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    <div style="margin:0 0 10px"> <img alt="" src="'.base_url().'theme/img/logo.png"> </div>
    <p align="center">Congratulations !! Your Subscription Successfully Completed</p>
    <p align="center">Thank you very much to subscribe to us.</p>
   
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
    
    <h3 align="center">New User Subscription Successfully Completed</h3>
    
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
            $this->form_validation->set_rules('message', 'Message', 'trim');
            if ($this->form_validation->run()) {


                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $phone = $this->input->post('phone');
                $message = $this->input->post('message');
                
                $insert['name'] = $name;
                $insert['email'] = $email;
                $insert['phone'] = $phone;
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
        <p><strong>phone:</strong> '.$this->input->post('phone').'</p>
         
        
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