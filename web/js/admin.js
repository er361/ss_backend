/* надо проверить какое значение стоит у селектора */
val = $('#header-background_type').val();
if (parseInt(val) == 0) {
    /*если это картинка */
    /* скрыть видео */
    $('.field-header-videofile').hide();
} else
    $('.field-header-imgfile').hide();
$('#header-background_type').change(function (event) {
    var val = $(this).val();
    if (parseInt(val) == 0) {
        /*если значения картинка 0 это картинка */
        $('#header-videofile').val(null); //сбрасываем значение инпута
        //скрываем видимость видео  инпута
        $('.field-header-videofile').hide();
        //и показываем инпут картинки
        $('.field-header-imgfile').show();
    } else {
        /* если значение видео */
        //показываем видео инпут
        $('.field-header-videofile').show();
        //сбрасываем и скрываем инпут для картинки
        $('#header-imgfile').val(null);
        $('.field-header-imgfile').hide();
    }
});