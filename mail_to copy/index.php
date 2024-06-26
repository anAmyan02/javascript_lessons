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
    <form id="contact" action="mail.php" method="post">
      <h1>Գրանցվել</h1>

      <fieldset style = "display:flex">
        <input name="email-btn" class="email-btn" type="button" value = "Էլ. հասցե">
        <input name="phone-btn" class="phone-btn"  type="button"  value = "հեռախոս">
      </fieldset>
      <fieldset>
        <input placeholder="Ներմուծեք Ձեր օգտանունը" name="name" type="text" tabindex="1" autofocus>
      </fieldset>
      <fieldset>
        <input class = "email" placeholder="Ներմուծեք Ձեր Էլ. հասցեն" name="email" type="email" tabindex="2" style = 'display : block'>
        <input class = "phone" placeholder="Ներմուծեք Ձեր հեռախոս՝ +(374) 00 000 000" name="phone" type="phone" tabindex="3" style = 'display : none'>
      </fieldset>

      <fieldset>
        <button type="submit" name="send" id="contact-submit">Առաջ</button>
      </fieldset>
      <fieldset>
        <p>Արդեն ունե՞ք <a href = "login.php">հաշիվ</a></p>
      </fieldset>
    </form>
  </div>

  <script src="mail.js"></script>
</body>
</html>