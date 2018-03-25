$('.lnse').click(function(event) {
    event.preventDefault();
    src = $(event.target).attr('src')
    $('#modal-img').attr('src', src)
    $('#modal').modal();
})