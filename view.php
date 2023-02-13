<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php 
    $db = new PDO('mysql:host=172.31.22.43;dbname=Rickson200528540','Rickson200528540', '2KOMoFPDk4');
    $sql="SELECT * FROM value";
    $cmd=$db->prepare($sql);
    $cmd->execute();
    $info=$cmd->fetchAll();
    echo '<table>
    <thead>
    <th>Task Name</th>
    <th>Task Description</th>
    <th> Date</th>
    </thead>';
    
    foreach($info as $infos){
        echo'<tr>
        <td>' .$infos['taskName']. '</td>
        <td>' .$infos['taskDesc']. '</td>
        <td>' .$infos['date']. '</td>
        </tr>';
    }
    echo'
    </table>';
    $db = null;
    ?>
</body>
</html>