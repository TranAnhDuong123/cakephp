<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Login as User : <?php echo $current_user['username'];?></li>
        <li><a href='<?php echo $this->webroot."users/logout";?>'>Logout</a></li>
    </ul>
    <?php
    if($data==NULL){
        echo "<h2>Dada Empty</h2>";
    }
    else{
        echo "<table>
        <tr>
            <td>id</td>
            <td>Name</td>
            <td>Username</td>
            <td>Email</td>
        </tr>";
        foreach($data as $item){
            echo "<tr>";
            echo "<td>".$item['User']['id']."</td>";
            echo "<td>".$item['User']['name']."</td>";
            echo "<td>".$item['User']['username']."</td>";
            echo "<td>".$item['User']['email']."</td>";
            echo "</tr>";
        }
    }
    ?>  
</body>
</html>