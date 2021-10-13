<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello world</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="请输入你的名字">
        <input type="email" name="email" placeholder="请输入你的电子邮箱">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Query"></textarea>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
