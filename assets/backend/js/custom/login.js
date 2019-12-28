$(document).ready(function () {
    var loginDeger = $("#sonucDeger").val();
    if (loginDeger != "undefined") {//front
        if (loginDeger != "") {//front
            alertify.alert('ERROR', loginDeger);
            return false;
        }
    }

});
 