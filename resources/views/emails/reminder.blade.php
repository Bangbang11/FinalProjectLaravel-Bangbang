<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email Reset Password</title>
</head>
<body>
    <h3>
        Hello {!! $detail['email'] !!}
    </h3>
    <p>
        Somebody Request For Changes your Password, <br>
        if you dont please ignore this email, <br>
        but if you do, please click link below for further intruction.
    </p>
    <?php
    $id = $detail['id'];
    $code = $detail['code']; 
    ?>
    <a href="{{ route('reminders.edit',['id'=>$id ,'code'=>$code ])}}">click here</a>
    <h2>Thanks</h2>
</body>
</html>