<?php

function EmailTemplate($user,$link) {
  $HTML = '
  <html>
  <head>
  <meta charset="utf-8">
  <title>Make email template</title>
  <link rel="shortcut icon" href="images/favicon.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-Equiv="Cache-Control" Content="cache">
  <meta http-Equiv="Pragma" Content="cache">
  <meta http-Equiv="Expires" Content="1000">
  <style type="text/css">
    @import url(http://fonts.googleapis.com/css?family=Open+Sans);
    body{overflow: hidden}
    img{max-width:600px;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic}
    a{text-decoration:none;border:0;outline:none;color:#bbb}
    a img{border:none}
    p{margin-top: 0;margin-bottom: 0;text-align:left;}
    td,h1,h2,h3{font-family:Helvetica,Arial,sans-serif;font-weight:400}
    td{text-align:center}
    body{-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;width:100%;height:100%;color:#37302d;background:#fff;font-size:16px}
    table{border-collapse:collapse!important}
    .headline{color:#fff;font-size:36px}
    .force-full-width{width:100%!important}
    .force-width-80{width:80%!important}
    .force-width-40{width:50%!important}
    @media screen {
      td,h1,h2,h3{font-family:"Open Sans","Helvetica Neue","Arial","sans-seri"!important}
    }
     @media only screen and (max-width: 600px) {
      table[class="w290"]{width:290px!important}
      table[class="w300"]{width:300px!important}
      table[class="w320"]{width:480px!important}
      table[class*="w100p"]{width:100%!important}
      td[class="w320"]{width:4800px!important}
      td[class="mobile-center"]{text-align:center!important}
      td[class*="mobile-padding"]{padding-left:20px!important;padding-right:20px!important;padding-bottom:20px!important}
      td[class*="mobile-block"]{display:block!important;width:100%!important;text-align:left!important;padding-bottom:20px!important}
      td[class*="mobile-border"]{border:0!important}
      td[class*="reveal"]{display:block!important}
      td[class*="mobile-spacing"]{padding-top:10px!important;padding-bottom:10px!important}
      *[class*="mobile-hide"]{display:none!important}
      *[class*="mobile-br"]{font-size:12px!important}
      td[class*="mobile-w20"]{width:20px!important}
      img[class*="mobile-w20"]{width:20px!important}
      img[class*="w320"]{width:250px!important;height:67px!important}
      .mobile-padding {padding:10px 30px !important;;}
    }
    @media only screen and (max-width: 480px) {
      table[class="w290"]{width:290px!important}
      table[class="w300"]{width:300px!important}
      table[class="w320"]{width:300px!important}
      table[class*="w100p"]{width:100%!important}
      td[class="w320"]{width:300px!important}
      td[class="mobile-center"]{text-align:center!important}
      td[class*="mobile-padding"]{padding-left:20px!important;padding-right:20px!important;padding-bottom:20px!important}
      td[class*="mobile-block"]{display:block!important;width:100%!important;text-align:left!important;padding-bottom:20px!important}
      td[class*="mobile-border"]{border:0!important}
      td[class*="reveal"]{display:block!important}
      td[class*="mobile-spacing"]{padding-top:10px!important;padding-bottom:10px!important}
      *[class*="mobile-hide"]{display:none!important}
      *[class*="mobile-br"]{font-size:12px!important}
      td[class*="mobile-w20"]{width:20px!important}
      img[class*="mobile-w20"]{width:20px!important}
      img[class*="w320"]{width:250px!important;height:67px!important}
      td[class*="activate-now"]{padding-right:0!important;padding-top:20px!important}
      td[class*="mobile-align"]{text-align:left!important}
      td[class*="mobile-center"]{text-align:center!important}
      .mobile-padding {padding:10px 10px !important;}
    }
  </style>
  </head>
  <body  offset="0" class="body" style="background-image: url(https://s18.postimg.org/9vn77jz09/body21.jpg); background-size: auto 100%;background-position: center;background-repeat:no-repeat" width="100%" padding:0; margin:0; display:block;-webkit-text-size-adjust:none" bgcolor="#815229">
    <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%" >
      <tr>
          
          <center>
            <table style="margin:0 auto;" cellspacing="0" height="60" cellpadding="0" width="100%">
            <br><br><br>
              <tr>
                <td style="text-align: center;">
                  <a href="#"><img width="91" height="91" src="https://s12.postimg.org/dklft1aul/logo.png" alt="company logo" /></a>
                </td>
                
              </tr>
            </table>
            <table cellspacing="0" cellpadding="0" width="600" class="w320" style="border-radius: 4px;overflow: hidden;">
              <tr>
                <td align="center" valign="top">
                  <table cellspacing="0" cellpadding="0" class="force-full-width">
                    <tr>
                      <td class="bg bg1" style="background-color:#F1F2F5;">
                        <table cellspacing="0" cellpadding="0" class="force-full-width">
                          <tr>
                            <td style="font-size:24px; font-weight: 600; color: #121212; text-align:center;" class="mobile-spacing">
                              <div class="mobile-br">&nbsp;</div>
                              <span319db5>Bienvenidos a '. APP_TITLE .'</span>
                              <br>
                            </td>
                          </tr>
                          <tr>
                            <td style="font-size:17px; text-align:center; padding: 10px 75px 0; color:#6E6E6E;" class="w320 mobile-spacing mobile-padding">
                              <span319db5>Casa italiana te agredece a tì '.$user.' por unirte a nosotros y escojernos como tu primera selecciòn a la hora de hablar de toda la comida Italiana.</span><br><br>
                            </td>
                          </tr>
                        </table>
                      <br><br>
                      </td>
                    </tr>
                  </table>
                  <table cellspacing="0" cellpadding="0" class="force-full-width">
                    <tr>
                      <td class="bg bg1" style="background-color:#F1F2F5;">
                        <center>
                          <table style="margin: 0 auto" cellpadding="0" cellspacing="0" class="force-width-80">
                            <tr>
                              <br><br>
                              <td class="mobile-resize" style="color:#172838; font-size: 20px; font-weight: 600; text-align: left; vertical-align: top;">
                                <span319db5>Culmina la activacion de tu cuenta!  </span>
                              </td>
                            </tr>
                          </table>
                          <table style="margin: 0 auto;" cellspacing="0" cellpadding="0" class="force-width-80">
                            <tr>
                              <td style="text-align:left; color: #6f6f6f;">
                                <br>
                                <p319db5>
                                  Solo queda un paso más, activar tu cuenta para disfrutar de todos los beneficios de un usuario registrado.
                                </p>
                            </tr>
                          </table>
                        </center>
                        <table style="margin:0 auto;" cellspacing="0" cellpadding="10" width="100%">
                          <tr>
                            <td style="text-align:center; margin:0 auto;">
                              <br>
                              <div>
                                <!--[if mso]>
                                <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:45px;v-text-anchor:middle;width:240px;" stroke="f" fillcolor="#f5774e">
                                  <w:anchorlock/>
                                  <center>
                                    <![endif]-->
                                    <a class="btn" href="'.$link.'"
                                      style="background-color:#172838;color:#ffffff;display:inline-block;font-family: Source Sans Pro, Helvetica, Arial, sans-serif;font-size:18px;font-weight:400;line-height:45px;text-align:center;text-decoration:none;width:240px;-webkit-text-size-adjust:none;
                                      -webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;">Activa tu cuenta y Conocenos </a>
                                    <!--[if mso]>
                                  </center>
                                </v:rect>
                                <![endif]-->
                              </div>
                              <br>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

                  <table cellspacing="0" cellpadding="0" class="force-full-80" style="width:80%;margin:auto">
                    <tr>
                      <td style="text-align:center;">
                        &nbsp;
                    </tr>
                    <tr>
                      <td style="color:#D2D2D2;color:rgba(255,255,255,0.5); font-size: 14px;padding-bottom:4px;">
                        <table border="0" align="center" cellpadding="0" cellspacing="0" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="force-width-50">
                          <tr>
                            <td style="height:21px;text-align:center;font-size:12px;" class="mobile-center">
                              <span319db5">&copy; '. date('Y',time()) .' '.APP_TITLE.'. Todos los derechos reservados.</span>
                            </td>
                          </tr>
                          <tr>
                            <td style="height:21px;text-align:center;font-size:12px;" class="mobile-center">
                              <span319db5>Estamos ubicados en Av. Delicias, 5 De julio y Lago Mall, Maracaibo. Zulia.</span>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td style="font-size:12px;">
                        &nbsp;
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
            <table cellspacing="0" cellpadding="0" class="force-full-width">
            <tr>
              <td style="font-size:12px;">
                &nbsp;
                <br>
              </td>
            </tr>
          </table>
          </center>
        </td>
      </tr>
    </table>
  ';

      return $HTML;
}

?>
