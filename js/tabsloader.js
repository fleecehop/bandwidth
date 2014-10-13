//This file works to make sure the proper tab is highlighted based on keywords in the URL

$(function() {
    if (window.location.href.indexOf("index") > -1) {

        $('#homeTab').parent('li').addClass('active');

    }
    else if (window.location.href.indexOf("homies") > -1) {

        $('#homiesTab').parent('li').addClass('active');

    }
    else if (window.location.href.indexOf("live") > -1) {

        $('#liveTab').parent('li').addClass('active');

    }

    else if (window.location.href.indexOf("merch") > -1) {

        $('#merchTab').parent('li').addClass('active');

    }
    else if (window.location.href.indexOf("releases") > -1) {

        $('#releasesTab').parent('li').addClass('active');

    }
    else{

        $('#homeTab').parent('li').addClass('active');

    }
});