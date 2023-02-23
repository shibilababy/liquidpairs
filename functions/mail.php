<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
	if(isset($_POST["email"])) {
	//echo "<pre>";
//print_r($_POST);	
$name = $_POST["name"];
$email = $_POST["email"];
$phoneCountry = $_POST["phoneCountry"];
$phoneNumber = $_POST["phoneNumber"];
$phone = $phoneCountry." ".$phoneNumber;
$liquidityCapital = $_POST["liquidityCapital"];
$CompanyIndustry = $_POST["CompanyIndustry"];
$companyLink = $_POST["companyLink"];
$investedFunds = $_POST["investedFunds"];
$privateBusiness = $_POST["privateBusiness"];

if($_POST["accredited"] == 1){
	$accredited = "Yes";
}else{
	$accredited = "No";
}
if($_POST["citizenship"] == 0){
	$citizenship = "Yes";
}else{
	$citizenship = "No";
}
if($_POST["receiveInvestments"] == 0){
	$receiveInvestments = "Yes";
}else{
	$receiveInvestments = "No";
}
// $phone ="";
//$message_content = $_POST["message"];

//$to =  liquiditypairscapital@gmail.com
 $to = "liquiditypairscapital@gmail.com";
  // $to = "linta.johnson@spericorn.com";
$subject = "Start Investing Email";
$url = $_SERVER['SERVER_NAME']."/img";
//$url = "http://103.79.221.146/authentico-landing-page/";


$message_data = "<!DOCTYPE html>
<html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='x-apple-disable-message-reformatting'>
    <meta name='format-detection' content='telephone=no,address=no,email=no,date=no,url=no'>
    <meta name='color-scheme' content='light'>
    <meta name='supported-color-schemes' content='light'>
    <title></title> 


    <!--[if gte mso 9]>
    <xml>
        <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
    </xml>
    <![endif]-->

    <!--[if mso]>
        <style>
            * {
                font-family: sans-serif !important;
            }
        </style>
    <![endif]-->

    <!--[if !mso]><!-->
    
    <!--<![endif]-->

    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@700&family=Syne:wght@700&display=swap');
    </style>
    <style>

        
        :root {
          color-scheme: light;
          supported-color-schemes: light;
        }

        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        div[style*='margin: 16px 0'] {
            margin: 0 !important;
        }

        #MessageViewBody, #MessageWebViewDiv{
            width: 100% !important;
        }

        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        img {
            -ms-interpolation-mode:bicubic;
        }

        a {
            text-decoration: none;
        }

        a[x-apple-data-detectors],
        .unstyle-auto-detected-links a,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .im {
            color: inherit !important;
        }

        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }
  
        img.g-img + div {
            display: none !important;
        }

        @media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
            u ~ div .email-container {
                min-width: 320px !important;
            }
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
            u ~ div .email-container {
                min-width: 375px !important;
            }
        }

        @media only screen and (min-device-width: 414px) {
            u ~ div .email-container {
                min-width: 414px !important;
            }
        }

    </style>
 
    <style>

        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td-primary:hover,
        .button-a-primary:hover {
            background: #1DADC8 !important;
            border-color: #1DADC8 !important;
        }


        @media screen and (max-width: 480px) {

            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 50% !important;
                max-width: 50% !important;
                direction: ltr !important;
                float: left !important;
            }

            .stack-column-center {
                text-align: center !important;
            }

            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }

            .email-container p {
                font-size: 17px !important;
            }
        }

    </style>

    <style>
        .title{
                font-size: 24px;
                margin-top: 0;
            }
        .subtitle{
            font-size: 18px;
        }

        .form-title{
            line-height: 1.2;
        }
        
        @media only screen and (max-device-width: 479px) { 
            .form-title{
                font-size: 18px;
            }

            .logo{
                width: 100px !important;
                height: 37px !important;
            }
        }

        @media only screen and (min-device-width: 480px) { 
            .hide { max-height: none !important; font-size: 12px !important; display: none !important; }
            .subtitle{
                font-size: 24px;
            }
            .title{
                font-size: 48px;
                margin-top: 0;
            }
        }
    </style>


