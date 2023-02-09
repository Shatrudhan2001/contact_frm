<?php
    
    $SiteUrl = "https://site_url.com/";
    
    $imageUrl = $SiteUrl."assets/img/logo1.png";
      
    $to = "test123@gmail.com";
    $body = '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title>Website Name</title>

  <style>
    p {
      margin: 5px 0;
      font-size: 14px;
      line-height: 24px;
    }

    a {
      color: #0033CC;
      font-weight: 600;
      font-size: 12px;
    }

    ul {
      margin: 0;
      padding: 0;
    }

    ul li {
      list-style: inside;
      color: #000;
      font-size: 14px;
    }

    b {
      color: #000;
    }

    h3 {
      margin: 0;
      padding: 0;
      color: #0066FF;
    }

    table,
    td,
    div,
    h1,
    p {
      font-family: Arial, sans-serif;
    }

    @media screen and (max-width: 530px) {
      .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: #555555;
        text-decoration: none !important;
        font-weight: bold;
      }

      .col-lge {
        max-width: 100% !important;
      }

      .hed {
        padding: 25px 20px 11px 20px;
        text-align: center;
      }
    }

    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 50% !important;
      }

      .col-lge {
        max-width: 50% !important;
      }

    }
  </style>
</head>

<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
  <div role="article" aria-roledescription="email" lang="en"
    style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <!--[if mso]>
          <table role="presentation" align="center" style="width:600px;">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation"
            style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;">

            <tr>
              <td class="hed"
                style="padding:25px 20px 11px 20px;font-size:0;background-color:#0b4736;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35); text-align:center;">

               <div class="col-sml"
                  style="display:inline-block;width:100%;max-width:145px;vertical-align:top;text-align:left;font-family:Arial,sans-serif;font-size:14px;color:#363636;">
                  <img src="'.$imageUrl.'" width="115" alt="" style="width:160px;max-width:100%; background: #0b4736;">
                </div>

                <div class="col-lge"
                  style="display:inline-block;width:100%;max-width:395px;vertical-align:top;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636; margin-top:10px;">


                  <a style="color: #ffff;font-size:18px;text-decoration: none; font-weight: 800;"><i
                      class="fa fa-phone"></i> +91-9837033821, </a> <br>
                  <a href="mailto:test123@gmail.com"
                    style="color: #ffff;font-size: 18px;text-decoration: none;font-weight: 800;">test123@gmail.com</a>

                </div>

              </td>
            </tr>
            <tr>
              <td style="padding:10px 20px;background-color:#ffffff;">


                <h2 style="color:#000; font-size:18px; margin:0; padding:0;">Dear Admin,</h2>


                <p><b>URL:</b> <a href="https://site_url.com/" target="_blank">site_url.com</a>
                </p>
                <p>
                  <b>Name:</b> <em>'.$name.'</em><br />
                  <b>Email Id:</b> <em>'.$email.'</em><br />
                  <b>Subject:</b> <em>'.$subject.'</em><br />
                </p>
                <p>
                  <b>Message:</b><br />'.$mesg.'</p>

                
                <div style="text-align:right; padding-top:3%;">
                  <b>Please acknowledge the receipt of this e-mail.</b>
                  <h3 align="right">Thank You!</h3>
                </div>

              </td>
            </tr>


            <tr>
              <td style="padding:10px;text-align:center;font-size:12px;background-color:#d12023;color:#cccccc;">
                <p style="margin:0;font-size:14px;line-height:20px;">© 2022 <a
                    style="color:#fff; text-decoration:none; font-weight:600" href="https://www.site_url.com/"
                    target="_blank">Website Name.</a> All rights reserved.</p>
              </td>
            </tr>
          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
  </div>
</body>

</html>'; 
    // echo $body;
    // die();
    $header = "From: no-reply@site_url.com \r\n";
    $header .= "MIME-Version: 1.0\r\n"; 
    $header.= "Content-Type: text/html; charset=utf-8\r\n"; 
    $header.= "X-Priority: 1\r\n"; 
   
    $send_contact = mail($to,$subject,$body,$header);

?>