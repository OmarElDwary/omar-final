

    <section id="cart" class="py-3">
        <div class="container-fluid w-75">
            <h5 class="font-cairo font-size-20">Shopping Cart</h5>

            <!--  shopping cart items   -->
                <div class="row">
                    <div class="col-sm-9">
                        <!-- cart item -->
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <img src="{{(/images/)}}/{{$item->model->image}}" style="height: 120px;" alt="{{$item->model->name}}" class="img-fluid">
                                </div>
                                <div class="col-sm-8">
                                    <h5 class="font-cairo font-size-20">Classic Tshirt</h5>
                                    <!-- product rating -->
                                    <div class="d-flex">
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                          </div>
                                          <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                    </div>
                                    <!--  !product rating-->

                                    <!-- product qty -->
                                        <div class="qty d-flex pt-2">
                                            <div class="d-flex font-rale w-25">
                                                <button wire:ckick.prevent="increaseQuantity('{{$item->rowId}}')" class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                <button wire:ckick.prevent="decreaseQuantity('{{$item->rowId}}') data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                            </div>
                                            <button type="submit" class="btn font-cairo text-danger px-3 border-right">Delete</button>
                                            <button type="submit" class="btn font-cairo text-danger">Save for Later</button>
                                        </div>
                                    <!-- !product qty -->

                                </div>

                                <div class="col-sm-2 text-right">
                                    <div class="font-size-20 text-danger font-cairo">
                                        $<span class="product_price">{{$item->subtotal}}</span>
                                    </div>
                                </div>
                            </div>
                        <!-- !cart item -->
                        <!-- cart item -->
                        <div class="row border-top py-3 mt-3">
                            <div class="col-sm-2">
                                <img src="./images/classic shirt.jpg" style="height: 120px;" alt="cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-cairo font-size-20">Classic Tshirt</h5>
                                <!-- product rating -->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                      </div>
                                      <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                </div>
                                <!--  product rating-->

                                <!-- product qty -->
                                    <div class="qty d-flex pt-2">
                                        <div class="d-flex font-rale w-25">
                                            <button class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                            <input type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                            <button class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                        </div>
                                        <button type="submit" class="btn font-cairo text-danger px-3 border-right">Delete</button>
                                        <button type="submit" class="btn font-cairo text-danger">Save for Later</button>
                                    </div>
                                <!-- product qty -->

                            </div>

                            <div class="col-sm-2 text-right">
                                <div class="font-size-20 text-danger font-cairo">
                                    $<span class="product_price">15</span>
                                </div>
                            </div>
                        </div>
                    <!-- !cart item -->
                    </div>
                    <!-- subtotal section-->
                    <div class="col-sm-3">
                        <div class="sub-total border text-center mt-2">
                            <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery.</h6>
                            <div class="border-top py-4">
                                <h5 class="font-cairo font-size-20">Subtotal (2 item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price">15.0</span> </span> </h5>
                                <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <!-- !subtotal section-->
                </div>
            <!--  !shopping cart items   -->
        </div>
    </section>


  <!--Featured Items-->
<section id="trending-items">
<div class="container py-5">
  <h4 class="font-rubik text-center font-size-20">Trending Items</h4>
  <hr>
  <!-- owl carousel -->
    <div class="owl-carousel owl-theme">
      <div class="item py-2 p-5">
        <div class="product font-fira">
          <a href="#"><img src="./images/coat.jpg" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Dress</h6>
            <div class="rating color-last font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$30</span>
            </div>
            <button type="submit" class="btn btn-danger font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2 p-5">
        <div class="product font-fira">
          <a href="#"><img src="./images/dress.jpg" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Dress</h6>
            <div class="rating color-last font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$62</span>
            </div>
            <button type="submit" class="btn btn-danger font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2 p-5">
        <div class="product font-fira">
          <a href="#"><img src="./images/shirt.jpg" alt="product1" class="img-fluid"></a>
          <div class="text-center">
            <h6>Shirt</h6>
            <div class="rating color-last font-size-12">
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="fas fa-star"></i></span>
              <span><i class="far fa-star"></i></span>
            </div>
            <div class="price py-2">
              <span>$16</span>
            </div>
            <button type="submit" class="btn btn-danger font-size-12">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="item py-2 p-5">
        <div class="product font-fira">
          <div class="d-flex flex-column">
            <a href="#"><img src="./images/classic shirt.jpg" class="img-fluid" alt="pro1"></a>
            <div class="text-center">
              <h6>Classic Shirt</h6>
              <div class="rating color-last font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$22</span>
              </div>
              <button type="submit" class="btn btn-danger font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="item py-2 p-5">
        <div class="product font-fira">
          <div class="d-flex flex-column">
            <a href="#"><img src="./images/tshirt.jpg" class="img-fluid" alt="pro1"></a>
            <div class="text-center">
              <h6>T shirt</h6>
              <div class="rating color-last font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <div class="price py-2">
                <span>$10</span>
              </div>
              <button type="submit" class="btn btn-danger font-size-12">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- !owl carousel -->
</div>
</section>

