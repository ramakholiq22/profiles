//index.php
//function untuk Animasi scroll ketika user klik tombol dengan tag <a>
$(document).ready(function(){
    $("a").on('click', function(event){
        if (this.hash !== ""){
            event.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                window.location.hash = hash;
            });
        }
    });
});

//index.php
//Tunction untuk validasi email pada section project
function validasiEmail(){
    var rs = document.forms["formInput"]["email"].value;
    var atps = rs.indexOf("@");
    var dots = rs.lastIndexOf(".");

    if(atps<1 || dots<atps+2 || dots+2>=rs.length){
        alert("Alamat Email Tidak Valid.");
        return false;
    }else{
        alert("Alamat Email Valid.");
    }
}

//index.php
//slider brands
$(document).ready(function(){

    if($('.brands_slider').length)
    {
    var brandsSlider = $('.brands_slider');
    
    brandsSlider.owlCarousel(
    {
    loop:true,
    autoplay:true,
    autoplayTimeout:5000,
    nav:false,
    dots:false,
    autoWidth:true,
    items:8,
    margin:42
    });
    
    if($('.brands_prev').length)
    {
    var prev = $('.brands_prev');
    prev.on('click', function()
    {
    brandsSlider.trigger('prev.owl.carousel');
    });
    }
    
    if($('.brands_next').length)
    {
    var next = $('.brands_next');
    next.on('click', function()
    {
    brandsSlider.trigger('next.owl.carousel');
    });
    }
    }
    
    
    });