@include('custom.header')
<!-- Start sell products -->
<section class="sell-products">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2 class="u-font--24 u-margin--0 u-font--bold ">Affordable full body health checkups</h2>
                <div class="u-font--16 u-margin--5__top">Free home sample collection for all health checkups</div>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach($products as $product)
                <div class="col-sm">
                    <div class="text-center muhin">
                        <div class="">
                            <a href="{{route('productSee', $product->product_slug)}}">
                            <span class="LazyLoad is-visible">
                                  <img src="{{ asset('storage') }}/{{$product->package_image}}" alt="" class="img-fluid" width="360px" height="239px">
                            </span>
                            </a>
                        </div>
                        <br>
                        <h6><a href="{{route('productSee', $product->product_slug)}}">{{ $product->product_name }}</a></h6>
                        <span>{!! Str::limit($product ->description, 100,  ' .....') !!}</span>
                        <div class="u-border__top--blue_4 u-margin--10__top"></div>
                        <div class="u-margin--15__top u-t-c--green_2 u-font--bold"><i class="icon-ic_discount"></i>

                        </div> <a class="btn btn-dark-green" href="{{route('productSee', $product->product_slug)}}">Explore</a>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $products->links() }}
    </div>
</section>
<!-- End sell products -->
@include('custom.footer')
