<?php
  // get connections for all pages
  include("db/connect.php");
?>
<?php
// Initialize the session
session_start();
$activecode = date('Y-m-d H:i:s');
$acuser = $_SESSION["username"];
$activeq = "UPDATE `admin` SET admin.last_logged ='$activecode' WHERE admin.username ='$acuser'";
$rezz = mysqli_query($connection, $activeq);
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: ../account/index.php");

exit;
?>