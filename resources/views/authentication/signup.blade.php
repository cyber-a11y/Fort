<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Signup</title>
</head>
<body>
    <h2>Signup</h2>

    @if (session('success'))
    <p style="color: orange">{{session('success')}}</p>
    @endif

    <form action="{{route('signup')}}" method="post">
        @csrf
        <label for='fullname'>Fullname: </label>
        <input type="text" name="fullname" required>

        <label for='email'>Email: </label>
        <input type="email" name="email" required>

        <label for="password">Password: </label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm Password: </label>
        <input type="password" name="password_confirmation" required>

        <button type="submit">Submit</button>
    </form>

</body>
</html>
