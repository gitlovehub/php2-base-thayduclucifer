<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Project</title>
</head>
<body>
    <h1>CHẾ ĐỘ SINH TỒN</h1>
    <h2>CHIẾN ĐẤU THẬT PHONG CÁCH</h2>
    
    <form action="" method="post">
        Name: <input type="text" name="name">
        E-mail: <input type="text" name="email">
        <button type="submit">Send</button>
    </form>

    @if (!empty($_SESSION["errors"]))
        <ul>
            @foreach ($_SESSION["errors"] as $message)
            <li>{{$message}}</li>
            @endforeach
        </ul>
        @php
            unset($_SESSION["errors"]);  
        @endphp
    @endif

    @if (!empty($_SESSION["success"]))
        <h1>{{$_SESSION["success"]}}</h1>
    @php
        unset($_SESSION["errors"]);  
    @endphp
@endif
</body>
</html>