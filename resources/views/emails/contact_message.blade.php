<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Message</title>
</head>

<body>
    <h1>Dear Admin</h1>
    <p>There is a message with this data</p>
    <hr>
    <p>Name : {{ $data['name'] }}</p>
    <p>Email : {{ $data['email'] }}</p>
    <p>Phone : {{ $data['phone'] }}</p>
    <p>Subject : {{ $data['subject'] }}</p>
    <p>Message : {{ $data['message'] }}</p>
    <hr>
    <p>Best Regards Thanks</p>

</body>

</html>
