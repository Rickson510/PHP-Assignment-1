<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task INPUT</title>
</head>
<body>
    <form action="tasksubmit.php" method="POST">
        <fieldset>
            <label for="taskName">Task Name:</label>
            <input type="text" id="taskName" name="taskName" required>
        </fieldset>
        <fieldset>
            <label for="date">Year:</label>
            <input type="text" id="date" name="date" required>
        </fieldset>
        <fieldset>
            <label for="taskDesc">Task Description:</label>
            <textarea name="taskDesc" id="taskDesc" required></textarea>
        </fieldset>
        <fieldset>
            <label for="place">Place:</label>
            <select name="place" id="place" required>
            <?php
            $db = new PDO('mysql:host=172.31.22.43;dbname=Rickson200528540','Rickson200528540', '2KOMoFPDk4');
            $sql="SELECT * FROM value";
            $sql="SELECT * FROM place";
            $cmd=$db->prepare($sql);
            $cmd->execute();
            $asa=$cmd->fetchAll();

            foreach($asa as $asaa){
                echo '<option>'. $asaa['places']. '</option>';
            }
            $db = null;
            ?>    
        </select>
        </fieldset>
        <button>Post</button>
    </form>
</body>
</html>