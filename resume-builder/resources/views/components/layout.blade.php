<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>{{ $title ?? 'Resume Builder'}}</title>
</head>
<body>
    <header class="navbar navbar-dark bg-dark ">
        <div class="container-flud">
            <a href="#"class="navbar-brand p-3">Resume Builder</a>
        </div>
    </header>  
    <main>
        {{ $slot }}
    </main>
    <footer class="footer bg-dark text-white text-center p-3">
        <p>CopyRight&copy;2022</p>
        <p>Developed by : Raju Kumar</p>
        <p>Contact No. +91- 8252077457</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>