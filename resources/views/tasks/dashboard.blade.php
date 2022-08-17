<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <h1 id="header"></h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <div id="app">
        <div class="row">
            <div class="col-md-auto">
                <side-menu></side-menu>
            </div>
            <div class="col-lg-4">
                <div class="container-lg">
                    <div class="row">
                        <div class="col">
                            <main-card></main-card> 
                            <main-card></main-card> 
                        </div>
                        <div class="col">
                            <main-card></main-card> 
                            <main-card></main-card> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>

</html>
