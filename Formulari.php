<!DOCTYPE html>
    <head><title>Formulari i  Aplikimit</title>
     <link rel="stylesheet" href="formatizimi.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
     <script>
      function showHint(str) {
        if (str.length == 0) {
          document.getElementById("txtHint").innerHTML = "";
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "gethint.php?q=" + str, true);
          xmlhttp.send();
        }
      }
      </script>
    </head>
    <body>
       <div id="rast"><br>

            <h1>Sh.m.u. "Adem Jashari"</h1><div id="ora" style="color:grey;margin-left: 15%"></div><h3 class="veq">Jemi te paret dhe me te miret</h3>
            <div class="tre"><h2 id="HOMEPAGE"><a href="kryefaqja.html">Kryefaqja</a></h2>
            <h2 id="Historiku"><a href="historiku.html">Historiku</a></h2>
            <div class="dropdown">
            <button class="dropbtn"><h2>Stafi</h2></button>
            <div class="dropdown-content">
            <a href="mesuesit.php">Mesuesit</a>
            <a href="administrata.php">Administrata</a>
            </div>

            </div>
            <h2 id="Foto"><a href="foto.html">Foto</a></h2>
            <h2 id="Formular_Aplikimi"><a href="Formulari.php">Formular Aplikimi</a></h2>
            </div></div>

            <div class="goat1">


                <form style="padding:5% 25% 5% 25%" action="Ese.php" method="post">

                    <label>Emri :</label><br><br>
                    <input id="emri" type="text" name="emri" placeholder="Emri i juaj"><br>
                    <h5 id="Femri" name="Femri"></h5>
                    <br><br>
                    <script>
                    function validimi(){
                    var text = document.getElementById("emri").value;
                    var RegX=/[^0-9]/;
                    if(RegX.test(text)){
                      document.getElementById("Femri").innerHTML= "OK";
                    }else {
                      document.getElementById("Femri").innerHTML= "Gabim";
                      document.getElementById("emri").innerHTML="";
                    }}
                    </script>


                    <label> Mbiemri :</label><br><br>
                    <input id='mbi' type="text" name="mbi" placeholder="Mbiemri i juaj" ><br>
                    <h5 id="Fmbi" name="Fmbi"></h5>
                    <br><br><script>
                    function validimi1(){
                    var texti = document.getElementById("mbi").value;
                    var RegXe=/[^0-9]/;
                    if(RegXe.test(texti)){
                      document.getElementById("Fmbi").innerHTML= "OK";
                    }else {
                      document.getElementById("Fmbi").innerHTML= "Gabim";
                      document.getElementById("Fmbi").innerHTML="";
                    }}
                    </script>


                    <label>Emaili Kontaktues :</label><br><br>
                    <input type="email" name="email" placeholder=" Emaili juaj" ><br/>

                    <br>



                    <label> Datelindja :</label><br><br>
                    <input name="date" type="date" ><br><br>


                    <label>Vendbanimi :</label><br><br>
                    <input name="vend" type="text" onkeyup="showHint(this.value)" ><br>
                    <h4>Suggestions: <span id="txtHint"></span></h4><br>



                    <label>Shkollat Paraprake :</label><br><br>
                    <input name="shkollat" type="text" ><br>
                    <br>

                    <input type="submit" onclick="validimi();validimi1()">
                    <br><hr><br>
                    <?php include 'dbConfig.php';
                    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DBNAME);

                    if(!$conn) {
                        die("Database Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "Select count(*) from regjistrimi";

                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0) {
                      while($row = mysqli_fetch_assoc($result)) {
                            echo "Numri i Aplikimeve deri me tani:".$row['count(*)']."<br>";

                      }
                    }
                    ?>
                  </form>
                    <h1 id="moti"></h1>

            </div>
            <div class="fundi"><p><a href="#">Rikthehuni ne fillim</a></p></div><br><br>
            <div class="logimi" style="color:white;margin-left:30%">
              <h4>Ose Logohu</h4>
              <form method="post" action="validimi.php">
              USERNAME:
              <input id="USERNAME" type="text" style="width:50%" name="USERNAME"  /><br>
              PASSWORD:
              <input id="PASSWORD" type="text" style="width:50%" name="PASSWORD" /><br>
              <input type="checkbox" name="remeber" value="Mbaj Mend">Mbaj Mend </input>
              <input type="submit"><br><hr>

            <?php
            //
            if (isset($_COOKIE['USERNAME']) and isset($_COOKIE['PASSWORD'])) {
              $U=$_COOKIE['USERNAME'];
              $P=$_COOKIE['PASSWORD'];
              echo "<script>
                    document.getElementById('USERNAME').value='$U'
                    document.getElementById('PASSWORD').value='$P'
                    </script>";
            }
            ?>


    </body>
</html>
