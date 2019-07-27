<?php
require 'Html.php';
require 'Car.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <title>Page Title</title>
    <?php $html = new Html;
    $html ->css('assets/css/main.css');
    $html ->meta();
    $html ->('OOP oef2');
    ?>
</head>

<body>
<?php
//$audi=new car("BE4", "01-03-1989", 1000000, "r8", "Audi", "chromered", 0.9);

$audi=new car("BE4", "01-03-1989", 1000000, "A3", "Audi", "blue", 0.9);

echo $audi->weightClass();
echo'<br>';
echo $audi->availability();
echo'<br>';
echo $audi->CountryOfOrigin();
echo'<br>';
echo $audi->vehicleSate();
echo'<br>';
echo $audi->age();
echo'<br>';
$audi->display();
?>

</body>
</html>