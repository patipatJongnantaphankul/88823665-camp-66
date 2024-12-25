<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <title>ตารางสูตรคูณ</title>
    </head>

    <body>
        <h1>ตารางสูตรคูณ</h1>

        <form method="post" action="">
            <label>แม่สูตรคูณ : </label>
            <input type="number" name="number" required>
            <button type="submit">แสดงสูตรคูณ</button>
        </form>

        <?php
        if(!empty($_POST['number'])){
            $number = $_POST['number'];

            if($number > 0){
                echo "<h2>สูตรคูณแม่ $number</h2>";

                for ($i = 1; $i <= 12; $i++) {
                echo "$number x $i = ";
                echo $number * $i;
                echo "<br>";
                }

            }else{
                echo "<p style='color: red;'>ป้อนเลขที่มากกว่า 0</p>";
            }
        
        }
        ?>
    </body>
</html>
