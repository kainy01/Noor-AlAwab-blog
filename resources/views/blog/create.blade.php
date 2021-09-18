@extends ('layouts.app')
@section('content')

<div class="container" style="margin-top: 150px;">
    <h3 class="text-6xl">
        Create Post
    </h3>

    @if ($errors->any())

    <ul>
        @foreach ($errors->all() as $error)
        <il>
            {{$error}}
        </il>
        @endforeach
    </ul>
    @endif
    <div class="form-outline mb-4" id="create">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-outline mb-4">
                <input type="text" name="title" placeholder="Title..." class="form-control">
            </div>
            <div class="form-outline mb-4">
                <input type="text" name="price" placeholder="Price..." class="form-control">
            </div>

            <div class="form-outline mb-4">
                <textarea name="description" placeholder="Description..." class="form-control">
            </textarea>
            </div>
            <div>
                <label>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>
            <button type="submit" class="btn btn-dark sub-btn">
                Save Product
            </button>
        </form>
    </div>
</div>

@endsection