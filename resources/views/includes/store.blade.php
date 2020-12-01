<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->

            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-12">

                @if (!isset($cart) || $cart->products->isEmpty())
                <div class="alert alert-warning">
                   Your cart is empty.
                </div>
            @else

            <h4 class="text-center">Your cart Total: <strong> {{ $cart->total }} </strong>  </h4>

            <a class="mb-3 btn btn-success" href="">
                Start Order
            </a>
            <div class="row">

                @foreach ($cart->products as $product)
                @include('includes.products')

                @endforeach
            </div>

            @endempty
                <!-- store products -->

                <!-- /store products -->


            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
