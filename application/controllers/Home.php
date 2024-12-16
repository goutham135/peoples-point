<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
        $this->load->view('home');
    }

    public function aboutUs(){
        $data['imageFilename'] = 'about-us.jpg';
        $this->load->view('header', $data);
        $this->load->view('aboutUs');
        $this->load->view('footer');
    }

    public function contactUs(){
        $data['imageFilename'] = 'contact-us.jpg';
        $this->load->view('header', $data);
        $this->load->view('contactUs');
        $this->load->view('footer');
    }

    public function testimonials(){
        $data['imageFilename'] = 'about-us.jpg';
        $this->load->view('header', $data);
        $this->load->view('testimonials');
        $this->load->view('footer');
    }

    public function ourServices(){
        $data['imageFilename'] = 'our-services.jpg';
        $this->load->view('header', $data);
        $this->load->view('ourServices');
        $this->load->view('footer');
    }

    public function contactFormSubmission(){


        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');
       
        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();
       
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'v.goutham123@gmail.com';
        $mail->Password = 'gepcjmaoyhklnwev';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
       
        $mail->setFrom('v.goutham123@gmail.com', 'Goutham');
       
        /* Add a recipient */
        $mail->addAddress('v.goutham123@gmail.com');
       
       
        /* Email subject */
        $mail->Subject = 'Contact Us Form Subbmission';
       
        /* Set email format to HTML */
        $mail->isHTML(true);
       
        /* Email body content */
        $mailContent = "<p> Name : " + $_POST['name'] + "</p>" 
                        + "<p> Email : " + $_POST['email'] + "</p>"
                        + "<p> Mobile : " + $_POST['mobile'] + "</p>"
                        + "<p> Message : " + $_POST['message'] + "</p>";
        $mail->Body = $mailContent;
        // $mail->addAttachment('assets/images/MacBookAir-1.png', 'hello.png');
       
        /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Mail has been sent';
        }

        
        // $sendToEmail = 'v.goutham123@gmail.com';
		// $subject = "Sending Email with Photo ";
		// $message="This is example message";

		// $config = array(
		// 	'protocol' =>'smtp',
		// 	'smtp_host' => 'ssl:/smtp.gmail.com',
		// 	'smtp_port' => '465',
        //     'starttls' => 'true',
		// 	'smtp_user' => 'v.goutham123@gmail.com',
		// 	'smtp_pass' =>  'gepcjmaoyhklnwev',
		// 	'mailtype' =>'html',
		// 	'charset' => 'iso-8859-1',
		// 	'wordwrap' => true,
		// );

		// $this->load->library('email',$config);
		// $this->email->set_newline("\r\n");
		// $this->email->from('v.goutham123@gmail.com');
		// $this->email->to($sendToEmail);
		// $this->email->subject($subject);
		// $this->email->message($message);
		// // $this->email->attach(base_url('assets/images/MacBookAir-1.png'));
		// if($this->email->send()) 
		// {
		// 	echo 'successfully Sent Email';
		// }
		// else 
		// {
		// 	echo 'Email Sending Error!';
		// }
    }

    public function resumeFormSubmission(){
        if(isset($_FILES['resume']) && !empty($_FILES['resume']['name'])){
            $imageTypeArr = explode('.', $_FILES['resume']['name']);
            $uniqueId = uniqid();
            $filename = 'assets/resumes/' . strval($uniqueId) . '.' . end($imageTypeArr);

            $file = $_FILES['resume'];
            $file_tmp_name = $_FILES['resume']['tmp_name'];
            $_FILES['document']['name']     = strval($uniqueId) . '.' . end($imageTypeArr);
            $_FILES['document']['type']     = $_FILES['resume']['type'];
            $_FILES['document']['tmp_name'] = $_FILES['resume']['tmp_name'];
            $_FILES['document']['error']    = $_FILES['resume']['error'];
            $_FILES['document']['size']     = $_FILES['resume']['size'];
    
            $config['upload_path'] = 'assets/resumes/';
            $config['allowed_types'] = '*';
            $config['max_size'] = 200000;
    
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
    
            if (!$this->upload->do_upload('document')) //important!
            {
                // something went really wrong show error page
                $error = array('error' => $this->upload->display_errors()); //associate view variable $error with upload errors
                //echo json_encode(array('status' => 199, 'msg' => $error['error']));
            } else {
                // $this->sistem_model->uploadContractImages($insert);
                $fileData = $this->upload->data();
                //echo json_encode(array('status' => 200, 'msg' => 'Successfuly uploaded'));

                
                
            }
        }

        /* Load PHPMailer library */
        $this->load->library('phpmailer_lib');
    
        /* PHPMailer object */
        $mail = $this->phpmailer_lib->load();
    
        /* SMTP configuration */
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'v.goutham123@gmail.com';
        $mail->Password = 'gepcjmaoyhklnwev';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
    
        $mail->setFrom('v.goutham123@gmail.com', 'Goutham');
    
        /* Add a recipient */
        $mail->addAddress('v.goutham123@gmail.com');
    
    
        /* Email subject */
        $mail->Subject = 'Get Hired Alert';
    
        /* Set email format to HTML */
        $mail->isHTML(true);
    
        /* Email body content */
        $mailContent = "<p> Name : " . $_POST['name'] . "</p><p> Email : " . $_POST['email'] . "</p><p> Mobile : " . $_POST['mobile'] . "</p>";
        $mail->Body = $mailContent;
        $mail->addAttachment($filename,  $uniqueId . '.' . end($imageTypeArr));
    
        /* Send email */
        if(!$mail->send()){
            echo 'Mail could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Mail has been sent';
        }

        
    }
}
