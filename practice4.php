?php
$num = isset($_POST['size']) ? intval($_POST['size']) : 1; // replace 1 with your default number

echo "<table border='1'>";
echo "<tr><th></th>";
for ($i = 1; $i <= $num; $i++) {
    echo "<th>" . $i . "</th>";
}
echo "</tr>";
for ($i = 1; $i <= $num; $i++) {
    echo "<tr>";
    echo "<th>" . $i . "</th>";
    for ($j = 1; $j <= $num; $j++) {
        echo "<td>" . $i * $j . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>