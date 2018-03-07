<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
    <div class="calc-wrapper">

      <form class="" action="" method="GET">
        <input type="text" name="num1" value="" placeholder="Number 1">
        <input type="text" name="num2" value="" placeholder="Number 2">
        <select class="" name="operator">
            <option value="None">None</option>
            <option value="+">Add</option>
            <option value="-">Subtract</option>
            <option value="*">Multiply</option>
            <option value="/">Divide</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
      </form>
      <br>
      <p>The Answer is:</p>
      <?php
        if (isset($_GET['submit'])) {
          $result1 = $_GET['num1'];
          $result2 = $_GET['num2'];
          $operator = $_GET['operator'];

          switch ($operator) {
            case "None":
                echo 'ERROR! You must select an operator.';
              break;
            case "+":
                echo $result1 + $result2;
              break;
            case "-":
                echo $result1 - $result2;
              break;
            case "*":
                echo $result1 * $result2;
              break;
            case "/":
                echo $result1 / $result2;
              break;

          }

        }
      ?>

    </div>
  </body>
</html>
