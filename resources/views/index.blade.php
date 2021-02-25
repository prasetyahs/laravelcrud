<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy">
    <style>
        h1 {
            font-family: "Satisfy";
        }
    </style>
</head>

<body style="background-image: url(<?= asset('img/bg.jpg') ?>);background-repeat:no-repeat;background-size:cover;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <h1 style="color:white;font-weight:bold">Input Data form here</h1>
            <div class="col-md-5">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <form method="POST" action="{{ route('product.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="label" for="productName">Nama Produk</label>
                        <input type="text" class="form-control" id="productName" name="product_name" style="background-color: transparent;border-color:white">
                    </div>
                    <div class="form-group">
                        <label class="label" for="description">Keterangan</label>
                        <input type="text" class="form-control" id="description" name="description" style="background-color: transparent;border-color:white">
                    </div>
                    <div class="form-group">
                        <label class="label" for="price">Harga</label>
                        <input type="text" class="form-control" id="price" name="price" style="background-color: transparent;border-color:white">
                    </div>
                    <div class="form-group">
                        <label class="label" for="jumlah">Jumlah</label>
                        <input type="text" class="form-control" id="jumlah" name="amount" style="background-color: transparent;border-color:white">
                    </div>
                    <button type="submit" class="btn btn-secondary">Tambah Data</button>
                    <a href="<?= url('/dataproduct') ?>" class="btn btn-primary">Lihat Data</a>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>