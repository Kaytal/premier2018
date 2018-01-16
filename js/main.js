$ = jQuery;


$('.nav-toggle').on('click', function() {
    var toggleText = true;
    console.log($(this).text())
    if($(this).text() !== 'MENU') {
        toggleText = false;
    }
    $(this).toggleClass('expanded');
    if(toggleText) {
        $(this).text('CLOSE');
    } else {
        $(this).text('MENU');
    }

    $('.main-navigation').toggleClass('expanded');
});
