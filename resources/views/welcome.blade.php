@include('Mainpage.Header', ['category'=>$category])

                {{-- -THESE ARE ALL FOR SMALL SCREE --}}

                {{-- first category --}}
                <div class="table-responsive after-header small-screen ">
                    <table class="table  m-0">

                        <tbody>
                          <tr>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Furniture</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Automobile</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                            <td><span class="p-2 rounded-pill shadow border text-dark" style="border-color: rgb(241, 104, 0);">Electronics</span></td>
                          </tr>

                        </tbody>
                    </table>
                </div>



                {{-- -CAROUSEL --}}
                <div class="row mt-3 mycarosel small-screen" >
                                <!-- Carousel wrapper -->
                    <div id="carouselMaterialStyle" class="carousel slide carousel-fade mycarosel" data-mdb-ride="carousel" >
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
                            aria-label="Slide 1"></button>
                        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                        </div>

                            <!-- Inner -->
                            <div class="carousel-inner rounded-8 shadow-5-strong" >
                            <!-- Single item -->
                            <div class="carousel-item active mycarosel" >
                                <img src="{{ asset('images/b2.jpg') }}" class="d-block w-100 mycarosel"
                                alt="Sunset Over the City"  />
                                <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                </div>
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item mycarosel" >
                                <img src="{{ asset('images/b1.gif') }}" class="d-block w-100 mycarosel"
                                alt="Canyon at Nigh"  />
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>

                            <!-- Single item -->
                            <div class="carousel-item mycarosel" >
                                <img src="{{ asset('images/images(3).jpg') }}" class="d-block w-100 mycarosel"
                                alt="Cliff Above a Stormy Sea"  />
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>

                              <!-- Single item -->
                              <div class="carousel-item mycarosel" >
                                <img src="{{ asset('images/b3.gif') }}" class="d-block w-100 mycarosel"
                                alt="Cliff Above a Stormy Sea"  />
                                <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                </div>
                            </div>
                        </div>
                            <!-- Inner -->

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <!-- Carousel wrapper -->
                </div>

                 {{-- -CATEGORY --}}
                <div class="row p-0 mt-4 small-screen">

                    <div class="col-2 col-md-1" >

                        <div class="row  cardcategoryall cardcategory mx-auto rounded">
                            <div class="col-12 "><img src="{{ asset('images/cate3.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                            <div class="col-12 "><p class=" mb-0 category-text ">Categories</p></div>
                        </div>

                    </div>

                    <div class="col-10 col-md-11">
                        <div class="table-responsive mt-2">
                          <table class="table m-0">
                            <tbody>
                                <tr>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src='{{ asset('images/computer.png') }}' class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Computers Cars</p></div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src='{{ asset('images/iphone.png') }}' class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Phone</p></div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Automobile</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row  cardcategory mx-auto ">
                                                <div class="col-12 "><img src="{{ asset('images/fashion.png') }}" class="categimg mx-auto "  alt="Sunset Over the Sea"/></div>
                                                <div class="col-12 "><p class=" mb-0 category-text ">Fashion</p></div>
                                            </div>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                       </div>
                    </div>


                </div>


                {{-- -fLASH SALE --}}
                <div class="row mt-4 small-screen">
                        <div class="col-12 d-flex justify-content-between">
                            <span class=" rounded px-3 text-white bg-info" >flash sale</span>
                            <span class=" rounded px-3 text-white bg-info" >2:30pm</span>
                            <span class=" rounded px-3 bg-info" ><a href="#" class="text-white">see more</a></span>
                        </div>

                        <div class="loop owl-carousel owl-theme mt-1 p-1" id="">
                           @foreach ($flash as $flas)
                                <div class="item" onclick="detailsmodal({{$flas->id}})" data-bs-toggle="modal" data-bs-target="#detailsModal">
                                    <div class="card mycard shadow rounded" style="">
                                        <img src="{{$flas->main_image}}" class="card-img-top"  height='80' alt="Sunset Over the Sea"/>
                                        <div class="card-body px-1">
                                            <div class="col-12 mt-n3 productcard "><p>{{ $flas->productname}}</p></div>
                                            <div class="col-12 mt-n3 mb-n3"><h6>&#8358; {{ number_format($flas->price) }}</h6></div>
                                        </div>
                                    </div>
                                </div>
                           @endforeach
                        </div>

                </div>

                @foreach ($products as $product)
                 {{-- -big card --}}
                    <div class="row mt-4 small-screen">

                        <div class="col-12  mx-auto mb-1  d-flex">
                            <span class="border border-info rounded px-2">{{ $product['categoryname'] }}</span>
                            <a href="products/{{$product['id']}}" class="ms-auto border border-info rounded px-2">Visit</a href="products/{{$product['id']}}">
                        </div>

                        @foreach ($product['product'] as $produc)
                            <div class="col-6 card rounded shadow" onclick="detailsmodal({{$produc->id}})" style="" data-bs-toggle="modal" data-bs-target="#detailsModal">
                                <img src="{{$produc->main_image}}" class="card-img-top m-1" style="" alt="...">
                                <div class="card-body px-1 py-0">
                                    <h6 class="card-title">{{ $produc->productname }}</h6>
                                    <p class="card-text">&#8358;{{ number_format($produc->price) }}</p>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach


                   <!-- Set up your HTML -->
                <div class="row mt-4 small-screen">
                    <div class="owl-carousel  p-0  ">
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m8.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m19.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m18.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m11.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m3.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m10.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m2.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                    </div>
                </div>


                {{-- -fLASH SALE --}}
                <div class="row small-screen">
                    <div class="col-12 d-flex justify-content-between">
                        <span class=" rounded px-3 border  " >flash sale</span>

                        <span class=" rounded px-3 border " ><a href="#" class="">see more</a></span>
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

                {{-- -fLASH SALE --}}
                <div class="row mt-3 small-screen">
                    <div class="col-12 d-flex justify-content-between">
                        <span class=" rounded px-3 border  " >flash sale</span>

                        <span class=" rounded px-3 border " ><a href="#" class="">see more</a></span>
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



                {{-- --big card --}}
               <div class="row mt-3 small-screen">

                    <div class="col-12  mx-auto mb-1  d-flex">
                        <span class="border border-info rounded px-2">Footwears</span>
                        <span class="ms-auto border border-info rounded px-2">Visit</span>
                    </div>

                    <div class=" col-11 col-sm-5  mt-2 mx-auto d-flex justify-content-around p-2 shadow rounded  " style="">

                            <div class="card rounded shadow" style="">
                            <img src="{{ asset('images/m5.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>

                            <div class="card rounded shadow" style="">
                                <img src="{{ asset('images/m6.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>

                    </div>


                    <div class="col-11 col-sm-5  mt-2 mx-auto d-flex justify-content-around p-2 shadow rounded  " style="">

                        <div class="card rounded shadow" style="">
                            <img src="{{ asset('images/m7.jpg') }}" class="card-img-top m-1" style="" alt="...">

                        </div>

                        <div class="card rounded shadow" style="">
                            <img src="{{ asset('images/m8.jpg') }}" class="card-img-top m-1" style="" alt="...">

                        </div>

                    </div>

               </div>



                {{-- -fLASH SALE --}}
                <div class="row mt-3 small-screen">
                <div class="col-12 d-flex justify-content-between">
                    <span class=" rounded px-3 border  " >flash sale</span>

                    <span class=" rounded px-3 border " ><a href="#" class="">see more</a></span>
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


                 <!-- Set up your HTML -->
                 <div class="row mt-3 small-screen">
                    <div class="owl-carousel  p-0  ">
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m8.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m19.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m18.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m11.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m3.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m10.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                        <div class=" m-0">
                            <div class="card rounded theowlbig shadow" style="">
                                <img src="{{ asset('images/m2.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>
                        </div>
                    </div>
                 </div>

                  {{-- -fLASH SALE --}}
                <div class="row small-screen">
                    <div class="col-12 d-flex justify-content-between">
                        <span class=" rounded px-3 border  " >flash sale</span>

                        <span class=" rounded px-3 border " ><a href="#" class="">see more</a></span>
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

                   {{-- --big card --}}
                <div class="row mt-3 small-screen">

                    <div class="col-11  mx-auto mb-1  d-flex">
                        <span class="border border-info rounded px-2">Footwears</span>
                        <span class="ms-auto border border-info rounded px-2">Visit</span>
                    </div>

                    <div class=" col-11 col-sm-5  mt-2 mx-auto d-flex justify-content-around p-2 shadow rounded  " style="">

                            <div class="card rounded shadow" style="">
                            <img src="{{ asset('images/m5.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>

                            <div class="card rounded shadow" style="">
                                <img src="{{ asset('images/m6.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>

                    </div>


                        <div class="col-11 col-sm-5  mt-2 mx-auto d-flex justify-content-around p-2 shadow rounded  " style="">

                            <div class="card rounded shadow" style="">
                                <img src="{{ asset('images/m7.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>

                            <div class="card rounded shadow" style="">
                                <img src="{{ asset('images/m8.jpg') }}" class="card-img-top m-1" style="" alt="...">

                            </div>

                        </div>

                </div>









                {{-- THIS IS FOR BIGGER SCREEN --}}

                <div class="row bigscreen  bringitdown" >
                    <div class="col-3">
                        <div class="row mx-auto ">
                            <div class="col">
                                <ul class="list-group mx-auto">
                                  <li class="list-group-item d-flex ">
                                    <span class="badge mr-2 text-dark rounded-circle">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </span>
                                    Cras justo odio
                                  </li>
                                  <li class="list-group-item d-flex ">
                                    <span class="badge mr-2 text-dark rounded-circle">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </span>
                                    saved items
                                  </li>
                                  <li class="list-group-item d-flex ">
                                    <span class="badge mr-2 text-dark rounded-circle">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    </span>
                                    cart
                                  </li>
                                  <li class="list-group-item d-flex ">
                                    <span class="badge mr-2 text-dark rounded-circle">
                                       <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </span>
                                   inbox
                                  </li>
                                  <li class="list-group-item d-flex ">
                                    <span class="badge mr-2 text-dark rounded-circle">
                                      <i class="fa fa-first-order" aria-hidden="true"></i>
                                    </span>
                                  order
                                  </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row mt-2  mx-auto " style="width: 100%;">

                            <div class="accordion accordion-flush " id="accordionFlushExample">

                                @foreach ($category as $categories)

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed p-2" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $categories['categoryname'] }}" aria-expanded="false" aria-controls="{{ $categories['categoryname'] }}">
                                               <i class="fas fa-dot-circle mr-2"></i> {{ $categories['categoryname'] }}
                                            </button>
                                        </h2>
                                        <div id="{{ $categories['categoryname'] }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body ">

                                                <div class="row ">
                                                    <div class="card shadow m-1 rounded-circle col-2 p-1">
                                                        <img src="{{ asset('images/all.png') }}" class=" card-img-top"  alt="Sunset Over the Sea"/>
                                                    </div>


                                                        @foreach ($categories['subcat'] as $sub)
                                                            <div class="card shadow rounded m-1 col-2 p-1">
                                                                <img src="{{ $sub->image}}" class=" card-img-top"  alt="Sunset Over the Sea"/>
                                                            </div>
                                                        @endforeach




                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                @endforeach

                            </div>

                        </div>
                    </div>

                    <div class="col-9">
                        {{-- -CAROUSEL --}}
                        <div class="row mt-3 mycarosel " >
                            <!-- Carousel wrapper -->
                            <div id="carouselMaterialStyle" class="carousel slide carousel-fade mycarosel" data-mdb-ride="carousel" >
                                <!-- Indicators -->
                                <div class="carousel-indicators">
                                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="0" class="active" aria-current="true"
                                    aria-label="Slide 1"></button>
                                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide-to="2" aria-label="Slide 3"></button>
                                </div>

                                    <!-- Inner -->
                                    <div class="carousel-inner rounded-8 shadow-5-strong" >
                                    <!-- Single item -->
                                    <div class="carousel-item active mycarosel" >
                                        <img src="{{ asset('images/b2.jpg') }}" class="d-block w-100 mycarosel"
                                        alt="Sunset Over the City"  />
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                        </div>
                                    </div>

                                    <!-- Single item -->
                                    <div class="carousel-item mycarosel" >
                                        <img src="{{ asset('images/b1.gif') }}" class="d-block w-100 mycarosel"
                                        alt="Canyon at Nigh"  />
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>Second slide label</h5>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>

                                    <!-- Single item -->
                                    <div class="carousel-item mycarosel" >
                                        <img src="{{ asset('images/images(3).jpg') }}" class="d-block w-100 mycarosel"
                                        alt="Cliff Above a Stormy Sea"  />
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>

                                    <!-- Single item -->
                                    <div class="carousel-item mycarosel" >
                                        <img src="{{ asset('images/b3.gif') }}" class="d-block w-100 mycarosel"
                                        alt="Cliff Above a Stormy Sea"  />
                                        <div class="carousel-caption d-none d-md-block">
                                        <h5>Third slide label</h5>
                                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                    <!-- Inner -->

                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-mdb-target="#carouselMaterialStyle" data-mdb-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <!-- Carousel wrapper -->
                        </div>

                           {{-- --big card --}}
                        <div class="row mt-3">

                            <div class="col-12  mx-auto mb-1  d-flex">
                                <span class="border bg-info text-light rounded px-2">Flash sales</span>
                                <span class="ms-auto border bg-info text-light rounded px-2">Visit</span>
                            </div>

                            @foreach ($flash as $flas)
                                <div class=" flash m-1  card border-info rounded shadow p-0" onclick="detailsmodal({{$flas->id}})" data-bs-toggle="modal" data-bs-target="#detailsModal" style="">
                                    <img src="{{ $flas->main_image}}" class="card-img-top " style="height: 10rem;" alt="...">
                                    <div class="card-body px-1 py-0">
                                        <h6 class="card-title">{{$flas->productname}}</h6>
                                        <p class="card-text">&#8358;{{ number_format($flas->price) }}</p>

                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>

                </div>

                <div class="row bigscreen   mt-3">
                    @foreach ($products as $product)
                        <div class="  thediv  mx-auto p-2 mt-5  shadow-lg rounded ">

                            <div class="row ">
                                <div class="col-12 d-flex">
                                    <span>{{$product['categoryname']}}</span>
                                    <a href="products/{{$product['id']}}" class="ms-auto" style="cursor:pointer;">see more <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a>
                                </div>
                            </div>

                            <div class="row d-flex justify-content-around ">
                                @foreach ($product['product'] as $productdetail)
                                    <div class="card p-0 mt-1 bigcardforbigscreen" onclick="detailsmodal({{$productdetail->id}})" data-bs-toggle="modal" data-bs-target="#detailsModal">
                                        <img src="{{$productdetail->main_image}}" class="card-img-top" style="height: 10rem;" alt="...">
                                        <div class="card-body px-1 py-0">
                                            <h6 class="card-title">{{$productdetail->productname }}</h6>
                                            <p class="card-text">&#8358;{{ number_format($productdetail->price) }} </p>

                                        </div>
                                    </div>
                                @endforeach

                            </div>




                        </div>
                    @endforeach
                </div>






                @if (session('success'))

                <script>
                    swal("Welcome","{!! session('success') !!}","success",{
                        button:"ok",
                    });
                </script>

                @endif

@includeIf('Mainpage.Footer')
