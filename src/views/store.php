<?php
require_once dirname(__DIR__) . '/database/database.php';

echo "Store Page";
echo 'Server: ' . gethostname();

$db = Database::getInstance();
$conn = $db->getConnection();
echo $conn->getAttribute(PDO::ATTR_CONNECTION_STATUS);
global $conn;

if(array_key_exists('button1', $_POST)) { 
    button1(); 
} 

if (array_key_exists('button2', $_POST)) {
    button2();}

function button1() { 
  global $conn;
  echo "This is Button1 that is selected"; 
  $sql = "INSERT INTO test_table (name) VALUES ('John Poe');";
  $stmt = $conn->query($sql); 
} 

function button2() {
  global $conn;
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
    <input type="submit" name="button2" class="button" value="Select value from db" />
</form>

<?php



$conn = null;
?>