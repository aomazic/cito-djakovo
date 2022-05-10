<?php
  
if($_POST) {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Od:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
    }
 
    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Email: </b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
    }
    if(isset($_POST['concerned_department'])) {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Odijel:</b></label>&nbsp;<span>".$concerned_department."</span>
                        </div>";
    }
      
    if(isset($_POST['email_title'])) {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Subject: </b></label>&nbsp;<span>".$email_title."</span>
                        </div>";
    }
      
      
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Poruka:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
    }
      
    if($concerned_department == "rac") {
        $recipient = "racunovodstvo@cito-djakovo.hr";
    }
    else if($concerned_department == "teh") {  
        $recipient = "mario.omazic@cito-djakovo.hr";
    }
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
      
    if(mail($recipient, $email_title, $email_body, $headers)) {
        echo "<p>Mail je uspješno poslan";
    } else {
        echo '<p>Nažalost došlo je do pogreške.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>