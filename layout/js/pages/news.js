$(document).ready(function(){
    
    function getNews($id){

        $("#petr_news_rss_section").html("");

        $($id + " .bmfeedItem").each(function(){
        
            let href        = $(this).children("div:nth-child(1)").children("a:nth-child(1)").attr("href");
            let img         = $(this).children("div:nth-child(1)").children("a:nth-child(1)").children("img").attr("src");
            let title       = $(this).children("div:nth-child(1)").children("a:nth-child(2)").text();
            let description = $(this).children("div:nth-child(2)").text();


            let template = `
                <div class="col-12 col-md-6 mb-4">
                    <a href="${href}" target="_blank" >
                        <div class="new-single p-4">
                            <img src="${img}" class="d-block img-fluid mb-4" />
                            <h5>
                                <b>
                                    ${title}
                                </b>
                            </h5>
                            <p class="small">
                                ${description}
                            </p>
                        </div>
                    </a>
                </div>
            `;

            $("#petr_news_rss_section").append(template);
            
        });
    }

    function getNewsSelectedId(){
        let id = $(".category-active").attr("data-id");
        getNews(id);
    }
    getNewsSelectedId();
    $(".category-news").click(function(){
        $(".category-news").removeClass("category-active");
        $(this).addClass("category-active");
        getNewsSelectedId();
    });


});