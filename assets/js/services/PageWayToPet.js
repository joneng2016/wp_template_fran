export default class PageWayToPet {

    static execute() {
        
        if ($("#way-to-pet").length > 0) {
        
            let widthWindow = $(window).width();

            if (widthWindow < 1000) {
                $("#waytopet-image").css("display","none")
                $("#waytopet-image").removeClass("col-5")
                $("#waytopet-content").removeClass("col")
                $('.box_address').css("overflow-y",'scroll')
            } else {
                $("#waytopet-image").css("display","block")                
                $("#waytopet-image").addClass("col-5")
                $("#waytopet-content").addClass("col")
                $('.box_address').css("overflow-y",'none')
            }

        }
    }

}