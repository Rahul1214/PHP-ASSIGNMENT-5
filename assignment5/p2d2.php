  
<?php
    if($_POST)
    {
        $name = $_POST['name'];
        $seat = $_POST['seat'];
        $meal = $_POST['meal'];
    }
?>

<html>
<head>
    <title>Cookies</title>
</head>
<body style="background-color: black;color: yellow;">
<center><h1>Cookies</h1></center><hr color="red">
<div id="second"  style="text-align:left">
    <h1>------ABC FLIGHTS------</h1>
    <BR>
    Thankyou for choosing our Flights<br>
    The cookie values are<br>
    <?php
        
echo "Name: ".$_COOKIE['name'];
echo '<br>';
echo "Seat: ".$_COOKIE['seat'];
echo '<br>';
echo "Food: ".$_COOKIE['food'];
?>
</div>
</body>
</html>
