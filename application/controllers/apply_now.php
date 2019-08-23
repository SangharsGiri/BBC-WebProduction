<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Apply_now extends CI_Controller{
    public function __Construct()
    {
        parent::__Construct();

        $this->load->library('form_validation');
//        $this->form_validation->CI =& $this;
        $this->load->model('apply_model','apply');
        $this->load->model('crud_model', 'crud');
        $this->load->model('site_settings_model', 'site_settings');

    }

    public function  index()
    {

        $this->load->view('header');

        $this->load->view('job/apply');
        $this->load->view('footer');


    }

    public function form()
    {
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('form_validation');
        if($this->input->post())
        {

//            print_r($this->input->post());
//            exit;
            $job_id = $this->input->post('job_id');
            $this->form_validation->set_rules('firstname', 'firstname','required' );
            $this->form_validation->set_rules('lastname', 'lastname', 'required');
            $this->form_validation->set_rules('email', 'email');
            $this->form_validation->set_rules('phone', 'phone');
            $this->form_validation->set_rules('country', 'country');
            $this->form_validation->set_rules('city', 'city');
            $this->form_validation->set_rules('address', 'address');
            $this->form_validation->set_rules('joblocation', 'joblocation');
            $this->form_validation->set_rules('jobtype', 'jobtype');
            $this->form_validation->set_rules('jobrole', 'jobrole');
            $this->form_validation->set_rules('qualification', 'qualification');
            $this->form_validation->set_rules('experience', 'experience');
            $this->form_validation->set_rules('careerlevel', 'careerlevel');
            $this->form_validation->set_rules('passportno', 'passportno');







            if ($this->form_validation->run()) {


                $insert['firstname']=  $this->input->post('firstname');
                $insert['lastname'] = $this->input->post('lastname');
                $insert['email'] = $this->input->post('email');
                $insert['phone'] = $this->input->post('phone');
                $insert['country']= $this->input->post('country');
                $insert['city'] = $this->input->post('city');
                $insert['address']= $this->input->post('address');
                $insert['joblocation'] = $this->input->post('joblocation');
                $insert['jobtype']= $this->input->post('jobtype');
                $insert['jobrole'] = $this->input->post('jobrole');
                $insert['qualification']= $this->input->post('qualification');
                $insert['experience'] = $this->input->post('experience');
                $insert['careerlevel']= $this->input->post('careerlevel');
                $insert['passportno'] = $this->input->post('passportno');




                $rand = md5(rand());
                $cv=$rand. str_replace(" ","",$_FILES['cv']['name']);
                $cvtmp=$_FILES['cv']['tmp_name'];


                $image=$rand. str_replace(" ","",$_FILES['image']['name']);
                $imagetmp=$_FILES['image']['tmp_name'];


                $image=$rand. str_replace(" ","",$_FILES['image']['name']);
                $imagetmp=$_FILES['image']['tmp_name'];



                if($job_id == "0")
                {



                    if($_FILES['image']['name'] !="")
                    {
                        $insert['image']= $image;
                    }
                    if($_FILES['image']['name'] !="")
                    {
                        $insert['image']= $image;
                    }
                    if($_FILES['cv']['name'] !="")
                    {
                        $insert['cv']= $cv;
                    }

                    $insert['publish_status'] = "1";
                    $insert['delete_status'] = "0";
                    $insert['created'] = date('Y-m-d:H:i:s');
                    $result = $this->apply->insert_package($insert);

                    if($result)
                    {
                        //code to add tags



                        //code to upload package files
                        $folder_path = 'uploads/package/';
                        $DIR = mkdir($folder_path . $result, 0777, true);

                        if(isset($DIR))
                        {
                            $new_path = $folder_path.$result."/";

                            move_uploaded_file($cvtmp,$new_path.$cv);
                            move_uploaded_file($imagetmp,$new_path.$image);
                            move_uploaded_file($imagetmp,$new_path.$image);
                        }

                        else{
                            $new_path = $folder_path.$result."/";

                            move_uploaded_file($cvtmp,$new_path.$cv);
                            move_uploaded_file($imagetmp,$new_path.$image);
                            move_uploaded_file($imagetmp,$new_path.$image);
                        }




                        if($result)
                        {
                            $receiver_address_qa = $this->input->post('email');
                            $receiver_address_qa_admin = "almawadait@gmail.com";

                            // print_r($receiver_address);
                            // exit();

//                      $mail_send = $this->send_mail($receiver_address);

                            $this->qa_send_mail($receiver_address_qa);
                            $this->qa_admin_send_mail($receiver_address_qa_admin);



                            $this->session->set_flashdata('success','Your Application Submitted Successfully');
                            redirect('apply_now/form');
                        }
                        else{
                            $this->session->set_flashdata('error','Unable to Apply. please,try again');
                            redirect('apply_now/form');
                        }

                    }
                }

                else{

                    $image_new = $_FILES['image']['name'];
                    $image_new = $_FILES['image']['name'];
                    $cv_new = $_FILES['cv']['name'];


                    $folder_path = 'uploads/package/'.$job_id;

                    if(! is_dir($folder_path))
                    {
                        mkdir($folder_path, 0777, true);
                    }
                    $new_path = $folder_path."/";


                    if($image_new !="")
                    {


                        $filename = $detail['image'];
                        @unlink($new_path.$filename);
                        move_uploaded_file($imagetmp,$new_path.$image);
                        $insert['image']= $image;
                    }
                    if($image_new !="")
                    {

                        $filename1 = $detail['image'];
                        @unlink($new_path.$filename1);
                        move_uploaded_file($imagetmp,$new_path.$image);
                        $insert['image']= $image;
                    }
                    if($cv_new !="")
                    {

                        $filename2 = $detail['cv'];
                        @unlink($new_path.$filename2);
                        move_uploaded_file($cvtmp,$new_path.$cv);

                        $insert['cv']= $cv;
                    }

                    $results = $this->apply->update_package($insert, $job_id);

                    if($results)
                    {
                        //code to create package log

                        $log['module_title'] =  $insert['package_name'];
                        $log['action_id'] = "2";
                        $this->create_package_log($log);

                        //code to add tags
                        $this->add_tags($job_id, $new_tags);





                        $this->session->set_flashdata('success','Apply is Updated Successfully');
                        redirect('apply_now/form');
                    }
                    else{
                        $this->session->set_flashdata('error','Unable to Update Apply');
                        redirect('apply_now/form');
                    }

                }

            }
        }










        $data['scripts'] = array('themes/js/form-validator');

        $data['title'] = "Add/Edit Jobs";




        $this->load->view('header', $data);

        $this->load->view('job/apply');
        $this->load->view('footer');



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
    <title>Application Submission Confirmation</title>
</head>

<body>
<div style="width:90%;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
    <div style="margin:0 0 10px"> <img alt="" src="'.base_url().'/themes/images/find_user.png"> </div>
    
    <table width="100%" cellspacing="0" cellpadding="5" border="0">
        <p>Dear, '.$this->input->post('firstname').'</p>
        <p>Thank you very much to appliy job with us. Our HR Department will contact as soon as possible.</p>
       
       
        
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

        $mail->Subject    = "Job Application Submission ".$site_settings['site_name'];


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
    <title>Job Application</title>
</head>

<body>
<div style="width:90%;margin:0 auto;font:12px Arial,Helvetica,sans-serif;background:#fff">
  
    
    <h3 align="left">New Job Application Details</h3>
    
    <table width="100%" cellspacing="0" cellpadding="5" border="0">
        
        <p>
        
        <strong>Name:</strong> '.$this->input->post('firstname').' '.$this->input->post('lastname').', <br />
        
        <strong>Email:</strong> '.$this->input->post('email').', <br />
        <strong>Phone:</strong> '.$this->input->post('phone').', <br />
        <strong>City:</strong> '.$this->input->post('city').', <br />
        <strong>Address:</strong> '.$this->input->post('address').', <br />
        <strong>Country:</strong> '.$this->input->post('country').', <br />
        <strong>Job Location:</strong> '.$this->input->post('joblocation').', <br />
        <strong>Job Type:</strong> '.$this->input->post('jobtype').', <br />
        <strong>Job Role:</strong> '.$this->input->post('jobrole').', <br />
        <strong>Qualification:</strong> '.$this->input->post('qualification').', <br />
        <strong>Experience:</strong> '.$this->input->post('experience').', <br />
        <strong>Career Level:</strong> '.$this->input->post('careerlevel').', <br />
        <strong>Passport Number:</strong> '.$this->input->post('passportno').' <br />
        
        
        </p>
      
        
        
       
        

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

        $mail->Subject    = "New Job Application with  ".$site_settings['site_name'];


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