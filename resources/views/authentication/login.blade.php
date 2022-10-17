<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
	<link href="\project_saffron\resources\sass\login.css" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <div id="app">
        <login-form></login-form>
    </div> 
</body>
</html>