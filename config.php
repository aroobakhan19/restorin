<?PHP
$servername = "localhost";
$username = "u143582533_hasankhan2395";
$password = "Mamoobhanja123";
$database = "u143582533_mamubhanja";
$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>