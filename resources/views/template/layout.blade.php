<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('aset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <title>@yield('title') | New CRUD</title>
    <style>
        html,
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <div class="container">
        <br />
        {{-- menampilkan judul dari halaman file pada php --}}
        <h3>@yield('judul')</h3>
        <hr width="200px" align="left">
        {{-- menampilkan konten dari halaman file pada php --}}
        @yield('konten')
    </div>
    <script src="{{asset('aset/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('aset/jquery/jquery.min.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tabel-data').DataTable();
        });
    </script>
</body>

</html>
