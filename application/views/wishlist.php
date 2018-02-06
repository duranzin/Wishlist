
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        echo form_open('myController/showList');
        echo '<h3>Welcome: '.$user.'</h3>';
        echo '<h4>Open your Whish List:</h4>';
        echo '<button type="submit" name="user" value="'.$user.'">Open</button>';
        echo form_close();
    ?>
</body>
</html>
