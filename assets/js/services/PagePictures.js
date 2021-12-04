export default class PagePictures {

    static execute() {

        if ($("#image-page").length > 0) {
        
            let widthWindow = $(window).width();
                
            if (widthWindow < 600) {
                $(".image-photo").css("width","250px");
            } else if (widthWindow < 1000) {
                $(".image-photo").css("width","450px");
            } else {
                $(".image-photo").css("width","900px");
            }
        
        }
    }

}