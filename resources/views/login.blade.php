<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <form action="{{route('login')}}" method="post">
        @csrf
        <label for='email'>Email: </label>
        <input type="email" name="email" required>

        <label for="password">Password: </label>
        <input type="password" name="password" required>

        <a href="{{ url('/forgot-password')}}"> Forgot Password</a>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
