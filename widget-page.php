<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <title>PHP Widgets</title>
  <link rel="stylesheet" type="text/css" href="widget-page.css">
</head>
<body>
<?php
  $name = $_POST{'name'};
  $visitor_email = $_POST{'email'};
  $message = $_POST{'message'};
  $welcome_message = (strlen($name) > 0 ? "Hello {$name}!" : 'Welcome!');
  // if(isset($_POST['clear'])) {
  //   $welcome_message = 'Welcome!';
  // }
  
?>
  <div class="contact-title">
    <h1>PHP Widget Page</h1>
    <h2><?php echo $welcome_message; ?></h2>

  <div class="name-widget">
    <form id="contact-form" method="post" action="widget-page.php">
      <input name="name" type="text" class="form-control" placeholder="Your Name" required>
      <input type='submit' class='form-control submit' value="Submit">
      <!-- <input type='submit' class='form-control submit' name="clear" value="clear"> -->
    </form>
  </div>


</body>
</html>
