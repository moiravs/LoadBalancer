<?php
require_once dirname(__DIR__) . '/database/database.php';

echo "Store Page";
echo 'Server: ' . gethostname();

$sql = "SELECT * FROM test_table";
$stmt = $conn->query($sql);
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['name'] . "<br>";
}
?>