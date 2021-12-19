<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
</head>
<body>
    <h3>Kategori Ekle</h3>

    <a href="{{url('admin/category')}}">Tüm postlar</a>

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
        <input name="title" type="text">
        <br>
        <input name="detail" type="text">
        <br>
        <input name="cat_image" type="file">
        <br>
        <input type="submit" value="Ekle">
    </form>
</body>
</html>