$num = 5; // replace 5 with your input number

echo "<table border='1'>";
for ($i = 1; $i <= $num; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $num; $j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
