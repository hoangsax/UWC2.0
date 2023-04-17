
<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    //Create connection
    $conn = mysqli_connect($servername, $username, $password);

    //Check connection
    if (!$conn){
        die('Not connected:'. mysqli_error($conn));
    }

    //Select Database
    $db = mysqli_select_db($conn,'uwc2.0');
        $ID = $_POST['ID'];
        $name = $_POST['name'];
        $CMND = $_POST['CMND'];
        $email = $_POST['email'];
        $tel = $_POST['phone'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $role = $_POST['role'];
        $sql = "INSERT INTO `user` (`ID`, `name`, `CMND`, `email`, `tel`, `password`, `address`, `gender`, `role`) VALUES (NULL, '$name', '$CMND', '$email', '$tel', '$password', '$address', '$gender', '$role')";
        mysqli_query($conn, $sql);
    header('Location: ../UI_DashBoard.php');
?>