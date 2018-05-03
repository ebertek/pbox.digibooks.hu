<?php
  header("Expires: Wed, 14 Mar 1990 05:00:00 GMT");

  $adatok = array(
    'cz' => array(
      'web' => "naramky24.cz",
      'fb' => "Naramky24cz-310409455743289",
      'ig' => "",
      'promo' => "cz.png",
      'ceg' => "Total Wristbands s.r.o.",
      'slogan' => "",
      'cim' => "Botanická 593/4, 602 00 Brno",
      'print' => "Před vytištěním tohoto e-mailu prosím zvažte ekologické důsledky a ochranu životního prostředí. Je pro nás velmi důležitá ochrana životního prostředí. Přidejte se i vy k nám!"
    ),
    'sk' => array(
      'web' => "naramky24.sk",
      'fb' => "Naramky24",
      'ig' => "",
      'promo' => "sk.png",
      'ceg' => "Total Wristbands s.r.o.",
      'slogan' => "",
      'cim' => "Dúhová 844/75, 943 42 Gbelce",
      'print' => "Pred vytlačením tohto e-mailu prosím zvážte ekologické dôsledky a ochranu životného prostredia. Je pre nás veľmi dôležitá ochrana životného prostredia. Pridajte sa i vy k nám ! "
    ),
    'hu' => array(
      'web' => "partybox.hu",
      'fb' => "karszalagok",
      'ig' => "partybox_karszalagok",
      'promo' => "hu.png",
      'ceg' => "Partybox",
      'slogan' => " – a karszalag birodalom",
      'cim' => "1117 Budapest, Hengermalom út 20/1.",
      'print' => "Mielőtt kinyomtatja ezt az üzenetet, kérjük, győződjön meg annak szükségességéről. A környezet védelme a MI kezünkben van. A PartyBox számára fontos a környezetvédelem! Tartson velünk Ön is!"
    ),
    'ro' => array(
      'web' => "partybox.ro",
      'fb' => "WristlandBratariSnururi",
      'ig' => "",
      'promo' => "ro.png",
      'ceg' => "Partybox",
      'slogan' => "",
      'cim' => "Piața Matei Corvin 5, Târgu Mureș",
      'print' => "Gândește-te la mediul înconjurător înainte de a printa acest e-mail. Protejarea mediului este în mâinile noastre! Partybox susține protecția mediului! Alătură-te și tu inițiativei noastre!"
    ),
    'com' => array(
      'web' => "wristland.com",
      'fb' => "wristland",
      'ig' => "",
      'promo' => "com.png",
      'ceg' => "Wristland",
      'slogan' => "",
      'cim' => "1112 Budapest, Hengermalom út 21/B.",
      'print' => "Before printing this email, make sure it is absolutely necessary. Protecting the environment is in our hands. Environmental protection is important for WRISTLAND, so join us!"
    )
  );
  $adatok = function($str) use ($adatok) {
    return eval('return $adatok' . $str . ';');
  };

  $name = $_GET['name'];
  $position = $_GET['position'];
  $t = $_GET['t'];
  $e = $_GET['e'];
  $e2 = $_GET['e2'];
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
  if ($ig == "default") {
    $ig = $adatok("[$loc]['ig']");
  } else {
    $ig = $_GET['ig_other'];
  }

  $baseurl = $_GET['baseurl'];
  if ($baseurl == "default") {
    $baseurl = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'? "https://" : "http://";
    $baseurl .= $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI']);
    if (mb_substr($baseurl, -1) == "/") { $baseurl = rtrim($baseurl, '/\\'); }
  } else if ($baseurl == "") {
    $baseurl = $_GET['baseurl_other'];
  }

  $promo = $_GET['promo'];
  if ($promo == "default") {
    $promo = $baseurl . '/promo/' . $adatok("[$loc]['promo']");
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
    <title>PartyBox – <?php echo "$name"; ?></title>
  </head>

  <body style="font-size: 14px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased;">

    <div style="font-size: 14px; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; -webkit-font-smoothing: antialiased;">
      <div>
        <p style="margin: 0px;"><span style="font-weight: 900; color: #E7390E"><?php echo "$name"; ?></span></p>
        <p style="margin: 0px;"><?php echo "$position"; ?></p>
        <p style="margin: 0px;">~~~~~~~~~~~~~~~</p>
      </div>
      <div>
        <table style="border-spacing: 0;"><tbody>
          <tr><td colspan="2"><span style="font-weight: 900;"><span style="font-size: 16px;"><?php echo $adatok("[$loc]['ceg']"); ?></span><?php echo $adatok("[$loc]['slogan']"); ?></span></td></tr>
          <tr><td colspan="2"><?php echo $adatok("[$loc]['cim']"); ?></td></tr>
          <?php if ($t != '') { echo('<tr><td>Tel.:</td><td>' . $t . '</td></tr>'); } ?>
          <tr><td>E-mail:</td><td><a href="mailto:<?php echo "$e"; ?>"><?php echo "$e"; ?></a></td></tr>
          <?php if ($e2 != '') { echo('<tr><td>&nbsp;</td><td><a href="mailto:' . $e2 . '">' . $e2 . '</a></td></tr>'); } ?>
          <tr><td>Web:</td><td><a href="http://www.<?php echo "$web"; ?>/"><?php echo "$web"; ?></a></td></tr>
        </tbody></table>
        <p style="margin: 0px;"><a href="https://www.facebook.com/<?php echo "$fb"; ?>/"><img id="fb" width="29" height="29" style="width: 29px; height: 29px; padding: 2px 2px 2px 2px; border: 0px;" src="<?php echo "$baseurl"; ?>/fb.png" alt="Facebook" /></a>
        <?php if ($ig != '') { echo('<a href="https://www.instagram.com/' . $ig . '/"><img id="ig" width="29" height="29" style="width: 29px; height: 29px; padding: 2px 2px 2px 2px; border: 0px;" src="' . $baseurl . '/ig.png" alt="Instagram" /></a>'); } ?></p>
      </div>
      <div>
        <p style="margin: 0px;"><a href="http://www.<?php echo "$web"; ?>/"><img id="promo" width="<?php echo "$promo_w"; ?>" height="<?php echo "$promo_h"; ?>" style="width: <?php echo "$promo_w"; ?>px; height: <?php echo "$promo_h"; ?>px; margin: 6px 0px 6px 0px; border: 0px;" src="<?php echo "$promo"; ?>" alt="<?php echo "$ceg"; ?>" /></a></p>
      </div>
      <div style="color: #669C35; font-size: 10px; width: <?php echo "$promo_w"; ?>px;">
        <p style="margin: 0px;">🌳 <?php echo $adatok("[$loc]['print']"); ?></p>
      </div>
    </div>

  </body>

</html>
