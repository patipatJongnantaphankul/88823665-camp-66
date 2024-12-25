<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>เลขคู่-คี่</title>
    </head>

    <body>
        <div class="container mt-5">
            <h1>เลขคู่-เลขคี่</h1>

            <form method="post" class="mb-4">
                <div class="row mb-3">
                    <div class="col">
                        <label for="start" class="form-label">เลขตัวที่</label>
                        <input type="number" id="start" name="start" class="form-control" required>
                    </div>
                    <div class="col">
                        <label for="end" class="form-label">สิ้นสุด</label>
                        <input type="number" id="end" name="end" class="form-control" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">แสดงผล</button>
            </form>

            <?php
            $start = $_POST['start'];
            $end = $_POST['end'];
            
            if ($start > $end) {
                echo "<p style='color: red;'>ป้อนค่าที่ถูกต้องใหม่</p>";
                return;
            }
            
            echo "<h2>เลข $start ถึง $end</h2>";

            for ($i = $start; $i <= $end; $i++) {
                $temp = "เลขคี่";
                if($i % 2 == 0){
                    $temp = "เลขคู่";
                }

                echo "<p>เลข $i เป็น$temp</p>";
            }

            ?>
        </div>
    </body>
</html>
