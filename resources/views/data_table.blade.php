<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <link rel="stylesheet" href="<?= asset('css/style.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?= asset('js/custom.css') ?>" type="text/css">
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
            <h1 style="color:white;font-weight:bold">List Data form here</h1>
            <table class="table" style="background-color: white;">
                <thead>
                    <tr>
                        <th scope="col">ID Product</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Show</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($products))
                    @foreach($products as $p)
                    <tr>
                        <th scope="row">{{$p->id}}</th>
                        <td>{{$p->product_name}}</td>
                        <td>{{$p->price}}</td>
                        <td><button data-toggle="modal" data-target="#modalDetail" class="btn btn-primary">Show Data</button></td>
                    </tr>
                    @endforeach
                    @else
                    <td style="font-weight:bold;">Record not found</td>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="modalDetail">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Product</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
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