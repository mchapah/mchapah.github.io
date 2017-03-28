<link rel = "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<?php

$error = false;
  
  // include phpmailer class
 require_once('phpmailer/class.phpmailer.php');
  // creates object
  $mail = new PHPMailer(true); 
  
  if(isset($_POST['btn_send']) && !$error)
  {
   $full_name  = strip_tags($_POST['full_name']);
   $email      = strip_tags($_POST['email']);
   $subject    = strip_tags($_POST['subject']);
   $text_message    = strip_tags($_POST['message']);     
   $sumo = strip_tags($_POST['anti_spam']);
	   $full_name=htmlspecialchars($_POST['full_name']);
	   $email=htmlspecialchars($_POST['email']);
	   $subject=htmlspecialchars($_POST['subject']);
	   $text_message=htmlspecialchars($_POST['message']);
	   $sumo=htmlspecialchars($_POST['anti_spam']);
	  
	  if (empty($full_name)) {
			$error = true;
			$name = "Please enter your First name.";
		}
	  if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$error = true;
			$emailError = "Please enter valid email address.";
		}
	  if (empty($subject)) {
			$error = true;
			$subjecte = "Please enter subject.";
		}
	  if (empty($text_message)) {
			$error = true;
			$messagi = "Please enter message.";
		}
	  if (empty($sumo)) {
			$error = true;
			$sum = "Please enter the sum.";
		}else if($sumo!=43){
		  $error = true;
			$sum = "Wrong answer.";
	  
	  }
	  
	
   
   // HTML email starts here
   
   $message  = "<html><body>";
   
   $message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
   
   $message .= "<tr><td>";
   
   $message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
    
   $message .= "<thead>
      <tr height='80'>
       <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >ALHIV E-CLINIC Report Tool</th>
      </tr>
      </thead>";
    
   $message .= "<tbody>
      <tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
      
      </tr>
      
      <tr>
       <td colspan='4' style='padding:15px;'>
        <p style='font-size:25px;'>Hi, to whom it may concern,</p>
        <hr />
        
        <p style='font-size:20px; font-family:Verdana, Geneva, sans-serif;'>".$text_message.".</p>
       </td>
      </tr>
      
      <tr height='80'>
       <td colspan='4' align='center' style='background-color:#f5f5f5; border-top:dashed #00a2d1 2px; font-size:24px; '>
        <p style='font-size:20px;'>Yours faithfully, ".$full_name.",</p>
       </td>
      </tr>
      
      </tbody>";
    
   $message .= "</table>";
   
   $message .= "</td></tr>";
   $message .= "</table>";
   
   $message .= "</body></html>";
   
   // HTML email ends here
   
   try
   {
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "tls";                 
    $mail->Host       = 'smtp.grouplasso.com';      
    $mail->Port       = 587;             
    $mail->AddAddress('dgichuhi@grouplasso.com');
    $mail->Username   ='dgichuhi@grouplasso.com';  
                         $mail->Password   = 'Garadenes11';             
                         $mail->SetFrom($email, $full_name);
                         //$mail->AddReplyTo("gichuhimd@gmail.com","Coding Cage");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
     
    if($sumo==43)
    {
     $mail->Send();
     $msg = "<div class='alert alert-success'>
       Hi,<br /> ".$full_name." ,your mail was successfully sent to ALHIV E-Clinic. Cheers :)
       </div>";
		unset($full_name);
		unset($email);
		unset($subject);
		unset($_POST['message']);
		unset($sumo);
     
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  
  } 
  
?>
