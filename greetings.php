<html>
<head>
    <title>Greetings Form</title>
</head>
<body>
    <?php if(!empty($_POST['name'])){
            echo "Greetings {$_POST['name']}, welcome";
        }
    ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post" >
    Enter your name: <input type="text" name="name" />
    <input type="submit" />
</form>
</body>
</html>
        
