<html>
<body>

<?php
echo "The version of the current PHP version is: " . phpversion();
$x = 145;
$y = 400;
echo "<br><br><br><br>The sum of x and y is: " . ($x + $y);
?>


<?php
    $x = 5;
    $y = 4;

    // Basic arithmetic operations
    echo "<h2>Basic Arithmetic</h2>";
    echo "Addition of $x and $y: " . ($x + $y) . "<br>";
    echo "Subtraction of $y from $x: " . ($x - $y) . "<br>";
    echo "Multiplication of $x and $y: " . ($x * $y) . "<br>";
    echo "Division of $x by $y: " . ($x / $y) . "<br>";

    // Power and exponential calculations
    echo "<h2>Power and Exponential Functions</h2>";
    echo "$x raised to the power of $y: " . pow($x, $y) . "<br>";
    echo "Exponential of $x: " . exp($x) . "<br>";

    // Square root
    echo "<h2>Square Root</h2>";
    echo "Square root of $x: " . sqrt($x) . "<br>";

    // Trigonometric functions
    echo "<h2>Trigonometric Functions</h2>";
    echo "Sine of $x: " . sin($x) . "<br>";
    echo "Cosine of $x: " . cos($x) . "<br>";
    echo "Tangent of $x: " . tan($x) . "<br>";

    // Random number
    echo "<h2>Random Number Generation</h2>";
    echo "Random number between 1 and 100: " . rand(1, 100) . "<br>";

    // Minimum and maximum
    echo "<h2>Minimum and Maximum</h2>";
    echo "Minimum of $x and $y: " . min($x, $y) . "<br>";
    echo "Maximum of $x and $y: " . max($x, $y) . "<br>";
    ?>

</body>
</html>