(function ($) {

    var settings = {};

    $.cookieMessage = function (options) {
        var defaults = {
            mainMessage: "",
            acceptButton: "Accept",
            expirationDays: 20,
            backgroundColor: '#666',
            fontSize: '14px',
            fontColor: 'white',
            btnBackgroundColor: 'rgb(7, 78, 206)',
            btnFontSize: '11px',
            btnFontColor: 'white',
            linkFontColor: '#ffff00',
            cookieName: 'cookieMessage'
        };

        settings = $.extend({}, defaults, options);
        ready();
    }

    function ready() {
        var coo = getCookie(settings.cookieName);
        if (coo != "true") {
            $(document).ready(function () {
                cookieMessageGenerate();
            })
        }
    }

    function setCookie(c_name, value, exdays) {
        var exdate = new Date();
        exdate.setDate(exdate.getDate() + exdays);
        var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
        document.cookie = c_name + "=" + c_value;
    }

    function getCookie(c_name) {
        var i, x, y, ARRcookies = document.cookie.split(";");
        for (i = 0; i < ARRcookies.length; i++) {
            x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
            y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
            x = x.replace(/^\s+|\s+$/g, "");
            if (x == c_name) {
                return unescape(y);
            }
        }
    }

    function cookieMessageGenerate() {
        var html = '<div id="cookie-msg">' +
            '<span class="msg">' + settings.mainMessage +
            '<a href="" class="btn-aceptar">' + settings.acceptButton + '</a>' +
            '</span></div>';

        $("body").append(html);

        $("#cookie-msg").css({
            'position': 'fixed',
            'bottom': '0',
            'width': '100%',
            'text-align': 'center',
            'padding': '12px 50px',
            'background-color': settings.backgroundColor,
            'color': settings.fontColor,
            'font-size': settings.fontSize,
            'z-index': '99999'
        });

        $("#cookie-msg a").css({
            'color': settings.linkFontColor,
            'text-decoration': 'underline',
        });

        $("#cookie-msg a.btn-aceptar").css({
            'color': settings.btnFontColor,
            'font-size': settings.btnFontSize,
            'text-decoration': 'none',
            'position': 'absolute',
            'bottom': '35%',
            'right': '26px'
        });

        $("#cookie-msg a.btn-aceptar").on("click", function () {
            var coo = setCookie(settings.cookieName, true, settings.expirationDays);
            $("#cookie-msg").remove();

            return false;
        })
    }

}(jQuery));
