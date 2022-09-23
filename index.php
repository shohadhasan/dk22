<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lopdding </h1>
    <?php
require("simple_html_dom.php");
$html = file_get_html("https://www.popvortex.com/music/charts/top-100-songs.php");
// echo $html->find('div#chart-position-1',0)->innertext;
echo count($html->find('img'))." image found on page.";
echo "<br/><br>Finding alt of image on this page </b><br/>";
$countimg=1;
echo "<table border='1' style='border-collapse: collapse'>";
echo "<tr><th>image link</th> <th>alt value</th><tr>";
foreach($html->find('img') as $element){
    if ($element->alt=='') {
        $element->alt="n/a";
    }
    echo '<tr><td>'.$countimg. ': '.$element->src. '</td>';
    echo '<td>'.$element->alt . '</td></tr>';
    
    $countimg++;
}
echo '</table>';


// new 1

echo count($html->find('p.chart-position'))." id found on page.";
echo "<br/><br>Finding alt of id on this page </b><br/>";

echo "<table border='1' style='border-collapse: collapse'>";
echo "<tr><th>id</th> <th>alt value</th><tr>";
foreach($html->find('p.chart-position') as $element){
    echo '<tr><td>'.$element->plaintext.'</td></tr>';
 
 
}
echo '</table>';

// strong


echo count($html->find('ul'))." strong found on page.";
echo "<br/><br>Finding alt of strong on this page </b><br/>";

echo "<table border='1' style='border-collapse: collapse'>";
echo "<tr><th>grenr</th> <th>alt value</th><tr>";
foreach($html->find('ul') as $element){
    echo '<tr><td>'.$element->plaintext.'</td></tr>';
 
 
}
echo '</table>';


// amoajon

echo count($html->find('a.buy-button'))." buy found on page.";
echo "<br/><br>Finding a.buy-button of a.buy-button on this page </b><br/>";

echo "<table border='1' style='border-collapse: collapse'>";
echo "<tr><th>buy</th> <th>alt value</th><tr>";
foreach($html->find('a.buy-button') as $element){
    echo '<tr><td>'.$element->plaintext.'</td></tr>';
 
 
}
echo '</table>';


// amazon


echo count($html->find('a.amazon-buy'))." amazon found on page.";
echo "<br/><br>Finding  amazon-button of a.buy-button on this page </b><br/>";

echo "<table border='1' style='border-collapse: collapse'>";
echo "<tr><th>amazon</th> <th>alt value</th><tr>";
foreach($html->find('a.amazon-buy') as $element){
    echo '<tr><td>'.$element->plaintext.'</td></tr>';
 
 
}
echo '</table>';



// song link 




echo count($html->find('audio source'))." image found on page.";
echo "<br/><br>Finding alt of image on this page </b><br/>";
$countimg=1;
echo "<table border='1' style='border-collapse: collapse'>";
echo "<tr><th>image link</th> <th>alt value</th><tr>";
foreach($html->find('audio source') as $element){
    if ($element->alt=='') {
        $element->alt="n/a";
    }
    echo '<tr><td>'.$countimg. ': '.$element->src. '</td>';
    echo '<td>'.$element->alt . '</td></tr>';
    
    $countimg++;
}
echo '</table>';












?>
</body>
</html>