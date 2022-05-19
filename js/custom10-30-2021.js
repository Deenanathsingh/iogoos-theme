// ========================================caculator of pricing start
  var sliders = {
    pages: { current: "", values: ['1 - 10','10 - 50','50 - 150','150 - 250','250+']},
    style: { current: "", values: ['No design needed','Simple yet attractive','Moderately stylized','High end','World class']},
    copywriting: { current: "", values: ['None','5-10','10-25','25-50']},
    seo: { current: "", values: ['None','30 keywords','80 keywords','150 keywords']},
    responsive: { current: "", values: ['No','Yes']},
    database: { current: "", values: ['None','Basic','Advanced','Full development']},
    ecommerce: { current: "", values: ['None','Basic','Advanced','Enterprise']},
    cms: { current: "", values: ['None','Standard','Advanced','Enterprise']}
  };

  function go_sliders() {
    $.each(sliders, function(i, val) {
      if($('#'+i+'-slider').length>0){
	  $('#'+i+'-slider').slider({
        slide: function(event, ui) { $('[name='+i+']').val(sliders[i]['values'][ui.value]); },
        change: function(event, ui) { $('[name='+i+']').val(sliders[i]['values'][ui.value]); },
        min: 0,
        max: sliders[i]['values'].length - 1
      })
	  }
    });
  }

  function ready_events(){
    $(".row_fldst .slider-left").click(function(){
      var slider = $("#" + $(this).attr('id').replace("-left", ""));
      var value = slider.slider("value");
      var step = slider.slider("option", "step");

      slider.slider("value", value - step);
      slider.change();
    });

    $(".row_fldst .slider-right").click(function(){
      var slider = $("#" + $(this).attr('id').replace("-right", ""));
      var value = slider.slider("value");
      var step = slider.slider("option", "step");

      slider.slider("value", value + step);
      slider.change();
    });
    go_sliders();
  }

  $(document).ready(function(){
    ready_events();
  });

  $(document).ready(function(){
   $('#calculate').click(function(ev){
    ev.preventDefault();

// first line....................
var nod = ($('#Chan_val').val());
$('#qnty').html(nod);

var nn = nod.toString();
if(nn=="1 - 10")
{
 nnlow = 10000;
 nnhigh = 18000;
}
else if(nn=="10 - 50")
{
 nnlow = 50000;
 nnhigh = 80000;
}
else if(nn=="50 - 150")
{
  var nnlow = 50000;
  var nnhigh = 120000;
}
else if(nn=="150 - 250")
{
  var nnlow = 80000;
  var nnhigh = 160000;
}
else if(nn=="250+")
{
  var nnlow = 300000;
  var nnhigh = 500000;
}

$('#nod_1').html(nnlow);
$('#nod_2').html(nnhigh);

// second line....................

var nod2 = ($('#Chan_val_2').val());
$('#des_n').html(nod2);

if(nod2=="Simple yet attractive")
{
  var nodlow = 5000;
  var nodhigh = 6000;
}
else if(nod2=="Moderately stylized")
{
  var nodlow = 5000;
  var nodhigh = 6000;
}
else if(nod2=="High end")
{
  var nodlow = 5000;
  var nodhigh = 6000;
}
else if(nod2=="World class")
{
  var nodlow = 5000;
  var nodhigh = 6000;

}
$('#des_n_1').html(nodlow);
$('#des_n_2').html(nodhigh);

// Third line....................

var nodd3 = ($('#Chan_val_3').val());
$('#copy_p').html(nodd3);
var nod3 = nodd3.toString();

if(nod3=="5-10")
{
  var nod3low = 5000;
  var nod3high = 6000;
}
else if(nod3=="10-25")
{
  var nod3low = 5000;
  var nod3high = 6000;
}
else if(nod3=="25-50")
{
  var nod3low = 5000;
  var nod3high = 6000;

}

$('#copy_p_1').html(nod3low);
$('#copy_p_2').html(nod3high);

      // fifth line..............................
      var nod4 = ($('#Chan_val_4').val());
      $('#seo_g').html(nod4);

      if(nod4=="None")
      {
        var nod4low = 5000;
        var nod4high = 6000;
      }
      else if(nod4=="30 keywords")
      {
        var nod4low = 5000;
        var nod4high = 6000;
      }
      else if(nod4=="80 keywords")
      {
        var nod4low = 5000;
        var nod4high = 6000;
      }
      else if(nod4=="150 keywords")
      {
        var nod4low = 5000;
        var nod4high = 60000;
      }
      $('#seo_g_1').html(nod4low);
      $('#seo_g_2').html(nod4high);

      // sixth line..............................
      var nod5 = ($('#Chan_val_5').val());
      $('#res_d').html(nod5);


      if(nod5=="No")
      {
        var nod5low = 5000;
        var nod5high = 6000;
      }
      else if(nod5=="Yes")
      {
        var nod5low = 5000;
        var nod5high = 6000;
      }

      $('#res_d_1').html(nod5low);
      $('#res_d_2').html(nod5high);

      // seventh line..............................Rajeev
      var nod6 = ($('#Chan_val_6').val());
      $('#data_i').html(nod6);

      if(nod6=="None")
      {
        var nod6low = 5000;
        var nod6high = 6000;
      }
      else if(nod6=="Basic")
      {
        var nod6low = 5000;
        var nod6high = 6000;
      }
      else if(nod6=="Advanced")
      {
        var nod6low = 5000;
        var nod6high = 6000;
      }
      else if(nod6=="Full development")
      {
        var nod6low = 5000;
        var nod6high = 60000;
      }
      $('#data_i_1').html(nod6low);
      $('#data_i_2').html(nod6high);
      // eighth line..............................

      var nod7 = ($('#Chan_val_7').val());
      $('#eco_f').html(nod7);

      if(nod7=="None")
      {
        var nod7low = 5000;
        var nod7high = 6000;
      }
      else if(nod7=="Basic")
      {
        var nod7low = 5000;
        var nod7high = 6000;
      }
      else if(nod7=="Advanced")
      {
        var nod7low = 5000;
        var nod7high = 6000;
      }
      else if(nod7=="Enterprise")
      {
        var nod7low = 5000;
        var nod7high = 60000;
      }
      $('#eco_f_1').html(nod7low);
      $('#eco_f_2').html(nod7high);

      // ninth line..............................
      var nod8 = ($('#Chan_val_8').val());
      $('#cms_d').html(nod8);

      if(nod8=="None")
      {
        var nod8low = 5000;
        var nod8high = 6000;
      }
      else if(nod8=="Standard")
      {
        var nod8low = 5000;
        var nod8high = 6000;
      }
      else if(nod8=="Advanced")
      {
        var nod8low = 5000;
        var nod8high = 6000;
      }
      else if(nod8=="Enterprise")
      {
        var nod8low = 5000;
        var nod8high = 60000;
      }
      $('#cms_d_1').html(nod8low);
      $('#cms_d_2').html(nod8high);


      var totallow = parseInt(nnlow)+parseInt(nodlow)+parseInt(nod3low)+parseInt(nod4low)+parseInt(nod5low)+parseInt(nod6low)+parseInt(nod7low)+parseInt(nod8low);
      $('#tot_low').html(totallow);

      var totalhigh = parseInt(nnhigh)+parseInt(nodhigh)+parseInt(nod3high)+parseInt(nod4high)+parseInt(nod5high)+parseInt(nod6high)+parseInt(nod7high)+parseInt(nod8high);
      $('#tot_high').html(totalhigh);


    });
});

  $(document).ready(function(){
    $('#calculate').click(function(clc){
      var a = $('#Chan_val').val(),
      b = $('#Chan_val_2').val(),
      c = $('#Chan_val_3').val(),
      d = $('#Chan_val_4').val(),
      e = $('#Chan_val_5').val(),
      f = $('#Chan_val_6').val(),
      g = $('#Chan_val_7').val(),
      h = $('#Chan_val_8').val(),

      f = 'Number of pages: '+a+'\Style of design: '+b+' Copywriting # of pages: '+c+'  SEO w/ Placement Guarantee: '+d+' Responsive Design: '+e+' Database Integration: '+f+' e-Commerce Functionality: '+g+' CMS: '+h+'';

      $('#page-detail').val(f);
    });
  });

  $(document).ready(function(){
    $('#calculate').click(function(){
      $("#change_content, #price_h").css("display", "none");
      $('.tabbb').css('display','block');
      $('.estm, .webfx').css('display','block');
    });    
  });