</head>

<body width='100%' style='margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background: #161616 url(bg.png) repeat-x; background-size: contain '>
  <center role='article' aria-roledescription='email' lang='en' style='width: 100%;'>
    <!--[if mso | IE]>
    <table role='presentation' border='0' cellpadding='0' cellspacing='0' width='100%' style='background-color: #222222;'>
    <tr>
    <td>
    <![endif]-->

        <div style='max-height:0; overflow:hidden; mso-hide:all;' aria-hidden='true'>
        </div>


        


       
        <div style='max-width: 1045px; margin: 0 auto;' class='email-container'>
            <!--[if mso]>
            <table align='center' role='presentation' cellspacing='0' cellpadding='0' border='0' width='680'>
            <tr>
            <td>
            <![endif]-->


            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='margin: auto;'>

                <tr>
                    <td style='padding: 20px 0; text-align: center'>
                        <img src='".$url."/lpc-logo.png' class='logo' width='237' height='84' alt='alt_text' border='0' style='height: auto; font-family: sans-serif !important; font-size: 15px; line-height: 15px; color: #555555;'>
                    </td>
                </tr>

                <tr>
                    <td style='background-color: #0F161B; border-radius: 25px;'>
                        <div style='background-color: #0F161B; border-radius: 25px; border: 1px solid #333333; padding-bottom: 50px;'>

                            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 20px; font-family: sans-serif !important; font-size: 15px; line-height: 20px; color: #ffffff !important;'>
                                    
                                    <h3 class='title' style='font-family: Syne ,sans-serif !important;
                                    font-weight: 700; line-height: 1; padding-bottom: 20px; border-bottom: 1px solid #333b42; color: #ffffff !important;'>You have received a new Application from a Customer.</h3>

                                   
                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>Full Name</div>

                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px;  background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 40px; color: #ffffff !important;'>
                                        ".$name."
                                    </div>


                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>Phone Number</div>

                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px;  background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 40px; color: #ffffff !important;'>
                                        ".$phone."
                                    </div>

                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>Email Address</div>

                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px;  background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 40px; color: #ffffff !important;'>
                                        ".$email."
                                    </div>


                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>How much would you like to invest overall with Liquidity Pairs Capital ?</div>

                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px;  background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 40px; color: #ffffff !important;'>
                                        ".$liquidityCapital."
                                    </div>

                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>Are you an accredited investor?</div>

                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px;  background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 40px; color: #ffffff !important;'>
                                        ".$accredited."
                                    </div>

                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>What citizenship(s) do you have?</div>

                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px;  background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 40px; color: #ffffff !important;'>
                                        ".$citizenship."
                                    </div>

                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>Do you have an operating business? If so, in what industry? (Share website URL if you're so inclined)</div>


                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px;  background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 10px; color: #ffffff !important;'>
                                        ".$CompanyIndustry."
                                    </div>

                                    <div class='company-name'>
                                        <a href='#' style='color: #1DADC8;  margin-bottom: 40px; display: block;font-family: Manrope , sans-serif !important; color: #ffffff !important;'>
                                            <img src='".$url."/link.png' alt=''>
                                            ".$companyLink."</a>
                                        
                                    </div>


                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>Have you ever invested in funds such as ours or similar(Stocks, REITs, etc.)? </div>

                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px; background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 40px; color: #ffffff !important;'>
                                        ".$investedFunds."
                                    </div>


                                    <div class='form-title' style='font-size: 24px; font-family: Manrope ,sans-serif !important; margin-bottom: 20px; color: #ffffff !important;'>Have you ever invested in private businesses?</div>

                                    <div class='form-content' style='font-family: Manrope , sans-serif !important; font-size: 14px; background-color: #21282e; padding: 10px; border-radius: 10px; border: 1px solid #1DADC8; margin-bottom: 40px; color: #ffffff !important;'>
                                        ".$privateBusiness."
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td style='padding: 0 20px 20px;'>
                                    
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' style='margin: auto;'>
                                        <tr>
                                            <td class='button-td button-td-primary' style='border-radius: 20px 0px 20px 0px; background: #1DADC8;'>
                                                 <a class='button-a button-a-primary' href='".$_SERVER['SERVER_NAME']."/' style='background: #1DADC8; border: 1px solid #1DADC8; font-family: sans-serif !important; font-size: 15px; line-height: 15px; text-decoration: none; padding: 13px 17px; color: #ffffff !important; width:200px; text-align: center; display: block; border-radius: 20px 0px 20px 0px;'>
                                                  <img src='".$url."/saveResponse.png' alt=''>  Save Response
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </td>
                            </tr>

                             </table>

                        </div>
                    </td>
                </tr>
             
                <tr>
                    <td aria-hidden='true' height='40' style='font-size: 0px; line-height: 0px;'>
                        &nbsp;
                    </td>
                </tr>

            </table>
            

            

            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->
        </div>

        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='background-color: #162123;'>
            
            <tr>
                <td style='border-bottom: 1px solid #2c3638'>
                    <div align='center' style='max-width: 1045px; margin: auto;' class='email-container'>
                        <!--[if mso]>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='680' align='center'>
                        <tr>
                        <td>
                        <![endif]-->
                            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                                <tr>
                                    <td>
                                        <div class='icon hide' style='padding: 20px'>
                                            <img src='".$url."/icon.png' alt='' width='40' height='40'>
                                        </div>
                                        
                                    </td>
                                </tr>
                            </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
            <tr>
                
                <td style='border-bottom: 1px solid #2c3638'>
                    <div align='center' style='max-width: 1045px; margin: auto;' class='email-container'>
                        <!--[if mso]>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='680' align='center'>
                        <tr>
                        <td>
                        <![endif]-->
                            <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                                <tr>
                                    <td  style='padding: 80px 40px 50px; text-align: left; font-family: sans-serif !important; font-size: 15px; line-height: 20px; color: #ffffff !important;'>
                                        <div class='social-links'>
                                            <a href='#' target='_blank' style='display: inline-block; margin-right: 30px;'>
                                                <img src='".$url."/fb.png' alt=''>
                                            </a>
                                            <a href='#' target='_blank' style='display: inline-block; margin-right: 30px;'>
                                                <img src='".$url."/twitter.png' alt=''>
                                            </a>
        
                                            <a href='#' target='_blank' style='display: inline-block; margin-right: 30px;'>
                                                <img src='".$url."/insta.png' alt=''>
                                            </a>
                                            <a href='#' target='_blank' style='display: inline-block; margin-right: 30px;'>
                                                <img src='".$url."/linkedin.png' alt=''>
                                            </a>
                                        </div>
                                        
                                    </td>
                                </tr>
                            </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
            
            <tr>
                
                <td>
                    <div align='center' style='max-width: 1045px; margin: auto;' class='email-container'>
                        <!--[if mso]>
                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='680' align='center'>
                        <tr>
                        <td>
                        <![endif]-->


                        <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                            <tr>
                                <td style='padding: 20px; text-align: left; font-family: sans-serif !important; font-size: 15px; line-height: 20px; color: #ffffff !important;'>
                                   <!--[if mso]>
                                <table role='presentation' border='0' cellspacing='0' cellpadding='0' width='660'>
                                <tr>
                                <td valign='top' width='220'>
                                <![endif]-->
                                <div style='display:inline-block; margin: 0 -1px; max-width: 220px; min-width:100px; vertical-align:top; width:100%;' class='stack-column'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                                        <tr>
                                            <td style='padding: 10px;'>
                                                <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                                    <tr>
                                                        <td>
                                                            <p class='subtitle'>Explore</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555 !important; padding-top: 10px;'>
                                                            <a href='#'  target='_blank' style='color: #EFF2F5 !important;  font-family: Manrope , sans-serif !important'>Home</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;'>
                                                            <a href='#' target='_blank' style='color: #EFF2F5 !important; font-family: Manrope , sans-serif !important'>Our Funds</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;'>
                                                            <a href='#' target='_blank' style='color: #EFF2F5 !important; font-family: Manrope , sans-serif !important;'>Resources</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if mso]>
                                </td>
                                <td valign='top' width='220'>
                                <![endif]-->
                                <div style='display:inline-block; margin: 0 -1px; max-width: 220px; min-width:100px; vertical-align:top; width:100%;' class='stack-column'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                                        <tr>
                                            <td style='padding: 10px;'>
                                                <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                                    <tr>
                                                        <td>
                                                            <p class='subtitle'>Know More</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;'>
                                                            <a href='#' target='_blank' style='color: #EFF2F5 !important;  font-family: Manrope , sans-serif !important'>About us</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;'>
                                                            <a href='#'  target='_blank' style='color: #EFF2F5 !important;  font-family: Manrope , sans-serif !important'>Contact us</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;'>
                                                            &nbsp;
                                                        </td>
                                                    </tr>
                                                    
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if mso]>
                                </td>
                                
                                <td valign='top' width='220'>
                                <![endif]-->
                                <div style='display:inline-block; margin: 0 -1px; max-width: 220px; min-width:100px; vertical-align:top; width:100%;' class='stack-column'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                                        <tr>
                                            <td style='padding: 10px;'>
                                                <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;' class='hide'>
                                                    <tr>
                                                        <td>
                                                            <p class='subtitle'>Visit</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;'>
                                                            <span  style='color: #EFF2F5  !important; font-family: Manrope , sans-serif !important;'>
                                                                Address Line 1, <br/>
                                                                Addres Line 2,<br/>
                                                                City, 00000<br/>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    
                                                    
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if mso]>
                                </td>
                                <td valign='top' width='220'>
                                <![endif]-->
                                <div style='display:inline-block; margin: 0 -1px; max-width: 220px; min-width:100px; vertical-align:top; width:100%;' class='stack-column'>
                                    <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%'>
                                        <tr>
                                            <td style='padding: 10px;'>
                                                <table role='presentation' cellspacing='0' cellpadding='0' border='0' width='100%' style='font-size: 14px;text-align: left;'>
                                                    <tr>
                                                        <td>
                                                            <p class='subtitle'>Legal</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;'>
                                                            <a href='#'  target='_blank' style='color: #EFF2F5 !important;  font-family: Manrope , sans-serif !important'>Terms & Conditions</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style='font-family: Manrope , sans-serif !important; font-size: 15px; line-height: 20px; color: #555555; padding-top: 10px;'>
                                                            <a href='#'  target='_blank' style='color: #EFF2F5 !important;  font-family: Manrope , sans-serif !important'>Privacy Policy</a>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <!--[if mso]>
                                </td>
                                </tr>
                                </table>
                                <![endif]-->
                                </td>
                            </tr>
                        </table>
                        <!--[if mso]>
                        </td>
                        </tr>
                        </table>
                        <![endif]-->
                    </div>
                </td>
            </tr>
        </table>

    <!--[if mso | IE]>
    </td>
    </tr>
    </table>
    <![endif]-->
    </center>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";




require_once('../phpmailer/vendor/phpmailer/src/Exception.php');
require_once('../phpmailer/vendor/phpmailer/src/PHPMailer.php');
require_once('../phpmailer/vendor/phpmailer/src/SMTP.php');

// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
   // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //$mail->Username = 'hello@bubblelab.io'; 
    //$mail->Password = 'b$pop*22';
	$mail->Username = 'liquiditypairscapital@gmail.com'; 
    $mail->Password = '$$PCLcapital12#$5';

    // Sender and recipient settings
    //$mail->setFrom('hello@bubblelab.io');
    //$mail->addAddress($to, 'Receiver Name');
	 $mail->setFrom('liquiditypairscapital@gmail.com','Liquidity');
    $mail->addAddress($to, 'Receiver Name');
   // $mail->addReplyTo('example@gmail.com', 'Sender Name'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Start Investing Inquiry";
    $mail->Body = $message_data;
    $mail->Headers = $headers;
   // $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';
 // print_r($message_data);
    $mail->send();
    echo "1";
} catch (Exception $e) {
	// echo "<pre>";
	// print_r($e);
	echo "2";
  
}



}

?>
