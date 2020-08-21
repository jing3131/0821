<?php
$doc = new DOMDocument("1.0", "utf-8");
$root = $doc->createElement("HTML");            // createElement 生產方法
$root2 = $doc->createElement("CSS");
$doc->appendChild($root);                       // 根節點
$root->appendChild($root2);                     // 根節點掛子結點
echo htmlspecialchars($doc->c14n());            // <HTML><CSS></CSS></HTML>
?>