// ========================================caculator of pricing close
$(document).ready(function(){

    $('.portfolioli .owl-item').click(function(){

        $('.stillImg').addClass('showImage');

        $('.port_bg').addClass('showImage2');

        

         var ValueStore = document.getElementById('serviceHref');

         $("#linkPassHere").attr("href", ValueStore);

    })

    $('.closeBtn').click(function(){

        $('.stillImg').removeClass('showImage');

    });

	$('.btnprj').click(function(){
							
		var eml= $(this).parents('form').find('.emailaddress').val();	
		var tbname=$(this).parents('form').find('.prtabname').val();
		$(".frmerrmsg").html('');
		if (eml == "") {
			$(".frmerrmsg").html("Please enter valid email");
            return false

        }
        var b = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (eml.match(b)) {} else {

           $(".frmerrmsg").html("Please enter valid email");

            return false

        }
 			$('input[name="c_email"]').val(eml);
			
			var b = {
	
				action: "project_form",
	
				type: "post",
	
				data: {'email':eml,'tabname':tbname},
	
				processData: false,
	
				contentType: false
	
			};
	
			$.post(ajaxurl, b, function(d) {
	
				console.log(d);
	
				if (d.success) {
	
					window.location="https://www.iogoos.com/thankyou/";
	
				}
	
			}, "json")
			
			$('.getQuote-btnAnchor').click();
			
	})
})

// =============================================================

$(document).ready(function() {

  

  typing( 0, $('.typeWrite_text').data('text') );



  function typing( index, text ) {

    

    var textIndex = 1;



    var tmp = setInterval(function() {
	if(text){
      if ( textIndex < text[ index ].length + 1 ) {

				$('.typeWrite_text').text( text[ index ].substr( 0, textIndex ) );

				textIndex++;

			} else {

        setTimeout(function() { deleting( index, text ) }, 2000);

        clearInterval(tmp);

      }
	}



		}, 150);



	}



	function deleting( index, text ) {



    var textIndex = text[ index ].length;



    var tmp = setInterval(function() {



      if ( textIndex + 1 > 0 ) {

        $('.typeWrite_text').text( text[ index ].substr( 0, textIndex ) );

        textIndex--;

      } else {

        index++;

        if ( index == text.length ) { index = 0; }

        typing( index, text );

        clearInterval(tmp);

      }



		}, 150)



  }



});



// ......................................

$(document).ready(function() {

  $(".sett > button").on("click", function() {

    if ($(this).hasClass("showDesign")) {

      $(this).removeClass("showDesign");

      $(this)

      .siblings(".contentt")

      .slideUp(200);

      $(".set > a i")

      .removeClass("fa-minus")

      .addClass("fa-plus");

    } else {

      $(".sett > button i")

      .removeClass("fa-minus")

      .addClass("fa-plus");

      $(this)

      .find("i")

      .removeClass("fa-plus")

      .addClass("fa-minus");

      $(".sett > button").removeClass("showDesign");

      $(this).addClass("showDesign");

      $(".contentt").slideUp(500);

      $(this)

      .siblings(".contentt")

      .slideDown(500);

    }

  });

});

// =======================================



$(document).ready(function() {

    $(".getQuote-btnAnchor,.get_a_quote").click(function(a) {

        a.preventDefault();

        $(".get-quote-form").addClass("show_Pop")

    });

    $(".close-quote-form").click(function() {

        $(".get-quote-form").removeClass("show_Pop")

    });

    $(".getQuote-btnAnchor").click(function(a) {

        $(".getAquoteM").removeClass("move_effect")

    })

});

