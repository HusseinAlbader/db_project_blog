<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
</head>
<body>
    <h3>Kategori Duzenle</h3>

    <a href="{{url('admin/category')}}">Tüm postlar</a>

    @if ($errors)
        @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
        @endforeach
    @endif

    @if (Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
    @endif

    <form method="POST" action="{{url('admin/category/'.$data->id)}}" enctype="multipart/form-data">
        @csrf
        @method('put')
        <table>
            <tr>
                <th>Baslik</th>
                <td><input name="title" type="text" value="{{$data->title}}"></td>
            </tr>
            <tr>
                <th>Detail</th>
                <td><input name="detail" type="text" value="{{$data->detail}}"></td>
            </tr>
            <tr>
                <th>IMage</th>
                <td>
                    <p><img width="80" src="{{asset('imgs')}}/{{$data->image}}"></p>
                    <input name="cat_image" type="hidden" value="{{$data->image}}">
                    <input name="cat_image" type="file">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Ekle">
                </td>
            </tr>
        </table>        
    </form>
</body>
</html>