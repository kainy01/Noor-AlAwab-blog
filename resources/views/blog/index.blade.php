@extends ('layouts.app')
@section('content')

<body>
    <section class="product">
        <h1 id="product-p">Products</h1>
        <div id="create-h">
            <div>
                @if(session()->has('message'))
                <div>
                    <p class="warning">
                        {{session()->get('message')}}
                    </p>
                </div>
                @endif
            </div>

            @if (Auth::check())
            <div class="create-btn">
                <div id="create-btn">
                    <a href="/blog/create">
                        Create Post
                    </a>
                </div>
            </div>
            @endif
        </div>






        @foreach ($posts as $post)
        <div class="row" id="late-post">

            <div class="card" id="card" style="margin:20px 50px 50px 50px;
            height: 500px;
            width:300px;
            
            ">
                <div>
                    <img src="{{asset ('images/' . $post->image_path)}}" class="card-img-top" alt="img" id="img-pro">
                </div>
                <div class="pro-down">
                    <div class="pro-header">
                        <h6 class="pro-title"> {{$post->title}}</h6>
                        <h6 class="pro-title"> {{$post->price}}</h6>
                    </div>
                    <div class="pro-text">
                        <p>{{$post->description}}</p>
                    </div>
                    <a href="/blog/{{$post->slug}}" class="btn btn-dark btn-sm" style="padding:0px;">
                                Show
                            </a>

                    <div class="btns">
                        @if (isset(Auth::user()->id) && Auth::user()->id==$post->user_id)
                        <span>
                            <a href="/blog/{{$post->slug}}/edit" class="btn btn-dark btn-sm" style="padding:0px;">
                                Edit
                            </a>
                        </span>
                        <span>
                            <form action="/blog/{{$post->slug}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-dark btn-sm " style="padding:0px;" type="submit">
                                    Delete
                                </button>
                            </form>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach





    </section>
</body>



@endsection