var openNewTab = localStorage.getItem('newTab') === 'true';
var pc = $('#pageCurrent');
var pn = $('#pageNew');

$('.pageselect').on('click', function() {
    openNewTab = !openNewTab;

    updatePageToggler();

    localStorage.setItem('newTab', openNewTab);
    return false;
});

var updatePageToggler = function() {
    if(openNewTab) {
        pc.hide();
        pn.show();
    } else {
        pc.show();
        pn.hide();
    }
};

updatePageToggler();
