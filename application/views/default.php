<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="StyleSheet" href="<?=base_url();?>css/estilos.css" type="text/css" />
</head>

<body>
    <?php
    
    if(isset($user)){
        echo form_open('myController/goWishlist');
        echo '<h3>Welcome: '.$user.'</h3>';
        echo '<h4>Go to your Whish List:</h4>';
        echo '<button type="submit" name="user" value="'.$user.'">View</button>';
        echo form_close();
    }
    else{
        echo '<h3>To use this web-application, please log-in or register yourself!</h3>';
        echo form_open('myController/goLogin');
        echo '<button type="submit">Login</button>';
        echo form_close();
        echo '<br>';
        echo form_open('myController/goSignup');
        echo '<button type="submit">Sign-up</button>';
        echo form_close();
    }
    if (isset($error)){
        echo $error;
        echo form_close(); 
    }
    ?>
    <div id="box1">
        <br />
        <h1 class="title">Our Products:</h1>
        <br/>

        <p>
            <?php
                if(isset($products) && !isset($user)){
                    echo "<table><tr><td>Name</td><td>Description</td><td>Price</td><td>Picture</td></tr>";
                    foreach($products as $p){
                        echo '<tr><td>'.$p->getName().'</td><td>'.$p->getDescription().'</td><td>'.$p->getPrice().'</td><td><img src='.base_url().'img/'.$p->getImg().' class="picture"></td></tr>';
                    }
                    echo "</table>";
                }
                if(isset($user)){
                    $cont=1;
                    echo "<table><tr><td>Name</td><td>Description</td><td>Price</td><td>Picture</td></tr>";
                    foreach($products as $p){
                        echo '<tr><td>'.$p->getName().'</td><td>'.$p->getDescription().'</td><td>'.$p->getPrice().'</td><td><img src='.base_url().'img/'.$p->getImg().' class="picture"></td>';
                        echo '<td>';
                        echo form_open('myController/addToList');
                        echo '<input type="hidden" name="user" value="' . $user . '" />';
                        echo '<button type="submit" name="prod" value="'.$cont.'">Add to wish-list</button>';
                        echo form_close();
                        echo '</td></tr>';
                        $cont++;
                        
                    }
                    echo "</table>";
                }
                
            ?>
        </p>
        
        
    </div>
</body>

</html>