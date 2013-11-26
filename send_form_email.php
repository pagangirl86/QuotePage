<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "laughingdragonstudio@gmail.com";
 
    $email_subject = "Website Quote";
 
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
       !isset($_POST['last_name']) ||
 
       !isset($_POST['email']) ) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');      
 
    }
      
    $first_name = $_POST['FirstName']; // requir
    $last_name = $_POST['LastName']; // required
    $email_from = $_POST['EmailAddress']; // required
    $basic_additional = $_POST['num_basic_additional_pages'];
    $extra_design = $_POST['num_extra_designs'];
    $social = $_POST['num_social_sites'];
    $webstore = $_POST['num_webstores'];
	$graphics = $_POST['num_custom_graphics'];
 	$quote = $_POST['$div#total']
    $error_message = "";
    
    $number_exp = '/^[A-Za-z0-9._%-]';
  
  if(!preg_match($number_exp,$basic_additional]{
		
	$error_message .= 'The number you entered does not appear to be valid.<br/>';
	}	
  if(!preg_match($number_exp,$extra_design]{
		
	$error_message .= 'The number you entered does not appear to be valid.<br/>';
	}	
  if(!preg_match($number_exp,$social]{
		
	$error_message .= 'The number you entered does not appear to be valid.<br/>';
	}	
  if(!preg_match($number_exp,$webstore]{
		
	$error_message .= 'The number you entered does not appear to be valid.<br/>';
	}	
  if(!preg_match($number_exp,$graphics]{
		
	$error_message .= 'The number you entered does not appear to be valid.<br/>';
	}	
	
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
    if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }

	if($basic_additional) > 0 {
		$new_basic_addtional = $basic_additional * 75

  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
	 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email Address: ".clean_string($email_from)."\n";
    $email_message .= "Basic page: $125"."\n";
    $email_message .= "Additional Pages: ".clean_string($new_basic_additional)."\n";
    $email_message .= "Pages on a different design: ".clean_string($extra_design)."\n";
    $email_message .= "Social Integrations: ".clean_string($social)."\n";
    $email_message .= "Webstores: ".clean_string($webstore)."\n";
    $email_message .= "Custom Graphics: ".clean_string($graphics)."\n";
    $email_message .= "Total Quote: $ ".clean_string($quote)."\n";

 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers); 
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
Thank you for contacting us. We will be in touch with you very soon.
 
 
 
<?php
 
}
 
?>
