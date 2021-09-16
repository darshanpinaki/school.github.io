<?php

$server="localhost";
$user="root";
$password="";
$db="darshanproject";

$con=mysqli_connect($server,$user,$password,$db);

if ($con) {
    ?>
    <script>
        alert("sucessful");
    </script>
    <?php
}else {
    ?>
    <script>
        alert("unsucessful");
    </script>
    <?php
}
if (isset($_POST['submit'])) {
    $user=$_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comments=$_POST['comments'];


    $insertquery="insert into dance( user, email, mobile, comments) values('$user', '$email', '$mobile', '$comments')";

    $query=mysqli_query($con,$insertquery);

    if ($query) {
        ?>
        <script>
            alert("sucessful");
        </script>
        <?php
    }else {
        ?>
        <script>
            alert("unsucessful");
        </script>
        <?php
    }

header('location:index.php');
}





?>