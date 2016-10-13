<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Answer</title>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
   <?php
    
      $a = $_POST['txtA'];
      $b = $_POST['txtB'];
      $ope = $_POST['selOpe'];
    
      switch ($ope) {
        case "+":
          $answer = $a + $b;
          break;
        case "-":
          $answer = $a - $b;
          break;
        case "*":
          $answer = $a * $b;
          break;
        case "/":
          $answer = $a / $b;
              
              
          break;
        default:
          break;
}

    print ($a." ".$ope." ".$b." = ".$answer."\n");
    ?>
    <br />
    <br />
    <a href="form.html" onclick="history.back(); return false;">back</a>
</body>
</html>