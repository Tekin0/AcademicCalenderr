<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    <title>Info List</title>
</head>
<body>
<section style="padding-top: 60px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table id="questions" class="table table-borderless datatable table-striped table-earning">
                    <thead>
                    <tr>

                        <th>Kategori Adı</th>
                        <th>Periyod</th>
                        <th>Tarih</th>
                        <th>Başlık</th>
                        <th>İçerik</th>
                        <th>Güncelle</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Kategori Adı</th>
                        <th>Periyod</th>
                        <th>Tarih</th>
                        <th>Başlık</th>
                        <th>İçerik</th>
                        <th>Güncelle</th>

                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>


<script id="script">
    table = $('#questions').DataTable({
        order: [
            [0,'ASC']
        ],
        processing: true,
        serverSide: true,
        ajax:"{!! route('listData',[$category_id,$period_id])!!}", //hangi kontrollerden gelecek
        columns: [
            {data: 'category_name'},
            {data: 'period_name'},
            {data: 'release_date'},
            {data: 'title'},
            {data: 'content'},
            {data: 'Update'},
        ]
    });
</script>

</body>

</html>
