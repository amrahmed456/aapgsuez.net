$(".member-description").slideUp(0);

$(document).ready(function(){
    $(".show-more-info").click(function(){
        $(this).siblings(".member-description").slideToggle();
        $(this).toggleClass("active");
        var content;
        if($(this).hasClass("active")){
            // details is active
            content = `show less <i class="fas fa-chevron-up ml-2"></i>`;
        }else{
            content = ` show more <i class="fas fa-chevron-down ml-2"></i>`;
        }
        $(this).html(content);
    });
});