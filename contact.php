<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php require_once("lib/headutils.php"); ?>
    <link rel="stylesheet" href="lib/css/contact.css">
  </head>
  <body>
    <?php require_once("lib/partials/navbar.php");?>
    <h1>Contact</h1>
    <form class="cf">
      <div class="half left cf">
        <input type="text" id="input-name" placeholder="Name">
        <input type="email" id="input-email" placeholder="Email address">
        <input type="text" id="input-subject" placeholder="Subject">
      </div>
      <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
      </div>
      <input type="submit" value="Submit" id="input-submit">
    </form>
  </body>
</html>
