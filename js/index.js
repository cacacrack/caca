    // Expand Panel
    $(".open").click(function(){
        $(".content").slideDown("fast", function() {
           $(".content").animate({"height": "+=5px", }, "fast");
           $(".content").animate({"height": "-=5px", }, "fast");
        });
        $(".open").hide();
        $(".close").show();
    });


    // Collapse Panel
    $(".close").click(function(){
        $(".content").animate({"height": "+=10px", }, "fast");
        $(".content").slideUp("fast", function() {
           $(".content").animate({"height": "-=10px", }, "fast");
           $(".close").hide();
           $(".open").show();
        });
    });