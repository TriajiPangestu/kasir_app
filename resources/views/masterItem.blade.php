@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Master Item') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table table-responsive table-striped">
                        <thead>
                            <td>#</td>
                            <td>Category</td>
                            <td>Item</td>
                            <td>Stock</td>
                            <td>Action</td>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Makanan</td>
                            <td>Nasi Goreng</td>
                            <td>10</td>
                            <td>
                            <a href="" class="btn btn-sm btn-warning text-light">Edit</a>
                            <a href="" class="btn btn-sm btn-danger text-light">Simpan</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minuman</td>
                            <td>Es teh</td>
                            <td>10</td>
                            <td>
                            <a href="" class="btn btn-sm btn-warning text-light">Edit</a>
                            <a href="" class="btn btn-sm btn-danger text-light">Simpan</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Master Item') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="form-group">
                            <label for="">Category</label>
                            <select name="category" class="form-control form-select" id="">
                                <option value="1">Makanan</option>
                                <option value="2">Minuman</option>
                            </select>
                        </div>
                        <div>
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div>
                            <label for="">Stock</label>
                            <input type="text" class="form-control" name="stock">
                        </div>
                        <div>
                            <label for="">Price</label>
                            <input type="text" class="form-control" name="price">
                        </div>
                        <div class="form-group">
                            <form action="">
                                <input type="button" class="btn btn-sm btn-success" name="simpan" value="simpan">
                                <input type="button" class="btn btn-sm btn-danger" value="batal">
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
