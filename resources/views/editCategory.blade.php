@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Edit Category') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="">
                        <div class="form-group">
                            <label for="">Nama Kategori </label>
                            <input type="text" class="form-control" name="name" id="name"> <br>
                        </div>
                        <input type="submit" class="btn btn-sm btn-success" value="simpan">
                        <input type="button" class="btn btn-sm btn-danger" value="batal">
                    </form>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection