export default class PageServices {

    static execute() {
                
        if ($("#service-dog-text").length > 0) {

            let widthWindow = $(window).width();

            if (widthWindow < 1000) {
                $("#service-dog-image").css("display","none")
                $("#service-dog-image").removeClass("col-4")
                $("#service-dog-text").removeClass("col-8")
               $("#service-dog-text").css("overflow-y",'scroll')
            } else {                
                $("#service-dog-image").css("display","block")
                $("#service-dog-image").addClass("col-4")
                $("#service-dog-text").addClass("col-8") 
                $("#service-dog-text").css("overflow-y",'none') 
            }
        }

    }

}