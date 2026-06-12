<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>งานที่ 1 พิมพ์ชนก อ่อนสุวรรณ์ BIT.2/5 เลขที่35 </h1>

    <div>
        
    <a href="index.php">For Loop</a>

    <form action="">
        
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])) {
            $num = $_GET ["num"];

            echo "สูตรคูณแม่" . $num . "<br>";

            $i = 1;
            while ($i <= 12) {
                echo $num . "x" . $i . "=" . ($num * $i) . "<br>";
                $i++;
            }
        }
    ?>
    </div>

</body>
</html>