$(document).on("click", ".menuClassDown", function() {
    var filter = $(this).data("filter");
    $("#filter_selected").val(filter);
    var only_video = $("input.filter.is-checked").is(":checked");
    // if(!filter){
    //     if(only_video){
    //          $('.excellenceSliderInner').hide();
    //          $('.videoPlayBtn').closest('.excellenceSliderInner').show();
    //     }else{
    //          $('.excellenceSliderInner').show();
    //     }
    // }else{
    //      if(only_video){
    //          $('.excellenceSliderInner').hide();
    //          $('.videoPlayBtn').closest('.excellenceSliderInner'+filter).show();
    //      }else{
    //          $('.excellenceSliderInner').hide();
    //          $('.excellenceSliderInner'+filter).show();
    //      }
    // }
    filterResult(filter, only_video);
});

// On Video change
$(document).on("change", "input.filter.is-checked", function() {
    var filter = $("#filter_selected").val();
    var only_video = $(this).is(":checked");
    // if(!filter){
    //     if(only_video){
    //          $('.excellenceSliderInner').hide();
    //          $('.videoPlayBtn').closest('.excellenceSliderInner').show();
    //     }else{
    //          $('.excellenceSliderInner').show();
    //     }
    // }else{
    //      if(only_video){
    //          $('.excellenceSliderInner').hide();
    //          $('.videoPlayBtn').closest('.excellenceSliderInner'+filter).show();
    //      }else{
    //          $('.excellenceSliderInner').hide();
    //          $('.excellenceSliderInner'+filter).show();
    //      }
    // }
    filterResult(filter, only_video);
});

function filterResult(filter, only_video) {
    var domain = window.location.href;

    var category_id = "";
    if (filter) {
        category_id = filter.replace(".", "");
    }

    if (!$(".loaderScreen").is(":visible")) {
        $("#loaderAnim.openActive").css("transform", "scale(1.0)");
    }

    // $(".loaderScreen").show();
    $.ajax({
        type: "GET",
        url: domain +
            "/wp-json/custom/v2/all-posts?only_video=" +
            only_video +
            "&category=" +
            category_id,
        // data:{start_date:start_date,end_date:end_date,daydiff:daydiff
        // ,api_ids:graph_ids},
        dataType: "json",
        success: function(res) {
            $(".loaderScreen").hide();
            var strucd = makeStructure(res, category_id);
            //console.log(strucd);
            if (only_video == true && strucd == '') {
                console.log(strucd);
                $(".excellenceSlider_wrap").html('<h3 style="text-align: center; padding-top: 45px;">No video availables</h3>');
            } else {
                $(".excellenceSlider_wrap").html(strucd);
                reInitSlider();
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            $(".loaderScreen").hide();
            if (jqXHR.status == 500) {
                console.log("Internal error: " + jqXHR.responseText, "Failed");
            } else {
                console.log("Unexpected error Please try again.", "Failed");
            }
        },
    });
}

function makeStructure(arr, catid = "") {
    var template_directory_path = $("#template_directory_path").val();
    var htmld = "";
    var cat_slug = "";
    var cat_name = "";
    arr.forEach((elem) => {
        cat_slug = elem.slug;
        cat_name = elem.category_name;
        // data-toggle="modal" data-target="#TestModalOne"
        htmld += `<div class="excellenceSliderInner ${cat_slug}">
                    <div class="excellenceCard">
                      <div class="excellenceCardImg">
                          <img src="${elem.featured_img_src}" alt="">
                      </div>
                      <div class="excellenceCardOverlayTwo"></div>
                      <div class="excellenceCardOverlay"></div>
                      <div class="excellenceCardText">
                          <h3 class="font24 commonsSemiBold">${elem.title}</h3>
                          <h4 class="font16 commonsThin">${elem.content}</h4>`;
        if (!elem.video_link) {
            htmld += `<a href="${elem.link}" target="_blank" class="font16 commonsMedium">
                          <img src="${template_directory_path}/images/news-arrow.png" alt="">
                          </a>`;
        }
        htmld += `</div>`;
        if (cat_name) {
            htmld += `<div class="filterTag ${elem.category_slug}">
                            <p>${cat_name}</p>
                          </div>`;
        }

        if (elem.video_link) {
            htmld += `<a data-fancybox class="videoPlayBtn"
                          href="${elem.video_link}"><img
                              src="${template_directory_path}/images/play-btn.png" alt=""></a>`;
        }
        // htmld += `<!-- <div class="statusTag">
        //                         <img src="${template_directory_path}/images/eye-icon.png" alt="">
        //                         <p class="font16">Most viewed</p>
        //                     </div> -->
        htmld += `</div>
                    </div>`;
    });

    if (htmld) {
        htmld = `<div class="excellenceSlider">${htmld}</div>`;
    }
    return htmld;
}

function reInitSlider() {
    $(".excellenceSlider").slick({
        dots: !1,
        infinite: !1,
        arrows: !0,
        slidesToShow: 4.5,
        slidesToScroll: 1,
        responsive: [{
                breakpoint: 1600,
                settings: {
                    slidesToShow: 3.5,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 1.5,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2.5,
                    slidesToScroll: 1,
                    dots: !0,
                    arrows: !1,
                },
            },
            {
                breakpoint: 640,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: !0,
                    arrows: !1,
                },
            },
        ],
    });
}


