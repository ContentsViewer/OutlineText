<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Style.css" />
</head>


<body>

<?php
    include "OutlineText.php";

    OutlineText::Init();


    $text = htmlspecialchars (file_get_contents("Sample.content"));


    echo "<pre>";

    echo $text;

    echo "</pre>";




    echo OutlineText::Decode($text);


?>

</body>

</html>