<?php

$display = $_POST["display"]??"";
$firstNumber =$_POST["firstNumber"]?? "";
$oprator =$_POST["oprator"]?? "";
$secondNumber="";

if(isset($_POST["num"]))
{
    $display .= $_POST["num"];
}
elseif(isset($_POST["opration"]))
{
    $display .= " " . $_POST["opration"]." ";
}
elseif(isset($_POST["equal"]))
{
    $parts = explode(" ",trim($display));

    if(count($parts)>=3)
        {
             $firstNumber=(float)$parts[0];
             $oprator = $parts[1];
             $secondNumber = (float)$parts[2];


             if($oprator=="+")
                {
                    $display= $firstNumber + $secondNumber;
                }
            elseif($oprator=="-")
                {
                    $display=$firstNumber - $secondNumber;
                }
            elseif($oprator=="*")
                {
                    $display=$firstNumber * $secondNumber;
                }
            elseif($oprator=="/")
                {
                    if($secondNumber==0)
                        {
                            $display="Error";
                        }
                    else{
                    $display=$firstNumber / $secondNumber;
                        }
                }
        }
    $firstNumber="";
    $oprator="";
    $secondNumber="";
}
elseif(isset($_POST["clear"]))
    {
        $display="";
    }
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    />
    <title>Caculator</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <div class="calculator">
        <input type="text" name="display" id="input" value="<?php echo $display; ?>" readonly/>
        <input type="hidden" name="firstNumber" value="<?php echo $firstNumber; ?>">
        <input type="hidden" name="oprator" value="<?php echo $oprator; ?>">


        <button type="submit" name="num" class="num one" value="1">1</button>
        <button type="submit" name="num" class="num two" value="2">2</button>
        <button type="submit" name="num" class="num three" value="3">3</button>
        <button type="submit" name="num" class="num four" value="4">4</button>
        <button type="submit" name="num" class="num five" value="5">5</button>
        <button type="submit" name="num" class="num six" value="6">6</button>
        <button type="submit" name="num" class="num seven" value="7">7</button>
        <button type="submit" name="num" class="num eight" value="8">8</button>
        <button type="submit" name="num" class="num nine" value="9">9</button>
        <button type="submit" name="num" class="num zero" value="0">0</button>

        <button type="submit" name="opration" class="opration add" value="+">+</button>
        <button type="submit" name="opration" class="opration sub" value="-">-</button>
        <button type="submit" name="opration" class="opration multi" value="*">x</button>
        <button type="submit" name="opration" class="opration divid" value="/">/</button>
        <button type="submit" name="equal" class="opration equal" value="equal">=</button>
        <button type="submit" name="clear" class="opration delete">AC</button>
      </div>
    </form>
  </body>
</html>
