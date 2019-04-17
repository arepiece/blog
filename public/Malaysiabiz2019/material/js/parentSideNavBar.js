/**
 * MOCKUP PURPOSE
 */
$.fn.extend({
    parentSideNavbar: function (parentPageName) {

        var cur_page = location.pathname.split('/').slice(-1)[0]
    
        parentPageName =  parentPageName ? parentPageName:document.referrer.split('/').slice(-1)[0]

        var url = location.href.replace(cur_page, parentPageName)

        url = url.split('?').slice(0)[0]
        
        var element = $('ul#sidebarnav a').filter(function () {

            return this.href == url;
        }).addClass('active').parent().addClass('active');
        while (true) {
            if (element.is('li')) {
                element = element.parent().addClass('in').parent().addClass('active');
            } else {
                break;
            }
        }
    }
})

$(function(){
    $(this).parentSideNavbar()
})