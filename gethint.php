<?php
// Array with names
$a[] = "Prishtine";
$a[] = "Ferizaj";
$a[] = "Prizren";
$a[] = "Mitrovice";
$a[] = "Gjakove";
$a[] = "Gjilan";
$a[] = "Hani i Elezit";
$a[] = "Kacanik";
$a[] = "Viti";
$a[] = "Dragash";
$a[] = "Kamenice";
$a[] = "Peje";
$a[] = "Lipjan";
$a[] = "Podujev";
$a[] = "Deqan";
$a[] = "Junik";
$a[] = "Leposaviq";
$a[] = "Zubin Potok";
$a[] = "Rahovec";
$a[] = "Suharek";
$a[] = "Skenderaj";
$a[] = "Shtime";
$a[] = "Kline";
$a[] = "Kllokot";
$a[] = "Ranillug";
$a[] = "Partesh";
$a[] = "Obiliq";
$a[] = "Fushe Kosove";
$a[] = "Mamushe";
$a[] = "Novoberd";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
