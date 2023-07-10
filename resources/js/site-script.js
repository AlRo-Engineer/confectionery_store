import Inputmask from "inputmask/lib/inputmask";
import $ from "jquery";

document.addEventListener("DOMContentLoaded", () => {
    createInputMasks();
    createStickyHeader();
    createReadMore();
});


function maskItems(selector, mask) {
    const items = document.querySelectorAll(selector);
    const maskInstance = new Inputmask(mask);
    items.forEach((item) => {
        maskInstance.mask(item);
    });
}
function createInputMasks() {
    maskItems(".usa-phone", "(999) 999-9999");
    maskItems(".usa-zip", "99999");
}

function createStickyHeader() {
    const header = document.querySelector(".site-header");
    const sticky = header.offsetTop;
    window.onscroll = function () {
        if (window.scrollY > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
}

function createReadMore() {
    const carLmt = 240;
    const readMoreTxt = '<span class="btn search-btn readMore">Read More</span>';
    const readLessTxt = '<span class="btn search-btn readLess">Read Less</span>';
    $(".addReadMore").each(function () {
        if ($(this).find(".firstSec").length)
            return;

        const allstr = $(this).text();
        if (allstr.length > carLmt) {
            const firstSet = allstr.substring(0, carLmt);
            const secdHalf = allstr.substring(carLmt, allstr.length);
            const strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span>" + readMoreTxt + readLessTxt;
            $(this).html(strtoadd);
        }
    });
    $(document).on("click", ".readMore,.readLess", function () {
        $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
    });

    $(document).on("click", ".add-to-cart", function () {
        alert("Product has been added to the cart!");
    });

}




