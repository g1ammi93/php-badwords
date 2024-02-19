<?php 

$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

$censored_paragraph = str_replace($badword, '***', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Paragrafo originale</h3>
<p><?php echo $paragraph ?></p>
<em>Il paragrafo originale è lungo <strong><?php echo mb_strlen($paragraph) ?></strong> caratteri</em>


<h3>Paragrafo censurato</h3>
<p><?php echo $censored_paragraph ?></p>
<em>Il paragrafo originale è lungo <strong><?php echo mb_strlen($censored_paragraph) ?></strong> caratteri</em>
</body>
</html>