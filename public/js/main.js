const buttons = document.querySelectorAll("[data-carousel-button]")

buttons.forEach(button => {
  button.addEventListener("click", () => {
    const offset = button.dataset.carouselButton === "next" ? 1 : -1
    const slides = button
      .closest("[data-carousel]")
      .querySelector("[data-slides]")

    const activeSlide = slides.querySelector("[data-active]")
    let newIndex = [...slides.children].indexOf(activeSlide) + offset
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0

    slides.children[newIndex].dataset.active = true
    delete activeSlide.dataset.active
  })
})

$("#trending-items .owl-carousel").owlCarousel({
  loop: true,
  nav: true,
  dots: false,
  responsive : {
      0: {
          items: 1
      },
      600: {
          items: 3
      },
      1000 : {
          items: 5
      }
      
  }});

      // isotope filter
      var $grid = $(".grid").isotope({
        itemSelector : '.grid-item',
        layoutMode : 'fitRows'
    });

    // filter items on button click
    $(".button-group").on("click", "button", function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({ filter: filterValue});
    })


    $("#blogs .owl-carousel").owlCarousel({
      loop: true,
      nav: false,
      dots: true,
      responsive : {
          0: {
              items: 1
          },
          600: {
              items: 3
          }
      }
  })


  // product qty section
  let $qty_up = $(".qty .qty-up");
  let $qty_down = $(".qty .qty-down");
  // let $input = $(".qty .qty_input");

  // click on qty up button
  $qty_up.click(function(e){
      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      if($input.val() >= 1 && $input.val() <= 9){
          $input.val(function(i, oldval){
              return ++oldval;
          });
      }
  });

     // click on qty down button
     $qty_down.click(function(e){
      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      if($input.val() > 1 && $input.val() <= 10){
          $input.val(function(i, oldval){
              return --oldval;
          });
      }
  });
