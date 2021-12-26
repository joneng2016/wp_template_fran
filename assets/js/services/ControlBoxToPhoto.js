export default class ControlBoxToPhoto {

    static execute() {

        if ($(".to-photo").length > 0) {
        
            let widthWindow = $(window).width();
            
            if (widthWindow < 600) {
                $(".to-photo").css("width","300px");                
            } else if (widthWindow < 1400) {
                $(".to-photo").css("width","500px");
            } else if (widthWindow < 900) {
                $(".to-photo").css("width","400px");                
            } else {                
                $(".to-photo").css("width","80%");
            }
        
        }
    }

}