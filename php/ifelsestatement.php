<!DOCTYPE html>
<html lang="en">
<head>
    <title>Age comformation</title>
</head>
<body>
    <h2>Simple age conformation</h2>
    <form method="post">
    <label>enter the Age</label>
    <input type="number" name="num1" required>
    <br>
    <button type="submit" name="num">submit</button>
    </form>
    

    <?php
    if(isset($_POST['num'])){

    $age=$_POST['num1'];

    if($age<=10)
    {
        echo "he/she is a child";
    }
    elseif($age>=11 && $age<=30)
    {
        echo" he/she is matured";
    }
    elseif( $age>=31 && $age<=70 )
    {
        echo"he is a old man ";
    }
    else{
        echo "he is no more";
    }
    }
    ?>
    
</body>
</html>