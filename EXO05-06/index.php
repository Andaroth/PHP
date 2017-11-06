<!DOCTYPE html>
<?php
$note = rand(0,20);
switch(true) {
    case ($note <= 3 ): $output= "Note : ".$note.", nul ! Tu pues ! <br/>"; break;
    case ($note <= 9 ): $output= "Note : ".$note.", c'est vraiment pas terrible ! <br/>"; break;
    case ($note == 10 ): $output= "Note : ".$note.", limite ! <br/>"; break;
    case ($note <= 14 ): $output= "Note : ".$note.", c'est pas mal. <br/>"; break;
    case ($note <= 18 ): $output= "Note : ".$note.", bravo, c'est bien ! <br/>"; break;
    case ($note <= 20 ): $output= "Note : ".$note." ! Je t'avais vu tricher mais j'ai rien dit. <br/>"; break;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EXO05</title>
</head>
<body>
    <?php echo "<h2>".$output."</h2>"; ?>
</body>
</html>