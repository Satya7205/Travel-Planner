<?php

use PHPmailer\PHPmailer\PHPMailer;
use PHPmailer\PHPmailer\SMTP;
use PHPmailer\PHPmailer\Exception;

$admin = "touristvenues@gmail.com";
$authtoken = "vtlh yqcu reyd ykvc";

function checkMXRecords($recipient)
{
    list($username, $domain) = explode('@', $recipient);
    $dnsval = checkdnsrr($domain, 'MX');
    $ipAddress = gethostbyname($domain);
    // echo "$domain\n$ipAddress\n";
    if ($domain == $ipAddress) {
        return false;
    } else {
        return $dnsval;
    }
}

function validateEmailWithSMTP($recipient)
{
    require 'C:\\Users\\DELL\\phpmailer\\vendor\\phpmailer\\phpmailer\\src\\Exception.php';
    require 'C:\\Users\\DELL\\phpmailer\\vendor\\phpmailer\\phpmailer\\src\\PHPMailer.php';
    require 'C:\\Users\\DELL\\phpmailer\\vendor\\phpmailer\\phpmailer\\src\\SMTP.php';

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
    $mail->isSMTP(); //Send using SMTP
    $mail->SMTPKeepAlive = true;
    $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
    $mail->SMTPAuth = true; //Enable SMTP authentication
    $mail->Username = $GLOBALS['admin']; //SMTP username
    $mail->Password = $GLOBALS['authtoken']; //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
    $mail->Port = 465;

    try {
        $mail->setFrom('touristvenues@gmail.com', 'Admin');
        $mail->addAddress($recipient); // Add recipient address
        $mail->addReplyTo('touristvenues@gmail.com', 'Admin');
        // $mail->getSMTPInstance()->mail($recipient); // Initiate RCPT TO
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Welcome to Tourist Venues';
        $mail->Body = 'Welcome User, your ultimate destination for
        hassle-free travel booking! Our user-friendly interface offers a
        seamless experience, allowing you to effortlessly plan and book
        your dream vacation.';
        $mail->AltBody = 'Welcome User, your ultimate destination for
        hassle-free travel booking! Our user-friendly interface offers a
        seamless experience, allowing you to effortlessly plan and book
        your dream vacation.';
        if ($mail->send()) {
            // sleep(3);
            // require 'imapmail.php';
            // Connect to the IMAP server
            $imapServer = '{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX';
            $imap = imap_open($imapServer, $GLOBALS['admin'], $GLOBALS['authtoken'], OP_READONLY);

            if ($imap) {
                // Search for emails from today
                // From: Mail Delivery Subsystem <mailer-daemon@googlemail.com>
                $search_criteria = 'FROM "mailer-daemon@googlemail.com" SINCE "' . date('Y-m-d', strtotime('-1 day')) . '"';

                // Perform the search
                $email_ids = imap_search($imap, $search_criteria, SE_UID, 'UTF-8');

                // If there are matching emails, retrieve the last 5
                if ($email_ids) {
                    // Sort the email IDs in descending order
                    rsort($email_ids);

                    // Limit to the last 5 emails
                    $email_ids = array_slice($email_ids, 0, 3);

                    foreach ($email_ids as $email_id) {
                        // Fetch the email header
                        $header = imap_fetchheader($imap, $email_id, FT_UID);

                        preg_match('/' . $recipient . '/i', $header, $matches);
                        if ((isset($matches[0]) ? true : false) and (strpos($header, 'multipart/report') !== false)) {
                            return false;
                        } else {
                            return true;
                        }
                    }
                } else {
                    return false;
                }
                // Close the IMAP connection
                imap_close($imap);
            } else {
                // echo "Failed to connect to the IMAP server.\n";
            }
        } else {
            $respnse = "Error: " . $mail->ErrorInfo;
            return false; // Likely invalid
        }
    } catch (Exception $e) {
        // Handle potential errors gracefully
        $respnse = "Exception Error: " . $mail->ErrorInfo;
        return false; // Assume invalid in case of errors
    }
    // $mail->SmtpClose();
}

function ValidateMail($recipient)
{
    if (filter_var($recipient, FILTER_VALIDATE_EMAIL)) {

        if (checkMXRecords($recipient)) {
            if (validateEmailWithSMTP($recipient)) {
                return "valid";
                // echo "Email address is valid.";
            } else {
                return "invalid";
                // echo "Email address is invalid.";
            }
        } else {
            return "invalid";
            // echo "$recipient has a invalid domain\n";
        }
    } else {
        return "invalid";
        // echo "$recipient is not a valid email address\n";
    }
}

// $res = ValidateMail("shishirkumar197u9i@gmail.com");
// if ($res){
//     echo "valid";
// }
// else{
//     echo "invalid";
// }