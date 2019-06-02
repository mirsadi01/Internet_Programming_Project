<html>
    <head>
        <title>Regjistrohu</title>
    </head>
    <body>


<?php include 'dbConfig.php';

        $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

        if(!$conn) {
            die("Database Connection failed: " . mysqli_connect_error());
        }



        $emri=mysqli_real_escape_string($conn,$_POST['emri']);
        $mbiemri=mysqli_real_escape_string($conn,$_POST['mbi']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $vendi=mysqli_real_escape_string($conn,$_POST['vend']);
        $datel=mysqli_real_escape_string($conn,$_POST['date']);
        $shkolla=mysqli_real_escape_string($conn,$_POST['shkollat']);



        $sql ="insert into regjistrimi(Rname, Rlastname, Remail,Rdatelindja,Rvendbanimi,Rshkollat) VALUES('$emri', '$mbiemri', '$email','$datel','$vendi','$shkolla')";
        $result = mysqli_query($conn, $sql);


          echo "Jeni regjistruar me sukses";

        mysqli_close($conn);
        header("refresh:5; Formulari.php");
        ?>

    </body>
  </html>
