<?php
if (isset($_POST['name']) && isset($_POST['sname'])) {
    echo "<html><body>";
    echo "First name: " . htmlspecialchars($_POST['name']) . "<br>";
    echo "Family name: " . htmlspecialchars($_POST['sname']);
    echo "</body></html>";
} else {
    ?>
    <form action="test2.php" method="post">
        <label for="name">First name:</label>
        <input type="text" name="name" id="name"><br>
        <label for="sname">Family name:</label>
        <input type="text" name="sname" id="sname"><br>
        <input type="submit" value="Send">
    </form>
    <?php
}
?>
