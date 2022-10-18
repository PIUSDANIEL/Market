    {{-- footer --}}
    <div class="row footer mt-3 " style="background-color:#6b7280 ;">

        {{-- DETAILS MODAL --}}
        <!-- Modal -->
        <div class="modal fade rounded w-100" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-scrollable modal-xl rounded">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="detailsModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Add images to <div class="fotorama"></div> -->
                                <div class="fotorama"
                                 data-width="100%"
                                 data-ratio="800/600"
                                 data-allowfullscreen="native"
                                 data-nav="thumbs"
                                 data-transition="crossfade"
                                 data-arrows="true"
                                 data-click="true"
                                 data-swipe="true">
                                    <img src="{{ asset('images/m14.jpg') }}">
                                    <img src="{{ asset('images/m16.jpg') }}">
                                    <img src="{{ asset('images/m12.jpg') }}">
                                    <img src="{{ asset('images/m13.jpg') }}">
                                    <img src="{{ asset('images/images(5).jpg') }}">
                                    <img src="{{ asset('images/snicker.jpg') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <h6 class="mt-2">XIAOMI Redmi Note 11S, 8GB/128GB, 5000 MAh Battery - Twilight Blue</h6 cla>
                                <p>Brand: XIAOMI | Similar products from XIAOMI</p>
                                <p class="small">
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                    <i class="fa fa-star small" aria-hidden="true"></i>
                                </p>
                                <hr>
                                <p class="money">&#8358;  500,000</p>
                                <p class=""><del class="mr-4">&#8358; 600,000</del>    <span style="background-color: rgba(238, 0, 0, 0.114);" class="ml-4 rounded p-1 text-danger">&#37;8</span></p>
                                <p><i class="fa fa-heart" aria-hidden="true"></i> Add to wishlist</p>
                                <div class="card" >

                                    <div class="card-body">
                                        <p class="card-title">Seller's information</p>
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
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo2">
                                        <button class="accordion-button collapsed p-2 text-info" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo2">
                                           Specification
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo2" data-bs-parent="#accordionFlushExample1">
                                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
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
