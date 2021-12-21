@extends('frontlayout')
@section('title', 'Ana Sayfa')

@section('content')

   <div class="row">
        <div class="col-md-8">
            <div class="row mb-5">
                @if (count($posts) > 0)
                    @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card">
                            <a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">
                                <img class="card-img-top" src="{{asset('imgs/thumb/'.$post->thumb)}}" alt="{{$post->title}}">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{url('detail/'.Str::slug($post->title).'/'.$post->id)}}">{{$post->title}}</a>
                                </h5>                            
                            </div>
                        </div>
                    </div>
                    @endforeach
                @else
                    <p class="alert alert-danger">Maalesef hiçbir makale bulunamadı.</p>
                @endif
            </div>
            <!-- Pagination -->
            {{$posts->links()}}
        </div>



        <!-- Sag sidebar -->
        <div class="col-md-4">

            <!-- Arama input -->                
            <div class="card mb-4">
                <h5 class="card-header">Ara</h5>
                <div class="card-body">
                    <form action="{{url('/')}}">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control">
                            <div class="input-group-append">
                                <button class="btn btn-dark" type="button">Ara</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Son eklenen makaleler -->                
            <div class="card mb-4">
                <h5 class="card-header">En Son Eklenenler</h5>                    
                <div class="list-group list-group-flush">
                    @if ($recent_posts)
                        @foreach ($recent_posts as $post)
                        <a href="#" class="list-group-item">{{$post->title}}</a>
                        @endforeach
                    @endif
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
@endsection