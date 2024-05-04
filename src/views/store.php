<?php
require_once dirname(__DIR__) . '/database/database.php';

echo "Store Page\n";
echo 'Server: ' . gethostname() . "\n";

$db = Database::getInstance();
$conn = $db->getConnection();
global $conn;

if(array_key_exists('button1', $_POST)) { 
    button1(); 
} 

if (array_key_exists('button2', $_POST)) {
    button2();}

function button1() { 
  global $conn;
  echo "This is Button1 that is selected\n"; 
  $sql = "INSERT INTO test_table (name) VALUES ('John Poe');";
  $stmt = $conn->query($sql); 
  echo "Data inserted successfully\n";
} 

function button2() {
  global $conn;
  $sql = "SELECT * FROM test_table";
  $stmt = $conn->query($sql);

  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['name'] . "<br>" . "\n";

    echo "Data selected successfully\n";
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