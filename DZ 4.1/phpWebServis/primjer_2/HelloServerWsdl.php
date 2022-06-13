<?php 


function hello($someone) {
   return "Hello " . $someone . "! - With WSDL";
}
function BAMtoEUR($v){
	return ($v / 1.95);
}
function EURtoBAM($v){
	return ($v * 1.95);
}
function EURtoHRK($v){
	return ($v * 7.54);
}
function HRKtoEUR($v){
	return ($v / 7.54);
}


   ini_set("soap.wsdl_cache_enabled", "0");
   $server = new SoapServer("http://localhost/rnwa-main/dz4.1/phpWebServis/primjer_2/Hello.wsdl",
      array('soap_version' => SOAP_1_2));

   $server->addFunction("BAMtoEUR");
   $server->addFunction("EURtoBAM");
   $server->addFunction("EURtoHRK");
   $server->addFunction("HRKtoEUR");
   $server->handle();

   	
?>
