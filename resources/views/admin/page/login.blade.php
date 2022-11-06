<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Nimaya Kopi</title>
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1578dbcc4d.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #222" class="text-white">
    <div class="d-flex flex-column mx-auto justify-content-center py-4" style="max-width:437px">
        <h2 class="text-center mb-4">Login <span style="color: #835C5C">Admin</span></h2>
        <img src="{{ asset('img/img_login.png') }}" alt="" class="align-self-center mb-5"
        style="width:80%;">
        <form action="{{url('/login')}}" method="post" class="d-flex flex-column">
            @csrf
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="custom-form-login mb-3">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="custom-form-login mb-5">
            <button type="submit" class="custom-form-login bg-light text-dark">Masuk</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
