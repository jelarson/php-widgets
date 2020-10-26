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
    $num1 = $_POST["num1"];
    $num2 = $_POST['num2'];
    $op = $_POST['op'];

    $calc_answer = '';
    $final_calc_answer = (strlen($calc_answer) > 0 ? $calc_answer : '');

    if($op == '+'){
      $calc_answer = $num1 + $num2;
    } elseif($op == '-'){
      $calc_answer = $num1 - $num2;
    } elseif($op == '/'){
      $calc_answer = $num1 / $num2;
    } elseif($op == '*'){
      $calc_answer = $num1 * $num2;
    } else {
      $calc_answer = '';
    }
  
    $reverse_text = $_POST['reverse'];

    $reverse_answer = (strlen($reverse_text) > 0 ? strrev($reverse_text) : '');

    $bg_color = $_POST['bgColor'];

    $shuffle_text = str_shuffle($_POST['shuffle'])
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
  <div class='widget-wrapper'>

    <div class="calculator-widget">
      <form action="widget-page.php" method="post" action="widget-page.php">
        First Num: <input type="number" step='0.1' name="num1"> <br>
        Operator: <select name='op'>
          <option value='+'>+</option>  
          <option value='-'>-</option>  
          <option value='*'>*</option>  
          <option value='/'>/</option>  
          <br>
          Second Num: <input type="number" step='0.1' name="num2"> <br>
          <input type='submit' value='Submit'>
        </form>
        <h2>Answer: <?php echo $calc_answer ?></h2>
      </div>
      <div class="reverse-widget">
        <form action="widget-page.php" method="post" action="widget-page.php">
          Reverse Text: <input type="text" name="reverse"> <br>
          <input type='submit' value='Submit'>
        </form>
        <h2>Result: <?php echo $reverse_answer ?></h2>
      </div>
      <div class="background-widget" style='background: <?php echo $bg_color ?>'>
        <form action="widget-page.php" method="post" action="widget-page.php">
          <input type="radio" id="red" name="bgColor" value="red">
          <label for="red">Red</label><br>
          <input type="radio" id="purple" name="bgColor" value="purple">
          <label for="purple">Purple</label><br>
  <input type="radio" id="green" name="bgColor" value="green">
  <label for="green">Green</label><br>
    <input type='submit' value='Submit'>
  </form>
</div>
<div class="shuffle-widget">
  <form action="widget-page.php" method="post" action="widget-page.php">
    Shuffle Text: <input type="text" name="shuffle"> <br>
    <input type='submit' value='Submit'>
  </form>
  <h2>Result: <?php echo $shuffle_text ?></h2>
</div>
</div>


</body>
</html>
