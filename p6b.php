
<?php
$a = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

$b = array(
    array(7,8,9),
    array(4,5,6),
    array(1,2,3)
);

$m = count($a);
$n = count($a[0]);
$p = count($b);
$q = count($b[0]);

echo "m = $m, n = $n, p = $p, q = $q<br><br>";

// First matrix
echo "The first matrix:<br>";
for($row=0; $row<$m; $row++)
{
    for($col=0; $col<$n; $col++)
    {
        echo $a[$row][$col]." ";
    }
    echo "<br>";
}

// Second matrix
echo "<br>The second matrix:<br>";
for($row=0; $row<$p; $row++)
{
    for($col=0; $col<$q; $col++)
    {
        echo $b[$row][$col]." ";
    }
    echo "<br>";
}

// Transpose
echo "<br>The transpose of first matrix:<br>";
for($row=0; $row<$n; $row++)
{
    for($col=0; $col<$m; $col++)
    {
        echo $a[$col][$row]." ";
    }
    echo "<br>";
}

// Matrix addition
if($m==$p && $n==$q)
{
    echo "<br>The addition of matrices:<br>";

    for($row=0; $row<$m; $row++)
    {
        for($col=0; $col<$n; $col++)
        {
            echo ($a[$row][$col]+$b[$row][$col])." ";
        }
        echo "<br>";
    }
}

// Matrix multiplication
if($n==$p)
{
    echo "<br>The multiplication of matrices:<br>";

    $result = array();

    for($i=0; $i<$m; $i++)
    {
        for($j=0; $j<$q; $j++)
        {
            $result[$i][$j] = 0;

            for($k=0; $k<$n; $k++)
            {
                $result[$i][$j] +=
                    $a[$i][$k] * $b[$k][$j];
            }
        }
    }

    for($row=0; $row<$m; $row++)
    {
        for($col=0; $col<$q; $col++)
        {
            echo $result[$row][$col]." ";
        }
        echo "<br>";
    }
}
?>
