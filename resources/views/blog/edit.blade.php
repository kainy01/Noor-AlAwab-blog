@extends ('layouts.app')
@section('content')

<div class="container" style="margin-top: 150px;">
    <h3 class="text-6xl">
        Edit Post
    </h3>

    <div style="display:flex; align-items:center;  justify-content: center;">
        <img src="{{asset ('images/' . $post->image_path)}}" alt="img" class="" style=" height:400px; width:300px;">
        @if ($errors->any())

        <ul>
            @foreach ($errors->all() as $error)
            <il class="warning" >
                {{$error}}

            </il>
            @endforeach
        </ul>

        @endif
        <div class="form-outline mb-4" id="create">
            <form action="/blog/{{$post->slug}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-outline mb-4">
                    <input type="text" name="title" value="{{$post->title}}" class="form-control">
                </div>
                <div class="form-outline mb-4">
                    <input type="text" name="price" value="{{$post->price}}" class="form-control">
                </div>
                <div class="form-outline mb-4">
                    <textarea name="description" placeholder="Description..." class="form-control">{{$post->description}} </textarea>
                </div>
                <button type="submit" class="btn btn-dark sub-btn">
                    Edit Post
                </button>
            </form>
        </div>
    </div>
</div>

@endsection