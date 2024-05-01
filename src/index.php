<!DOCTYPE html>
<html>

<body>

    <?php
echo "My first PHP script!";
?>


    <?php
$servername = "db";
$username = "root";
$password = "password";


$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/php/welcome.php';
        break;
    case '' :
        require __DIR__ . '/php/welcome.php';
        break;
    case '/account' :
        require __DIR__ . '/php/account.php';
        break;
    case '/store' :
        require __DIR__ . '/php/store.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = file_get_contents(__DIR__ . "/database/init.sql");
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$sql = "SELECT * FROM test_table";
$stmt = $conn->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['name'] . "<br>";
}

$conn = null;
?>

</body>

</html>