<?php
$host = "127.0.0.1"; 
$user = "root"; 
$password = ""; 
$dbname = "vuedb"; 
$id = '';
$con = mysqli_connect($host, $user, $password,$dbname);

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
//$input = json_decode(file_get_contents('php://input'),true);


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


switch ($method) {
    case 'GET':
      $id = $_GET['id'];
      $sql = "select * from complains".($id?" where id=$id":''); 
      break;
    case 'POST':
      $name = $_POST["name"];
      $roomNo = $_POST["roomNumber"];
      $type = $_POST["type"];
      $discription = $_POST["description"];

      $sql = "insert into complains (name, roomNo, type, discription) values ('$name', '$roomNo', '$type', '$discription')"; 
      break;
}

// run SQL statement
$result = mysqli_query($con,$sql);

// die if SQL statement failed
if (!$result) {
  http_response_code(404);
  die(mysqli_error($con));
}

if ($method == 'GET') {
    if (!$id) echo '[';
    for ($i=0 ; $i<mysqli_num_rows($result) ; $i++) {
      echo ($i>0?',':'').json_encode(mysqli_fetch_object($result));
    }
    if (!$id) echo ']';
  } elseif ($method == 'POST') {
    echo json_encode($result);
  } else {
    echo mysqli_affected_rows($con);
  }

$con->close();