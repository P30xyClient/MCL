<?php
              
if(isset($_POST['requestdata']))
{
$data=$_POST['requestdata'];
$fp = fopen('request.txt', 'a');
fwrite($fp, $request);
fclose($fp);
}
?>