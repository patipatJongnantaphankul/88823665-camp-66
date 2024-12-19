<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>

    <body>
        <h1>FIle index.php</h1>
        <?php
        echo "Hello World";
        echo "<br>";
        print("Hello World");
        echo "<br>";
        print_r("Hello World");
        echo "<br>";
        printf("Hello World");
        echo "<br>";
        var_dump("Hello World");
        echo "<br>";
        $myvar = "Hello World"
        ?>
        <h1><?php echo $myvar; ?></h1>
        <?php
        echo "<h1>".$myvar."</h1>";
        ?>
        <?php
        $x = 1;
        FUNction myfunction($myparam){
            global $x;
            $x = "Hello";
            return $myparam;
        }

        echo "<p>".MYFUNCTION("Hello World")."</p>";
        ?>
        <h1><?php echo $x; ?></h1>
        <?php echo "1" + '1'; ?>
        <?php
        $mychar = "a";
        ?>
        <h1><?php echo ++$mychar; ?></h1>
        <?php
        if(1 == '1'){
            echo "1 == \"1\"";
        }elseif(true){
            echo "1 != \"1\"";
        }
        if(true)
        echo "true";
        else
        if(true)
        echo "false";
        
        $my_arry = array(1,2,3,4,5);
        // sizeof(my_arry);
        for($i=0;$i<count($my_arry);$i++){
            echo $my_arry[$i];
        }
        echo "<br>";
        foreach($my_arry as $index => $value){
            echo $value;
        }    
        echo "<br>";
        $my_arry2[] = [0=>1,2,3];
        $my_arry2[] = 2;
        $my_arry2[4] = 3;
        $my_arry2[] = 4;
        $my_arry2[] = 5;
        print_r($my_arry2);
        $my_arry3 = array(1,2,3,"myindex" => 4, 0 => 9);
        $my_arry3["myindex"] = 1;
        print_r($my_arry3);
        foreach($my_arry as $value){
            echo $value;
        }
        ?>
    </body>    
</html>        