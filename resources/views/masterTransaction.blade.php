@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

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
                            <td>Price</td>
                            <td>qty</td>
                            <td>Action</td>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Makanan</td>
                            <td>Nasi Goreng</td>
                            <td>10000</td>
                            <td class="col-md-2">10</td>
                            <form action="">
                                <td>
                                <input type="hidden" class="form-control" name="id">
                                <a href="" type="submit" class="btn btn-sm btn-success text-light">add to cart</a>
                                </td>
                            </form>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Mainuman</td>
                            <td>Es Teh</td>
                            <td>5000</td>
                            <td class="col-md-2">10</td>
                            <form action="">
                                <td>
                                <input type="hidden" class="form-control" name="id">
                                <a href="" type="submit" class="btn btn-sm btn-success text-light">add to cart</a>
                                </td>
                            </form>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <div class="col-md-4">
            <div class="card-header">
                cart
            </div>
            <div class="card-body">
                <table class="table table-responsive table-striped">
                    <thead>
                        <td>#</td>
                        <td>Item</td>
                        <td>qty</td>
                        <td>Action</td>
                    </thead>
                    <tr>
                        <td>1</td>
                        <td>Nasi Goreng</td>
                        <td>1</td>
                        <td><input type="number" class="form-control" value="1" onchange="ubah()"></td>
                        <script>
                            function ubah(){
                                document.getElementById("update").style.display="inline";
                                document.getElementById("hapus").style.display="none";
                            }
                        </script>
                        <tr>
                            <form action="">
                                <tr>
                                    <td colspan="3">Grand Total</td>
                                    <td colspan="2"><input type="number" class="form-control" disabled name="total" value="20000"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Payment</td>
                                    <td colspan="2"><input type="number" class="form-control" name="paytotal"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">Change</td>
                                    <td colspan="2"><input type="number" class="form-control" disabled></td>
                                </tr>
                                <tr>
                                    <td>
                                    <input type="submit" class="btn btn-primary" value="checkout">
                                    </td>
                                    <td>
                                    <input type="reset" class="btn btn-danger" value="reset">
                                    </td>
                                </tr>
                            </form>
                        </tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
