import PageServices from "../services/PageServices.js";
import PagePictures from "../services/PagePictures.js";
import PageWayToPet from "../services/PageWayToPet.js";
import PageVideos from "../services/PageVideos.js";

export default function events() {
    
    $(window).resize(function () {
        PageServices.execute()
        PagePictures.execute()
        PageWayToPet.execute()
        PageVideos.execute()
    })


}