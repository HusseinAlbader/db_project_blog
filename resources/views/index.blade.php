<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog - Ana Sayfa</title>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Blog</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Kategori</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Hesap</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- En son makaleleri getir-->
    <main class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    @if (count($posts) > 0)
                        @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="card">
                                <a href="{{url('detail/'.$post->id)}}">
                                    <img class="card-img-top" src="{{asset('imgs/thumb/'.$post->thumb)}}" alt="{{$post->title}}">
                                </a>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <a href="{{url('detail/'.$post->id)}}">{{$post->title}}</a>
                                    </h5>                            
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @else
                        <p class="alert alert-danger">Maalesef hiçbir makale bulunamadı.</p>
                    @endif
                </div>
            </div> 
            <!-- Sag sidebar -->
            <div class="col-md-4">
                <!-- Arama input -->                
                <div class="card mb-4">
                    <h5 class="card-header">Ara</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">Ara</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Son eklenen makaleler -->                
                <div class="card mb-4">
                    <h5 class="card-header">En Son Eklenenler</h5>                    
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item">Post 1</a>
                        <a href="#" class="list-group-item">Post 2</a>
                    </div>
                    
                </div>
                <!-- Populer makaleler -->                
                <div class="card mb-4">
                    <h5 class="card-header">En Çok Okunanlar</h5>                    
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item">Post 1</a>
                        <a href="#" class="list-group-item">Post 2</a>
                    </div>
                    
                </div>

            </div>                       
        </div>
    </main>
    
      
      




    <!-- JQuery-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>