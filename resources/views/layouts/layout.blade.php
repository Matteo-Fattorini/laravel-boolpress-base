<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>@yield('title', "titolo")</title>
</head>
<body>

    @section("header")
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="d-flex h-100 justify-content-evenly align-items-center">
                    <li><a class="" href="{{ route("boolpress.index") }}">Home</a>
                    </li>
                    <li> <a class="" href="{{ route("boolpress.create") }}">Crea Post</a> </li>
                </ul>
            </div>
        </div>
    </div>
    @show

    @section("main")
    <div class="row">
        <div class="col-8 offset-2 mt-5 ">
            
        </div>
    </div>
    @show
    
</body>
</html>