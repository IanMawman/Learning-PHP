<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loops multiplication table</title>
</head>
<body>
    
<h2>Multiplication Table</h2>

<table border="1">
    <tr>
        <th>&nbsp;</th>

        <?php
    // Print the header row with numbers 1 to 12
    for ($i = 1; $i <= 12; $i++) {
        echo "<th>$i</th>"; //adds a tables header for each itteration til it gets to 12 
    }
?>
    </tr>

<?php
    // Use nested loops to generate the multiplication table going through the itterations from 1 to 12 
    for ($row = 1; $row <= 12; $row++) { //$row = row 
        echo "<tr>";
        echo "<th>$row</th>"; // Row header

        for ($col = 1; $col <= 12; $col++) { //$col = collumn and $col++ adds another collumn till it readches 12
            echo "<td>" . ($row * $col) . "</td>"; // this calculates the values of each collum by their respected collumns 
        }

        echo "</tr>";
    }
?>

</table>

</body>
</html>
