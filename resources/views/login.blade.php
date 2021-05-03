<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
       
             
        </form>
        <form method="POST" action="/lg">
                @csrf
                <input type="text" name="username">
                <input type="password" name="password">
                <button type="submit">เข้าสู่ระบ</button>
           
            </form>
</body>
</html>