// ===============================================================================

jQuery(document).ready(function() {

    jQuery(".cl_pcs_1").click(function() {

        jQuery(".cl_pcs_11").css({

            display: "block"

        });

        jQuery(".cl_pcs_22, .cl_pcs_33, .cl_pcs_44, .cl_pcs_55, .cl_pcs_66").css({

            display: "none"

        })

    });

    jQuery(".cl_pcs_2").click(function() {

        jQuery(".cl_pcs_22").css({

            display: "block"

        });

        jQuery(".cl_pcs_11, .cl_pcs_33, .cl_pcs_44, .cl_pcs_55, .cl_pcs_66").css({

            display: "none"

        })

    });

    jQuery(".cl_pcs_3").click(function() {

        jQuery(".cl_pcs_33").css({

            display: "block"

        });

        jQuery(".cl_pcs_11, .cl_pcs_22, .cl_pcs_44, .cl_pcs_55, .cl_pcs_66").css({

            display: "none"

        })

    });

    jQuery(".cl_pcs_4").click(function() {

        jQuery(".cl_pcs_44").css({

            display: "block"

        });

        jQuery(".cl_pcs_11, .cl_pcs_22, .cl_pcs_33, .cl_pcs_55, .cl_pcs_66").css({

            display: "none"

        })

    });

    jQuery(".cl_pcs_5").click(function() {

        jQuery(".cl_pcs_55").css({

            display: "block"

        });

        jQuery(".cl_pcs_11, .cl_pcs_22, .cl_pcs_44, .cl_pcs_33, .cl_pcs_66").css({

            display: "none"

        })

    });

    jQuery(".cl_pcs_6").click(function() {

        jQuery(".cl_pcs_66").css({

            display: "block"

        });

        jQuery(".cl_pcs_11, .cl_pcs_22, .cl_pcs_44, .cl_pcs_55, .cl_pcs_33").css({

            display: "none"

        })

    })

});

jQuery(document).ready(function() {

    jQuery(".cnt_listing_c ul li .close-icon").click(function() {

        jQuery(".cl_pcs_11, .cl_pcs_22, .cl_pcs_33, .cl_pcs_44, .cl_pcs_55, .cl_pcs_66").css({

            display: "none"

        })

    })

});

jQuery(document).ready(function() {

    jQuery(".packageplansmainrow .outerrow.headingrow").each(function(a, b) {

        jQuery(this).find(".titletx").on("click", function() {

            jQuery(".packageplansmainrow .outerrow.nextrow").slideUp();

            if (jQuery(this).parents(".headingrow").hasClass("active")) {

                jQuery(this).parents(".headingrow").next(".nextrow").slideUp();

                jQuery(this).parents(".headingrow").removeClass("active")

            } else {

                jQuery(".packageplansmainrow .outerrow.headingrow").removeClass("active");

                jQuery(this).parents(".headingrow").next(".nextrow").slideDown();

                jQuery(this).parents(".headingrow").addClass("active")

            }

        })

    })

});

$(document).on("click", ".price-tabs1 li>a", function() {

    var a = $(this).attr("data-trigger");

    $("div#" + a + "").fadeIn();

    $(".packageplansmainrow:not(#" + a + ")").hide();

    $(".price-tabs1 li").removeClass("active");

    $(this).parent().addClass("active")

});

$(document).ready(function() {

    $(".SlideBtn").click(function() {

        $(".pricing-section").toggleClass("activebox")

    })

});

$(function() {

    var b = function(e, c) {

        this.el = e || {};

        this.multiple = c || false;

        var d = this.el.find(".article-title");

        d.on("click", {

            el: this.el,

            multiple: this.multiple

        }, this.dropdown)

    };

    b.prototype.dropdown = function(d) {

        var c = d.data.el;

        $this = $(this), $next = $this.next();

        $next.slideToggle();

        $this.parent().toggleClass("open");

        if (!d.data.multiple) {

            c.find(".accordion-content").not($next).slideUp().parent().removeClass("open")

        }

    };

    var a = new b($(".accordion-container"), false)

});

$(document).on("click", function(a) {

    if (!$(a.target).closest("#accordion").length) {

        $(this).parent().toggleClass("open")

    }

});

$(document).ready(function() {

    $(".d_l ul:first li a").eq(0).addClass("selected");

    $(".cont_article article").eq(0).css("display", "block");

    $(".d_l ul:first").click(function(b) {

        if ($(b.target).is("a")) {

            $(".d_l ul:first li a").removeClass("selected");

            $(b.target).addClass("selected");

            var a = $("a", this).index(b.target);

            $(".cont_article article").css("display", "none");

            $(".cont_article article").eq(a).show()

        }

        $(this).blur();

        return false

    })

});

$(document).ready(function() {

    $(".row_a a.ourPlans").click(function() {

        $("html, body").animate({

            scrollTop: $(".all_services").offset().top

        }, "400")

    })

});

$(document).ready(function() {

    $(".d_l ul li").click(function() {

        $(".d_l ul li").addClass("selected");

        $(this).siblings().removeClass("selected")

    })

});

$(document).ready(function() {

    $("#tab_port .tab-link").click(function() {

        var a = $(this).attr("data-tab");

        if (a == "row_flex-1") {

            $("#tab_port .tab-link").removeClass("active");

            $(".prt_carousel .clm_6").removeClass("active");

            $(this).addClass("active");

            $(".prt_carousel .clm_6").addClass("active")

        } else {

            $("#tab_port .tab-link").removeClass("active");

            $(".prt_carousel .clm_6").removeClass("active");

            $(this).addClass("active");

            $(".prt_carousel .clm_6." + a).addClass("active")

        }

    })

});

