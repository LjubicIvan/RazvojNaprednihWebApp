<?php 

error_reporting(E_ALL ^ E_NOTICE);

$v = $_GET['id'];
$f = $_GET['funkcija'];  
 

   $client = new SoapClient("http://localhost/rnwa-main/dz4.1/phpWebServis/primjer_2/Hello.wsdl",
      array('soap_version' => SOAP_1_2,'trace' => 1 ));

 

   $return = $client->__soapCall("BAMtoEUR",array($v));
    
    
    



//EUR-BAM

   $return = $client->__soapCall("EURtoBAM",array($v));
   

#EUR-HRK
  
   $return = $client->__soapCall("EURtoHRK",array($v));
   

   $return = $client->__soapCall("HRKtoEUR",array($v));
  

if ($f == "BAMtoEUR") {     
   $return = $client->__soapCall("BAMtoEUR",array($v));
   echo("\nPretvorba ". $v . " BAM to EUR je: ".$return);

} elseif ($f == "EURtoBAM") {
  $return = $client->__soapCall("EURtoBAM",array($v));
   echo("\nPretvorba ". $v . " EUR to BAM je: ".$return);

} elseif ($f == "EURtoHRK") {
  $return = $client->__soapCall("EURtoHRK",array($v));
   echo("\nPretvorba ". $v . " EUR to HRK je: ".$return);

} elseif ($f == "HRKtoEUR") {
  $return = $client->__soapCall("HRKtoEUR",array($v));
   echo("\nPretvorba ". $v . " HRK to EUR je: ".$return);

} else {
    echo "Unesite valutu i odaberite funkciju za pretvorbe!";
}




?>




