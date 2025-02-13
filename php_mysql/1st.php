<?php
$a = 10;
$b = 20;
$c = $a + $b;  // Fixed missing semicolon

if ($c > 50) {
    echo "too high";
} else {
    echo "too low";
}
echo "<br>";
echo "value of a+b".$a+$b;
?>

<h3>HTML content <?php echo "content"; ?></h3>

<?php
echo "php content";

// You can uncomment and use constants like this if needed
// define('M','Hello ww',true);
// echo M;

const S = "Hello S";
echo S;
echo "<br>";

// Now starting the for loop
for ($i = 0; $i < 10; $i++) {
    echo "<br>"; // Line break for each iteration
    echo '<input type="text" value="' . $i . '" />'; // Correct output of input field with $i as value
}
?>
