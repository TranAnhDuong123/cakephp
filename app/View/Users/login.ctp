<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="form-box" id="login-box">
        <div class="header">Sign In</div>
        <?=$this->Form->create();?>
        <?=$this->Form->input('username');?>
        <?=$this->Form->input('password');?>
        <button type="submit">Sign me in</button>
        <?=$this->Form->end();?>
    </div>
</body>
</html>