<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM 'crud' WHERE id= LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
 ?>