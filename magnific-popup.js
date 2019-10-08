//jQuery needed
//https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js needed

$(function() {
    $('.popup-youtube, .popup-vimeo').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 150,
        preloader: false,
        fixedContentPos: false
    });
});

//View complete example : https://codepen.io/stakitos/pen/ExxaOOx
