<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion</title>
</head>
<body>

    <?php
function numberToString($num)
{
    $num = 67;
  $str =  strval($num); // This uses the built in function of strval to convert an integer to a string
  return $str;
}
$result = numberToString(67); // Call the function and store the result in a variable
?>
<h1><?php echo "$result"; ?></h1>
</body>
</html>
