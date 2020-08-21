<?php
$xmlString = '<employees>
                   <employee EmpType="SalesManager">
                     <lastName>Cashman</lastName>
                     <firstName>Briant</firstName>
                   </employee>
                   <employee EmpType="Manager">
                     <lastName>GanDon</lastName>
                     <firstName>LoBuan</firstName>
                   </employee>
                 </employees>';
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;
$doc->loadXML($xmlString);
$root = $doc->documentElement;          // 讓$root為文件元素
$root->setAttribute("id", "001");       // setAttribute(新增屬性名稱,內容)

$xpath = new DOMXPath($doc);
$entries = $xpath->query("/employees/employee[2]/lastName"); 
$entries[0]->nodeValue = "Cashman 2"; 

$entries = $xpath->query("/employees/@id");    // 找到屬性名稱
$entries[0]->nodeValue = "002";                                     // ndoeValue(內容)   修改值

$entries = $xpath->query("/employees/employee[1]/firstName"); 
$entries[0]->parentNode->removeChild($entries[0]);                  // 刪除

header("Content-type: text/xml", true);
echo $doc->saveXML();
?>
