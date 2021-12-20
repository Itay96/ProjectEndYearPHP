<!DOCTYPE html>
<html lang="en">
  
<head>
  <link href="style.css" rel="stylesheet"/>  
    <title>Our Last Project :)</title>
</head>
<body>
<center>
<br><br><br>
<h4>פרטי הבקשה שלך :</h4>
<?php
if (isset($_POST['apartmentDetails']))
{

    $servername = ".\SQLEXPRESS";
    $info = array("Database"=>"master");
    $conn = sqlsrv_connect($servername,$info);


    if( !$conn )
        {die (" בעיה בחיבור למסד הנתונים");}


    if (isset($_POST['apartmentDetails'])) 
    {
        $question =
"select FamilyName , ClientDebt, apartmentDetails.ApartmentNumber
                   from apartmentDetails inner join Debt
                   on apartmentDetails.ApartmentNumber = Debt.ApartmentNumber

                   where apartmentDetails.ApartmentNumber = ". $_POST['apartmentDetails'];
    }

    $output = sqlsrv_query($conn, $question);

            if ($output==false) 
        {die ("problem...."); }
    else
    {

        echo ("<table border=1>");
        echo ("<tr><th>משפחה</th><th>חוב</th><th>מספר דירה</th></tr>");

        while ($shura = sqlsrv_fetch_array($output)) 
        {

            echo ("<tr><td>".$shura['FamilyName']. "</td><td>".$shura['ClientDebt']."</td><td>".$shura['ApartmentNumber']."</td></tr>");
        }
        echo ("</table>");
    }

}
?>




</body>
</html>