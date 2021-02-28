<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>


    {{--
    <table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Release_Date</th>
        <th scope="col">Due_Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($dates as $date)
    <tr>

        <th scope="row">{{$date->id}}</th>
        <td>{{$date->release_date}}</td>
        <td>{{$date->due_date}}</td>

    </tr>
    @endforeach
    </tbody>
</table>
    --}}

</body>


<center>
    @for($i=0;$i<$lenght;$i++)



    @if($info[$i]->category_id == 1 )
            {{$info[$i]->getCategories->name}}
        {{$info[$i]->getPeriod->period}}

    @elseif($info[$i]->category_id == 2 )
            {{'id 2 '}}
            {{$info[$i]->title}}



        @elseif($info[$i]->category_id == 3 )
            {{'id 3 '}}
            {{$info[$i]->title}}


        @elseif($info[$i]->category_id == 4 )
            {{'id 4 '}}
            {{$info[$i]->title}}
        @endif



    <br><br>






    @endfor





</center>
</html>
