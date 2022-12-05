<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import css -->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

    </select>
    </p>
    <head>
    <style>
      button {
        background-color: #806ae4;
        border: none;
        color: white;
        padding: 15px 15px;
        text-align: center;
        text-decoration: none;
        font-size: 15px;
        cursor: pointer;
        border-radius: 12px;
      }
      p{
        color: #27186b;
      }
    </style>
    <script>
      function addNumbers() {
        var number;
        var result = "";

        number = Number(document.getElementById("number").value);

        for(var i = 1; i<= 11; i++){
          result = result + "<p>"+number + "*" + i + "=" + number * i+"</p>";
        }
        
        document.getElementById("result").innerHTML = result;
      }
    </script>
    
  </head>
  <body>
    Enter the number : <input id="number" />
    <button onclick="addNumbers()">Print Multiplication table</button>
    <div id="result">
  </body>
<body>
    <?php
    $a = 10;
    while ($a <= 10) {
        if (isset($_POST["number_1"])) {

            $number_1 = $_POST["number_1"];

        } else {

            $number_1 = 0;

        }


        if (isset($_POST["number_2"])) {

            $number_2 = $_POST["number_2"];

        } else {

            $number_2 = 0;

        }

        echo 'Number 1: '.$number_1 ;

        echo ' Number 2: '.$number_2;

        $a = 11;
        


    }

    

?>







<form method="POST" action="">

    <!-- input style -->
    

    
    <input type="number" name="number_1" placeholder="enter a number">

    <input type="number" name="number_2" placeholder="enter a number">

    

    <p>
    Which operator would you like to use?
    <select name="option" method = "post">
        <option value="">Select...</option>
        <option value="+">Add</option>
        <option value="-">Take</option>
        <option value="*">Multiply</option>
        <option value="/">Divide</option>
    </select>
    </p>



<?php
    #use subtract function
    function subtract($number_1, $number_2) {
        $result = $number_1 - $number_2;
        return $result;
    }
    if (isset($_POST["option"])=="-") {
        $option = $_POST["option"];
        if ($option == "-") {
            $result = subtract($number_1, $number_2);
            echo "The result is: $result";
        }
    }

    #use add function
    function add($number_1, $number_2) {
        $result = $number_1 + $number_2;
        return $result;
    }
    if (isset($_POST["option"])=="+") {
        $option = $_POST["option"];
        if ($option == "+") {
            $result = add($number_1, $number_2);
            echo "The result is: $result";
        }
    }

    #use multiply function
    function multiply($number_1, $number_2) {
        $result = $number_1 * $number_2;
        return $result;
    }
    if (isset($_POST["option"])=="*") {
        $option = $_POST["option"];
        if ($option == "*") {
            $result = multiply($number_1, $number_2);
            echo "The result is: $result";
        }
    }

    #use divide function
    function divide($number_1, $number_2) {
        $result = $number_1 / $number_2;
        return $result;
    }
    if (isset($_POST["option"])=="/") {
        $option = $_POST["option"];
        if ($option == "/") {
            $result = divide($number_1, $number_2);
            echo "The result is: $result";
        }
    }
    
    ?>
<button type="submit">Submit</button>
<button name='closeIt' onClick="Exit()" >Reset? </Button>
<p>

</html>
</form>
</body>
</html>