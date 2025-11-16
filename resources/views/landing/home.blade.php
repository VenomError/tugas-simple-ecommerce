@extends('layouts.landing')
@section('title', 'Norda Ecommerce')
@section('content')
    <x-sections.slider-area />
    <x-sections.service-area />
    <div class="product-area pb-110">
        <div class="container">
            <div class="section-title-tab-wrap border-bottom-3 mb-30 pb-15">
                <div class="section-title-3">
                    <h2>Best Sellers</h2>
                </div>
                <div class="tab-style-3 nav">
                    <a class="active" href="#product-1" data-bs-toggle="tab">Top 10 </a>
                    <a href="#product-2" data-bs-toggle="tab"> Womens</a>
                    <a href="#product-3" data-bs-toggle="tab">Mens </a>
                    <a href="#product-4" data-bs-toggle="tab">Kids </a>
                    <a href="#product-5" data-bs-toggle="tab">Accessories </a>
                </div>
            </div>
            <div class="tab-content jump">
                <div id="product-1" class="tab-pane active">
                    <div
                        class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-21.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>women</span>
                                    <h4><a href="product-details.html">Flower Flanner Check Jacke</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$19.98</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-24.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-40%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>accessories</span>
                                    <h4><a href="product-details.html">Constrasting Sunglasses</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(5)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$23.75</span>
                                            <span class="old-price">$43.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-23.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Hagerstown School Swearshits</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$29.58</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-26.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Basic Simple Solid Color T-Shirt</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$12.47</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-2" class="tab-pane">
                    <div
                        class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-23.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Hagerstown School Swearshits</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$29.58</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-26.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Basic Simple Solid Color T-Shirt</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$12.47</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-21.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>women</span>
                                    <h4><a href="product-details.html">Flower Flanner Check Jacke</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$19.98</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-24.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-40%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>accessories</span>
                                    <h4><a href="product-details.html">Constrasting Sunglasses</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(5)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$23.75</span>
                                            <span class="old-price">$43.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-3" class="tab-pane">
                    <div
                        class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-26.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Basic Simple Solid Color T-Shirt</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$12.47</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-23.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Hagerstown School Swearshits</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$29.58</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-4" class="tab-pane">
                    <div
                        class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-24.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-40%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>accessories</span>
                                    <h4><a href="product-details.html">Constrasting Sunglasses</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(5)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$23.75</span>
                                            <span class="old-price">$43.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-26.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Basic Simple Solid Color T-Shirt</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$12.47</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-21.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>women</span>
                                    <h4><a href="product-details.html">Flower Flanner Check Jacke</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$19.98</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-23.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Hagerstown School Swearshits</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$29.58</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-5" class="tab-pane">
                    <div
                        class="product-slider-active-2 dot-style-2 dot-style-2-position-static dot-style-2-mrg-2 dot-style-2-active-black">
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-21.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>women</span>
                                    <h4><a href="product-details.html">Flower Flanner Check Jacke</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$19.98</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-24.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-40%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>accessories</span>
                                    <h4><a href="product-details.html">Constrasting Sunglasses</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(5)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$23.75</span>
                                            <span class="old-price">$43.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-26.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Basic Simple Solid Color T-Shirt</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$12.47</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-23.jpg"
                                            alt=""></a>
                                </div>
                                <div class="product-content-3">
                                    <span>Mens</span>
                                    <h4><a href="product-details.html">Hagerstown School Swearshits</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span>$29.58</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-22.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-25%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>women, accessories</span>
                                    <h4><a href="product-details.html">Scraf Fabric Wedgesv</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$13.75</span>
                                            <span class="old-price">$23.65</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-2">
                            <div class="single-product-wrap-2 mb-25">
                                <div class="product-img-2">
                                    <a href="product-details.html"><img src="assets/images/product/product-25.jpg"
                                            alt=""></a>
                                    <span class="pro-badge right bg-red">-35%</span>
                                </div>
                                <div class="product-content-3">
                                    <span>Women, Shoes</span>
                                    <h4><a href="product-details.html">Fila Simple Sneaker in White Color</a></h4>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-2">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="pro-price-action-wrap">
                                        <div class="product-price-3">
                                            <span class="new-price">$37.45</span>
                                            <span class="old-price">$50.55</span>
                                        </div>
                                        <div class="product-action-3">
                                            <button title="Wishlist"><i class="icon-heart"></i></button>
                                            <button title="Compare"><i class="icon-basket-loaded"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-area pb-110">
        <div class="container">
            <div class="section-title-tab-wrap border-bottom-5 align-items-inherit mb-50">
                <div class="section-title-3">
                    <h2>Recommended For You</h2>
                </div>
                <div class="tab-style-4 nav">
                    <a class="active" href="#product-6" data-bs-toggle="tab">Top 10</a>
                    <a href="#product-7" data-bs-toggle="tab"> Women </a>
                    <a href="#product-8" data-bs-toggle="tab">Men </a>
                    <a href="#product-9" data-bs-toggle="tab"> Shoes</a>
                    <a href="#product-10" data-bs-toggle="tab">Accessories</a>
                </div>
            </div>
            <div class="tab-content jump">
                <div id="product-6" class="tab-pane active">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-29.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-30.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-31.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-7" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-31.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-30.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-29.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-8" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-31.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-30.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-29.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-9" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-30.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-29.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-31.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-10" class="tab-pane">
                    <div class="product-slider-active-3 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-29.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">Short</a>
                                    </div>
                                    <h3><a href="product-details.html">Black Simple Sneaker</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$43.50</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-30.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men, </a>
                                        <a href="shop.html">Watches</a>
                                    </div>
                                    <h3><a href="product-details.html">Silver Coloured Watch</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$265.70 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-31.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">women</a>
                                    </div>
                                    <h3><a href="product-details.html">Make Thing Happen T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$25.56 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-27.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Men</a>
                                    </div>
                                    <h3><a href="product-details.html">Basic Simple T-Shirt</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$38.50 </span>
                                        <span class="old-price">$42.85</span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-15">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-28.jpg" alt="">
                                    </a>
                                    <div class="product-action-2 tooltip-style-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2">
                                    <div class="product-content-categories">
                                        <a href="shop.html">Women,</a>
                                        <a href="shop.html">accessories</a>
                                    </div>
                                    <h3><a href="product-details.html">Scarf Fabric Wedges</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span>$56.50 </span>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area bg-gray-3 pb-80">
        <div class="container">
            <div class="brand-logo-wrap-2">
                <div class="single-brand-logo-2 mb-30">
                    <img src="assets/images/brand-logo/brand-logo-6.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="assets/images/brand-logo/brand-logo-7.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="assets/images/brand-logo/brand-logo-8.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="assets/images/brand-logo/brand-logo-9.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="assets/images/brand-logo/brand-logo-10.png" alt="brand-logo">
                </div>
                <div class="single-brand-logo-2 mb-30">
                    <img src="assets/images/brand-logo/brand-logo-11.png" alt="brand-logo">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                            <div class="tab-content quickview-big-img">
                                <div id="pro-1" class="tab-pane fade show active">
                                    <img src="assets/images/product/product-1.jpg" alt="">
                                </div>
                                <div id="pro-2" class="tab-pane fade">
                                    <img src="assets/images/product/product-3.jpg" alt="">
                                </div>
                                <div id="pro-3" class="tab-pane fade">
                                    <img src="assets/images/product/product-6.jpg" alt="">
                                </div>
                            </div>
                            <div class="quickview-wrap mt-15">
                                <div class="nav nav-style-6">
                                    <button class="nav-link active" id="pro-1-tab" data-bs-toggle="tab"
                                        data-bs-target="#pro-1" type="button" role="tab" aria-controls="pro-1"
                                        aria-selected="true">
                                        <img src="assets/images/product/quickview-s1.jpg" alt="product-thumbnail">
                                    </button>
                                    <button class="nav-link" id="pro-2-tab" data-bs-toggle="tab" data-bs-target="#pro-2"
                                        type="button" role="tab" aria-controls="pro-2" aria-selected="true">
                                        <img src="assets/images/product/quickview-s2.jpg" alt="product-thumbnail">
                                    </button>
                                    <button class="nav-link" id="pro-3-tab" data-bs-toggle="tab" data-bs-target="#pro-3"
                                        type="button" role="tab" aria-controls="pro-3" aria-selected="true">
                                        <img src="assets/images/product/quickview-s3.jpg" alt="product-thumbnail">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                            <div class="product-details-content quickview-content">
                                <h2>Simple Black T-Shirt</h2>
                                <div class="product-ratting-review-wrap">
                                    <div class="product-ratting-digit-wrap">
                                        <div class="product-ratting">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                        </div>
                                        <div class="product-digit">
                                            <span>5.0</span>
                                        </div>
                                    </div>
                                    <div class="product-review-order">
                                        <span>62 Reviews</span>
                                        <span>242 orders</span>
                                    </div>
                                </div>
                                <p>Seamlessly predominate enterprise metrics without performance based process improvements.
                                </p>
                                <div class="pro-details-price">
                                    <span class="new-price">$75.72</span>
                                    <span class="old-price">$95.72</span>
                                </div>
                                <div class="pro-details-color-wrap">
                                    <span>Color:</span>
                                    <div class="pro-details-color-content">
                                        <ul>
                                            <li><a class="dolly" href="#">dolly</a></li>
                                            <li><a class="white" href="#">white</a></li>
                                            <li><a class="azalea" href="#">azalea</a></li>
                                            <li><a class="peach-orange" href="#">Orange</a></li>
                                            <li><a class="mona-lisa active" href="#">lisa</a></li>
                                            <li><a class="cupid" href="#">cupid</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-size">
                                    <span>Size:</span>
                                    <div class="pro-details-size-content">
                                        <ul>
                                            <li><a href="#">XS</a></li>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <span>Quantity:</span>
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                    </div>
                                </div>
                                <div class="product-details-meta">
                                    <ul>
                                        <li><span>Categories:</span> <a href="#">Woman,</a> <a href="#">Dress,</a> <a
                                                href="#">T-Shirt</a></li>
                                        <li><span>Tag: </span> <a href="#">Fashion,</a> <a href="#">Mentone</a> , <a
                                                href="#">Texas</a></li>
                                    </ul>
                                </div>
                                <div class="pro-details-action-wrap">
                                    <div class="pro-details-add-to-cart">
                                        <a title="Add to Cart" href="#">Add To Cart </a>
                                    </div>
                                    <div class="pro-details-action">
                                        <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                        <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                        <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                        <div class="product-dec-social">
                                            <a class="facebook" title="Facebook" href="#"><i
                                                    class="icon-social-facebook"></i></a>
                                            <a class="twitter" title="Twitter" href="#"><i
                                                    class="icon-social-twitter"></i></a>
                                            <a class="instagram" title="Instagram" href="#"><i
                                                    class="icon-social-instagram"></i></a>
                                            <a class="pinterest" title="Pinterest" href="#"><i
                                                    class="icon-social-pinterest"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection