<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Thêm bài viết</h1>
    {!! Form::open(['url' => 'post/store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::text("title", "", ['class' => 'form-control']) !!}
            <input type="text" placeholder="nhập tiêu đề">
        </div>
        <div class="form-group">
            {!! Form::textarea("description","", ['class' => 'form-controll']) !!}
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            {!! Form::submit("Add", ['name' => 'submit-add']) !!}
        </div>
    {!! Form::close() !!}
</body>
</html>