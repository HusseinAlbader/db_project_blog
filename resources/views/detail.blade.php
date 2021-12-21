@extends('frontlayout')
@section('title', '{{$detail->title}}')
@section('content')


   <div class="row">
        <div class="col-md-8">
            <div class="card">
                <h5 class="card-header">{{$detail->title}}</h5>
                <img src="{{asset('imgs/full/'.$detail->full_img)}}}}" alt="{{$detail->title}}" class="card-img-top">
                <div class="card-body">
                    {{$detail->detail}}
                </div>
            </div>

            <!-- Comments -->
            <div class="card mt-5">
                <h5 class="card-header">Add Comments</h5>
                <div class="card-body">
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    <input type="submit" class="btn btn-dark mt-2">
                </div>
            </div>
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
@endsection