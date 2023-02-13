<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submit</title>
</head>
<body>
    <?php
    $taskName = $_POST['taskName'];
    $date = $_POST['date'];
    $taskDesc=$_POST['taskDesc'];
    $ok = true;

    if(empty($taskName)){
        echo'<p class="error">Task Name is empty.</p>';
        $ok = false;
    }
    
    if(empty($date)){
        echo'<p class="error">Date is empty.</p>';
        $ok = false;
    }
    
    if(empty($taskDesc)){
        echo'<p class="error">Task Description is empty.</p>';
        $ok = false;
    }
    if($ok == true){
        $db = new PDO('mysql:host=172.31.22.43;dbname=Rickson200528540','Rickson200528540', '2KOMoFPDk4');
        $sql = "INSERT INTO value (taskName, date,taskdesc) VALUES(:taskName, :date, :taskDesc);";
        $cmd = $db->prepare($sql);
        $cmd->bindParam(':taskName', $taskName, PDO::PARAM_STR, 100);
        $cmd->bindParam(':date', $date, PDO::PARAM_INT);
        $cmd->bindParam(':taskDesc', $taskDesc, PDO::PARAM_STR, 100);
        $cmd->execute();
        $db = null;
        echo 'Task has been saved.';
    }
    ?>
</body>
</html>