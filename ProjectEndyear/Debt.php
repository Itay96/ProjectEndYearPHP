<!DOCTYPE html>
<html lang="en">
<link href="style.css" rel="stylesheet"/>
<body>
<center>
<?php


$servername = ".\SQLEXPRESS";
$info = array("Database"=>"master");
$conn = sqlsrv_connect($servername,  $info);

if (isset($_POST['Debt'])){
{
$question = "select * from Debt";

}
$output = sqlsrv_query($conn,$question);
if ($output==false){
    die ("error");
}else {
    echo ("<table border=1>");
        echo ("<tr><th>מספר דירה</th><th>חוב דייר</th></tr>");

        while ($shura = sqlsrv_fetch_array($output))
        {

            echo ("<tr><td>".$shura['ApartmentNumber']. "</td><td>". $shura['ClientDebt']."</td></tr>");
        }
        echo ("</table>");
		
		
}
}
?>
<h4>סכום חוב כול הדיירים:14,600</h4>
    
</body>
</html>