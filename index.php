<?php

require ('avatarClass.php');
require ('SvgRendererClass.php');

$grille= new Avatar (10, ['red', 'green', 'blue', 'yellow']);
$grille->display();

$svg= new SvgRenderer ($grille);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<svg width="800" height="800" version="1.1" xmlns="http://www.w3.org/2000/svg">
<?php echo ($svg->render()); ?>
</svg>
</body>
</html>

