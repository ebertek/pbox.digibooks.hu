<?php
  header("Expires: Wed, 14 Mar 1990 05:00:00 GMT");

  $baseURL = 'http://pbox.digibooks.hu';
  $adatok = array(
    'cz' => array(
      'web' => "naramky24.cz",
      'fb' => "Naramky24cz-310409455743289",
      'promo' => "cz.png",
      'ceg' => "Total Wristbands s.r.o.",
      'slogan' => "",
      'cim' => "Botanická 593/4  602 00 Brno",
      'print' => "Před vytištěním tohoto e-mailu prosím zvažte ekologické důsledky a ochranu životního prostředí. Je pro nás velmi důležitá ochrana životního prostředí. Přidejte se i vy k nám!"
    ),
    'sk' => array(
      'web' => "naramky24.sk",
      'fb' => "Naramky24",
      'promo' => "sk.png",
      'ceg' => "Total Wristbands s.r.o.",
      'slogan' => "",
      'cim' => "Dúhová 844/75  943 42 Gbelce",
      'print' => "Pred vytlačením tohto e-mailu prosím zvážte ekologické dôsledky a ochranu životného prostredia. Je pre nás veľmi dôležitá ochrana životného prostredia. Pridajte sa i vy k nám ! "
    ),
    'hu' => array(
      'web' => "partybox.hu",
      'fb' => "karszalagok",
      'promo' => "hu.png",
      'ceg' => "Partybox",
      'slogan' => " – a karszalag birodalom",
      'cim' => "1112 Budapest, Hengermalom út 21/B.",
      'print' => "Mielőtt kinyomtatja ezt az üzenetet, kérjük, győződjön meg annak szükségességéről. A környezet védelme a MI kezünkben van. A PartyBox számára fontos a környezetvédelem! Tartson velünk Ön is!"
    ),
    'ro' => array(
      'web' => "partybox.ro",
      'fb' => "WristlandBratariSnururi",
      'promo' => "ro.png",
      'ceg' => "Partybox",
      'slogan' => "",
      'cim' => "George Enescu nr 6 AP4, Oradea 410034, Románia",
      'print' => "Gândește-te la mediul înconjurător înainte de a printa acest e-mail. Protejarea mediului este în mâinile noastre! Partybox susține protecția mediului! Alătură-te și tu inițiativei noastre!"
    ),
    'com' => array(
      'web' => "wristland.com",
      'fb' => "wristland",
      'promo' => "com.png",
      'ceg' => "Wristland",
      'slogan' => "",
      'cim' => "1112 Budapest, Hengermalom út 21/B.",
      'print' => "Before printing this email, make sure it is absolutely necessary. Protecting the environment is in our hands. Environmental protection is important for WRISTLAND, so join us!"
    )
  );
  $adatok = function($str) use ($adatok) {
    return eval('return $adatok'.$str.';');
  };

  $name = $_GET['name'];
  $position = $_GET['position'];
  $t = $_GET['t'];
  $e = $_GET['e'];
  $loc = "'" . $_GET['loc'] . "'";

  $web = $_GET['web'];
  if ($web == "default") {
    $web = $adatok("[$loc]['web']");
  } else {
    $web = $_GET['web_other'];
  }
  $fb = $_GET['fb'];
  if ($fb == "default") {
    $fb = $adatok("[$loc]['fb']");
  } else {
    $fb = $_GET['fb_other'];
  }
  $ig = $_GET['ig'];

  $promo = $_GET['promo'];
  if ($promo == "default") {
    $promo = $baseURL . '/promo/' . $adatok("[$loc]['promo']");
  } else {
    $promo = $_GET['promo_other'];
  }
  list($promo_w, $promo_h) = getimagesize($promo);

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
        <p style="margin: 0px;"><span style="font-weight: 900;"><span style="font-size: 16px;"><?php echo $adatok("[$loc]['ceg']"); ?></span><?php echo $adatok("[$loc]['slogan']"); ?></span></p>
        <p style="margin: 0px;"><?php echo $adatok("[$loc]['cim']"); ?></p>
        <?php if ($t != '') { echo('<p style="margin: 0px;">Tel.: ' . $t . '</p>'); } ?>
        <p style="margin: 0px;">E-mail: <a href="mailto:<?php echo "$e"; ?>"><?php echo "$e"; ?></a></p>
        <p style="margin: 0px;">Web: <a href="http://www.<?php echo "$web"; ?>/"><?php echo "$web"; ?></a></p>
        <p style="margin: 0px;"><a href="https://www.facebook.com/<?php echo "$fb"; ?>/"><img id="fb" width="29" height="29" style="width: 29px; height: 29px; padding: 2px 2px 2px 2px; border: 0px;" src="<?php echo "$baseURL"; ?>/FB-f-Logo__blue_29.png" alt="Facebook" /></a><a href="https://www.instagram.com/<?php echo "$ig"; ?>/"><img id="ig" width="29" height="29" style="width: 29px; height: 29px; padding: 2px 2px 2px 2px; border: 0px;" src="<?php echo "$baseURL"; ?>/IG_Glyph_Fill.png" alt="Instagram" /></a></p>
      </div>
      <div>
        <a href="http://www.<?php echo "$web"; ?>/"><img id="promo" width="<?php echo "$promo_w"; ?>" height="<?php echo "$promo_h"; ?>" style="width: <?php echo "$promo_w"; ?>px; height: <?php echo "$promo_h"; ?>px; margin: 6px 0px 6px 0px; border: 0px;" src="<?php echo "$promo"; ?>" alt="Partybox" /></a>
      </div>
      <div style="color: #669C35; font-size: 10px; width: <?php echo "$promo_w"; ?>px;">
        🌳 <?php echo $adatok("[$loc]['print']"); ?>
      </div>
    </div>

  </body>

</html>
