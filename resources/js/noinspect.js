$(document).keydown(function(e){
    if(e.which === 123){

        return false;

    }

});
$(document).bind("contextmenu",function(e) {
    e.preventDefault();

});

var opened = false;
window.addEventListener('devtoolschange', function (e) {
    if (!window.devtools.open) {
        window.location.replace(noelementsurl);
    }
});
