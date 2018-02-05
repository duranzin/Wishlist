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
        <?php echo form_open('myController/newUser'); ?>
        <h1 class="title">Sign up</h1>

        <p>
            <label>User<span class="small">Insert your user</span></label>
            <input type="text" name="newuser" id="newuser" class="field" />

            <label>Password<span class="small">Insert your password</span></label>
            <input type="password" name="newpassword" id="newpassword" class="field" />
            
            <label>Email<span class="small">Insert your email</span></label>
            <input type="text" name="newemail" id="newemail" class="field" />
        </p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <br><br>
        <div>
            <center>
                <?php
                    echo form_open('myController/index');
                    echo '<button type="submit" class="enter2">Signup</button>';
                    echo form_close();
                ?>
            </center>
        </div>
        <?php 
            echo form_close(); 
        ?>
    </div>
</body>

</html>