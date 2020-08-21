<!DOCTYPE HTML>
<html lang="zh-TW">
<head>
<meta charset="utf-8">
<title>PHP Sample</title>
</head>
<body>
<?php
$doc = new DOMDocument();
$doc->preserveWhiteSpace=false;
$doc->load("employees.xml");

// 找出標籤名稱為 employee 的元素
$employeeNodeList = $doc->getElementsByTagName("employee");
foreach ($employeeNodeList as $node)
{
	echo $node->getAttribute("EmpType") .  "<br>";			// setAttribute 設立屬性
	// echo $node->firstChild->nodeName . " : " .
	// $node->firstChild->nodeValue .  "<br>";

	for($i=0;$i<$node->childNodes->length;$i++){			// $node->childNodes[$i]  指向節點個子節點
		echo $node->childNodes[$i]->nodeName . " : " .
		$node->childNodes[$i]->nodeValue .  "<br>";
	}


	// echo $node->lastChild->nodeName . " : " .
	// $node->lastChild->nodeValue .  "<HR>";
}
?>

</body>
</html>
