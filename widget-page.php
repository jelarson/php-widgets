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

    // $calc_answer = '';

    if($op == '+'){
      $calc_answer = $num1 + $num2;
    } elseif($op == '-'){
      $calc_answer = $num1 - $num2;
    } elseif($op == '/'){
      $calc_answer = $num1 / $num2;
    } elseif($op == '*'){
      $calc_answer = $num1 * $num2;
    } else {
      $calc_answer = 'Invalid Operator';
    }
  
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
  <div class="calculator-widget">
  <form action="widget-page.php" method="post">
    First Num: <input type="number" step='0.1' name="num1"> <br>
    Operator: <select name='op'>
      <option value='+'>+</option>  
      <option value='-'>-</option>  
      <option value='*'>*</option>  
      <option value='/'>/</option>  
    <br>
    Second Num: <input type="number" step='0.1' name="num2"> <br>
    <input type='submit'>
  </form>
  <h2><?php $calc_answer ?></h2>
  </div>


</body>
</html>
