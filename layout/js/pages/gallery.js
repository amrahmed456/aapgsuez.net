$(document).ready(function(){

    var grid = $(".masonry");
   

    new LazyLoad({
            elements_selector: ".lazy",
            unobserve_completed: true,
            callback_loaded: function(){
                grid.isotope();
            }
           
    });

    // filter items on button click
    $('.filter-button-group .section').click(function(){
        let filterValue = $(this).attr('data-filter');
        grid.isotope({ filter: filterValue });
        $(".section").removeClass("active");
        $(this).addClass("active");
    });

        
});