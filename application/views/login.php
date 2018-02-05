<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="StyleSheet" href="<?=base_url();?>css/estilos.css" type="text/css" />
</head>

<body>
    <div id="box2">
        <br />
        <?php echo form_open('myController/isLogin'); ?>
        <h1 class="title">Login</h1>

        <p>
            <label>User<span class="small">Insert your user</span></label>
            <input type="text" name="user_id" id="user_id" class="field" />

            <label>Password<span class="small">Insert your password</span></label>
            <input type="password" name="password" id="password" class="field" />
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>

        <div id="enter">
            
            <center>
                <button type="submit" class="enter">Enter</button>
            </center>
        </div>
        <br>
        <div class="error">
            <?php if (isset($error))
                echo $error;
                echo form_close(); 
            ?>
        </div>
    </div>
</body>

</html>