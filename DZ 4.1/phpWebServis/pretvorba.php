
<!DOCTYPE html>
<html lang="en">
<body>
    <?php

    include ("HelloClientWsdl.php");
    include ("HelloServerWsdl.php");

   
   
    ?>
<br>
<a href='pretvorba.php'>Pocetna</a>
<h2>PRETVORBE</h2>

<form action="pretvorba.php"> 
    <input type="number" placeholder="Valuta" id="id" name="id" value="<?php $id ?>"><br>
    <select placeholder="Funkcija" id="funkcija" name="funkcija" value="<?php $f ?>">
    
    <option value="BAMtoEUR">BAMtoEUR</option>
    <option value="EURtoBAM">EURtoBAM</option>
    <option value="EURtoHRK">EURtoHRK</option>
    <option value="HRKtoEUR">HRKtoEUR</option>
  </select><br><br>
    <input type="submit" value="Pretvori">

    <h1>
    
    </h1>
</form>

    



    <h1></h1>



</body>
</html>

