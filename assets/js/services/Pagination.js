import ControlBoxToPhoto from "./ControlBoxToPhoto.js";
import PagePictures from "./PagePictures.js";

export default class Pagination {

    static firstTime() {
        ControlBoxToPhoto.execute()
        PagePictures.execute()

        if ($("#pagination-component").length > 0) {
            $.cookie("pagination",0,{expires:1})
        } 

        if ($.cookie("pagination") == 0) {
            $("#pagination-back").css("display","none")
        }

    }

    static next() {
        ControlBoxToPhoto.execute()
        PagePictures.execute()

        const oldvalue = $.cookie("pagination")
        if ($("#pagination-component").length > 0) {
            if ($.cookie("pagination") == undefined) {
                $.cookie("pagination",0,{expires:1})
            } else {
                $.cookie(
                    "pagination",
                    parseInt($.cookie("pagination")) + 3,
                    {expires:1}
                )                
            }
        } 
        
        if ($.cookie("pagination") == 0) {
            $("#pagination-back").css("display","none")
        } else {
            $("#pagination-back").css("display","inline")
        }

        Pagination.execRequest(parseInt($.cookie("pagination")),oldvalue)

    }

    static back() {

        const oldvalue = $.cookie("pagination")
        if ($("#pagination-component").length > 0) {
            if ($.cookie("pagination") == undefined) {
                $.cookie("pagination",0,{expires:1})
            } else {
                $.cookie(
                    "pagination",
                    parseInt($.cookie("pagination")) - 3,
                    {expires:1}
                )                
            }
        } 

        if ($.cookie("pagination") == 0) {
            $("#pagination-back").css("display","none")
        } else {
            $("#pagination-back").css("display","inline")
        }

        Pagination.execRequest(parseInt($.cookie("pagination")),oldvalue)
    }

    static execRequest(value = 0,oldvalue = 0) {

        $.get(`/pagination?value=${value}`)
        .then((e) => {

            let htmlImage = ''
            const data = JSON.parse(e)

            data.forEach((element) => {
                htmlImage += Pagination.stringShowInfs()
                    .replace('{name}', element.name)
                    .replace('{description}', element.description)                    
            })

            $("#image-page").html(`<center>${htmlImage}</center>`)
        
            ControlBoxToPhoto.execute()
            PagePictures.execute()
    
        }).catch(e => {
            if (e.status = 404) {
                $.cookie(
                    "pagination",
                    oldvalue,
                    {expires:1}
                )
            }
        })
    }

    static stringShowInfs() {
        return `
        <div class="to-photo">        
            <div>
                <img
                    class="image-photo"
                    src="{name}"
                >
            </div>

            <div>
                <span class="description-photo">
                    {description}
                </span>
            </div>
        </div>            
        `
    }

}