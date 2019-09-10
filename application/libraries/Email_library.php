<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_library{

	public function send_email($arr){
        // load library
        $CI =& get_instance();
        $CI->load->library('Phpmailer_lib');


		$mail = $CI->Phpmailer_lib->load();
		$mail->isSMTP();
        $mail->Host     = 'localhost';
        $mail->SMTPAuth = true;
        $mail->Username = 'support@boxigo.in';                 // SMTP username
        $mail->Password = 'boxigo@123';                           // SMTP password
        $mail->SMTPSecure = 'tls';  
        $mail->SMTPAutoTLS = false;                          
        $mail->Port = 465;
        $mail->setFrom('support@boxigo.in', 'Boxigo');
        $mail->addReplyTo('support@boxigo.in', 'Boxigo');
        $mail->addAddress($arr['to']);
        $mail->Subject = $arr['subject'];
        $mail->isHTML(true);
        $mailContent = $arr['body'];
        $mail->Body = $mailContent;
        $mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
        return ($mail->send()) ? true : false;
		
	}
}
?>