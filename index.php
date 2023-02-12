<?php
    $cookie_name1 ="num";
    $cookie_value1 ="";
    $cookie_name2 ="op";
    $cookie_value2 ="num";

    if(isset($_POST['num']))
    {
        $num = $_POST['input'].$_POST['num'];
    }
    else{
        $num = "";
    }
        if(isset($_POST['op']))
    {
        $cookie_value1 = $_POST['input'];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");


        $cookie_value2 = $_POST['op'];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
        $num="";
    }

    if(isset($_POST['equal']))
    {
        $num = $_POST['input'];
        switch($_COOKIE['op'])
        {
            case "+":
                $result = $_COOKIE['num']+$num;
                break;

            case "-":
            $result = $_COOKIE['num']-$num;
            break;

            case "*":
                $result = $_COOKIE['num']*$num;
                break;

            case "/":
                $result = $_COOKIE['num']/$num;
                break;
        }

        $num = $result;
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Modify-calculator</title> 


    <style>

body{
    background-color: aquamarine;
}
    
    
.calc {
    margin: 120px auto;
    width: 300px;
    height: 500px;
    border: 0 solid #000;
    border-radius: 20px;
    background: #000;
    color: #fff;
    font-family: Arial;
    padding: 18px;
    box-shadow: 4px 4px 4px #4f4f4f;
}


/* .maininput {
    width: 280px;
    height: 130px;
    padding: 10px;
    display: grid;
    justify-items: end;
    align-items: end;
    margin-bottom: 25px;
    background: #fff;
    
} */

.maininput {
    font-size: 80px;
    background-color: #000;
    border: 1px solid #4f4f4f;
    height: 155px;
    width: 100%;
    color: white;
}

.numbtn {
    padding: 30px 30px;
    border-radius: 50px;
}

.calbtn {
    padding: 30px 30px;
    border-radius: 50px;
}

.c {
    padding: 30px 30px;
    border-radius: 50px;
}

.equal {
    padding: 30px 30px;
    border-radius: 50px;
}


    </style>

</head>
<body>
    <div class="calc">
        <form action="" method="post">
            <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"> <br> <br>
            <input type="submit" class="numbtn" name="num" value="7">
            <input type="submit" class="numbtn" name="num" value="8">
            <input type="submit" class="numbtn" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="+"> <br>

            <input type="submit" class="numbtn" name="num" value="4">
            <input type="submit" class="numbtn" name="num" value="5">
            <input type="submit" class="numbtn" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="-"> <br>

            <input type="submit" class="numbtn" name="num" value="1">
            <input type="submit" class="numbtn" name="num" value="2">
            <input type="submit" class="numbtn" name="num" value="3">
            <input type="submit" class="numbtn" name="op" value="*"> <br>

            <input type="submit" class="c" name="num" value="c">
            <input type="submit" class="numbtn" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="op" value="/">

        </form>
    </div>
</body>
</html>