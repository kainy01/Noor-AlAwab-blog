@extends ('layouts.app')
@section('content')



<section class="product">
    <div class="item-container">
        <div class="left-side">
            <img src="{{asset ('images/' . $post->image_path)}}" class="show-img" alt="img">
        </div>
        <div class="right-side">
            <div class="pro-header">
                <h2 class="pro-title">{{$post->title}}</h2>
                <h2 class="pro-title"> {{$post->price}}</h2>
            </div>
            <p class="desc">
                {{$post->description}}
            </p>
        </div>
    </div>


</section>
@endsection