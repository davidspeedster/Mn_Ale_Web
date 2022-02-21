<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href={{asset("assets/layouts.css")}}>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js" type="text/javascript"></script>
</head>

<body>
    <div id="container">
    @foreach ($editions as $edition )
    <div class="slide anim-in">
        <div class="image" style="
            background-image: url({{asset('storage/'. $edition->image)}});
            "></div>
            <div class="overlay"></div>
            <div class="content">
                <h1 class="title" data-title="{{$edition->title}}">{{$edition->title}}</h1>
                <div class="emblem" style="
              background-image: url({{asset("/assets/logo.png")}});
            "></div>
                <ul class="city-info">
                    <li class="country">Release Date: {{date('d-m-Y', strtotime($edition->date))}}</li>
                    <li class="founded"><a href="{{url($edition->link)}}" target="_blank">Read More</a></li>
                </ul>
            </div>
            <div class="btn-close"></div>
        </div>
        @endforeach
    </div>
    <script src={{asset("/assets/work.js")}}></script>
</body>

</html>

