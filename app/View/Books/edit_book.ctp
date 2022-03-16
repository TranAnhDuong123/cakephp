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
    echo $this->Form->create('User');
    echo "<fieldset>";
    echo "<legend>Edit Book</legend>";
    echo $this->Form->input('name');
    echo $this->Form->input('username');
    echo $this->Form->hidden("id");
    echo $this->Form->end('Update Book');
    echo "</fieldset>";
?>
</body>
</html>