<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Evan Trafton and Brodie Duprey">
        <meta name="description" content="Class Exercise">
        <?php
            $allowedNetIds = array('rerickso','ettrafto','baduprey');

            $netId = htmlentities($_SERVER["REMOTE_USER"], ENT_QUOTES, "UTF-8");
        
        
        ?>
    
    </head>


    <body>
        <h1>password protected</h1>
</body>
</html>