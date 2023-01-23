<?php
require_once 'includes/database.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $rowCount = mysqli_num_rows($result);

    if ($rowCount > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['username'] . "<br>";   // Afficher le BDD de username
        }
    } else {
        echo "No results found";
    }
    ?>
</body>

</html>