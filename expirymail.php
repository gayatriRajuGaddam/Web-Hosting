<?php
require 'vendor/autoload.php';
session_start();
include('db_register.php');

$query="SELECT * FROM user";

$sql = mysqli_query($connection,$query);
$results = mysqli_num_rows($sql);

if ($results > 0)
{   
            while($rows = mysqli_fetch_array($sql))
            {
             /* print_r($rows['expired_on']);?><br /> <?*/
             $exdate = $rows['expiry_date'];
             $curdate = date('Y-m-d'); 
             $query1= "select datediff('".$exdate."','".$curdate."')";
             //print_r($query1);
             $datedif = mysqli_query($connection,$query1);
           
             $date = mysqli_fetch_array($datedif) ;
                //print_r($date);
                if (($date[0])>=1)
                {

                $email = new \SendGrid\Mail\Mail();
                $email->setFrom('gayatrigaddam26@gmail.com','Gayatri Gaddam');
                $email->setSubject("Remainder Mail");
                $email->addTo('pavan@pioniumtech.com', 'Rani K');
                $email->addContent(
                    "text/html", "Testing By Gayatri"
                );
                $sendgrid = new \SendGrid('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');
                try {
                    $response = $sendgrid->send($email);
                    print_r($response);
                    

                } catch (Exception $e) {
                    print_r($e->getMessage());
                }

                }

            }

        

}
?>