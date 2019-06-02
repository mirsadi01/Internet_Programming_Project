<!doctype html>
<html>
    <head>
        <title>Sh.M.U."Adem Jashari"
        </title>
        <link rel="stylesheet" href="formatizimi.css">

    </head>
    <body>
          <div class="radio1"><br>

            <h1>Sh.m.u. "Adem Jashari"</h1><div id="ora" style="color:grey;margin-left: 15%"></div><h3 class="veq">Jemi te paret dhe me te miret</h3>
       <div class="tre"><h2 id="HOMEPAGE"><a href="kryefaqja.html">Kryefaqja</a></h2>
            <h2 id="Historiku"><a href="historiku.html">Historiku</a></h2>
            <div class="dropdown">
                <button class="dropbtn"><h2>Stafi</h2></button>
            <div class="dropdown-content">
            <a href="mesuesit.php">Mesuesit</a>
            <a href="administrata.php">Administrata</a>
            </div>
            <a href="formulari.php">Formular Aplikimi</a>
            </div>
            <h2 id="Foto"><a href="foto.html">Foto</a></h2>
       </div>
          </div>
          <<?php include 'Stafi.php';
            class Mesuesit extends Stafi{
               public $Titull;



              public function __construct($emri, $mosha,$shkolla,$Titull) {
                $this -> emri = $emri;
                $this -> mosha = $mosha;
                $this -> shkolla = $shkolla;
                $this -> Titull = $Titull;

              }
              public function echoData() {
                echo "<br>{$this -> emri} eshte {$this -> mosha} vjeqar<br>";
                echo "Ka titullin{$this -> shkolla} Kryen funksionin {$this-> Titull}";
              }
            }


           ?>
        <div class="topi">
                    <p class="marginat"><img class="imazhi2" src="Enver-Hamiti_480x640.jpg" alt="Enver Hamiti" height="100" width="100" hspace="10" vspace="10">
                        <br>
                        Enver Hamiti
                        <br><?php
                        $arrEH=array ('Telekomunikacionet','Qarqet analoge komunikuese','Mikroval&eumlt dhe antenat');
                        $arrEH2 = array(' Anternat ',' Sistemet mikrovalore ',' Komunikimet pa tela' );
                        $str2="
                        enver.hamiti@uni-pr.edu
                        +381 38 554 896
                        M&eumlsimdh&eumln&eumls n&euml l&eumlnd&eumlt niveli Bachelor".
                        implode(" ",$arrEH).

                        "M&eumlsimdh&eumln&eumls n&euml l&eumlnd&eumlt nivelin Master".
                        implode("",$arrEH2).
                        "<br><br>";
                        echo $str2;
                        if (preg_match('/\bmaster\b/i', $str2)) {
                          	echo 'Jep mesim ne master';
                          } else {
                          	echo 'Nuk jep mesim ne master';
                          }?>
                        <?php
                        $Enver_Hamiti=new Mesuesit("Enver Hamiti","54","Inxhinier i Doktoruar","Dekan i Fakultetit");
                        $Enver_Hamiti->echoData();?>
                    </p>
                    <p class="marginat"><img class="imazhi2" src="Mimoza-Ibrani.JPG" alt="Mimoza Ibrani" height="100" width="100" hspace="10" vspace="10">
                        <br><?php
                        $arrMI = array('Fushat dhe val&eumlt elektromagnetike','Rrjetet komunikuese','Komunikimet ultra brezgj&eumlra','Metodologjia e hulumtimit shkencor');
                        $str1="Mimoza Ibrani <br>
                        FIEK
                        mimoza.ibrani@uni-pr.edu
                        +381 38 554 896

                        M&eumlsimdh&eumln&eumls n&euml l&eumlnd&eumlt:".
                        implode(" ",$arrMI).
                        "<br><br><br>";
                        echo $str1;
                        if (preg_match('/\bmaster\b/i', $str1)) {
                          	echo 'Jep mesim ne master';
                          } else {
                          	echo 'Nuk jep mesim ne master';
                          }?>
                        <?php
                        $Mimoza_Ibrani=new Mesuesit("Mimoza Ibrani","40","Inxhiniere e Doktoruar","Prodekane per qeshtje Administrative");
                        $Mimoza_Ibrani->echoData();?><br>
                    </p>
                    <p class="marginat"><img class="imazhi2" src="Vjollca-Komoni.JPG" alt="Vjollca Komoni" height="100" width="100" hspace="10" vspace="10">
                        <br><?php
                        $arrVK=array("Elektroenergjetika","Instalime elektrike","Rrjetet elektrike","urimet e rinovueshme t&euml energjis&euml");
                        $arrVK2= array(" Kabllot energjetike "," Ndri&ccedilime elektrike ");
                        $str= "Viollca Komoni<br>
                        FIEK
                        vjollca.komoni@uni-pr.edu
                        +381 38 554 896
                        M&eumlsimdh&eumln&eumls n&euml l&eumlnd&eumlt niveli Bachelor".
                        implode(" ",$arrVK).
                        "M&eumlsimdh&eumln&eumls n&euml l&eumlnd&eumlt niveli Master".
                        implode(" ",$arrVK2).
                        "<br><br>";
                        echo $str;
                        if (preg_match('/\bmaster\b/i', $str)) {
                              	echo 'Jep mesim ne master';
                              } else {
                              	echo 'Nuk jep msim ne master';
                              }
                        ?>
                        <?php
                        $Viollca_Komoni=new Mesuesit("Viollca Komoni","54","Inxhiniere e Doktoruar","Prodekane p&eumlr &ccedil&eumlshtje financiare");
                        $Viollca_Komoni->echoData();?><br>
                    </p>
            </div>




             <div class="fundi"><p><a href="#">Rikthehuni ne fillim</a></p></div><br><br>
              <form style="float:left; margin: 1% 3% 3% 3%;">
            <table>
                <tr>
                    <td>
                        <label style="color: white">Emri:</label>
                        <br>
                        <input type ="text" name="emri" size="20"/>
                    </td>

                    <td>
                        <label style="color:white"> E-mail:</label>
                        <br>
                        <input type ="email" name ="email" size="19"/>
                    </td>
                 </tr>
            </table>

            <br>
            <label style="color: white">Mesazhi:</label>
            <br>
            <textarea name="description" rows="4" cols="39"></textarea>
            <br><br>
            <input type ="submit" value="Submit"/>
            <input type="Submit" value="Reset"/>
            </form>

        <div class="dubai">
            <h3 class="perdore">Aktivitetet</h3><hr>
            <h4><a href="Blogu1.html">Pastrimi i ambientit</a></h4>
            <h4><a href="Blogu2.html">Recitali</a></h4>
            <h4><a href="Blogu3.html">Veprimtari bamirsie</a></h4>
            <h4><a href="Blogu4.html">Koncerti i 28 nentorit</a></h4>
        </div>

        <div class="kairo">
            <h3 class="perdore">Kontakti</h3><hr>
            <h4><img src="fb.png" alt="fb"/><a href="https://www.facebook.com/" target="blank"><big>Facebook</big></a></h4>
            <h4><img src="flickr.png" alt="tw"/><a href="https://twitter.com/" target="blank"><big>Twitter</big></a></h4>
            <h4><img src="twitter.png" alt="in"/><a href="https://www.flickr.com/" target="blank"><big>Flickr</big></a></h4>
        </div><br><br>

        <div class="jeta" style="color:gray;display: inline-block;" >
           <em> Te gjitha te drejtat e rezervuara</em>

    </body>
</html>
