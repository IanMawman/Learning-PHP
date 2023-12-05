<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statements</title>
</head>
<body>
     <?php

$currentMonth = date("n"); // gets the current month and writes it as a number

if ($currentMonth >= 6 && $currentMonth <= 8) {
    $season = "summer";
} elseif ($currentMonth >= 9 && $currentMonth <= 11) {
    $season = "autumn";
} elseif ($currentMonth == 12 || $currentMonth <= 2) {
    $season = "winter";
} else {
    $season = "spring";
}
?>
    <h1><?php echo "The current season is" . " " . $season; ?></h1>
</body>
</html>
