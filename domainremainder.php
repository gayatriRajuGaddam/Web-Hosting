<? php
session_start();
include("db_register.php");


$expiry_date = $_POST['expiry_date'];
//$user_password = $_POST['user_password'];


$query = "select * from users where expiry_date='$expiry_date'";
$result = mysqli_query($connection,$query);

$data = mysqli_fetch_assoc($result);

$db_expiry = $data['expiry_date'];

if($expiry_date==$db_expiry){
    $_SESSION['logged_email'] = $data['user_email']." ";
    $_SESSION['is_logged_in'] = true;
    $_SESSION['logged_user_id'] = $data['id'];
    <?php
    require 'vendor/autoload.php'; // If you're using Composer (recommended)

    function send_mail($to,$to_name,$subject,$content){


        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("gayatrigaddam26@gmail.com","Gayati Gaddam");
        $email->setSubject($subject);
        $email->addTo($to, $to_name);
        $email->addContent(
            "text/html", $content
        );
        $sendgrid = new \SendGrid("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");
        try {
            $response = $sendgrid->send($email);
            //print_r($response);

        } catch (Exception $e) {
            //print_r($e->getMessage());

        }
    }
    send_mail("rajashrikumbhare70@gmail.com","Rajashri","Remailder Mail","Your Domain Expiry Soon");
    header("Location:storenotification.php");






