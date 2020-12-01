@extends('layouts.master')


@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- STORE -->
            <div id="store" class="col-md-12">


                <!-- store products -->
                <div class="row">
                    {{ $products->links() }}
                    @foreach ($products as $product)
                    @include('includes.products')

                    @endforeach
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

@endsection
