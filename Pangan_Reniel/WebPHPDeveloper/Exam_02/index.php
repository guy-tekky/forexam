<?php

$newfile = fopen("hello_there.php", "w") or die("Unable to open file!");
$txt = "<?php\n
// This is a comment\n
echo 'This is a test page!';
echo 'Exam number two!';\n
// This is the end of a comment";

fwrite($newfile, $txt);
fclose($newfile);

?>