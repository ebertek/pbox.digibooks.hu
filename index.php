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
              <td><label for="location">Nyelv: </label>
              </td>
              <td>
                <input type="radio" name="location" value="cz" /> Cseh<br />
                <input type="radio" name="location" value="sk" /> Szlovák<br />
                <input type="radio" name="location" value="ro" /> Román<br />
                <input type="radio" name="location" value="en" /> Angol<br />
                <input type="radio" name="location" value="hu" checked="checked" /> Magyar
              </td>
            </tr>
          </table>
          <input type="submit">
        </fieldset>
      </form>
    </div>
  </body>

</html>
