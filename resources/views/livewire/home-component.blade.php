
    <!--owl carrosel-->
    <section aria-label="Newest Photos">
      <div class="carousel" data-carousel>
        <button class="carousel-button prev" data-carousel-button="prev">&#8656;</button>
        <button class="carousel-button next" data-carousel-button="next">&#8658;</button>
        <ul data-slides>
          <li class="slide" data-active>
            <img src="./images/cover 1.jpeg" alt="Banner 1">
          </li>
          <li class="slide">
            <img src="./images/cover 2.jpeg" alt="Banner 2">
          </li>
          <li class="slide">
            <img src="./images/cover 4.jpeg" alt="Banner 3">
          </li>
        </ul>
      </div>
    </section>

    <!--Featured Items-->
    <section id="featured-items">
      <div class="container p-5">
        <h4 class="font-rubik text-center p-5 font-size-20">Featured Items</h4>
        <div id="filters" class="button-group color-black text-center font-cairo font-size-16">
          <button class="btn is-checked" data-filter="*">All</button>
          <button class="btn" data-filter=".Men">Men</button>
          <button class="btn" data-filter=".Women">Women</button>
          <button class="btn" data-filter=".Kids">Kids</button>
        </div>

        <div class="grid">
          @foreach ($products as $product)
          <div class="grid-item Men border">
           <div class="item py-2" style="width: 200px;">
            <div class="product font-rale">
              <a href="#"><img src="(/images)/{{$product->image}}" alt="{{$product->name}}" class="img-fluid"></a>
              <div class="text-center">
                <h6>{{$product->name}} </h6>
                <div class="rating color-last font-size-12">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                  <span><i class="far fa-star"></i></span>
                </div>
                <div class="price py-2">
                  <span>{{$product->price}} </span>
                </div>
                <button type="submit" class="btn btn-danger color-third-bg font-size-12" wire:click.prevent"store({{$product->id,'{{$product->name}}'}},{{$product->price}})">Add to Cart</button>
              </div>
            </div>
          </div>
          </div>
          @endforeach   
    </section>
    <!--Banners-->
    <section id="banner_adds">
      <div class="card card-image"
     style="background-image: url(./images/Banner3.webp); background-size: contain;">
  <div class="text-white text-center py-5 px-4 my-5">
    <div>
      <h2 class="card-title h1-responsive pt-3 mb-5 font-bold">Enjoy 70% off</h2>
      <a class="btn btn-outline-white btn-md"><i class="fa-solid fa-cart-minus"></i></i> View collection</a>
    </div>
  </div>
</div>
    </section>
    <!--Banners end-->
  <!-- !Special Price -->
    <!--owl carrosel-->

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
  <!--Banners-->
  <section id="banner_adds">
    <div class="card card-image"
   style="background-image: url(./images/banner2.jpeg); background-size: cover;">
<div class="color-black text-center py-5 px-4 my-5 font-size-18">
  <div>
    <p class="mx-5 mb-5"><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni vero sed cum ea accusantium rem maiores deleniti beatae iusto praesentium. Labore, cupiditate autem eligendi ab vitae ad corrupti molestias minus.</em></p>
  </div>
</div>
</div>
  </section>
  <!--Banners end-->
  <!-- Blogs -->
  <section id="blogs">
    <div class="container py-4">
      <h4 class="font-rubik font-size-20 text-center">Latest Blogs</h4>
      <hr>

      <div class="owl-carousel owl-theme">
        <div class="item">
          <div class="card border-0 font-rubik mr-5" style="width: 18rem;">
            <img src="./images/blog1.jpeg" alt="cart image" class="card-img-top">
            <h5 class="card-title font-size-16 text-center p-1">Title</h5>
            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
            <a href="#" class="color-black text-center">Read More</a>
          </div>
        </div>
        <div class="item">
          <div class="card border-0 font-rubik mr-5" style="width: 18rem;">             
            <img src="./images/blog2.jpeg" alt="cart image" class="card-img-top">
            <h5 class="card-title font-size-16 text-center p-1">Title</h5>
            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
            <a href="#" class="color-black text-center">Read More</a>
          </div>
        </div>
        <div class="item">
          <div class="card border-0 font-rubik mr-5" style="width: 18rem;">         
            <img src="./images/blog3.jpeg" alt="cart image" class="card-img-top">
            <h5 class="card-title font-size-16 text-center p-1">Title</h5>
            <p class="card-text font-size-14 text-black-50 py-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis non iste sequi cupiditate tempora iure. Velit accusamus saepe harum sed.</p>
            <a href="#" class="color-black text-center">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- !Blogs -->

