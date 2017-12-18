<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
function font_size ($font)
{
    switch ($font) {
        case 'mazas':
            $size = '10px';
            break;
        case 'normalus':
            $size = '15px';
            break;
        case 'didelis':
            $size = '25px';
            break;
        case 'extra':
            $size = '30px';
            break;
        default:
            $size = '8px';
    }
    return $size;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <p>"But I must explain <span style=" font-size:<?php echo font_size('mazas')?>">to you how all this mistaken </span>idea of denouncing pleasure and praising pain was born and I will <span style="font-size:<?php echo font_size('normalus')?>">give you a complete account of </span>the system, and expound the actual teachings of the great explorer of the truth,<span style="font-size:<?php echo font_size('didelis')?>"> the master-builder of human happiness.</span> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, <span style="font-size:<?php echo font_size('extra')?>">but because those who do not know </span>how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"</p>
<?php
echo '<script>alert("!");</script>'; //javascript su php parasytas
?>
</body>
</html>