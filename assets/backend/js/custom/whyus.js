$(document).ready(function () {
    function loadGoster() {
        $("#sakliLoad>img").remove();
        $("#sakliLoad>input").show();
    }
    function loadGizle() {
        $("#sakliLoad>input").hide();
        $("#sakliLoad").append('<img id="theImg" style="display: block;margin-left: 50%" src="' + SITE_URL + '/assets/backend/img/ajax-loader.gif" />');
    }
  
    $('#form').submit(function (e) {
        e.preventDefault();
        loadGizle();
        CKEDITOR.instances['intro_content'].updateElement();
        $.ajax({
            type: "POST",
            url: SITE_URL + "admin/aboutwhy/whysduzenle",
            cache: false,
            dataType: "json",
            data: new FormData(this),
            async: false,
            contentType: false,
            enctype: 'multipart/form-data',
            processData: false,
            success: function (cevap) {
                if (cevap.hata) {
                    loadGoster();
                    alertify.alert('ERROR', cevap.hata);
                    return false;
                } else {
                    if (cevap.result) {
                        loadGoster();
                        alertify.alert('SUCCESS', cevap.result, function () {
                            setTimeout(function () {
                                window.location.reload(1);
                            }, 1000);
                        });

                    }
                }
            }
        });
    });
    
});

