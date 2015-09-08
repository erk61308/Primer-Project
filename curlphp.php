<?php

$ch = curl_init("http://www.csun.edu/");
$fp = fopen("php_curl_output.txt", "w");

curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
fclose($fp);

$txtFile = file_get_contents('php_curl_output.txt');
echo $txtFile;
?>

<html class="htmlbody">
  <head>
   <title>CGI-Action</title>
    <link rel="stylesheet" type="text/css" href="pp.css">
  </head>

  <body class="htmlbody">

    <div class="npage">
     <h1 class="titleHead">PHP SCRIPT HAS FINISHED RUNNING!</h1>
     <h2 class="subtitleHead"> www.csun.edu HTML written to current directory. </h2>
     <h3 class="subtitle1Head">Filename: php_curl_output.txt </h3>

   </div>
  </body>
</html>
