export default class Pagination {

    static execute() {

        if ($("#pagination-component").length > 0) {
            if ($.cookie("pagination") == undefined) {
                $.cookie("pagination",0,{expires:1})
            }
        }

        if ($.cookie("pagination") == 0) {
            $("#pagination-back").css("display","none")
        }

    }

}