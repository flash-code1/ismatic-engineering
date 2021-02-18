<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ismatic Engineering | Admin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../design/x2/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../design/x2/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../design/x2/assets/libs/css/style.css">
    <link rel="stylesheet" href="../design/x2/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->
<?php
session_start();
include("../functions/db/connect.php");
// Include config file
require_once "../bat/phpmailer/PHPMailerAutoload.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $digits = 6;
$randms = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstnam = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    session_start();
    $res = mysqli_query($connection, "SELECT * FROM `admin`");
    
    if (count([$res]) == 1) {
        $x = mysqli_fetch_array($res);
        $ui = $x['username'];
        $ei = $x['email'];
    // proper
        if ($username !== $ui && $email !== $ei) {
            $queryuser = "INSERT INTO `admin` (username, email, password, firstname, lastname)
        VALUES ('{$username}', '{$email}', '{$hash}', '{$firstnam}', '{$lastname}')";
        $result = mysqli_query($connection, $queryuser);
        if ($result) {
            // PHP MAILER
            $gen_date = date('Y-m-d');
             // begining of mail
             $mail = new PHPMailer;
             // from email addreess and name
             $mail->From = "info@ismatic.co.uk";
             $mail->FromName = "Ismatic Engineering";
             // to adress and name
             $mail->addAddress($email, $username);
             // reply address
             //Address to which recipient will reply
             // progressive html images
             $mail->addReplyTo("info@ismatic.co.uk", "Reply");
             // CC and BCC
             //CC and BCC
             // $mail->addCC("cc@example.com");
             // $mail->addBCC("bcc@example.com");
             // Send HTML or Plain Text Email
             $mail->isHTML(true);
             $mail->Subject = "Welcome to Ismatic Engineering";
             $mail->Body = "<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
             <html dir='ltr' xmlns='http://www.w3.org/1999/xhtml'>
             
             <head>
                 <meta name='viewport' content='width=device-width' />
                 <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
                 <title>Application Successful</title>
             </head>
             
             <body style='margin:0px; background: #f8f8f8; '>
                 <div width='100%' style='background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;'>
                     <div style='max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px'>
                         <table border='0' cellpadding='0' cellspacing='0' style='width: 100%; margin-bottom: 20px'>
                             <tbody>
                                 <tr>
                                     <td style='vertical-align: top; padding-bottom:30px;' align='center'><a href='http://eliteadmin.themedesigner.in' target='_blank'><br/>
                                         <img src='https://firebasestorage.googleapis.com/v0/b/churaton-6e682.appspot.com/o/logo3.png?alt=media&token=d4b38801-90cc-4187-bb4e-84d752a9fdfb' height='100px' width='100px' alt='Responsive web app kit' style='border:none'></a>
                                     </td>
                                 </tr>
                             </tbody>
                         </table>
                         <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                             <tbody>
                                 <tr>
                                     <td style='background:#413e39; padding:20px; color:#fff; text-align:center;'> Admin Registration Successful. </td>
                                 </tr>
                             </tbody>
                         </table>
                         <div style='padding: 40px; background: #fff;'>
                             <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <p>Submitted Date <b>$gen_date</b></p>
                                             <p>WELCOME TO ISMATIC LOGIN CREDENTIALS</p>
                                             <p>Find Below Your Login Credentials</p>
                                             <p>Username: $username</p>
                                             <p>Password: $password</p>
                                             <center>
                                                 <a href='https://ismatic.co.uk/super/account/index.php' style='display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;'>Explore</a>
                                             </center>
                                             <b>- Thanks (ISMATIC Email Robot)</b> </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <div style='text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px'>
                             <p> Powered by Ismatic Engineering
                                 <br>
                                 <a href='javascript: void(0);' style='color: #b2b2b5; text-decoration: underline;'>Unsubscribe</a> </p>
                         </div>
                     </div>
                 </div>
             </body>
             
             </html>";
             $mail->AltBody = "This is the plain text version of the email content";
             // mail system
             if(!$mail->send()) 
             {
                 echo "Mailer Error: " . $mail->ErrorInfo;
                 $_SESSION["Lack_of_intfund_$randms"] = "Registration Suc";
             echo header ("Location: index.php?message1=$randms");
             } else
             {
                 echo "Message has been sent successfully";
                 $_SESSION["Lack_of_intfund_$randms"] = "Registration Suc";
             echo header ("Location: index.php?message1=$randms");
             }
        } else {
            $_SESSION["Lack_of_intfund_$randms"] = "Registration Failed";
            echo header ("Location: index.php?message2=$randms");
        }
        } else {
            $_SESSION["Lack_of_intfund_$randms"] = "Registration Ex";
       echo header ("Location: index.php?message3=$randms");
        }
    }
}
?>
<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Ismatic Admin Signup</h3>
                <p>Please enter your user information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="firstname" required="" placeholder="Firstname" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="text" name="lastname" required="" placeholder="Lastname" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" id="pass1" name="password" type="password" required="" placeholder="Password">
                </div>
                <div class="form-group">
                    <input class="form-control form-control-lg" required="" placeholder="Confirm">
                </div>
                <div class="form-group pt-2">
                    <button class="btn btn-block btn-dark" type="submit">Register My Account</button>
                </div>
                <!-- <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" required name="terms" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div> -->
                <!-- <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div> -->
            </div>
            <div class="card-footer bg-white">
                <p>Already a staff? <a href="index.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>

 
</html>