$(document).ready(function() {

    $(".user-nav-tabs li").on("click", function(a) {

        a.preventDefault();

        $(".user-nav-tabs li").addClass("active");

        $(this).siblings().removeClass("active")

    })

});

$(document).ready(function() {

    $(".get_a_quote,#getAQuate,.rquest_quote,.getAquoteM a.getAquote,.getaquote,.content_row .clm_7 .clm_66 a.a,.third_ab_aa a,.col_xs_7 a.viewmore").click(function(a) {

        a.preventDefault();

        $(".request_form").toggleClass("show_Pop")

    });

    $(".close_X,.rquote-bg").click(function() {

        $(".request_form").removeClass("show_Pop")

    });

    $(".getAquoteM a.getAquote,#getAQuate,.get_a_quote,.rquest_quote,.getaquote,.content_row .clm_7 .clm_66 a.a,.third_ab_aa a,.col_xs_7 a.viewmore").click(function(a) {

        $(".getAquoteM").removeClass("move_effect")

    })

});

$(document).ready(function() {

    $(".hm_icon").click(function(a) {

        $(".navigation_io").toggleClass("HShow")

    })

});

$(window).scroll(function() {

    if ($(this).scrollTop() > 0) {

        $(".header,.global-header").addClass("sticky")

    } else {

        $(".header,.global-header").removeClass("sticky")

    }

});

$(document).ready(function() {

    $(".tab_block_main .tab_options>li a").click(function(b) {

        var a = $(this).attr("data-tab");

        b.preventDefault();

        $(".tab_block_main .tab_options>li a").removeClass("active");

        $(".tab_block").removeClass("active");

        $(this).addClass("active");

        $("#" + a).addClass("active")

    })

});

$(document).ready(function() {

    $(".navigation_io ul ul li h3").click(function() {

        $(".navigation_io ul ul li ul").slideToggle()

    })

});

$(document).ready(function() {

    $("#submenu").click(function() {

        $(".megga_menu").addClass("display")

    })

});

$(".owl-carousel2").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 3

        },

        1000: {

            items: 3

        }

    }

});

$("#portfolio_crl").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 2

        }

    }

});

$("#portfolio_crl2").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 2

        }

    }

});
$("#portfolio_crl3").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 3

        }

    }

});
$("#portfolio_crl4").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 3

        }

    }

});
$("#portfolio_crl5").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 3

        }

    }

});
$("#portfolio_crl6").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 3

        }

    }

});
$("#portfolio_crl7").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 3

        }

    }

});
$("#portfolio_crl8").owlCarousel({

    loop: true,

    margin: 0,

    nav: true,

    autoplay: true,

    autoplaySpeed: 300,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 3

        }

    }

});
$("#clint_carousel").owlCarousel({

    loop: true,

    margin: 10,

    autoplay: true,

    autoplaySpeed: 500,

    nav: true,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 3

        },

        1000: {

            items: 4

        }

    }

});

$("#testimonial_carousel, #testimonial_carousel2").owlCarousel({

    loop: true,

    margin: 10,

    autoplay: false,

    autoplaySpeed: 300,

    nav: false,

    dots: true,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 1

        }

    }

});

$("#owl-carousel56,#owl-carousel57").owlCarousel({

    loop: true,

    margin: 10,

    nav: false,

    autoplay: true,

    autoplaySpeed: 10000,

    dots: false,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 1

        }

    }

});

$(document).ready(function() {

    $(".navigation_io ul .submenu").click(function() {})

});

$(document).ready(function() {

    $(".hm_icon").click(function() {

        $(this).toggleClass("activev");

        $(".banner_io2").toggleClass("showw")

    })

});

var TxtRotate = function(a, b, c) {

    this.toRotate = b;

    this.el = a;

    this.loopNum = 0;

    this.period = parseInt(c, 10) || 2000;

    this.txt = "";

    this.tick();

    this.isDeleting = false

};

TxtRotate.prototype.tick = function() {

    var a = this.loopNum % this.toRotate.length;

    var c = this.toRotate[a];

    if (this.isDeleting) {

        this.txt = c.substring(0, this.txt.length - 1)

    } else {

        this.txt = c.substring(0, this.txt.length + 1)

    }

    this.el.innerHTML = '<span class="wrap">' + this.txt + "</span>";

    var b = this;

    var d = 300 - Math.random() * 100;

    if (this.isDeleting) {

        d /= 2

    }

    if (!this.isDeleting && this.txt === c) {

        d = this.period;

        this.isDeleting = true

    } else {

        if (this.isDeleting && this.txt === "") {

            this.isDeleting = false;

            this.loopNum++;

            d = 900

        }

    }

    setTimeout(function() {

        b.tick()

    }, d)

};

window.onload = function() {

    var c = document.getElementsByClassName("txt-rotate");

    for (var b = 0; b < c.length; b++) {

        var d = c[b].getAttribute("data-rotate");

        var e = c[b].getAttribute("data-period");

        if (d) {

            new TxtRotate(c[b], JSON.parse(d), e)

        }

    }

    var a = document.createElement("style");

    a.type = "text/css";

    a.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";

    document.body.appendChild(a)

};

$(document).ready(function() {

    $(".close-sub-nav").click(function(a) {

        a.preventDefault();

        $(".nav-group-left .nav-item").removeClass("nav-item--active")

    });

    $(".menu-toggle").click(function() {

        $(".global-header").toggleClass("_menu-open");

        $(".main-nav .nav-item").removeClass("nav-item--active");

        $("body").toggleClass("_fixed");

        $(".first-nav").toggleClass("showfirst")

    });

    $(".main-nav .nav-item").click(function() {

        $(".main-nav .nav-item").removeClass("nav-item--active");

        $(this).toggleClass("nav-item--active")

    })

});

$(function() {

    $("#theCarousel img").click(function() {

        var b = $(this).attr("data-img");

        $("#FullSizeImg .port_bg img").attr("src", b);

        var a = $(this).attr("id");

        $("#alldescription").html($("." + a).html())

    })

});

