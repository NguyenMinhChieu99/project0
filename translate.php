<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translate</title>
</head>
<body>
    <form action="" method = "POST">
        Nhap tu : <input type="text" name = "TA"> <br> <br>
        <input type="submit">
    </form>
    <?php
        

        if(isset ($_POST['TA'])){
            $word = $_POST['TA'];
            $Dich = ["Red" => "Do", "Black" => "Den", "Purple" => "Tim"];
        }
        $flag = false;
        foreach($Dich as $TA => $value){
            if($TA == $word){
                echo "Nghia cua tu $word la :" . $value ;
                $flag = true;
            }
        }
    ?>
</body>
</html>