<?php
echo "Store Page";
echo 'Server: ' . gethostname();

$servername = "db";
$username = "root";
$password = "password";

class MyDB 


try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $initSqlRelativePath = dirname(__DIR__) . '/database/init.sql';
  $sql = file_get_contents($initSqlRelativePath);

  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


if(array_key_exists('button1', $_POST)) { 
    button1(); 
} 

function button1() { 
    echo "This is Button1 that is selected"; 
    $sql = "INSERT INTO test_table (name) VALUES ('John Poe');";
    $stmt = $conn->query($sql); 

    echo "Data inserted successfully";
    $sql = "SELECT * FROM test_table";
    $stmt = $conn->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['name'] . "<br>";

    echo "Data selected successfully";
}
} 
?>

<form method="post">
    <input type="submit" name="button1" class="button" value="Insert value in db" />
</form>

<?php



$conn = null;
?>