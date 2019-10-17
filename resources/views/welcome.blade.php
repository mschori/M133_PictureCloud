@extends('layouts.layout')

@section('title', 'Welcome')

@section('content')

    <h2>Welcome to the best picture cloud station of the world!</h2>
    <p>
        Register now and upload your pictures to save them forever. Download not possible.
        <br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad aliquid architecto, aut blanditiis doloribus odio optio perspiciatis, quam quisquam suscipit tempora temporibus veniam. Doloremque dolores illum laborum minus voluptas.
    </p>

    <div class="container">
        <div class="row justify-content-center">
            <img src="{{url('/images/PictureCloud_Logo.png')}}" alt="cloud-image" style="width: 400px" class="mt-4">
        </div>
    </div>

@endsection
