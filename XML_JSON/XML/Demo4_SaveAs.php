<?php
$doc = new DOMDocument();
$doc->load("employees.xml");
$doc->save("desktop/employees_bak.xml");       // 可以輸出成檔案
echo "<br>-- Done --";
?>
