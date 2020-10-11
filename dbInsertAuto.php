 $host='localhost'; 
 $dbname='t9vaii00'; 
 $username='t9vaii00'; 
 $password=''; 
  
 $con=mysqli_connect($host,$username,$password,$dbname); 
  
 if (mysqli_connect_errno()) 
 { 
  echo "Yhteys epäonnistui" . mysqli_connect_error(); 
 } 
  
 $Merkki=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'merkki',FILTER_SANITIZE_STRING)); 
 $Malli=mysqli_real_escape_string($con, 
  filter_input(INPUT_POST,'malli',FILTER_SANITIZE_STRING)); 
 $Väri=mysqli_real_escape_string($con,$_POST['väri']); 
 $Vuosimalli=mysqli_real_escape_string($con,$_POST['vm']); 
 $Rekisteritunnus=mysqli_real_escape_string($con,$_POST['rek']);
 $idVuokraus=mysqli_real_escape_string($con,$_POST['id']);
  
 $sql="INSERT INTO Auto (Merkki, Malli, Väri, Vuosimalli, Rekisteritunnus, idVuokraus) " 
  . "VALUES ('$Merkki','$Malli','$Väri','$Vuosimalli','$Rekisteritunnus','$idVuokraus')"; 
 // Tässä voi kutsua myös aliohjelmaa, esim. 
 /*$sql="CALL LisaaTekija('$etunimi','$sukunimi')"; */ 
 //$sql="INSERT INTO Tekija (Etunimi, Sukunimi) VALUES ('$etunimi','$sukunimi')"; 
 if (!mysqli_query($con, $sql)){ 
  die('Error: ' . mysqli_error($con)); 
 } 
 echo "1 record added"; 
 mysqli_close($con); 
