
let scripts = [
    `http://www.scandoil.com/moxie-bm2/news/bm.feed.js?2-3;count=3;desc=1;image=1;target=_blank;id=bm1593980960905`,
    `http://www.scandoil.com/moxie-bm2/news/subsea_news/bm.feed.js?2-12;count=3;desc=1;image=1;target=_blank;id=bm1593980960905`,
    `http://www.scandoil.com/moxie-bm2/news/spot_news/bm.feed.js?2-165;count=3;desc=1;image=1;target=_blank;id=bm1593980960905`,
    `http://www.scandoil.com/moxie-bm2/financial/bm.feed.js?2-26;count=3;desc=1;image=1;target=_blank;id=bm1593980960905`,
    `http://www.scandoil.com/moxie-bm2/oil/bm.feed.js?2-119;count=3;desc=1;image=1;target=_blank;id=bm1593980960905`,
    `http://www.scandoil.com/moxie-bm2/gas/bm.feed.js?2-127;count=3;desc=1;image=1;target=_blank;id=bm1593980960905`,
    `http://www.scandoil.com/moxie-bm2/alternative_energy/bm.feed.js?2-141;count=3;desc=1;image=1;target=_blank;id=bm1593980960905` 
];

var scrIndex;
function getRand(){
    let num = parseInt(Math.random().toString().substr(3,1));
    if(num >= scripts.length){
        getRand();
    }else{
        scrIndex = num;
    }
};
getRand();
scrIndex = scripts[scrIndex];
var script_category = scrIndex.split("/");

if(script_category.length == 7){
    script_category = script_category[5];
}else{
    script_category = script_category[4];
}
script_category = script_category.replace("_" , " ");
setTimeout(function(){
    scrIndex = $("#petr_news_rss_section").prepend(`<script id="bm1593980960905_scr" src="${scrIndex}"></script>`);
},1);


$(document).ready(function(){

    // for video player at home page
    const player = new Plyr('#v-player', {
        poster: 'layout/imgs/logo.png'
    });
    window.player = player;

    // for sponsors section at home page
    let sponsors_imgs = $(".sponsors .first-sponsors img");
    let sponsorsWidth = sponsors_imgs.length * ( parseInt(sponsors_imgs.css("width")) + parseInt(sponsors_imgs.css("margin-right"))) + 160;
    $(".sponsors .sponsors-banner").width(sponsorsWidth);
    $(".sponsors .sponsors-parent").width(sponsorsWidth*2);

    // for latest events carousel
	$('.latest-events-carousel').owlCarousel({
		loop:true,
		margin:15,
		nav:false,
		dots:false,
		autoplaySpeed:2000,
		autoplay:true,
		autoplayTimeout:4000,
		responsive:{
			0:{
				items:1.1
			},
			600:{
				items:2.1
			},
			1000:{
				items:2.7
			}
		}
    });
    
    // for petro news section
    setTimeout(function(){

        $("#bm1593980960905 .bmfeedItem").each(function(){
        
            let href        = $(this).children("div:nth-child(1)").children("a:nth-child(1)").attr("href");
            let img         = $(this).children("div:nth-child(1)").children("a:nth-child(1)").children("img").attr("src");
            let title       = $(this).children("div:nth-child(1)").children("a:nth-child(2)").text();
            let description = $(this).children("div:nth-child(2)").text();


            let template = `
                <div class="col-12 col-md-6 col-lg-3 mb-2">
                    <a href="${href}" target="_blank">
                        <div class="event position-relative">
                            <div class="ribbon position-absolute">
                                <i class="fas fa-globe-americas"></i> ${script_category}
                            </div>
                            <div class="event-image d-flex justify-content-center align-items-center">
                                <img src="${img}" class="img-fluid" />
                            </div>
                            <div class="event-details p-3">
                                <p class="event-name">
                                    ${title}
                                </p>
                                <p class="description">
                                    ${description}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            `;

            $("#petr_news_rss_section").prepend(template);
            
        });
    },2000);

   
});