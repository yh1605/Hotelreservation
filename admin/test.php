<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="date" name="date1">
        <input type="date" name="date2">
        <input type="submit" value="submit" name="submit">
    </form> 
    <?php
        if(isset($_POST['submit'])){
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];

            $date1=date_create($date1);
            $date2=date_create($date2);
            $diff=date_diff($date1, $date2);
            $total = $diff->format('%a');

            echo $total;
        }
    ?>
</body>
</html>