$(function() {

    $("#latestShopify img").click(function() {

        var a = $(this).attr("src");

        $("#showlatest img").attr("src", a)

    })

});

$(function() {

    $(".port_bg img").click(function() {

        $(this).parent().addClass("set");

        $("body").addClass("still")

    })

});

$(document).click(function(a) {

    var b = $(".port_bg img");

    if (!b.is(a.target) && b.has(a.target).length === 0) {

        $(".port_bg").removeClass("set");

        $("body").removeClass("still")

    }

});

$(function() {

    $("#allportThum a").click(function() {

        var a = $(this).attr("data-port");

        $(".port-thums").slideUp();

        $(a).slideDown(300)

    });

    $(".contactForm2 .btn").click(function() {

        $("#formresponse").empty();

        var a = $("form#frmcontact");

        var c = a;

        var b = {

            action: "contact_form",

            type: "post",

            data: c,

            processData: false,

            contentType: false

        };

        $.post(ajaxurl, b, function(d) {

            console.log(d);

            if (d.success) {

                $("#formresponse").append(d.success)
				window.location="https://www.iogoos.com/thankyou/";

            }

        }, "json")

    })

});

$(document).ready(function(a) {

    $("form#frmcontact").on("submit", function(b) {

        b.preventDefault();

        $("#formresponse").html("");

        $.ajax({

            type: "POST",

            url: ajaxurl,

            data: new FormData(this),

            dataType: "json",

            contentType: false,

            cache: false,

            processData: false,

            beforeSend: function() {

                $(".btnsubmit").attr("disabled", "disabled");

                $("#frmcontact").css("opacity", ".5")

            },

            success: function(c) {

                $("#formresponse").html("");

                if (c.status == 1) {

                    $("#frmcontact")[0].reset();

                    $("#formresponse").html('<p class="alert alert-success">' + c.message + "</p>");
					window.location="https://www.iogoos.com/thankyou/";

                } else {

                    $("#formresponse").html('<p class="alert alert-danger">' + c.message + "</p>")

                }

                $("#frmcontact").css("opacity", "");

                $(".btnsubmit").removeAttr("disabled")

            }

        })

    });

    $("form#frmcontact2").on("submit", function(b) {

        b.preventDefault();

        $("#formresponse").html("");

        $.ajax({

            type: "POST",

            url: ajaxurl,

            data: new FormData(this),

            dataType: "json",

            contentType: false,

            cache: false,

            processData: false,

            beforeSend: function() {

                $(".btnsubmit").attr("disabled", "disabled");

                $("#frmcontact2").css("opacity", ".5")

            },

            success: function(c) {

                $("#formresponse").html("");

                if (c.status == 1) {

                    $("#frmcontact2")[0].reset();

                    $("#formresponse").html('<p class="alert alert-success">' + c.message + "</p>")
					window.location="https://www.iogoos.com/thankyou/";

                } else {

                    $("#formresponse").html('<p class="alert alert-danger">' + c.message + "</p>")

                }

                $("#frmcontact2").css("opacity", "");

                $(".btnsubmit").removeAttr("disabled")

            }

        })

    });

    $("form#frmcontact3").on("submit", function(b) {

        b.preventDefault();

        $("#frmcontact3 .formresponse").html("");

        $.ajax({

            type: "POST",

            url: ajaxurl,

            data: new FormData(this),

            dataType: "json",

            contentType: false,

            cache: false,

            processData: false,

            beforeSend: function() {

                $(".btnsubmit1").attr("disabled", "disabled");

                $("#frmcontact3").css("opacity", ".5")

            },

            success: function(c) {

                $("#frmcontact3 .formresponse").html("");

                if (c.status == 1) {

                    $("#frmcontact3")[0].reset();

                    $("#frmcontact3 .formresponse").html('<p class="alert alert-success">' + c.message + "</p>")
window.location="https://www.iogoos.com/thankyou/";
                } else {

                    $("#frmcontact3 .formresponse").html('<p class="alert alert-danger">' + c.message + "</p>")

                }

                $("#frmcontact3").css("opacity", "");

                $(".btnsubmit1").removeAttr("disabled")

            }

        })

    });

    $("form#frmcontact4").on("submit", function(b) {

        b.preventDefault();

        $("#frmcontact4 .formresponse").html("");

        $.ajax({

            type: "POST",

            url: ajaxurl,

            data: new FormData(this),

            dataType: "json",

            contentType: false,

            cache: false,

            processData: false,

            beforeSend: function() {

                $(".btnsubmit2").attr("disabled", "disabled");

                $("#frmcontact4").css("opacity", ".5")

            },

            success: function(c) {

                $("#frmcontact4 .formresponse").html("");

                if (c.status == 1) {

                    $("#frmcontact4")[0].reset();

                    $("#frmcontact4 .formresponse").html('<p class="alert alert-success">' + c.message + "</p>")
					window.location="https://www.iogoos.com/thankyou/";

                } else {

                    $("#frmcontact4 .formresponse").html('<p class="alert alert-danger">' + c.message + "</p>")

                }

                $("#frmcontact4").css("opacity", "");

                $(".btnsubmit2").removeAttr("disabled")

            }

        })

    });

    $("form#frmcontact5").on("submit", function(b) {

        b.preventDefault();

        $("#frmcontact5 .formresponse").html("");

        $.ajax({

            type: "POST",

            url: ajaxurl,

            data: new FormData(this),

            dataType: "json",

            contentType: false,

            cache: false,

            processData: false,

            beforeSend: function() {

                $(".btnsubmit3").attr("disabled", "disabled");

                $("#frmcontact5").css("opacity", ".5")

            },

            success: function(c) {

                $("#frmcontact5 .formresponse").html("");

                if (c.status == 1) {

                    $("#frmcontact5")[0].reset();

                    $("#frmcontact5 .formresponse").html('<p class="alert alert-success">' + c.message + "</p>")
					window.location="https://www.iogoos.com/thankyou/";

                } else {

                    $("#frmcontact5 .formresponse").html('<p class="alert alert-danger">' + c.message + "</p>")

                }

                $("#frmcontact5").css("opacity", "");

                $(".btnsubmit3").removeAttr("disabled")

            }

        })

    });

    $(".navigation_io li").hover(function() {}, function() {});

    $("#submenu").hover(function() {}, function() {});

    $("body").on("click", function() {})

});


