<?php
include 'db.php';
$sql = "select * from grades";
$result = $conn-> query($sql);
while($row = $result -> fetch_assoc()) {
    //get rid of error msg??
    // if ($_GET['id']== undefined){}
    if(isset($_GET['id'])) {
 if ($row['id'] == $_GET['id']){
        echo '<form action="update.php" method="POST">';
        echo '<td><input type="text" name="name" value="' .$row['name'].'"></td>';
        echo '<td><input type="number" name="score" value="' .$row['score'].'"></td>';
        echo '<td><button type="submit">Save</button></td>';
        echo '<input type="hidden" name="id" value="' .$row['id'].'">';
        echo '</form>';
 }
    } else {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['score'] . "</td>";
        echo '<td><a href="index.php?id=' . $row['id'] . '" role="button">Update</a></td>';
        echo '<td><a href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
        echo "</tr>";
    }
}
$conn -> close();
?>