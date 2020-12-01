<div class="clearfix visible-sm visible-xs"></div>

<!-- product -->
<div class="col-md-4 col-xs-6">
    <div class="product">
        <div class="product-img">
            <img src="{{ asset($product->images->first()->path) }}" alt="">
        </div>
        <div class="product-body">
            <p class="product-category">Category</p>
            <h3 class="product-name"><a href="#">{{ $product->get_excerpt }}...</a></h3>
            <h4 class="product-price">${{ $product->price }} </h4>

            {{-- <div class="product-btns">
                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
            </div> --}}
        </div>

        @if (isset($cart))

        @else
        <div class="add-to-cart">

        <form class="d-inline" method="POST" action="{{ route('products.carts.store' , ['product'=> $product->id]) }}">
            @csrf
            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
        </form>
        </div>

        @endif

    </div>
</div>
<!-- /product -->

