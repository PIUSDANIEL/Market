@include('Mainpage.Header')

    {{-- BIG SCREEN --}}
   <div class="row after-header bigscreen">
        <div class=" sidenav">
            <form class="mt-5 mb-5" id="submitfilterbig">
                @csrf
                <div class="accordion accordion-flush " id="accordionFlushExamplefilter">
                    @foreach ($category as $categories)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed p-1 small" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $categories['categoryname'] }}filter" aria-expanded="false" aria-controls="{{ $categories['categoryname'] }}filter">
                                    <i class="fas fa-caret-down mr-2 small"></i> {{ $categories['categoryname'] }}
                                    </button>
                                </h2>
                                <div id="{{ $categories['categoryname'] }}filter" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExamplefilter">
                                    <div class="accordion-body ">

                                        <div class="row ">
                                                @foreach ($categories['subcat'] as $sub)
                                                    <div class="card shadow rounded  col-2 p-1">
                                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                            <input type="radio" class="btn-check" name="subcategory" id="{{$sub->id}}big" value="{{$sub->id}}" autocomplete="off">
                                                            <label class="btn btn-outline-primary p-0" for="{{ $sub->id }}big">
                                                                <div class="col-12">
                                                                    <img src="{{ $sub->image}}" class="" style="width:100%; height:100%;"  alt="Sunset Over the Sea"/>
                                                                </div>

                                                            </label>

                                                        </div>

                                                    </div>
                                                @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                    @endforeach
                </div>

                <div class="row ">
                    <div class="col-12 mt-3">
                        <div class="input-group">
                            <span class="input-group-text">Product Name</span>
                            <input type="text" name="productname" class="form-control form-control-sm" aria-label="">
                        </div>

                    </div>

                    <div class="col-12 mt-3 ">
                        <div class="input-group">
                        <span class="input-group-text small">Price</span>
                        <input type="number" name="minprice" aria-label="First name" class="form-control form-control-sm" placeholder="Min price" min="1" >
                            <p class="mx-2" style="color: black;">to</p>
                        <input type="number"  name="maxprice" aria-label="Last name" class="form-control form-control-sm" placeholder="Max price" min="1" >
                        </div>
                    </div>


                    <div class="col-12 mt-3 ">

                        <div class="list-group">
                            <label class="list-group-item medium">
                                <input class="form-check-input me-1" type="radio" name="highlow" value="high">
                                Highest to Lowest
                            </label>
                            <label class="list-group-item medium">
                                <input class="form-check-input me-1" type="radio" name="highlow" value="low">
                                Lowest to Highest
                            </label>
                        </div>

                    </div>


                    <div class="col-md-12 mt-3 ">
                        <div class="list-group">
                            <label class="list-group-item medium">
                                <input class="form-check-input me-1" type="checkbox" name="latest" value="1">
                                Latest Product
                            </label>
                        </div>
                    </div>



                    <div class="col-12 mt-3 ">
                        <h6 class="w-75 p-1 rounded " style="background-color:#cbd5e0 ; color:black;">Brand</h6>

                               <div class="list-group filterbrandss" id="">

                               </div>


                    </div>

                    <div class="col-12 mt-3 ">
                        <h6 class="w-75 p-1 rounded " style="background-color:#cbd5e0 ; color:black;">Percentage Discount</h6>

                        <div class="list-group">
                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="percentage" value="50">
                                50% and more
                            </label>
                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="percentage" value="40">
                                40% and more
                            </label>
                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="percentage" value="30">
                                30% and more
                            </label>
                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="percentage" value="20">
                                20% and more
                            </label>
                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="percentage" value="10">
                               10% and more
                            </label>
                        </div>

                    </div>

                    <div class="col-12 mt-3 ">
                        <h6 class="w-75 p-1 rounded " style="background-color:#cbd5e0 ; color:black;">Product Rating</h6>

                        <div class="list-group">

                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="rating" value="4">
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>

                                & above
                            </label>
                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="rating" value="3">
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>
                               <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>

                                & above
                            </label>
                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="rating" value="2">
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>
                                <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>

                                & above
                            </label>
                            <label class="list-group-item small">
                                <input class="form-check-input me-1" type="radio" name="rating" value="1">
                                <i class="fa fa-star"  style="color:yellow ;" aria-hidden="true"></i>
                               <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>
                               <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>
                               <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>
                               <i class="fa fa-star"  style="color:rgb(141, 137, 137);" aria-hidden="true"></i>

                               & above
                            </label>
                        </div>

                    </div>

                    <div class="col-12 mt-3 d-flex">
                       <button type="submit" id="submitfilter" class="btn btn-sm btn-outline-info ms-auto">Apply<button>

                    </div>
                </div>
            </form>
        </div>

        <div class="ms-auto rightside ">
            <div class="row d-flex filterproduct">
                @foreach ($prod as $products)
                    <div class="card p-0 m-1 col-2 subcatprodd  " style="">
                        <img src="{{ $products->main_image }}" class="card-img-top" alt="...">
                        <div class="card-body p-1">
                            <p class="card-text  small">{{ $products->productname }}</p>
                            <p class="card-text mt-n3 small">{{ $products->price }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- -footer for big screen --}}
            <div class="row  mx-auto  footer mt-3  " style="background-color:#6b7280 ; width:77.1%;">

                <div class="col-11 col-lg-5 mx-auto my-2 shadow" style="background-color:#00000000 ; border-radius:20px;">
                    <p class="text-white submitfilterd">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Praesentium et, ex exercitationem nobis minima architecto
                    assumenda eligendi autem quas amet perspiciatis unde, voluptate quasi sit.
                    Magni ad soluta blanditiis saepe?mm
                    </p>
                </div>
                <div class="col-11 col-lg-5 mx-auto my-2 shadow" style="background-color:#00000000 ; border-radius:20px; ">
                    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Praesentium et, ex exercitationem nobis minima architecto
                    assumenda eligendi autem quas amet perspiciatis unde, voluptate quasi sit.
                    Magni ad soluta blanditiis saepe?
                    </p>
                </div>
    
            </div>
        </div>

        
   </div>






    {{-- SMALL SCREEN --}}
    <div class="row after-header small-screen filterproduct">

        @foreach ($prod as $products)
            <div class="card p-0 m-1 col-2 subcatprodd  " style="">
                <img src="{{ $products->main_image }}" class="card-img-top" alt="...">
                <div class="card-body p-1">
                    <p class="card-text  small">{{ $products->productname }}</p>
                    <p class="card-text mt-n3 small">{{ $products->price }}</p>
                </div>
            </div>
        @endforeach

    </div>

  {{-- footer smsll screen--}}
