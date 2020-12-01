<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->

            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-12">


                <!-- store products -->
                <div class="row">
                    {{ $products->links() }}

                    @include('includes.store-products')
                    {{ $products->links() }}
                </div>
                <!-- /store products -->


            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
