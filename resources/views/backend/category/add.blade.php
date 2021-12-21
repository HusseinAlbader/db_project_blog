<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>Kategori Ekle
            <a href="{{url('admin/category')}}" class="float-right btn btn-sm btn-dark">Tum kategoriler</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                
                @if ($errors)
                    @foreach($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                    @endforeach
                @endif

                @if (Session::has('success'))
                    <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="POST" action="{{url('admin/category')}}" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>Title</th>
                            <td><input name="title" type="text"></td>
                        </tr>
                        <tr>
                            <th>Detail</th>
                            <td><input name="detail" type="text"></td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><input name="cat_image" type="file"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" value="Ekle">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    

    
    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>