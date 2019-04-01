/******** Products Tabs ********/
// Javascript to enable link to tab
var url = document.location.toString();
if (url.match('#')) {
    $('.nav-pills a[href="#' + url.split('#')[1] + '"]').tab('show');
} 

// Change hash for page-reload
$('.nav-pills a').on('shown.bs.tab', function (e) {
    window.location.hash = e.target.hash;
    window.scrollTo(0, 0);
})


/******** Contact form validation ********/
$.validate({
    form : '#contact-form'
});