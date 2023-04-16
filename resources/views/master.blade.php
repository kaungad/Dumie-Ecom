<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dumie E-corm</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    img.slider-img{
        height: 400px !important;
    }

    .custom-product{
        height: 600px;
    }
    .slider-text{
        background-color: rgba(46, 35, 35, 0.301) !important;
        border-radius: 10px;
    }

    .trending-image{
        height: 100px;
    }

    .trending-item
    {
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin-left:50px; 
    }

    .detail-img{
        height: 200px;
    }

    .nav-list
    {
        margin-left: 500px;
    }

    .cartlist-divider
    {
      border-bottom:2px solid #6e6e6e; 
      margin-bottom: 15px;
      padding-bottom: 15px;

    }
</style>

</html>