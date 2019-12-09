<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>

<body>




    <div class="content">
        <div id="app">
            <user></user>

            <button type="button" v-on:click="like1=!like1" class="btn btn-primary">Like</button>


            <button type="button" v-on:click="like2=!like2" class="btn btn-primary">Like2</button>


            <button type="button" v-on:click="like3=!like3" class="btn btn-primary">Like3</button>
            {{-- <h1 v-if="like1">Hello1 !!</h1>
            <h1 v-if="like2">Hello2 !!</h1>
            <h1 v-if="like3">Hello3 !!</h1> --}}

            <a href="/DelectSession" class="btn btn-danger">ลบ Session</a>

            <form action="show" method="post">
              @for ($i=0; $i < 10; $i++)
                <br>
                {{-- <h1 v-if="like{{$i}}">Hello{{$i}} !!</h1> --}}
                <button type="button" v-on:click="like{{$i}}=!like{{$i}}" class="btn btn-primary">Like {{$i}}</button>
                <input type="hidden" name="show[]" v-if="like{{$i}}" value="{{$i}}">
              @endfor
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" value="กดเพือส่ง">
            </form>







        </div>


    </div>

    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
