<?php

require('config.php');
session_start();
//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];
    $destination = $_SESSION['destination'];
    $guide = (int)$_SESSION['guide'];
    $startdate = $_SESSION['startdate'];
    $enddate = $_SESSION['enddate'];
    $sql = "INSERT INTO `guidebookings` (`user_id`,`guide_id`,`destination`,`startdate`,`enddate`,`transaction_id`, `razorpay_payment_id`, `status`, `price`) VALUES ('$email','$guide','$destination','$startdate','$enddate','$razorpay_order_id', '$razorpay_payment_id', 'success','$price')";
    if(mysqli_query($conn, $sql)){
        // echo "payment details inserted to db";
        ?>
        <script>
            alert("Guide Booked Successfully.");
            window.location.href = '/touristvenues/Travel_planner/home.php';
        </script>
        <?php
    }

    // $html = "<p>Your payment was successful</p>
    //          <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";

    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