jQuery(function() {

    jQuery(".btn_page_create").click(function() {

        var a = jQuery('input[name="emailid"]').val();

        jQuery(".error_response").html("");

        if (a == "") {

            jQuery(".error_response").html("Please enter valid email");

            return false

        }

        var b = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if (a.match(b)) {} else {

            jQuery(".error_response").html("Please enter valid email");

            return false

        }

        jQuery('.request_infoo input[name="your-email"]').val(a);

        jQuery(".request_infoo ").toggleClass("dis_play_now");

        jQuery(".error_response").html("")

    });

    jQuery(".close_btnnn").click(function() {

        jQuery(".request_infoo").removeClass("dis_play_now")

    })

});

jQuery(function() {

    jQuery("form#tempform").on("submit", function(a) {

        a.preventDefault();

        $(".screen-reader-response").html("");

        $.ajax({

            type: "POST",

            url: ajaxurl,

            data: new FormData(this),

            dataType: "json",

            contentType: false,

            cache: false,

            processData: false,

            beforeSend: function() {

                $(".request_infoo input.wpcf7-form-control.wpcf7-submit").attr("disabled", "disabled")

            },

            success: function(b) {

                $(".screen-reader-response").html("");

                if (b.status == 1) {

                    $(".request_infoo ").removeClass("dis_play_now");

                    window.location = "https://www.iogoos.com/templates/"

                } else {

                    $(".screen-reader-response").html('<p class="alert alert-danger">' + b.message + "</p>")

                }

                $(".request_infoo input.wpcf7-form-control.wpcf7-submit").removeAttr("disabled")

            }

        })

    })

});

$(".testing-slider").owlCarousel({

    loop: true,

    nav: false,

    autoplay: true,

    autoplaySpeed: 300,

    responsive: {

        0: {

            items: 1

        },

        600: {

            items: 1

        },

        1000: {

            items: 1

        }

    }

});

$("#features_view_btn").click(function(a) {

    $("#viewmore_section").toggle(500)

});

$('#theCarousel').owlCarousel({



    loop: true,



    margin: 20,



    nav: true,



    autoplay: true,



    autoplaySpeed: 300,



    dots: false,



    responsive: {



        0: {



            items: 1



        },



        600: {



            items: 3



        },



        1000: {



            items: 3



        }



    }



})



$('.owl-carousel999').owlCarousel({

    loop: true,

    margin: 15,

    nav: false,

    dots: false,

    autoplayHoverPause: false,

    autoplaySpeed: false,

    autoplay: false,



    responsive: {

        0: {

            items: 1

        },

        400: {

            items: 2

        },

        600: {

            items: 3

        },

        1000: {

            items: 4

        },

        1200: {

            items: 5

        }

    }

})

$(document).ready(function() {

    $('.pt18.desk_call').click(function() {

        $('.callyouback').addClass('addClass');

    });

    $('.ccall_Close').click(function() {

        $('.callyouback').removeClass('addClass');

    });

    $('.callyouback_bg').click(function() {

        $('.callyouback').removeClass('addClass');

    });

});



