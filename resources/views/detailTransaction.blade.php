@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
           <div class="card-header text-center">Invoice</div>
           <div class="card-body">
                <table>
                    <tr>
                        <td>Date of Transaction</td>
                        <td>   :   </td>
                        <td>12-12-2022</td>
                    </tr>
                    <tr>
                        <td>Served By</td>
                        <td>    :   </td>
                        <td>Triaji</td>
                    </tr>
                </table>
                <br>
                <table class="table table-responsive table-striped">
                        <thead>
                            <td>#</td>
                            <td>Item</td>
                            <td>qty</td>
                            <td>Price</td>
                            <td>Subtotal</td>
                        </thead>
                        <tr>
                            <td>1</td>
                            <td>Nasi Goreng</td>
                            <td>3</td>
                            <td>10000</td>
                            <td>30000</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Es Teh</td>
                            <td>5</td>
                            <td>5000</td>
                            <td>25000</td>
                        </tr>
                        <tr>
                            <td class="text-end" colspan="4">Grand Total</td>
                            <td colspan="2">55000</td>
                        </tr>
                        <tr>
                        <td class="text-end" colspan="4">Payment</td>
                            <td colspan="2">60000</td>
                        </tr>
                        <tr>
                            <td class="text-end" colspan="4">Change</td>
                            <td colspan="2">5000</td>
                        </tr>
                </table>
            </div>     
        </div>
    </div>
</div>
@endsection