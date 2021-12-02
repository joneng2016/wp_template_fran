import PageServices from "./services/PageServices.js";
import PagePictures from "./services/PagePictures.js";
import PageWayToPet from "./services/PageWayToPet.js";

export default function app() {
    PageServices.execute()
    PagePictures.execute()
    PageWayToPet.execute()
}