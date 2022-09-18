<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="text-center">
    <h1>My Information</h1>
    Name: Lovely Jane Pelayre <br>
    Course & Year: BSIT 3 <br>


    <a href="{{url('/')}}">My Home</a>
    <a href="{{url('myApplication')}}">My Application</a>
    <a href="{{url('myinfo')}}">My Info</a>
    </div>
 
</body>
</html>