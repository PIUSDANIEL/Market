    {{-- footer --}}
    <div class="row footer mt-3 " style="background-color:#6b7280 ;">

        {{-- DETAILS MODAL --}}
        <!-- Modal -->
        <div class="modal custom fade rounded " id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true" >
            <div class="modal-dialog  modal-dialog-scrollable  modal-xl  rounded" >
                <div class="modal-content " >
                    <div class="modal-header">
                        <h5 class="modal-title alert-success p-1" id="detailsModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">

                                <div id="carouselExampleCaptions" class="carousel  slide rounded" data-bs-ride="carousel">

                                    <div class="carousel-inner caro rounded">

                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                            <div class="col-md-12 col-lg-6">
                                <h6 class="mt-2" id="detailsname"></h6 cla>
                                <p id="detailsbrand">Brand: XIAOMI | Similar products from XIAOMI</p>
                                <p class="small">
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                </p>
                                <hr>
                                <p class="money" id="detailsprice"></p>
                                <p class="" ><del class="mr-4" id="detailslistprice"> </del>    <span style="background-color: rgba(238, 0, 0, 0.114);" class="ml-4 rounded p-1 text-danger" id="detailspercent"> </span></p>
                                <p><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</p>
                                <div class="row alert-danger quantity-error"></div>

                                <div class="row" id="detailsize"></div>

                                <div class="card" >

                                    <div class="card-body">
                                        <p class="card-title" id="detailsseller">Seller's information</p>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                               <div class="accordion accordion-flush" id="accordionFlushExample1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne1">
                                        <button class="accordion-button collapsed p-2 text-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne1" aria-expanded="false" aria-controls="flush-collapseOne1">
                                            Product description
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne1" data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body" id="detailsdesc">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo2">
                                        <button class="accordion-button collapsed p-2 text-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                                           Specification
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo2" data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body" id="detailsspec">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                                    </div>
                                </div>

                               </div>
                            </div>
                        </div>

                        <div class="row mt-4 ">
                            <div class="col-12 d-flex justify-content-between">
                                <span class=" rounded px-3 text-white bg-info" >Similar product</span>

                            </div>

                            <div class="loop owl-carousel owl-theme mt-1 p-1" id="">
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="row mt-4 ">
                            <div class="col-12 d-flex justify-content-between">
                                <span class=" rounded px-3 text-white bg-info" >Customers also viewed</span>

                            </div>

                            <div class="loop owl-carousel owl-theme mt-1 p-1" id="">
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-4 ">
                            <div class="col-12 d-flex justify-content-between">
                                <span class=" rounded px-3 text-white bg-info" >You may also like these</span>

                            </div>

                            <div class="loop owl-carousel owl-theme mt-1 p-1" id="">
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{ asset('images/images(5).jpg') }}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>Nike sneakers mmmmmmm</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; 40,000</h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal"><i class="fa fa-close" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-info btn-sm">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-11 col-lg-5 mx-auto my-2 shadow" style="background-color:#00000000 ; border-radius:20px;">
            <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Praesentium et, ex exercitationem nobis minima architecto
            assumenda eligendi autem quas amet perspiciatis unde, voluptate quasi sit.
            Magni ad soluta blanditiis saepe?
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
        <!---jquery---->
            <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>


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

</body>
</html>
