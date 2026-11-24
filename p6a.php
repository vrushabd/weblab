
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>

    <style>
        table, td, th {
            border: 1px solid black;
            width: 33%;
            text-align: center;
            background-color: DarkGray;
        }

        table {
            margin: auto;
        }

        input, p {
            text-align: right;
        }
    </style>
</head>

<body>

<form method="POST">

    <table>
        <caption>
            <h2>SIMPLE CALCULATOR</h2>
        </caption>

        <tr>
            <td>Value 1:</td>
            <td>
                <input type="text" name="num1">
            </td>
        </tr>

        <tr>
            <td>Value 2:</td>
            <td>
                <input type="text" name="num2">
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Calculate">
            </td>
        </tr>

<?php
if (isset($_POST['submit']))
{
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    if (is_numeric($num1) && is_numeric($num2))
    {
        echo "<tr><td>Addition:</td><td>" . ($num1 + $num2) . "</td></tr>";

        echo "<tr><td>Subtraction:</td><td>" . ($num1 - $num2) . "</td></tr>";

        echo "<tr><td>Multiplication:</td><td>" . ($num1 * $num2) . "</td></tr>";

        if ($num2 != 0)
        {
            echo "<tr><td>Division:</td><td>" . ($num1 / $num2) . "</td></tr>";
        }
        else
        {
            echo "<tr><td>Division:</td><td>Cannot divide by zero</td></tr>";
        }
    }
    else
    {
        echo "<script>alert('ENTER VALID NUMBERS');</script>";
    }
}
?>

    </table>

</form>

</body>
</html>
