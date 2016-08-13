<?php
$username = $_POST["username"];
$travelarea = $_POST["travelarea"];
$count1 = $_POST["count1"];
$count2 = $_POST["count2"];
$remarks = $_POST["remarks"];

// Create connection
try {
$pdo = new PDO('mysql:host=localhost;dbname=tiner;charset=utf8','tiner','tiner');
} catch (PDOException $e) {
 exit('¥Ç©`¥¿¥Ù©`¥¹½Ó¾AÊ§”¡¡£'.$e->getMessage());
}

$stmt = $pdo -> prepare("INSERT INTO tbl_trinfo (name, count_man, count_woman, item_id, remarks) VALUES (:useruname, :count1, :count2, :item_id, :remarks)");
$stmt -> bindParam(':useruname', $username, PDO::PARAM_STR);
$stmt -> bindParam(':count1', $count1, PDO::PARAM_INT);
$stmt -> bindParam(':count2', $count2, PDO::PARAM_INT);
$stmt -> bindParam(':item_id', $travelarea, PDO::PARAM_INT);
$stmt -> bindParam(':remarks', $remarks, PDO::PARAM_STR);
$stmt -> execute();

?>

<!DOCTYPE html> 
<html>
<meta charset="UTF-8">
<body>


</body>
</html>