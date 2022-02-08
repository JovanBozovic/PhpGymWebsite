<?php
// error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(isset($_POST['Obrada'])){
// $id = $_POST['id'];
// $nizDaBudeAdmin=$_POST["nizDaBudeAdmin"];
// $nizDaNeBudeAdmin=$_POST["nizDaNeBudeAdmin"];
// echo "asdasddas";

$data1 = json_decode(stripslashes($_GET['nizDaBudeAdmin']));
$data2 = json_decode(stripslashes($_GET['nizDaNeBudeAdmin']));

$niz1="";
$niz2="";
foreach ($data1 as $key) {
  $niz1.=$key.",";
}

substr_replace($niz1 ,"", -1);

foreach ($data2 as $key) {
  $niz2.=$key.",";
}
substr_replace($niz2 ,"", -1);
        echo "asdasd";
require_once "connection.php";
if (!empty($niz1)) {
  foreach ($data1 as $value) {
    // code...
    try {
      $sqlDaBudeAdmin="UPDATE korisnik SET is_admin=1 WHERE korisnik_id=$value";
      $conn->query($sqlDaBudeAdmin);
      echo "uspesno";
    } catch (\Exception $e) {
        echo "$e";
    }
        echo "asdasd";
  }
  // code...

}
if (!empty($niz2)) {
  // code...
  $sqlDaNeBudeAdmin="UPDATE korisnik SET is_admin=0 WHERE korisnik_id IN (".$niz2.")";
  $conn->query($sqlDaNeBudeAdmin);
}
}
 ?>
