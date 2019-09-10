<?php 
// defined('BASEPATH') OR exit('No direct script access allowed');

// class email_library{

// 	public function send_email($arr){
//         // load library
//         $CI =& get_instance();
//         $CI->load->library('phpmailer_lib');


// 		$mail = $CI->phpmailer_lib->load();
// 		$mail->isSMTP();
		
// 		$mail->SMTPDebug = 2;
		
//         $mail->Host     = 'smtp.gmail.com';
//         $mail->SMTPAuth = true;
//         $mail->Username = 'samcladson01@gmail.com';                 // SMTP username
//         $mail->Password = 'samcladson01sam';                           // SMTP password
//         $mail->SMTPSecure = 'tls';  
//         $mail->SMTPAutoTLS = false;                          
//         $mail->Port = 587;
//         $mail->setFrom('info@boxigo.com', 'Boxigo');
//         $mail->addReplyTo('info@boxigo.com', 'Boxigo');
//         $mail->addAddress($arr['to']);
//         $mail->Subject = $arr['subject'];
//         $mail->isHTML(true);
//         $mailContent = $arr['body'];
//         $mail->Body = $mailContent;
//         $mail->SMTPOptions = array(
// 		    'ssl' => array(
// 		        'verify_peer' => false,
// 		        'verify_peer_name' => false,
// 		        'allow_self_signed' => true
// 		    )
// 		);
//         return ($mail->send()) ? true : false;
		
// 	}
// }
?>
<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_library{

	public function send_email($arr){
        // load library
        $CI =& get_instance();
        $CI->load->library('phpmailer_lib');

    try{
		$mail = $CI->phpmailer_lib->load();
// 		$mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'localhost';
        $mail->Port = 25;
        $mail->setFrom('info@boxigo.com', 'Boxigo');
        $mail->ssl = false;
        $mail->authentication = false;
        $mail->addAddress($arr['to']);  
        $mail->IsHTML(true);
        $mail->Subject = $arr['subject'];
        $mail->Body = $arr['body'];
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        return ($mail->send()) ? true : false;
    }catch (phpmailerException $e) {
      echo $e->errorMessage(); //Pretty error messages from PHPMailer
    } catch (Exception $e) {
      echo $e->getMessage(); //Boring error messages from anything else!
    }
		
	}
}
?>