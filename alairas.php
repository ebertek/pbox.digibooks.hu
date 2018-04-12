<?php
  header("Expires: Wed, 14 Mar 1990 05:00:00 GMT");

  $name = $_GET['name'];
  $position = $_GET['position'];
  $t = $_GET['t'];
  $e = $_GET['e'];
  $location = $_GET['location'];

  function telClean($phone) {
    $tel=preg_replace("/[^0-9]/", "", $phone);
    if (substr($tel, 0, 2) === '06') {
      $tel = '3' . substr($tel, 1);
    }
    if (strlen($tel) < 10) {
      $tel = '36' . $tel;
    }
    if (preg_match('/^(\d{2})(\d{2})(\d{3})(\d{4})$/', $tel, $tel2)) {
      return '+' . $tel2[1] . ' ' . $tel2[2] . ' ' . $tel2[3] . ' ' . $tel2[4];
    } else
    if (preg_match('/^(\d{2})(1)(\d{3})(\d{4})$/', $tel, $tel2)) {
      return '+' . $tel2[1] . ' ' . $tel2[2] . ' ' . $tel2[3] . ' ' . $tel2[4];
    } else
    if (preg_match('/^(\d{2})(\d{2})(\d{3})(\d{3})$/', $tel, $tel2)) {
      return '+' . $tel2[1] . ' ' . $tel2[2] . ' ' . $tel2[3] . ' ' . $tel2[4];
    } else {
      return $phone;
    }
  }
  $t = telClean($t);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-HU" lang="hu-HU">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PartyBox</title>
  </head>

  <body style="font-size: 14px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased;">

    <div style="font-size: 14px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased;">
      <div>
        <p style="margin: 0px;"><span style="font-weight: 900;"><?php echo "$name"; ?></span></p>
        <p style="margin: 0px;"><?php echo "$position"; ?></p>
        <p style="margin: 0px;">~~~~~~~~~~~~~~~</p>
      </div>
      <div>
        <p style="margin: 0px;"><span style="font-weight: 900;"><span style="font-size: 16px;">Partybox</span> – a karszalag birodalom</span></p>
        <p style="margin: 0px;">1112 Budapest, Hengermalom út 21/B.</p>
        <?php if ($t != '') { echo('<p style="margin: 0px;">Tel.: ' . $t . '</p>'); } ?>
        <p style="margin: 0px;">E-mail: <a href="mailto:<?php echo "$e"; ?>"><?php echo "$e"; ?></a></p>
        <p style="margin: 0px;">Web: <a href="http://www.partybox.hu/">www.partybox.hu</a></p>
        <p style="margin: 0px;"><a href="https://www.facebook.com/karszalagok/"><img id="fb" width="29" height="29" style="width: 29px; height: 29px; padding: 2px 2px 2px 2px; border: 0px;" src="http://pbox.digibooks.hu/FB-f-Logo__blue_29.png" alt="Facebook" /></a><a href="https://www.instagram.com/explore/locations/323832634/wristlandcom-security-wristbands-in-europe/"><img id="ig" width="29" height="29" style="width: 29px; height: 29px; padding: 2px 2px 2px 2px; border: 0px;" src="http://pbox.digibooks.hu/IG_Glyph_Fill.png" alt="Instagram" /></a></p>
      </div>
      <div>
        <a href="http://www.partybox.hu/"><img id="promo" width="640" height="106" style="width: 640px; height: 106px; margin: 6px 0px 6px 0px; border: 0px;" src="http://pbox.digibooks.hu/promo.png" alt="PartyBox" /></a>
      </div>
      <div style="color: #669C35; font-size: 10px;">
        🌳 Mielőtt kinyomtatja ezt az üzenetet, kérjük, győződjön meg annak szükségességéről. A környezet védelme a MI kezünkben van. A PartyBox számára fontos a környezetvédelem! Tartson velünk Ön is!
      </div>
    </div>

  </body>

</html>