<div class="row footer mt-3 small-screen" style="background-color:#6b7280 ;">





    <div class="col-11 col-lg-5 mx-auto my-2 shadow" style="background-color:#00000000 ; border-radius:20px;">
        <p class="text-white submitfilterd">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        Praesentium et, ex exercitationem nobis minima architecto
        assumenda eligendi autem quas amet perspiciatis unde, voluptate quasi sit.
        Magni ad soluta blanditiis saepe?mm
        </p>
    </div>
    <div class="col-11 col-lg-5 mx-auto my-2 shadow" style="background-color:#00000000 ; border-radius:20px; ">
        <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
        Praesentium et, ex exercitationem nobis minima architecto
        assumenda eligendi autem quas amet perspiciatis unde, voluptate quasi sit.
        Magni ad soluta blanditiis saepe?
        </p>
    </div>

</div>


    <!---jquery---->



        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.loop').owlCarousel({
                center: true,
                loop: true,
                margin: 10,
                responsive: {
                    0: {
                    items: 3
                    },
                    360: {
                    items: 3
                    },
                    400: {
                    items: 4
                    },
                    1000: {
                    items: 10
                    }
                }
                });

            });

            $(document).ready(function() {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                responsive: {
                    0: {
                    items: 2
                    },
                    600: {
                    items: 3
                    },
                    1000: {
                    items: 5
                    }
                }
                })
            });




        </script>

