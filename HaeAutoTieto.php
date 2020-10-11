<?php 
  
$host='localhost'; 
$dbname='t9vaii00'; 
$username='t9vaii00'; 
$password=''; 
  
$con=mysqli_connect($host,$username,$password,$dbname); 
  
if (mysqli_connect_errno()) 
{ 
  echo "Yhteys epäonnistui" . mysqli_connect_error(); 
} 
  
$result = mysqli_query($con,"SELECT * FROM Auto"); 
echo "<table border='1'> 
<tr> 
<th>Merkki</th> 
<th>Malli</th> 
</tr>"; 
while($row = mysqli_fetch_array($result)) { 
echo "<tr>"; 
echo "<td>" . $row['Merkki'] . "</td>"; 
echo "<td>" . $row['Malli'] . "</td>"; 
echo "</tr>"; 
} 
echo "</table>"; 
  
mysqli_close($con); 
