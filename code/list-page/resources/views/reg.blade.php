<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Đăng ký</h1>
    {!! Form::open(['url' => 'post/store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label("username", "Tên đăng nhập", ["class" => "form-controll"]) !!}
            {!! Form::text("username", "", ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label("password", "Mật khẩu", ["class" => "form-controll"]) !!}
            {!! Form::password("password", ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label("email", "Email", ["class" => "form-controll"]) !!}
            {!! Form::email("email", "", ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit("Đăng ký", ['name' => 'submit-reg']) !!}
        </div>
    {!! Form::close() !!}
</body>
</html>