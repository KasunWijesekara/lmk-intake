/* ==============================================
     LOADER -->
     =============================================== */

     $(window).load(function() {
        $('#loader').delay(600).fadeOut('slow');
        $('#loader-container').delay(600).fadeOut('slow');
        $('body').delay(600).css({
            'overflow': 'visible'
        });
     })
