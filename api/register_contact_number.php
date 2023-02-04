<?php
     session_start();
     include './connection.php';




if(isset($_POST['contact_number'])){
    


 $contact_number = mysqli_real_escape_string($connection, $_POST['contact_number']);
$query = "INSERT INTO `user` (`id`, `first_name`, `last_name`, `contact_number`, `account_creation_time`) VALUES (NULL, NULL, NULL, {$contact_number}, CURRENT_TIMESTAMP);";


if(mysqli_query($connection,$query)){
echo " contact number : ".$_POST['contact_number']. " inserted";
}else{
echo "data insertion denied ";
}



}else{
    echo " Invalid method ";
}






    //  $query_verify = "SELECT * FROM `users` where id='{$user_id}'";

    //  $result_verify = mysqli_query($connection,$query_verify);

    //  while($row = mysqli_fetch_assoc($result_verify)){
    //  $password = $row['key_'];
    //  if ($password === $value && $value) {
    //  echo $row['first_name'].' '.$row['last_name'];
    //  echo $row['img'];
    //  }
    //  }
?>


