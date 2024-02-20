<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{  $user->name  }}'s Profile</title>
</head>
<body>
    <p>Welcome, {{ $user->name }}!</p>
    <p>Email: {{  $user->email}}</p>
    <a href="{{ route('dashboard')}}">Back to Dashboard</a>
</body>
</html>