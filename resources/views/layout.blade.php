<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">   
    @stack("style")
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="col-md-12">
            <h2>Data Mahasiswa</h2>
            @yield('content')
        </div>
        <div class="col-md-12" style="margin-top: 15px;">
            <a href="{{ route('logout') }}">Logout</a>
        </div>

    </div>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Bootstrap script -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    @stack("script")
</body>

</html>
