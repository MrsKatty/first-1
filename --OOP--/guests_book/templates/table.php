<?php

echo "<table class = 'table'>";

foreach ($table as $row) {
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>$value</td>";
    }
    echo "<td><a href='?action=del&id=$row[id]'>delete</a></td>";
    echo "</tr>";
}

echo "</table>";
?>

<form action="?action=add" method="POST" class="form">
    <textarea name="text" id="" cols="30" rows="10"></textarea>
    <input type="text" name="name" value="name">
    <input type="submit" value="ok">
</form>