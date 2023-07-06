 <?php
$servername = $_ENV['MYSQL_SERVERNAME']; // Server name where the app has the DB
$username = $_ENV['MYSQL_USER']; // user of the DB 
$password = $_ENV['MYSQL_PASSWORD']; // password of the DB
$dbname = $_ENV['MYSQL_DB']; // DB name 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}