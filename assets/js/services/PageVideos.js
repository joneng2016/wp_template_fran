export default class PageVideos {

    static execute() {

        if ($("#video-page").length > 0) {
        
            let widthWindow = $(window).width();
            
            if (widthWindow < 600) {
                $(".iframe-video").css("width","250px");
                $(".iframe-video").css("height","125px");                
            } else if (widthWindow < 1000) {
                $(".iframe-video").css("width","450px");
                $(".iframe-video").css("height","250px");
            } else {
                $(".iframe-video").css("width","900px");
                $(".iframe-video").css("height","500px");
            }
        
        }
    }

}