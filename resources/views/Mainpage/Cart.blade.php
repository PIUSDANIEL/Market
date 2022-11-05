@include('Mainpage.Header')

    <div class="row after-header alert-success">
        <div class="col-11"><h5>Cart Summary</h5></div>
        <div class="col-11"><h6>Subtotal <span class="ml-4">&#8358;@convert(4550000)</span></h6>   </div>
        <div style="color: rgba(216, 90, 90, 0.619);">gggg</div>
    </div>

    <div class="row">

        @foreach ($cart1 as $cartp)
            <div class="col-12 col-sm-6 mt-2 shadow d-inline-flex rounded">
                <div class="row">
                    <div class="col-3 col-sm-2">
                        <img src="{{$cartp->image}}" class="img-fluid rounded" style="">
                    </div>
                    <div class="col-9 rounded">
                        <div class="row ">
                        <div class="col-12">
                            <p class=" small productcard">{{ $cartp->productname}}</p>
                            <p class="mt-n3 small ">&#8358; @convert($cartp->price)</p>
                            <p class="mt-n3 small ">{{ $cartp->size}}</p>
                            <p class="mt-n3 small "><i class="fa fa-square" aria-hidden="true" style="color:{{ $cartp->colour }};" ></i></p>
                            <p class="mt-n3 small ">{{ $cartp->available}} available</p>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex">
                                <p class="text-right ms-auto mt-n5" style="font-weight: 700;">
                                    &#8358; @convert($cartp->quantity * $cartp->price) 
                                </p>
                            </div>
                        </div>
                        <div class="row mt-n3 ">
                            <div class="col-12 d-flex">

                                <span class="badge alert-danger text-danger ml-n3 p-2" style="cursor: pointer ;"
                                    onclick="removeaddcart('{{$cartp->productid}}','{{$cartp->size}}','{{$cartp->colour}}','{{$cartp->price}}','{{$cartp->quantity}}','{{$cartp->available}}','removefinally')">
                                <i class="fa fa-trash text-danger"></i> remove</span>
                               
                                <span class="ms-auto">
                                    <button type="button" class="btn  btn-outline-info btn-sm p-1"
                                     onclick="removeaddcart('{{$cartp->productid}}','{{$cartp->size}}','{{$cartp->colour}}','{{$cartp->price}}','{{$cartp->quantity}}','{{$cartp->available}}','remove')">
                                        <span class="badge" style="color:black;"><i class="fa fa-minus" style="color:black;"></i></span>
                                    </button>
                                    <span class="badge bg-light" style="color:black;">{{ $cartp->quantity}}</span>
                                   @if ( $cartp->quantity ==  $cartp->available)
                                       <span class="badge text-danger" style="color:black;">Max</span>
                                        
                                   @else
                                        <button type="button" class="btn btn-outline-info btn-sm p-1 " 
                                        onclick="removeaddcart('{{$cartp->productid}}','{{$cartp->size}}','{{$cartp->colour}}','{{$cartp->price}}','{{$cartp->quantity}}','{{$cartp->available}}','add')">
                                            <span class="badge" style="color:black;"><i class="fa fa-plus" style="color:black;"></i></span>
                                        </button>
                                   @endif
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

   


@includeIf('Mainpage.Footer')