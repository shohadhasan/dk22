<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>api</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php
require("simple_html_dom.php");
$html = file_get_html("http://localhost/xampp/web%20sraping/index.php");
echo $html->find('td.image',0)->plaintext;









?>
</body>
</html>