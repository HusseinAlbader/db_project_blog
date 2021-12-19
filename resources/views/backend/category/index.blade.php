<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
</head>
<body>
    <h3>Category</h3>
    <p>
        <a href="{{url('admin/category/create')}}">Add Data</a>
    </p>
    <div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Başlık</th>
                    <th>Resim</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->title}}</td>
                    <td>
                        <img src="{{ asset('imgs').'/'.$cat->image}}" width="100">
                    </td>
                    <td>
                        <a href="{{url('admin/category/'.$cat->id.'/edit')}}">Düzenle</a>
                        <a href="{{url('admin/category/'.$cat->id.'/delete')}}">Sil</a>
                    </td>
                </tr>
                @endforeach                
            </tbody>
        </table>
    </div>
</body>
</html>