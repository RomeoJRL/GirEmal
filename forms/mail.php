<?php
//use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $nom = ['nom'];
    $subject = $_POST['subject'];
    
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
    /*
    //Validate inputs
    if(empty($name) || empty($email) || empty($password)){
        //One or more fields are empty
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        //email validation failed
    }

    //check if email already exists
    $sql_check = "SELECT email FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql_check);
    $stmt->execute([$email]);
    if($stmt->rowCount() > 0){
        //user already exists
    }
    //Prepare and execute insert statement
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $email, $hashed_password]);
    */



    $mail = new PHPMailer(true);

    //$html = file_get_contents('bussy.html');

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; //SMTP server
    $mail->SMTPAuth = true;
    $mail->Username = 'jrlamah72@gmail.com'; //username
    $mail->Password = 'oxqsnqjqyhqbnlbq'; //password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;


    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    //set the sender and recipient
    $mail->setFrom($email, $email);
    $mail->isHTML(true);
    $mail->addAddress($email, $name);

    //set the email subject and body
    $mail->Subject = $subject;








    $mail->Body = '<!DOCTYPE html>

    <html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
    
    <head>
        <title></title>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
        <!--[if !mso]><!-->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" />
        <!--<![endif]-->
        <style>
            * {
                box-sizing: border-box;
            }
    
            body {
                margin: 0;
                padding: 0;
            }
    
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: inherit !important;
            }
    
            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
            }
    
            p {
                line-height: inherit
            }
    
            .desktop_hide,
            .desktop_hide table {
                mso-hide: all;
                display: none;
                max-height: 0px;
                overflow: hidden;
            }
    
            @media (max-width:670px) {
    
                .desktop_hide table.icons-inner,
                .social_block.desktop_hide .social-table {
                    display: inline-block !important;
                }
    
                .icons-inner {
                    text-align: center;
                }
    
                .icons-inner td {
                    margin: 0 auto;
                }
    
                .image_block img.big,
                .row-content {
                    width: 100% !important;
                }
    
                .mobile_hide {
                    display: none;
                }
    
                .stack .column {
                    width: 100%;
                    display: block;
                }
    
                .mobile_hide {
                    min-height: 0;
                    max-height: 0;
                    max-width: 0;
                    overflow: hidden;
                    font-size: 0px;
                }
    
                .desktop_hide,
                .desktop_hide table {
                    display: table !important;
                    max-height: none !important;
                }
            }
        </style>
    </head>
    
    <body style="background-color: #F6F5FF; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
        <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation"
            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #F6F5FF;" width="100%">
            <tbody>
                <tr>
                    <td>					
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2"
                            role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 30px; padding-bottom: 25px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="100%">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="text_block block-1" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:5px;padding-left:10px;padding-right:10px;padding-top:10px;">
                                                                    <div style="font-family: sans-serif">
                                                                        <div class=""
                                                                            style="font-size: 16px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 19.2px; color: #B1AED1; line-height: 1.2;">
                                                                            <p
                                                                                style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 19.2px;">
                                                                                <span style="font-size:20px;">SUBJECT</span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="text_block block-2" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:10px;padding-left:10px;padding-right:10px;">
                                                                    <div style="font-family: Tahoma, Verdana, sans-serif">
                                                                        <div class=""
                                                                            style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #454562; line-height: 1.2;">
                                                                            <p
                                                                                style="margin: 0; font-size: 12px; text-align: center; mso-line-height-alt: 14.399999999999999px;">
                                                                                <span style="font-size:34px;">'.$subject.'</span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3"
                            role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="100%">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="image_block block-1" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment"
                                                                        style="line-height:10px"><img alt="Image"
                                                                            class="big" src="https://remymail.herokuapp.com/Top.png"
                                                                            style="display: block; height: auto; border: 0; width: 650px; max-width: 100%;"
                                                                            title="Image" width="650" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4"
                            role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF; color: #333; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="50%">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="image_block block-2" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-left:20px;padding-top:10px;width:100%;padding-right:0px;padding-bottom:5px;">
                                                                    <div align="center" class="alignment"
                                                                        style="line-height:10px"><img alt="Image"
                                                                            src="https://remymail.herokuapp.com/pfl.jpg"
                                                                            style="display: block; height: auto; border: 0; width: 276px; max-width: 100%;"
                                                                            title="Image" width="276" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td class="column column-2"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="50%">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="text_block block-2" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:5px;padding-left:20px;padding-right:20px;padding-top:15px;">
                                                                    <div style="font-family: sans-serif">
                                                                        <div class=""
                                                                            style="font-size: 16px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 19.2px; color: #B1AED1; line-height: 1.2;">
                                                                            <p
                                                                                style="margin: 0; font-size: 16px; text-align: left; mso-line-height-alt: 19.2px;">
                                                                                <span style="font-size:14px;">ABOUT THE
                                                                                    VISITOR</span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="text_block block-3" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:5px;padding-left:20px;padding-right:20px;">
                                                                    <div style="font-family: Tahoma, Verdana, sans-serif">
                                                                        <div class=""
                                                                            style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #C059FF; line-height: 1.2;">
                                                                            <p
                                                                                style="margin: 0; font-size: 12px; text-align: left; mso-line-height-alt: 14.399999999999999px;">
                                                                                <strong><span style="font-size:22px;">'.$nom.'</span></strong></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="text_block block-3" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:5px;padding-left:20px;padding-right:20px;">
                                                                    <div style="font-family: Tahoma, Verdana, sans-serif">
                                                                        <div class=""
                                                                            style="font-family: Tahoma, Verdana, Segoe, sans-serif; font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #C059FF; line-height: 1.2;">
                                                                            <p
                                                                                style="margin: 0; font-size: 12px; text-align: left; mso-line-height-alt: 14.399999999999999px;">
                                                                                <strong><span style="font-size:14px;color: #B1AED1;">'.$email.'</span></strong></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="text_block block-2" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:5px;padding-left:20px;padding-right:20px;padding-top:15px;">
                                                                    <div style="font-family: sans-serif">
                                                                        <div class=""
                                                                            style="font-size: 16px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 19.2px; color: #B1AED1; line-height: 1.2;">
                                                                            <p
                                                                                style="margin: 0; font-size: 16px; text-align: left; mso-line-height-alt: 19.2px;">
                                                                                <span style="font-size:14px;">Message</span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="text_block block-4" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:5px;padding-left:20px;padding-right:30px;">
                                                                    <div style="font-family: sans-serif">
                                                                        <div class=""
                                                                            style="font-size: 14px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 21px; color: #555555; line-height: 1.5;">
                                                                            <p
                                                                                style="margin: 0; font-size: 14px; text-align: left; mso-line-height-alt: 18px;">
                                                                                <span style="font-size:12px;">'.$name.'</span></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="social_block block-5" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="padding-bottom:15px;padding-left:15px;padding-right:10px;padding-top:10px;text-align:left;">
                                                                    <div align="left" class="alignment">
                                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                                            class="social-table" role="presentation"
                                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;"
                                                                            width="148px">
                                                                            <tr>
                                                                                <td style="padding:0 5px 0 0;"><a
                                                                                        href=""
                                                                                        target="_blank"><img alt="Facebook"
                                                                                            height="32"
                                                                                            src="https://remymail.herokuapp.com/facebook2x.png"
                                                                                            style="display: block; height: auto; border: 0;"
                                                                                            title="Facebook"
                                                                                            width="32" /></a></td>
                                                                                <td style="padding:0 5px 0 0;"><a
                                                                                        href=""
                                                                                        target="_blank"><img alt="Twitter"
                                                                                            height="32"
                                                                                            src="https://remymail.herokuapp.com/twitter2x.png"
                                                                                            style="display: block; height: auto; border: 0;"
                                                                                            title="Twitter"
                                                                                            width="32" /></a></td>
                                                                                <td style="padding:0 5px 0 0;"><a
                                                                                        href=""
                                                                                        target="_blank"><img alt="Instagram"
                                                                                            height="32"
                                                                                            src="https://remymail.herokuapp.com/instagram2x.png"
                                                                                            style="display: block; height: auto; border: 0;"
                                                                                            title="Instagram"
                                                                                            width="32" /></a></td>
                                                                                <td style="padding:0 5px 0 0;"><a
                                                                                        href=""
                                                                                        target="_blank"><img alt="LinkedIn"
                                                                                            height="32"
                                                                                            src="https://remymail.herokuapp.com/linkedin2x.png"
                                                                                            style="display: block; height: auto; border: 0;"
                                                                                            title="LinkedIn"
                                                                                            width="32" /></a></td>
                                                                            </tr>
                                                                        </table>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5"
                            role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="100%">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="image_block block-1" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="width:100%;padding-right:0px;padding-left:0px;">
                                                                    <div align="center" class="alignment"
                                                                        style="line-height:10px"><img alt="Image"
                                                                            class="big" src="https://remymail.herokuapp.com/Btm.png"
                                                                            style="display: block; height: auto; border: 0; width: 650px; max-width: 100%;"
                                                                            title="Image" width="650" /></div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6"
                            role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="100%">
                                                        <div class="spacer_block"
                                                            style="height:35px;line-height:35px;font-size:1px;"> </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-7"
                            role="presentation"
                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #FFFFFF;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-left: 20px; padding-right: 20px; vertical-align: top; padding-top: 15px; padding-bottom: 15px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="100%">
                                                        <table border="0" cellpadding="10" cellspacing="0"
                                                            class="text_block block-1" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad">
                                                                    <div style="font-family: sans-serif">
                                                                        <div class=""
                                                                            style="font-family: Arial, Helvetica Neue, Helvetica, sans-serif; font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #6B6B6B; line-height: 1.2;">
                                                                            <p
                                                                                style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">
                                                                                Guineans in Robotics GIR / All
                                                                                rights reserved<br />Robotics Mindset <span
                                                                                    style="font-size:14px;color:#c059ff;"></span> 
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-8"
                            role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="100%">
                                                        <table border="0" cellpadding="0" cellspacing="0"
                                                            class="icons_block block-1" role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                            width="100%">
                                                            <tr>
                                                                <td class="pad"
                                                                    style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
                                                                    <table cellpadding="0" cellspacing="0"
                                                                        role="presentation"
                                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                                        width="100%">
                                                                        <tr>
                                                                            <td class="alignment"
                                                                                style="vertical-align: middle; text-align: center;">
                                                                                <!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
                                                                                <!--[if !vml]><!-->
                                                                                <table cellpadding="0" cellspacing="0"
                                                                                    class="icons-inner" role="presentation"
                                                                                    style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
                                                                                    <!--<![endif]-->
                                                                                
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table><!-- End -->
    </body>
    
    </html>';











    if (!$mail->send()) {
        // email was not sent
        echo " email was not sent";
    } else {
        // email was sent
        echo " email was sent";
    }
    //redirect the user to login page
    //header("Location: login.php");
    exit();
}
?>