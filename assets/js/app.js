import PageServices from "./services/PageServices.js";
import PagePictures from "./services/PagePictures.js";
import PageVideos from "./services/PageVideos.js";
import PageWayToPet from "./services/PageWayToPet.js";
import Pagination from "./services/Pagination.js";

export default function app() {
    PageServices.execute()
    PagePictures.execute()
    PageWayToPet.execute()
    PageVideos.execute()
    Pagination.execute()
}