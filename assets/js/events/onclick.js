import Pagination from "../services/Pagination.js"

export default function onclick() {
    $("#pagination-next").click((e) => {
        Pagination.next()
    })

    $("#pagination-back").click((e) => {
        Pagination.back()
    })
}