<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<center>
<form action="{{route('calendar_index')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <table>
        <div class="input-group mb-3" style="width: 50%">
            <p> Başlangıç Tarihi</p>
            <input type="date"  name="release_date">
        </div>


        <div class="input-group mb-3" style="width: 50%">
            <p>bitiş tarihi</p>
            <input type="date"  name="due_date">
        </div>

        <div class="input-group mb-3" >
            <p>Takvimler</p>
            <select class="bmd-form-group-sm" required name="category" name="category" >
                @foreach($category as $item)f
                    <option value="{{$item->id}}">
                        {{$item->name}}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="input-group mb-3 " style="width: 50%">
            <p>Dönem</p>
            <select class="bmd-form-group-sm" required name="period" name="period" >
                @foreach($period as $item)
                <option value="{{$item->id}}">
                    {{$item->period}}
                </option>
                @endforeach
            </select>
        </div>

        <input type="submit" style="margin-top: 5px">


    </table>
</form>
</center>

</body>
</html>
