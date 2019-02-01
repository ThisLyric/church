<?php
  $conn = mysqli_connect("localhost", "ybkandroid", "1234qwer", "ybkandroid");
  $userID = $_POST["userID"];
  $userPassword=$_POST["userPassword"];
  $userName = $_POST["userName"];
  $userAge = $_POST["userAge"];

  $statement = mysqli_prepare($conn, "INSERT INTO USER VALUES (?,?,?,?)");
  mysqli_stmt_bind_parm($statement, "sssi", $userID, $userPassword, $userName, $userAge);
  mysqli_stmt_execute($statement);

  $response = array();
  $response["success"] = true;

  echo json_encode($response);
?>
