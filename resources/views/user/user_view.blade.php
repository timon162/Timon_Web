<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>WELCOME TO TIMON_WEB</h1>
    <button type="submit" class="btn btn-login text-white" id="id-Logout-btn">Logout</button>
</body>
<script src="{{ asset('js/auth/logout.js') }}"></script>

</html>
