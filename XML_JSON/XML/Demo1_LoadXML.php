<?php
$xmlString = <<<MultiLines
<?xml version="1.0" encoding="UTF-8"?>
<employees>
  <employee EmpType="Manager">
    <lastName>Leverling</lastName>
    <firstName>Janet</firstName>
  </employee>
  <employee EmpType="Sales">
    <lastName>Jeter</lastName>
    <firstName>Derek</firstName>
  </employee>
  <employee EmpType="Sales Analysist">
    <lastName>Lin</lastName>
    <firstName>Jeremy</firstName>
  </employee>
  <employee EmpType="Contact">
    <lastName>Wang</lastName>
    <firstName>Ann</firstName>
  </employee>
  <employee EmpType="Sales">
    <lastName>Buchanan</lastName>
    <firstName>Steven</firstName>
  </employee>
</employees>
MultiLines;

$doc = new DOMDocument();  
$doc->loadXML($xmlString);                 // 使用 DOMDocument(字串)的loadXML
header("Content-type: text/xml", true);
echo $doc->c14n();                         // c14n()   轉換成字串
?>
