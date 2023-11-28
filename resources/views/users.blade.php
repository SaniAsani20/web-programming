<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Screen</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            color: black;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .users-container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #ff0000; /* Red color */
        }
    </style>
</head>
<body>
<div class="users-container">
    <h1>Users Screen</h1>

    <!-- Your user display logic goes here -->
    <!-- For example, you can use a loop to iterate through your users -->
    @foreach($users as $user)
        <p>{{ $user->name }}</p>
        <p>{{ $user->email }}</p>
        <!-- Add more user details as needed -->
    @endforeach
    <h2>{{$sani->name}}</h2>
    <h2>{{$sani->email}}</h2>
</div>
</body>
</html>