// ==============================================================
$(window).on("load", function () {
	var fn = {

		Launch: function () {
			fn.IntroCanvas();
		},

		IntroCanvas: function () {

			const canvas = document.getElementById('intro__canvas');
			if (canvas) {
				const ctx = canvas.getContext('2d');
				let width = canvas.width = canvas.offsetWidth;
				let height = canvas.height = canvas.offsetHeight;

				const colours = JSON.parse(canvas.getAttribute('data-colors'));

				const maxParticles = 200;
				let particles = [];

				let cx = width / 2;
				let cy = height / 2;

				class Particle {
					constructor(x, y, vx, vy, radius, colour) {
						this.x = x;
						this.y = y;
						this.vx = vx;
						this.vy = vy;
						this.radius = radius;
						this.colour = colour;
					}
					move() {
						// Reset particle if it goes off screen
						if (this.y > height || this.y < 0 || this.x > width || this.x < 0) {
							this.reset();
						}
						// Move particles with respect to velocity vectors
						this.x += this.vx;
						this.y += this.vy;
					}
					reset() {
						this.x = cx;
						this.y = cy;
						this.vx = 2 + Math.random() * -4;
						this.vy = 2 + Math.random() * -4;
						this.radius = 1 + Math.random() * 3;
					}
					draw(ctx) {
						ctx.beginPath();
						ctx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, false);
						ctx.fillStyle = this.colour;
						ctx.fill();
					}
				}

				function initParticles() {
					for (let i = 0; i < maxParticles; i++) {
						setTimeout(createParticle, 10 * i, i);
					}
				}

				function createParticle(i) {
					let p = new Particle(
						Math.floor(Math.random() * width), // x
						Math.floor(Math.random() * height), // y
						1.5 + Math.random() * -3, // vx
						1.5 + Math.random() * -3, // vy
						1 + Math.random(), // radius
						colours[Math.floor(Math.random() * colours.length)]
					);
					particles.push(p);
				}


				function loop() {
					ctx.clearRect(0, 0, width, height);
					for (let particle of particles) {
						particle.move();
						particle.draw(ctx);
					}
					requestAnimationFrame(loop);
				}

				// Start animation
				initParticles();
				loop();


				// Resize canvas - responsive
				window.addEventListener('resize', resize);

				function resize() {
					width = canvas.width = window.innerWidth;
					height = canvas.height = window.innerHeight;
				}
			}
		},
	};

	fn.Launch();
	setTimeout(function () {

		function n() {
			S.animate({
				d: "M1010.1,64C1137.4,64,1350,0,1350,0H0C0,0,839.3,64,1010.1,64z"
			}, 8e3, mina.easeinout, o)
		}

		function o() {
			S.animate({
				d: "M287,64C414.3,64,1350,0,1350,0H0C0,0,116.2,64,287,64z"
			}, 8e3, mina.easeinout, n)
		}

		function a() {
			y.animate({
				d: "M1076.6,118.4C1247.4,118.4,1350,0.2,1350,0.2H0C0,0.2,908.6,118.4,1076.6,118.4z"
			}, 12e3, mina.easeinout, i)
		}

		function i() {
			y.animate({
				d: "M307.1,118.4C477.8,118.4,1350,0.2,1350,0.2H0C0,0.2,139.5,118.4,307.1,118.4z"
			}, 12e3, mina.easeinout, a)
		}

		function c() {
			M.animate({
				d: "M317.9,76C467,76,1350,0.2,1350,0.2H0C0,0.2,1,76,317.9,76z"
			}, 9e3, mina.easeinout, d)
		}

		function d() {
			M.animate({
				d: "M954,76c149,0,396-75.8,396-75.8H0C0,0.2,637,76,954,76z"
			}, 9e3, mina.easeinout, c)
		}

		function l() {
			z.animate({
				d: "M474,67c168,0,876-66.8,876-66.8H0C0,0.2,168.1,67,474,67z"
			}, 11e3, mina.easeinout, r)
		}

		function r() {
			z.animate({
				d: "M904,67c168,0,446-66.8,446-66.8H0C0,0.2,598.2,67,904,67z"
			}, 11e3, mina.easeinout, l)
		}

		function u() {
			H.animate({
				d: "M327,38C478.3,38,1350,0.1,1350,0.1H0C0,0.1,0,38,327,38z"
			}, 14e3, mina.easeinout, m)
		}

		function m() {
			H.animate({
				d: "M857,38c151.3,0,493-37.9,493-37.9H0C0,0.1,530,38,857,38z"
			}, 14e3, mina.easeinout, u)
		}

		function C() {
			L.animate({
				d: "M1175,103c169,0,175-102.9,175-102.9H0C0,0.1,1007,103,1175,103z"
			}, 8e3, mina.easeinout, p)
		}

		function p() {
			L.animate({
				d: "M688,103c169,0,662-102.9,662-102.9H0C0,0.1,520,103,688,103z"
			}, 8e3, mina.easeinout, C)
		}
		$window = $(window);
		var f = $window.height() / 2,
			h = $("#container-general");
			//g = $("#section-quote").offset().top - f
		$(document).on('click', '#section-quote .container-pe-quote .pp-quote', function () {
			var e = $(this).data("textquote");
			$("#section-quote .container-pe-quote .pp-quote").removeClass("active"),
				$(this).addClass("active"), $("#section-quote .container-quote").removeClass("carousel-on"),
				$("#section-quote .container-quote .quote.show").removeClass("show").addClass("hide-bottom"),
				$("." + e).removeClass("hide-bottom hide-top").addClass("show")
		})
	}, 150);


	setInterval(function () {
		var maxVal = $("#section-quote .container-pe-quote .pp-quote").length;
		var randomVal = Math.floor((Math.random() * maxVal) + 1);
		var count = 1;


		$('.pp-quote').each(function () {
			var obj = $(this);
			if (count == randomVal) {
				var dataRR = obj.attr('data-textquote');
				$(".pp-quote[data-textquote=" + dataRR + "]").click();
			}
			count++;
		});
	}, 4000);

});



// number count for stats, using jQuery animate

$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});




$(document).ready(function(){
						   

	//----------Select the first tab and div by default
	
	$('#vertical_tab_nav > ul > li > a').eq(0).addClass( "selected" );
	$('#vertical_tab_nav > div > article').eq(0).css('display','block');


	//---------- This assigns an onclick event to each tab link("a" tag) and passes a parameter to the showHideTab() function
			
		$('#vertical_tab_nav > ul').click(function(e){
			
      if($(e.target).is("a")){
      
        /*Handle Tab Nav*/
        $('#vertical_tab_nav > ul > li > a').removeClass( "selected");
        $(e.target).addClass( "selected");
        
        /*Handles Tab Content*/
        var clicked_index = $("a",this).index(e.target);
        $('#vertical_tab_nav > div > article').css('display','none');
        $('#vertical_tab_nav > div > article').eq(clicked_index).fadeIn();
        
      }
      
        $(this).blur();
        return false;
      
		});
		
	 
});//end ready	





