<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h1 class="mt-5 text-center mb-5">
                    FORM EDIT BARANG
                </h1>
                <form action="/update/{{$item->id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$item->nama_barang}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga Beli</label>
                        <input type="text" name="harga_beli" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$item->harga_beli}}">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Harga  Jual</label>
                        <input type="text" name="harga_jual" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$item->harga_jual}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Stok</label>
                        <input type="text"  name="stok" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$item->stok}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Photo</label>
                        <input type="file" class="form-control-file" name="photo" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>


    </div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>
