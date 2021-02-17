<?php
include("db/connect.php");
session_start();
require_once "../bat/phpmailer/PHPMailerAutoload.php";
?>
<?php
$rigits = 7;
$user_id = $_SESSION["id"];
$gen_date = date('Y-m-d');
$randms = str_pad(rand(0, pow(10, $rigits)-1), $rigits, '0', STR_PAD_LEFT);
if (isset($_POST["title"]))
{
    $title = addslashes($_POST["title"]);
    $sub_title = addslashes($_POST["sub_title"]);
    // img upload
    $temp1 = explode(".", $_FILES['chooseFile']['name']);
    $digits = 10;
    $randms1 = str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
    $sig_passport_one = $randms1. '.' .end($temp1);
    if (move_uploaded_file($_FILES['chooseFile']['tmp_name'], "blog/" . $sig_passport_one)) {
      $msg = "Image uploaded successfully";
    } else {
      $msg = "Image Failed";
    }
    $body = addslashes($_POST["descript"]);
    // now the DB

    $post_invent = mysqli_query($connection, "INSERT INTO `blog` (`user_id`, `heading`, `sub_heading`, `content`, `date`, `comment`, `img`) VALUES ('{$user_id}', '{$title}', '{$sub_title}', '{$body}', '{$gen_date}', '0', '{$sig_passport_one}')");
    if ($post_invent) {
      $select_id = mysqli_query($connection, "SELECT * FROM `enquiries`");
      while ($xy = mysqli_fetch_array($select_id))
      {
        // send mails to all newsletter guys;
        $sub_email  = $xy["email"];
        // new post
             // begining of mail
             $mail = new PHPMailer;
             // from email addreess and name
             $mail->From = "info@bfsl633.com";
             $mail->FromName = "BFSL";
             // to adress and name
             $mail->addAddress($sub_email, "Blog Post");
             // reply address
             //Address to which recipient will reply
             // progressive html images
             $mail->addReplyTo("info@bfsl633.com", "Reply");
             // CC and BCC
             //CC and BCC
             // $mail->addCC("cc@example.com");
             // $mail->addBCC("bcc@example.com");
             // Send HTML or Plain Text Email
             $mail->isHTML(true);
             $mail->Subject = "NEW BLOG POST";
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
                                     <td style='background:#413e39; padding:20px; color:#fff; text-align:center;'> Check out New Post </td>
                                 </tr>
                             </tbody>
                         </table>
                         <div style='padding: 40px; background: #fff;'>
                             <table border='0' cellpadding='0' cellspacing='0' style='width: 100%;'>
                                 <tbody>
                                     <tr>
                                         <td>
                                             <p>Submitted Date <b>$gen_date</b></p>
                                             <p>$title</p>
                                             <p>$sub_title</p>
                                             <center>
                                                 <a href='https://bfsl633.com/blog.php' style='display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;'>Explore</a>
                                             </center>
                                             <b>- Thanks (BFSL Email Robot)</b> </td>
                                     </tr>
                                 </tbody>
                             </table>
                         </div>
                         <div style='text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px'>
                             <p> Powered by BFSL
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
              $_SESSION["Lack_of_intfund_$randms"] = "Registration Successful!";
              echo header ("Location: ../pages/view_blog.php?message101=$randms");
             } else
             {
              $_SESSION["Lack_of_intfund_$randms"] = "Registration Successful!";
              echo header ("Location: ../pages/view_blog.php?message101=$randms");
             }
      }
      $_SESSION["Lack_of_intfund_$randms"] = "Registration Successful!";
              echo header ("Location: ../pages/view_blog.php?message101=$randms");
    } else {
        $_SESSION["Lack_of_intfund_$randms"] = "Registration Successful!";
        echo header ("Location: ../pages/view_blog.php?message404=$randms");
    }
} else {
  $_SESSION["Lack_of_intfund_$randms"] = "Registration Successful!";
  echo header ("Location: ../pages/view_blog.php?message404=$randms");
}
?>