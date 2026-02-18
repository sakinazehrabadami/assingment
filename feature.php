<?php
if (isset($_POST['day'])) {

    $day = $_POST['day'];

    if ($day == "Monday" || $day == "Tuesday") {
        echo "CodeGirls jana hai. Time: 10 AM";
    } elseif ($day == "Friday" || $day == "Sunday") {
        echo "CodeGirls nahi jana.";
    } else {
        echo "CodeGirls jana hai lekin time 2 PM hai.";
    }
}
echo "<br>";
$greetings = ["hii", "hello", " welcome"];
print_r($greetings);
echo "<br>";
$days = ["monday", "tuesday", " wednesday"];
print_r($days);
echo "<br>";
$array1 = array("apple", "banana", "cherry");
print_r($array1);
echo "<br>";
echo "<br>";

$cars_obj = array(
    "model" => "2012",
    "color" => "white",
    "price" => "1.5 lac",
);
print_r($cars_obj);



$arr1 = array(
    "model" => "2012",
    "color" => "white",
    "price" => "1.5 lac",

);

$cars_obj = array(
    "mehran " => $arr1,
    "corolla " => $arr1,
    "civic " => $arr1,
);

print_r($cars_obj);

?>

<form method="post">
    Enter Day: <input type="text" name="day">
    <button type="submit">Submit</button>
</form>