$(document).ready(function(){
  var singleSliderObj = [
    {index:1, titlecard:"IOGOOS Solution is best ever company, i have worked with",
	imgsrc:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_1.jpg", imgsrcs:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_2.jpg", imgsrcss:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_3.jpg", imgsrcownr:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_ic.jpg",desctext:"I wanted an urgent website, so I posted my requirement on freelancer and get 100s proposal but I recommend to Iogoos because they were providing amazing Website designing at very low cost. finally, I choose Iogoos, and they complete my project within the deadline, the result was very satisfying. Thank you Iogoos.",
	date:"lyra bellaqwa <br>fashion designer.", place:""},
    {index:2, titlecard:"Letting your work be influenced by new surroundings, people and cultures…",
	imgsrc:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_4.jpg", imgsrcs:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_5.jpg", imgsrcss:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_6.jpg",
imgsrcownr:"https://www.iogoos.com/wp-content/themes/iogoos/img/shweta-new.jpg",desctext:"IOGOOS Solution knows, how to achieve the goal. The engagement has boosted our social media profile to generate sales leads, website’s search engine result rankings, with many targeted keywords ranking on the first page. IOGOOS Solution has also generated increased sales and an improvement in brand reputation. They’re effective communicators and they respond quickly.",
	date:"Sweta Sharma <br> Global Pageant, CEO.", place:""},
	{index:3, titlecard:"We wanted something fun and eye-catching that didn’t look like every other coffee logo out there…",
	imgsrc:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_7.jpg", imgsrcs:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_8.jpg", imgsrcss:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_9.jpg",
imgsrcownr:"https://www.iogoos.com/wp-content/themes/iogoos/img/mavis-pic.jpg", desctext:"Initially, we had hired to optimize our social media pages and generate leads. IOGOOS Solution delivered quality and higher conversion rates lead. They produce high-quality social media content and blog posts that quickly go viral, leading to continued engagement. The highly skilled team keeps in constant contact throughout the process.",
	date:"Mavis Huntley <br> Founder.", place:""},
	{index:4, titlecard:"When it came to developing my own brand, I didn’t really think of other options…",
	imgsrc:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_10.jpg", imgsrcs:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_11.jpg", imgsrcss:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_12.jpg",
imgsrcownr:"https://magentotechnology.com/wp-content/themes/iogoos/img/username-.png",desctext:"I worked with Iogoos and find as an internet marketer they have all aspect which I need for my website and the steps they use to give me the really great result. Now for further on my next project, I don't need to find any IT solution provider. Iogoos have all services and I always recommend Iogoos.",
	date:"john smith  <br> founder.", place:""},
	  	{index:5, titlecard:"When it came to developing my own brand, I didn’t really think of other options…",
	imgsrc:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_13.jpg", imgsrcs:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_14.jpg", imgsrcss:"https://www.iogoos.com/wp-content/themes/iogoos/img/port_img_15.jpg",
imgsrcownr:"https://www.iogoos.com/wp-content/themes/iogoos/img/fuerabordasnew.jpg",desctext:"We worked with IOGOOS Solution on a microsite project that will bring a revolution in our Industry. Basically, this project was highly technical one when was brought to the table, but the kind of work and proficiency that was showcased blew us away, especially, by the tech head ---–name--- and shout out to the entire team.",
	date:"Alejandro Aboy <br> founder.", place:""}
	];
	
  function outputIt() {
    for (var i = 0; i < singleSliderObj.length; i++) {
      // console.log(outputs);
      var outputs = '<div id="'+ singleSliderObj[i].index +'">'+
          '<div class="singlecard">'+
          '<div class="singlecard-header">'+
		  '<div class="singlecard-header_1">'+
          '<img class="tst_img_1" data-lazy="'+ singleSliderObj[i].imgsrc +'">'+
		  '</div>'+
		  '<div class="singlecard-header_2">'+
		  '<img class="tst_img_1" data-lazy="'+ singleSliderObj[i].imgsrcs +'">'+
		  '<img class="tst_img_1 " data-lazy="'+ singleSliderObj[i].imgsrcss +'">'+
          '</div>'+
		   '</div>'+
          '<div class="singlecard-body">'+
          '<div class="singlecard-content">'+
          '<div class="singlecard-title"><strong>'+ singleSliderObj[i].titlecard +'</strong></div>'+
          '<div class="singlecard-text">'+
          '<p>'+ singleSliderObj[i].desctext +'</p>'+
          '<p class="titl_">'+         
          '<span class="singlecard-date"><em>'+ singleSliderObj[i].date +'</em></span>'+
          '<span class="singlecard-place"><em>'+ singleSliderObj[i].place +'</em></span>'+
          '<img class="sm_imge" data-lazy="'+ singleSliderObj[i].imgsrcownr +'">'
		  '</p>'+		  
          '</div>'+
		  
          '</div>'+
          '</div>';
      $('.slide-sec').append(outputs);
    }
  }
  //outputIt();

  $('.slide-sec').slick({
    lazyLoad: 'ondemand',
    // speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    dots:true
  });
});




 // Slick Slider
jQuery(".slick-slider").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
	autoplay: true,
  arrows : true,
	 responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
});

// Slick Scroll
jQuery(function () {
  const slider = jQuery(".slick-slider");
  slider;

  slider.on("wheel", function (e) {
    e.preventDefault();

    if (e.originalEvent.deltaY < 0) {
      jQuery(this).slick("slickNext");
    } else {
      jQuery(this).slick("slickPrev");
    }
  });
});

// https://codepen.io/vone8/



 // Slick Slider
jQuery(".slick-slider2").slick({
  slidesToShow: 3,
  slidesToScroll: 1,
	autoplay: true,
  arrows : true,
	 responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
});

// Slick Scroll
jQuery(function () {
  const slider = jQuery(".slick-slider2");
  slider;

  slider.on("wheel", function (e) {
    e.preventDefault();

    if (e.originalEvent.deltaY < 0) {
      jQuery(this).slick("slickNext");
    } else {
      jQuery(this).slick("slickPrev");
    }
  });
});



 // Slick Slider
jQuery(".slick-slider3").slick({
  slidesToShow: 4,
  slidesToScroll: 1,
	autoplay: true,
  arrows : true,
	 responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
});

// Slick Scroll
jQuery(function () {
  const slider = jQuery(".slick-slider3");
  slider;

  slider.on("wheel", function (e) {
    e.preventDefault();

    if (e.originalEvent.deltaY < 0) {
      jQuery(this).slick("slickNext");
    } else {
      jQuery(this).slick("slickPrev");
    }
  });
});



 // Slick Slider
jQuery(".slick-slider1").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
	autoplay: true,
  arrows : true,
	 responsive: [
        {
          breakpoint: 1366,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
		   {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
		 {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
		 {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
		 {
          breakpoint: 769,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
		 {
          breakpoint: 600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2,
            adaptiveHeight: true,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
      ],
});

// Slick Scroll
jQuery(function () {
  const slider = jQuery(".slick-slider1");
  slider;

  slider.on("wheel", function (e) {
    e.preventDefault();

    if (e.originalEvent.deltaY < 0) {
      jQuery(this).slick("slickNext");
    } else {
      jQuery(this).slick("slickPrev");
    }
  });
  
  
});
