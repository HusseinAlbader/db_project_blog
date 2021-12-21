<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Admin Panel</a>
            </li>
            <li class="breadcrumb-item active">Genel Bakış</li>
        </ol>

        <!-- Data tables -->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fas fa-table"></i>Kategoriler
                <a href="{{url('admin/category/create')}}" class="btn btn-sm btn-dark">Veri Ekle</a>
            </div>    
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Başlık</th>
                                <th>Resim</th>
                                <th>Güncelle</th>
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
                                    <a onclick="return confirm return('Silmek istediğinizden emin misiniz?')" href="{{url('admin/category/'.$cat->id.'/delete')}}">Sil</a>
                                </td>
                            </tr>
                            @endforeach                
                        </tbody>
                    </table>
                </div>
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