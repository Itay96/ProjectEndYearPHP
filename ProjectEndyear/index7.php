<!DOCTYPE html>
<html lang="en">
  
<head>
  <link href="style.css" rel="stylesheet"/> 
    <title>Our Last Project :)</title>
</head>
<body>
<center>
    <h1>ברוכים הבאים לניסן 36 אשקלון </h1>
        <br>
        <h4>בחרו אחת מהאופציות הבאות:</h4>  
        <br>
                  
          <form action="apartmentDetails.php" method="POST"> 
          <button type=submit name="apartmentDetails">מספר דירה+שמות הדיירים</button>
          </form>

          <form action="Debt.php" method="POST">
          <button type=submit name="Debt">חובות</button>
          </form>

          <form action="familyDetails.php" method="POST"> 
          <button type=submit name="familyDetails">דיירים ומספר דירה</button>
          </form>

          <form action="search.php" method="POST">
          <input placeholder="הכנס מספר דירה" type="text" name="apartmentDetails">
          <button type="submit" name="send"> שלח </button>
          </form>
<br><br>



</body>
</html>