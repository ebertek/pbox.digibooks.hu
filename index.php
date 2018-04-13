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
              <td><label for="web">Web: </label>
              </td>
              <td>
                <input type="radio" name="web" value="naramky24.cz" /> Naramky24.cz<br />
                <input type="radio" name="web" value="naramky24.sk" /> Naramky24.sk<br />
                <input type="radio" name="web" value="partybox.hu" checked="checked" /> Partybox.hu<br />
                <input type="radio" name="web" value="partybox.ro" /> Partybox.ro<br />
                <input type="radio" name="web" value="wristland.com" /> Wristland.com<br />
                <input type="radio" name="web" value="wristland.hu" /> Wristland.hu<br />
                <input type="radio" name="web" value=""  /> <input type="text" name="web_other" />
              </td>
            </tr>
            <tr>
              <td><label for="fb">Facebook: </label>
              </td>
              <td>
                <input type="radio" name="fb" value="karszalagok" checked="checked" /> PartyBox - A karszalag birodalom<br />
                <input type="radio" name="fb" value="WristlandBratariSnururi" /> Partybox - Bratari de identificare, Snururi textile<br />
                <input type="radio" name="fb" value="Naramky24" /> Naramky24<br />
                <input type="radio" name="fb" value="Naramky24cz-310409455743289" /> Naramky24cz<br />
                <input type="radio" name="fb" value="wristland" /> Wristland.com - Security Wristbands in Europe<br />
                <input type="radio" name="fb" value=""  /> <input type="text" name="fb_other" />
              </td>
            </tr>
            <tr>
              <td><label for="ig">Instagram: </label>
              </td>
              <td><input type="text" name="ig" value="partybox_karszalagok" />
              </td>
            </tr>
            <tr>
              <td><label for="promo">Promo kép: </label>
              </td>
              <td><input type="url" name="promo" value="http://pbox.digibooks.hu/promo.png" />
              </td>
            </tr>
          </table>
          <input type="submit">
        </fieldset>
      </form>
    </div>
  </body>

</html>
