@extends('shop.master')
@section('contents')
<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Cart Page</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Cart</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <form action="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Image</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($carts as $food)
                                    <tr id="destroy-{{$food['id']}}">
                                        <td><a class="remove" delete="{{$food['id']}}"><fa class="fa fa-close"></fa></a></td>
{{--                                        <td><a class="remove" href="{{route('shop.deleteCart',$food['id'])}}"><fa class="fa fa-close"></fa></a></td>--}}
                                        <td><img src="{{asset('storage/'.$food['image'])}}"></td>
                                        <td><p class="aa-cart-title">{{$food['name']}}</p></td>
                                        <td>{{$food['price']}}</td>
                                        <td><input class="aa-cart-quantity" type="number" value="{{$food['quantity']}}"></td>
                                        <td>{{$food['price']}}</td>
                                    </tr>
                                    @empty
                                        <tr><td colspan="6">no Data</td></tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <h4>Cart Totals</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>$450</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>$450</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->
@endsection
