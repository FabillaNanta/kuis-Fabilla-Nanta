<?php

    echo "<h2>hello world!<h2>";

?>

//latihan2

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "halooo"
    ?>
    </body>
</html>

//latihan3

<?php
    $variabel1 = 1;
    $variabel2 = 1;
    $variabel3 = 1;
    $variabel4 = 1;


   echo $variabel1 = <br>;
   echo $variabel2 = <br>;
   echo $variabel3 = <br>;
   echo $variabel4 = <br>;
   
?>

//latihan4

<?php

    $alas = 1;
    $tinggi = 2;
    $luas = 3;

    echo "alas:" .$alas."<br>";
    echo "tinggi:" .$tinggi."<br>";
    echo "luas:" .$luas."<br>";

    ?>

//latihan5
<?php

    $nilai = 80;

    if($nilai > 90){
        echo "nilai A";
    }else if($nilai > 80 && $nilai <= 90){
    echo "nilai B";}

        else if($nilai > 70 && $nilai <= 80){
        echo "nilai C";}

        else if($nilai > 60 && $nilai <= 70){
        echo "nilai D";}

        else { echo "nilai E";}
        
    ?>

//latihan6

<?php

            for($i = 0; $i < 10 $i++){
                echo "oni kalimat ke ".$i"<br>";
            $i++

            }

            echo "<br>";

            $i = 0;

            while($i < 10){
                echo "ini kalimat ke ".$i.<"<br>";
            $i++

            }

         $i = 0;
            do{
               echo "ini kalimat ke ".$i."<br>";
            $i++
              }while($i < 10);
    ?>

//latihan7

<?php
$binatang = array("beruang", "singa", "macan");
echo "I like " . $binatang[0] . ", " . $binatang[1] . " and " . $binatang[2] . ".";
?>

//latihan8

<html>
<body>

<form action="welcome.php" method="post">
Jenis: <input type="text" name="jenis"><br>
Habitat: <input type="text" name="habitat"><br>
<input type="submit">
</form>

</body>
</html>

//latihan9

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
$jenis = $habitat = $spesies = $phylum = $kingdom = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $jenis = test_input($_POST["name"]);
  $habitat = test_input($_POST["email"]);
  $spesies = test_input($_POST["website"]);
  $phylum = test_input($_POST["comment"]);
  $kingdom = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Binatang</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Jenis: <input type="text" name="jenis">
  <br><br>
  Habitat: <input type="text" name="habitat">
  <br><br>
  Spesies: <input type="text" name="spesies">
  <br><br>
  Phylum: <textarea name="phylum" rows="5" cols="40"></textarea>
  <br><br>
  Kingdom:
  <input type="radio" name="kingdom" value="female">animalia
  <input type="radio" name="kingdom" value="male">Monera
  <input type="radio" name="kingdom" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $jenis;
echo "<br>";
echo $habitat;
echo "<br>";
echo $spesies;
echo "<br>";
echo $phylum;
echo "<br>";
echo $kingdom;
?>

</body>
</html>


//latihan10

<?php
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
?>



//latihan11

<?php
    $website = test_input($_POST["website"]);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL";
    }
?>



