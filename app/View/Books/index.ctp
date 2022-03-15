<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vi du 1</title>
</head>
<body>
    <?php
        if($data==NULL){
            echo "<h2>Dada Empty</h2>";
        }
        else{
            echo "<table>
            <tr>
                <td>id</td>
                <td>Title</td>
                <td>Description</td>
            </tr>";
            foreach($data as $item){
                echo "<tr>";
                echo "<td>".$item['Book']['id']."</td>";
                echo "<td>".$item['Book']['title']."</td>";
                echo "<td>".$item['Book']['description']."</td>";
                echo "</tr>";
            }
        }
    ?>

    <?php
    echo $this->Paginator->prev(' << Previous ', null, null, array('class' => 'disabled'));
    echo " | ".$this->Paginator->numbers()." | ";
    echo $this->Paginator->next(' Next >> ', null, null, array('class' => 'disabled'));
    echo " Page ".$this->Paginator->counter();
    ?>
</body>
</html>