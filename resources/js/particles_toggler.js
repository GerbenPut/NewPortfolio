
//sla op of de gebruiker particles aan of uit heeft
var enabled = localStorage.getItem('particles') === 'true';
var toggler = $('#particletoggler');
var toggler2 = $('#particletoggler2');

updateParticles(true);

//particles aan/uit zetten
toggler.on('click', function (e) {
    enabled = !enabled;
    updateParticles();
    localStorage.setItem('particles', enabled);
    return false;
});
//particles aan/uit zetten vanuit menu
toggler2.on('click', function (e) {
    enabled = !enabled;
    updateParticles();
    localStorage.setItem('particles', enabled);
    return false;
});

$(document).ready(function () {
    updateParticles();
});

function updateParticles(initial = false) {
    ids.forEach(function (id) {
        var e = $(id);

        if(initial) {
            e.css('opacity', 1);
            return;
        } else {
            if(enabled) {
                e.fadeTo(400, 0);
            } else {
                e.fadeTo(400, 1);
            }
        }
    });
    var toggletext = (enabled ?  "Enable" : 'Disable') + " particles";
    toggler.text(toggletext);
    toggler2.text(toggletext);
}
