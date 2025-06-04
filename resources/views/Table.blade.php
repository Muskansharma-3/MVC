<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table of 8</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 30%; margin: auto; border-collapse: collapse; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: center; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>
    <h2>Multiplication table of {{$k}}</h2>
    <table>
       
        <tbody>
            <?php
                for ($i = 1; $i <= 10; $i++) {
                    echo "<tr>
                            <td>$k</td>
                            <td>×</td>
                            <td>$i</td>
                            <td>=</td>
                            <td>" . ($i * $k) . "</td>
                          </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
