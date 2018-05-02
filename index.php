<?php
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu-HU" lang="hu-HU">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PartyBox aláírások</title>
    <meta name="Description" content="Aláírásgeneráló a PartyBox Hungary Kft.-nek" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="googlebot" content="noindex, nofollow" />

    <link href="https://ebertek.com/" rel="home" />
    <link href="css/pbox.css" rel="stylesheet" type="text/css" />
    <link href="favicon.ico" rel="icon" type="image/x-icon" />

    <script src="js/pbox.js" type="text/javascript" charset="utf-8"></script>
  </head>

  <body>
    <div id="main">
      <form action="alairas.php" method="get">
        <fieldset>
          <table>
            <tr>
              <td><label for="name">Név: </label>
              </td>
              <td><input type="text" name="name" />
              </td>
            </tr>
            <tr>
              <td><label for="position">Beosztás: </label>
              </td>
              <td><input type="text" name="position" />
              </td>
            </tr>
            <tr>
              <td><label for="t">T: </label>
              </td>
              <td><input type="tel" name="t" />
              </td>
            </tr>
            <tr>
              <td><label for="e">E: </label>
              </td>
              <td><input type="email" name="e" value="@partybox.hu" />
              </td>
            </tr>
            <tr>
              <td><label for="loc">Ország: </label>
              </td>
              <td>
                <input type="radio" name="loc" value="cz" /> Csehország (.cz)<br />
                <input type="radio" name="loc" value="hu" checked="checked" /> Magyarország (.hu)<br />
                <input type="radio" name="loc" value="ro" /> Románia (.ro)<br />
                <input type="radio" name="loc" value="sk" /> Szlovákia (.sk)<br />
                <input type="radio" name="loc" value="com" /> Nemzetközi (.com)<br />
              </td>
            </tr>
            <tr>
              <td><label for="web">Web: </label>
              </td>
              <td>
                <input type="radio" name="web" value="default" checked="checked" /> Alapértelmezett<br />
                <input type="radio" name="web" id="web" value="" /> <input type="text" name="web_other" oninput="other('web')" />
              </td>
            </tr>
            <tr>
              <td><label for="fb">Facebook: </label>
              </td>
              <td>
                <input type="radio" name="fb" value="default" checked="checked" /> Alapértelmezett<br />
                <input type="radio" name="fb" id="fb" value="" /> <input type="text" name="fb_other" oninput="other('fb')" />
              </td>
            </tr>
            <tr>
              <td><label for="ig">Instagram: </label>
              </td>
              <td>
                <input type="radio" name="ig" value="default" checked="checked" /> Alapértelmezett<br />
                <input type="radio" name="ig" id="ig" value="" /> <input type="text" name="ig_other" oninput="other('ig')" />
              </td>
            </tr>
            <tr>
              <td><label for="promo">Promo kép: </label>
              </td>
              <td>
                <input type="radio" name="promo" value="default" checked="checked" /> Alapértelmezett<br />
                <input type="radio" name="promo" id="promo" value="" /> <input type="url" name="promo_other" oninput="other('promo')" />
              </td>
            </tr>
          </table>
          <input type="submit">
        </fieldset>
      </form>
    </div>
  </body>

</html>
