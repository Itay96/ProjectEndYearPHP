<!DOCTYPE html>
<html lang="en">
<link href="style.css" rel="stylesheet"/>
<body>
<center>
<?php


$servername = ".\SQLEXPRESS";
$info = array("Database"=>"master");
$conn = sqlsrv_connect($servername,  $info);

if (isset($_POST['apartmentDetails'])){
{
$question = "select * from apartmentDetails";

}
$output = sqlsrv_query($conn,$question);
if ($output==false){
    die ("error");
}else {
    echo ("<table border=1>");
        echo ("<tr><th>משפחה</th><th>מספר דירה</th></tr>");

        while ($shura = sqlsrv_fetch_array($output))
        {

            echo ("<tr><td>".$shura['FamilyName']. "</td><td>". $shura['ApartmentNumber']."</td></tr>");
        }
        echo ("</table>");
}
}
?>
    
</body>
</html>