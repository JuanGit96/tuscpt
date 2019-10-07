$(document).ready(function() {
    $("input#reloj").simpleClock(-5);
    if ($('#inmediata').is('[disabled = ""]')) {
        $('#24Horas').prop('checked', 'true');
        $('#radio1').prop('class', 'radio disabled')
    }
    else{
        $('#inmediata').prop('checked', 'true');
        $('#radio1').prop('class', 'radio');
    }
});


(function ($) {

  $.fn.simpleClock = function ( utc_offset ) {
    var language = "es";
    switch (language) {                
        case "es":
        var weekdays = ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"];
        var months = ["Ene", "Feb", "Mar", "Abr", "Mayo", "Jun", "Jul", "Ago", "Sept", "Oct", "Nov", "Dic"];
        break;                
                default:    // "en" -> Standard: Englisch
                var weekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];
                var months = ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"];
                break;
            }
            var clock = this;
            function getTime() {
              var date = new Date();

              var nowUTC = date.getTime() + date.getTimezoneOffset()*60*1000;
              date.setTime( nowUTC + (utc_offset*60*60*1000) );

              var hour = date.getHours();

                if ( language == "en" ) {
                    suffix = (hour >= 12)? 'p.m.' : 'a.m.';
                    hour = (hour > 12)? hour -12 : hour;
                    hour = (hour == '00')? 12 : hour;
                }

                return {
                    day: weekdays[date.getDay()],
                    date: date.getDate(),
                    month: months[date.getMonth()],
                    year: date.getFullYear(),
                    hour: appendZero(hour),
                    minute: appendZero(date.getMinutes()),
                    second: appendZero(date.getSeconds())
                };
            }
            function appendZero(num) {
              if (num < 10) {
                return "0" + num;
            }
            return num;
        }
            function refreshTime(clock_id) {
                var now = getTime();
                clock = $.find('#'+clock_id);
                var hora = now.hour+':'+now.minute+':'+now.second;
                $('#reloj').val(hora);
                if (hora >= '15:30:00' ) {
                    $('#inmediata').prop('disabled', true);
                }
                else{
                    $('#inmediata').prop('disabled', false);
                }

                if ( typeof(suffix) != "undefined") { 
                    $(clock).find('.time').append('<strong>'+ suffix +'</strong>');
                }
            }

            var clock_id = $(this).attr('id');

            refreshTime(clock_id);
            setInterval( function() { refreshTime(clock_id) }, 1000);    

        };
    })
(jQuery);
