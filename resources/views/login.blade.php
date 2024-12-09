<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="">Email</label>
        <input type="email" name="email" id="">

        <label for="">Password</label>
        <input type="password" name="password">

        <button type="submit">Submit</button>
    </form>
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        <p> You may need to register <br> Click the button below to register </br> </p>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <a href="/register" class="btn btn-primary mx-auto" role="button" style="text-align:center;">Register</a>
                </div>
            </div>
        </div>
    @endif

</body>
</html>