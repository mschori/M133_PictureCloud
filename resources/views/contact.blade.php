@extends('layouts.layout')

@section('title', 'Contact')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 pb-5">
                <p>Kontaktieren Sie die Betreiber dieser Webseite mit dem folgenden Formular.</p>

                <form action="#" method="post">
                    @csrf
                    <div class="card-body p-3">

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                </div>
                                <input type="text" class="form-control" id="fullName" name="nombre"
                                       placeholder="Dein vollständiger Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                </div>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="abc@abc.ch" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                </div>
                                <textarea class="form-control" placeholder="Dein Text" required></textarea>
                            </div>
                        </div>

                        <div class="text-center">
                            <input type="button" value="Absenden" class="btn btn-info btn-block rounded-0 py-2">
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

@endsection
