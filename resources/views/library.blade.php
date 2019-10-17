@extends('layouts.layout')

@section('title', 'Library')

@section('content')

    <h2>Hello {{$name}}, this is your library!</h2>
    <p>Upload with the following button your pictures and download saved pictures by clicking on them.</p>

    <br>

    <form action="{{route('image.add')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="upload-btn-wrapper">
            <input type="file" name="image" id="image">
            <button class="btn btn-outline-dark" type="button" id="choiceButton">Choose picture</button>
        </div>
        <div>
            <button class="btn text-white mt-1 bg-green" type="submit">Upload</button>
        </div>

    </form>

    <div class="mt-5 library-card-container">
        <div class="card-columns">
            @foreach($images as $photo)
                <div class="card" style="">
                    <a href="/download/{{$photo['basename']}}">
                    <img class="card-img-top" src="images/{{ $email . '/' . $photo['basename'] }}" alt="{{$photo['filename']}}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        document.querySelector("#image").onchange = function(){
            document.querySelector("#choiceButton").textContent = this.files[0].name;
        }
    </script>

@endsection
