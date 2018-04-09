$('.lnse').click(function (event) {
    event.preventDefault();
    src = $(event.target).attr('src');
    $('#modal-img').attr('src', src);
    $('#modal').modal();
});

// $('a.portfolio-box').click(function (e) {
//     $title = $(this).prop('id');
//     console.log($title);
//     setTimeout(function () {
//         console.log($title);
//         console.log($('.mfp-title'));
//         $('.mfp-title').html('<p>' + $title + '</p>');
//     }, 200);
// });


$('.popup-gallery').on('mfpChange', function (e,s) {
    // console.log('Content changed');
    // console.log(e)
    var title = $(s.el).prop('id');
    // console.log(title);

    setTimeout(function () {
        var $mfp = $('.mfp-title');
        // console.log($mfp);
        $mfp.html('<p>' + title + '</p>');
    },200);

});