<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box-shadow">
        <div class="top-left-yellow"></div>
        <div class="top-left-gray"></div>
        <div class="top-right-gray"></div>
        <div class="top-right-yellow"></div>
    </div>

  <div class="container">
    <form id="contact" action="get_login.php" method="post">
      <h1>Մուտք</h1>
      <fieldset>
        <input placeholder="Ներմուծեք Ձեր օգտանունը" name="name" type="text" tabindex="1" autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Ներմուծեք Ձեր unique ID-ն" name="token" type="text" tabindex="2">
      </fieldset>
      <fieldset>
        <button type="submit" name="send" id="contact-submit">Առաջ</button>
      </fieldset>
      <fieldset>
        <p>Չունե՞ք <a href = "index.php">հաշիվ</a></p>
      </fieldset>
    </form>
  </div>
</body>

</html>