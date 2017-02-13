
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random dimension table</title>
</head>
<body>

<h1>Random dimension table</h1>
<?php

$rows = rand(1, 10);
$cols = rand(1, 10);
$max_color_value = pow(16, 6);
?>

<table border="1">
    <?php for ($i = 1; $i <= $rows; $i++): ?>
        <tr>
            <?php for ($j = 1; $j <= $cols; $j++):

                $color1 = dechex(rand(0, $max_color_value));
                $color2 = dechex(rand(0, $max_color_value));
                ?>
                <td style="background: -webkit-gradient(linear, left top, right top, from(#<?=$color1?>), to(#<?=$color2?>));
                           background: -webkit-linear-gradient(left, #<?=$color1?>, #<?=$color2?>);
                           background: -moz-linear-gradient(left, #<?=$color1?>, #<?=$color2?>);
                           background: -ms-linear-gradient(left, #<?=$color1?>, #<?=$color2?>);
                           background: -o-linear-gradient(left, #<?=$color1?>, #<?=$color2?>);>from #<?=$color1;?> to #<?=$color2;?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>


</body>
</html>