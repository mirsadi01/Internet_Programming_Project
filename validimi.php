<?php include 'dbConfig.php';
$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);


    if ( isset( $_POST['USERNAME'] ) && isset( $_POST['PASSWORD'] ) ) {
        $Useri=$_POST['USERNAME'];
        $passi=$_POST['PASSWORD'];

        $sql6 ="Select *  from users where USERNAME='$Useri'and Upassword='$passi'";
        $result = mysqli_query($conn, $sql6);

        if(mysqli_num_rows($result) > 0) {
           if (isset($_POST['remeber'])) {
             setcookie('USERNAME',$Useri,time()+60*60*7);
             setcookie('PASSWORD',$passi,time()+60*60*7);
          }
          session_start();
          $row=mysqli_fetch_assoc($result);
          $_SESSION['user_id'] = 1;
        header("location:admin/index.php");
       }
      else {
        echo "<script>alert'Gabim'</script>";
        header("location:formulari.php");
      }

    }


 ?>
