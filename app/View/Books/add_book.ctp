<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo $this->Form->create('Book');
    echo "<fieldset>";
    echo "<legend>Add new Book</legend>";
    echo $this->Form->input('title');
    echo $this->Form->input('description');
    echo $this->Form->end('Add new');
    echo "</fieldset>";
?>
</body>
</html>