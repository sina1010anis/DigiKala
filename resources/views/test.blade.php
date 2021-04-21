<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="app">
{{--    ارساال اطلعات به vue با استفاده از laravel--}}
{{--    <test :msg="{{$all_city}}"></test>--}}
    <form action="{{route('test_2')}}" method="post">
        @csrf
        <input type="text" name="name">
        <input type="text" name="phone">
        <select name="city" id="">
            <option value="1">mashhad</option>
            <option value="2">tehran</option>
            <option value="3">shiraz</option>
        </select>
        <input type="submit" value="send">
    </form>
</div>
<script src="{{url('js/app.js')}}"></script>
</body>
</html>
