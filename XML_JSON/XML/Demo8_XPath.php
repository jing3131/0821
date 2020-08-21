<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>PHP Sample</title>
</head>
<body>
<?php
$doc = new DOMDocument();
$doc->Load('employees.xml');
$xpath = new DOMXPath($doc);           // 使用XPath物件來呼叫query方法
$entries = $xpath->query("/employees/employee/@EmpType");      // <employees><employee EmpType=""> -> @屬性
foreach ($entries as $entry) 
{
   echo "結果：" . $entry->nodeValue . "<br>";     // nodeValue 節點的值
}
?>

</body>
</html>
