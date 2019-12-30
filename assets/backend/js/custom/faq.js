$(document).ready(function () {
    function loadGoster() {
        $("#sakliLoad>img").remove();
        $("#sakliLoad>input").show();
    }
    function loadGizle() {
        $("#sakliLoad>input").hide();
        $("#sakliLoad").append('<img id="theImg" style="display: block;margin-left: 50%" src="' + SITE_URL + '/assets/backend/img/ajax-loader.gif" />');
    }
    myTable = $("#dataTable").DataTable();
    //buton toggle
    $(document).on('click', 'a#formToggle', function (e) {
        var kapaliacik = $("input[name=kapaliacik]").val();
        var duzenleme = $("input[name=duzenleme]").val();
        if (kapaliacik == 0) {
            $("input[name=kapaliacik]").val(1);
            if (duzenleme == 0) {
                $("input[name=duzenleme]").val(0);
                $("input[name=duzenlemeID]").val(-1);
                $("input[name=baslik]").val("");
                $("input[name=eskiBaslik]").val("");
            }
        } else {
            $("input[name=duzenleme]").val(0);
            $("input[name=kapaliacik]").val(0);
            $("input[name=duzenlemeID]").val(-1);
            $("input[name=baslik]").val("");
            $("input[name=eskiBaslik]").val("");
        }
    });
    //silme butonu
    $(document).on('click', 'button#sil', function (e) {
        var ID = $(this).parent().parent().attr('id');
        alertify.confirm("Are you sure you want to delete it ?", function (e) {
            if (e) {
                $.ajax({
                    type: "Post",
                    url: SITE_URL + "/admin/faq/faqSil/" + ID,
                    cache: false,
                    dataType: "json",
                    data: {},
                    success: function (cevap) {
                        if (cevap.hata) {
                            alertify.alert('ERROR', cevap.hata);
                            return false;
                        } else {
                            if (cevap.result) {
                                alertify.alert('SUCCESS', cevap.result, function () {
                                    setTimeout(function () {
                                        window.location.reload(1);
                                    }, 1000);
                                });
                            }
                        }
                    }
                });
            } else {
                alertify.error("Canceled!");
            }
        });
    });
    //buton kaydet
    $('#form').submit(function (e) {
        e.preventDefault();
        loadGizle();
        var duzenleme = $("input[name=duzenleme]").val();
        if (duzenleme == 0) {//ekleme
            $.ajax({
                type: "POST",
                url: SITE_URL + "admin/faq/faqEkle",
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
        } else {//düzenleme

            $.ajax({
                type: "POST",
                url: SITE_URL + "admin/faq/faqDuzenle",
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
        }
    });
    //table düzenle butonları
    $(document).on('click', 'button#duzenle', function (e) {
        var ID = $(this).parent().parent().attr('id');
        $.ajax({
            type: "post",
            url: SITE_URL + "admin/faq/faqBul/" + ID,
            dataType: "json",
            cache: false,
            data: {},
            success: function (cevap) {
                if (cevap.hata) {
                    reset();
                    alertify.alert(cevap.hata);
                    return false;
                } else {
                    if (cevap.result) {
                        $("input[name=eskiBaslik]").val(cevap.result.baslik);
                        $("input[name=baslik]").val(cevap.result.baslik);
                        $("textarea[name=icerik]").val(cevap.result.icerik);
                        $("input[name=duzenleme]").val(1);
                        $("input[name=duzenlemeID]").val(ID);
                        var kapaliacik = $("input[name=kapaliacik]").val();
                        if (kapaliacik == 0) {
                            $("#formToggle").click();
                        }
                    }
                }
            }
        });
    });
});
$(function () {


    // $(".select2").select2();


    //iCheck for checkbox and radio inputs
//    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
//        checkboxClass: 'icheckbox_minimal-blue',
//        radioClass: 'iradio_minimal-blue'
//    });
    
    $("#vazgec").on("click", function () {
        $("#formToggle").click();
        $(".hidden-first").fadeOut();
    });
});
