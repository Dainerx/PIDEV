var cPage = 'c-offer_ride';
var offerRidePage= 'c-offer_ride';
var offerRideEditPage = 'm-offer_ride_edit';
var offerRideDuplicatePage = 'm-offer_ride_duplicate';
var sel_lang = $("#sess_language").val();
var sel_curr = $("#sess_price_ratio").val();
function lostData(rdURL,x)
{
    var Page1 = cPage.localeCompare(offerRidePage);
    var Page2 = cPage.localeCompare(offerRideEditPage);
    var Page3 = cPage.localeCompare(offerRideDuplicatePage);
    if(Page1 == 0 || Page2 == 0 || Page3 == 0)
    {
        notie.confirm('You will lose all filled data if you click on YES. Do you want to continue ?', 'Yes', 'Cancel', function() {
            window.location = rdURL;
        });
        if(x==1) {
            setTimeout(function () {
                $('#sess_language option[value="' + sel_lang + '"]').attr("selected", "selected");
            }, 1000);
        }else{
            setTimeout(function () {
                $('#sess_price_ratio option[value="' + sel_curr + '"]').attr("selected", "selected");
            }, 1000);
        }
        return false;
    }else{
        window.location = rdURL;
    }
}
//console.log('c-offer_ride');//curr_page

function change_lang(lang){
    var rdURL = 'http://bbcsproducts.com/carsharing/index.php?lang='+lang;
    lostData(rdURL,1);

    //window.location = 'http://bbcsproducts.com/carsharing/index.php?lang='+lang;
}

function change_currency(currency){
    var rdURL = 'http://bbcsproducts.com/carsharing/index.php?currency='+currency;
    lostData(rdURL,2);
    //window.location = 'http://bbcsproducts.com/carsharing/index.php?currency='+currency;
}

function setCookie(cname,cvalue,exdays)
{
    var d = new Date();
    d.setTime(d.getTime()+(exdays*24*60*60*1000));
    var expires = "expires="+d.toGMTString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname)
{
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++)
    {
        var c = ca[i].trim();
        if (c.indexOf(name)==0) return c.substring(name.length,c.length);
    }
    return "";
}

function preLoaderStart()
{
    //alert("before");
    var over = '<div id="overlay">' +
        '<img id="loading" src="http://bbcsproducts.com/carsharing/public_html/images/hourglass.gif">' +
        '</div>';
    var maxHeight = $("body").height()+"px" ;
    $(over).appendTo('body');
    $("#overlay").css("height",maxHeight/2);
    //alert("after");

}

function preLoaderStop()
{
    setTimeout(function(){
        $('#overlay').remove();
    }, 1000);
}

function search_location_now(){
    resp = jQuery("#get_location_search").validationEngine('validate');
    if(resp == true){
        if(document.getElementById('Location_get').value !=''){
            preLoaderStart();
            var From = $("#Location_get").val();
            $("#map-canvas").gmap3({
                getlatlng:{
                    address:  From,
                    callback: function(results){
                        $("#Location_get_lat_long").val(results[0].geometry.location);
                    }
                }
            });
            var latlongs = $("#Location_get_lat_long").val(); //Value of lattitude and Longitude
            //alert(latlongs);
            var locations = latlongs.split(',');
            lat_loc = locations[0].replace("(",""); // value of lattitude
            lang_loc = locations[1].replace(")",""); // value of langitude
            setlocatedPostition(lat_loc, lang_loc);
        }else{
            alert('Please select both From and To address');
            return false;
        }
    }else{
        return false;
    }
}

function showPosition(position)
{
    //setCookie('ride_locations_type', 'local', 1);
    setCookie('userlatitude', position.coords.latitude, 1);
    setCookie('userlongitude', position.coords.longitude, 1);
    if(getCookie('country_code') == ''){
        var request = $.ajax({
            type: "POST",
            url: site_url+"createcookie.php",
            data: "",

            success: function(data) {
                document.location.reload(true);
            }
        });
    }
}

function setlocatedPostition(get_latitude,get_longitude)
{
    //alert(get_latitude);
    //alert(get_longitude);
    //setCookie('ride_locations_type', 'local', 1);
    setCookie('userlatitude', get_latitude, 1);
    setCookie('userlongitude', get_longitude, 1);
    if(getCookie('country_code') == ''){
        var request = $.ajax({
            type: "POST",
            url: site_url+"createcookie.php",
            data: "",

            success: function(data) {
                document.location.reload(true);
            }
        });
    }
}

function getLocation()
{
    if (navigator.geolocation)
    {
        navigator.geolocation.getCurrentPosition(showPosition);
        //window.location = site_url;
    }
    else{x.innerHTML="Geolocation is not supported by this browser.";}
}

function checkCookie()
{
    var userlatitude = getCookie("userlatitude");
    var userlongitude = getCookie("userlongitude");
    if (userlatitude != "" && userlongitude != '')
    {
    }else{
        getLocation();
    }
}

function chnage_ride_types(type){
    if(type == 'international'){
        document.cookie = "country_code=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
        setCookie('ride_locations_type', 'international', 1);
        //window.location = site_url;
        location.reload();
    }else{
        $.fancybox12("#locationmodel");
        setCookie('ride_locations_type', 'local', 1);
        //getLocation();
    }
}
function go_get_latlong(from){
    if(from == 'From'){
        var From = $("#From").val();
        $("#map-canvas").gmap3({
            getlatlng:{
                address:  From,
                callback: function(results){
                    $("#From_lat_long").val(results[0].geometry.location);
                }
            }
        });
    }else if(from == 'Location_get'){
        var From = $("#Location_get").val();
        $("#map-canvas").gmap3({
            getlatlng:{
                address:  From,
                callback: function(results){
                    $("#Location_get_lat_long").val(results[0].geometry.location);
                }
            }
        });
    }else{
        var To = $("#To").val();
        $("#map-canvas").gmap3({
            getlatlng:{
                address:  To,
                callback: function(results){
                    $("#To_lat_long").val(results[0].geometry.location);
                }
            }
        });
    }
}

$(function(){var l=document.getElementById("Location_get"),o=new google.maps.places.Autocomplete(l);google.maps.event.addListener(o,"place_changed",function(){o.getPlace();go_get_latlong("Location_get")});var e=document.getElementById("From"),o=new google.maps.places.Autocomplete(e);google.maps.event.addListener(o,"place_changed",function(){o.getPlace();go_get_latlong("From")});var t=document.getElementById("To"),g=new google.maps.places.Autocomplete(t);google.maps.event.addListener(g,"place_changed",function(){g.getPlace();go_get_latlong("to")})});$(document).ready(function(){$("#facebook-ho").html('<iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/v3cube/" scrolling="no" frameborder="0" style="background:#fff;border:none; overflow:hidden; width:100%; height:292px;" allowTransparency="true"></iframe>');$("#box1video").html('');});

    $(document).ready(function(){
        $(".custom-select-new").each(function(){
            $(this).wrap("<em class='select-wrapper'></em>");
            $(this).after("<em class='holder'></em>");
        });
        $(".custom-select-new").change(function(){
            var selectedOption = $(this).find(":selected").text();
            $(this).next(".holder").text(selectedOption);
        }).trigger('change');
    });


$( document ).ajaxComplete(function() {
    $(".custom-select-new1").each(function(){
        $(this).wrap("<em class='select-wrapper'></em>");
        $(this).after("<em class='holder'></em>");
    });
    $(".custom-select-new1").change(function(){
        var selectedOption = $(this).find(":selected").text();
        $(this).next(".holder").text(selectedOption);
    }).trigger('change');
});


$("#lang_box").hide();
$("#lang_open").click(function(){
    $("#lang_box").slideToggle();
});

$("#lang_box1").hide();
$("#lang_open1").click(function(){
    $("#lang_box1").slideToggle();
});

$("#lang_box2").hide();
$("#lang_open2").click(function(){
    $("#lang_box2").slideToggle();
});

$(document).mouseup(function (e)
{
    var container = $("#lang_box,#lang_open");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        $("#lang_box").slideUp(200);
    }

    var container1 = $("#lang_box1,#lang_open1");
    if (!container1.is(e.target) && container1.has(e.target).length === 0) {
        $("#lang_box1").slideUp(200);
    }

    var container2 = $("#lang_box2,#lang_open2");
    if (!container2.is(e.target) && container2.has(e.target).length === 0) {
        $("#lang_box2").slideUp(200);
    }
});

$("#hide_langs").on('click',function(){
    $("#lang_box").slideUp(200);
});

$("#hide_currency").on('click',function(){
    $("#lang_box1").slideUp(200);
});



(function(){
    function id(v){ return document.getElementById(v); }
    function loadbar() {
        var ovrl = id("overlay"),
            prog = id("progress"),
            stat = id("progstat"),
            img = document.images,
            c = 0,
            tot = img.length;
        if(tot == 0) return doneLoading();

        function imgLoaded(){
            c += 1;
            var perc = ((100/tot*c) << 0) +"%";
            prog.style.width = perc;
            stat.innerHTML = "Loading "+ perc;
            if(c===tot) return doneLoading();
        }
        function doneLoading(){
            ovrl.style.opacity = 0;
            setTimeout(function(){
                ovrl.style.display = "none";
            }, 1200);
        }
        for(var i=0; i<tot; i++) {
            var tImg     = new Image();
            tImg.onload  = imgLoaded;
            tImg.onerror = imgLoaded;
            tImg.src     = img[i].src;
        }
    }
    document.addEventListener('DOMContentLoaded', loadbar, false);
}());

function setDefault001(){
    $("#customselect001").val('international');
}
var autocomplete_from;
var autocomplete_to;
var autocomplete_loc1;
var autocomplete_loc2;
var autocomplete_loc3;
var autocomplete_loc4;
var autocomplete_loc5;
var autocomplete_loc6;
var from_lat; var from_long; var to_lat; var to_long; var loc1_lat; var loc1_long; var loc2_lat; var loc2_long;
var loc3_lat; var loc3_long; var loc4_lat; var loc4_long; var loc5_lat; var loc5_long; var loc6_lat; var loc6_long;
$(function() {
    var from = document.getElementById('from');
    autocomplete_from = new google.maps.places.Autocomplete(from);
    google.maps.event.addListener(autocomplete_from, 'place_changed', function() {
        var place = autocomplete_from.getPlace();
        //console.log(autocomplete_from.);
        //console.log(place.geometry.location);
        $("#from_lat_long").val(place.geometry.location);
        from_lat = place.geometry.location.lat();
        from_long = place.geometry.location.lng();
        go_for_action();
    });

    var to = document.getElementById('to');
    autocomplete_to = new google.maps.places.Autocomplete(to);
    google.maps.event.addListener(autocomplete_to, 'place_changed', function() {
        var place = autocomplete_to.getPlace();
        $("#to_lat_long").val(place.geometry.location);
        to_lat = place.geometry.location.lat();
        to_long = place.geometry.location.lng();
        go_for_action();
    });

    var loc1 = document.getElementById('loc1');
    autocomplete_loc1 = new google.maps.places.Autocomplete(loc1);
    google.maps.event.addListener(autocomplete_loc1, 'place_changed', function() {
        var place = autocomplete_loc1.getPlace();
        $("#loc1_lat_long").val(place.geometry.location);
        loc1_lat = place.geometry.location.lat();
        loc1_long = place.geometry.location.lng();
        go_for_action();
    });

    var loc2 = document.getElementById('loc2');
    autocomplete_loc2 = new google.maps.places.Autocomplete(loc2);
    google.maps.event.addListener(autocomplete_loc2, 'place_changed', function() {
        var place = autocomplete_loc2.getPlace();
        $("#loc2_lat_long").val(place.geometry.location);
        loc2_lat = place.geometry.location.lat();
        loc2_long = place.geometry.location.lng();
        go_for_action();
    });

    var loc3 = document.getElementById('loc3');
    autocomplete_loc3 = new google.maps.places.Autocomplete(loc3);
    google.maps.event.addListener(autocomplete_loc3, 'place_changed', function() {
        var place = autocomplete_loc3.getPlace();
        $("#loc3_lat_long").val(place.geometry.location);
        loc3_lat = place.geometry.location.lat();
        loc3_long = place.geometry.location.lng();
        go_for_action();
    });

    var loc4 = document.getElementById('loc4');
    autocomplete_loc4 = new google.maps.places.Autocomplete(loc4);
    google.maps.event.addListener(autocomplete_loc4, 'place_changed', function() {
        var place = autocomplete_loc4.getPlace();
        $("#loc4_lat_long").val(place.geometry.location);
        loc4_lat = place.geometry.location.lat();
        loc4_long = place.geometry.location.lng();
        go_for_action();
    });

    var loc5 = document.getElementById('loc5');
    autocomplete_loc5 = new google.maps.places.Autocomplete(loc5);
    google.maps.event.addListener(autocomplete_loc5, 'place_changed', function() {
        var place = autocomplete_loc5.getPlace();
        $("#loc5_lat_long").val(place.geometry.location);
        loc5_lat = place.geometry.location.lat();
        loc5_long = place.geometry.location.lng();
        go_for_action();
    });

    var loc6 = document.getElementById('loc6');
    autocomplete_loc6 = new google.maps.places.Autocomplete(loc6);
    google.maps.event.addListener(autocomplete_loc6, 'place_changed', function() {
        var place = autocomplete_loc6.getPlace();
        $("#loc6_lat_long").val(place.geometry.location);
        loc6_lat = place.geometry.location.lat();
        loc6_long = place.geometry.location.lng();
        go_for_action();
    });

    function go_for_action(){
        if($("#from").val() != '' &&  $("#to").val() == ''){
            show_location($("#from").val());
        }

        if($("#to").val() != '' &&  $("#from").val() == ''){
            show_location($("#to").val());
        }

        if($("#from").val() != '' &&  $("#to").val() != ''){
            from_to($("#from").val(), $("#to").val());
        }
    }
});



var map;
var geocoder;
function initialize() {
    //alert("Initialize");
    geocoder = new google.maps.Geocoder();
    var mapOptions = {
        zoom: 5,
        center: new google.maps.LatLng('51.5000', '0.1167')
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);
}

$(document).ready(function(){
    google.maps.event.addDomListener(window, 'load', initialize);
});


var chk_route;
function show_location(address){
    //alert("show_location");
    clearThat();
    $('#map-canvas').gmap3({
        marker:{
            address: address
        },
        map:{
            options:{
                zoom: 8
            }
        }
    });
}

function clearThat(){
    var opts = {};
    opts.name = ["marker", "directionsrenderer"];
    opts.first = true;
    $('#map-canvas').gmap3({clear:opts});
}

function from_to(from, to){

    clearThat();
    if(from == '')
        from = $('#from').val();

    if(to == '')
        to = $('#to').val();
    //alert("from_to" + from +"   to "+to);
    $("#from_lat_long").val('');
    $("#to_lat_long").val('');
    $("#loc1_lat_long").val('');
    $("#loc2_lat_long").val('');
    $("#loc3_lat_long").val('');
    $("#loc4_lat_long").val('');
    $("#loc5_lat_long").val('');
    $("#loc6_lat_long").val('');

    var chks = document.getElementsByName('loc');
    var waypts = [];

    var fromLatlongs = from_lat+", "+from_long;
    var toLatlongs = to_lat+", "+to_long;
    var loc1Latlongs = loc1_lat+", "+loc1_long;
    var loc2Latlongs = loc2_lat+", "+loc2_long;
    var loc3Latlongs = loc3_lat+", "+loc3_long;
    var loc4Latlongs = loc4_lat+", "+loc4_long;
    var loc5Latlongs = loc5_lat+", "+loc5_long;
    var loc6Latlongs = loc6_lat+", "+loc6_long;

    if(from != ''){
        //alert("in from "+from);
        geocoder.geocode( { 'address': from}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    $("#from_lat_long").val((results[0].geometry.location));
                } else {
                    alert("No results found");
                }
            } else {
                var place19 = autocomplete_from.getPlace();
                $("#from_lat_long").val(place19.geometry.location);
            }
        });
    }
    if(to != ''){

        geocoder.geocode( { 'address': to}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    $("#to_lat_long").val((results[0].geometry.location));
                } else {
                    alert("No results found");
                }
            } else {
                var place20 = autocomplete_to.getPlace();
                $("#to_lat_long").val(place20.geometry.location);
            }
        });
    }

    if($("#loc1").val() != ''){
        waypts.push({location:loc1Latlongs, stopover:true});
        geocoder.geocode( { 'address': $("#loc1").val()}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    $("#loc1_lat_long").val((results[0].geometry.location));
                } else {
                    alert("No results found");
                }
            } else {
                var place21 = autocomplete_loc1.getPlace();
                $("#loc1_lat_long").val(place21.geometry.location);
            }
        });
    }
    if($("#loc2").val() != ''){
        waypts.push({location:loc2Latlongs, stopover:true});
        geocoder.geocode( { 'address': $("#loc2").val()}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    $("#loc2_lat_long").val((results[0].geometry.location));
                } else {
                    alert("No results found");
                }
            } else {
                var place22 = autocomplete_loc2.getPlace();
                $("#loc2_lat_long").val(place22.geometry.location);
            }
        });
    }
    if($("#loc3").val() != ''){
        waypts.push({location:loc3Latlongs, stopover:true});
        geocoder.geocode( { 'address': $("#loc3").val()}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    $("#loc3_lat_long").val((results[0].geometry.location));
                } else {
                    alert("No results found");
                }
            } else {
                var place23 = autocomplete_loc3.getPlace();
                $("#loc3_lat_long").val(place23.geometry.location);
            }
        });
    }
    if($("#loc4").val() != ''){
        waypts.push({location:loc4Latlongs, stopover:true});
        geocoder.geocode( { 'address': $("#loc4").val()}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    $("#loc4_lat_long").val((results[0].geometry.location));
                } else {
                    alert("No results found");
                }
            } else {
                var place24 = autocomplete_loc4.getPlace();
                $("#loc4_lat_long").val(place24.geometry.location);
            }
        });
    }
    if($("#loc5").val() != ''){
        waypts.push({location:loc5Latlongs, stopover:true});
        geocoder.geocode( { 'address': $("#loc5").val()}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    $("#loc5_lat_long").val((results[0].geometry.location));
                } else {
                    alert("No results found");
                }
            } else {
                var place25 = autocomplete_loc5.getPlace();
                $("#loc5_lat_long").val(place25.geometry.location);
            }
        });
    }
    if($("#loc6").val() != ''){
        waypts.push({location:loc6Latlongs, stopover:true});
        geocoder.geocode( { 'address': $("#loc6").val()}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                if (status != google.maps.GeocoderStatus.ZERO_RESULTS) {
                    $("#loc6_lat_long").val((results[0].geometry.location));
                } else {
                    alert("No results found");
                }
            } else {
                var place26 = autocomplete_loc6.getPlace();
                $("#loc6_lat_long").val(place26.geometry.location);
            }
        });
    }

    $("#map-canvas").gmap3({
        getroute:{
            options:{
                origin:fromLatlongs,
                destination:toLatlongs,
                waypoints:waypts,
                travelMode: google.maps.DirectionsTravelMode.DRIVING
            },
            callback: function(results,status){
                chk_route=status;
                if (!results) return;
                $(this).gmap3({
                    map:{
                        options:{
                            zoom: 8,
                            //       center: [51.511214, -0.119824]
                            center: [58.0000, 20.0000]
                        }
                    },
                    directionsrenderer:{
                        options:{
                            directions:results
                        }
                    }
                });
            }
        }
    });

    $("#map-canvas").gmap3({
        getdistance:{
            options:{
                origins:fromLatlongs,
                destinations:toLatlongs,
                travelMode: google.maps.TravelMode.DRIVING
            },
            callback: function(results, status){
                var html = "";
                if (results){
                    for (var i = 0; i < results.rows.length; i++){
                        var elements = results.rows[i].elements;
                        for(var j=0; j<elements.length; j++){
                            switch(elements[j].status){
                                case "OK":
                                    html += elements[j].distance.text + " (" + elements[j].duration.text + ")<br />";
                                    document.getElementById("distance").value = elements[j].distance.text;
                                    document.getElementById("duration").value = elements[j].duration.text;
                                    document.getElementById("location_found").value = 1;
                                    break;
                                case "NOT_FOUND":
                                    document.getElementById("location_found").value = 0;
                                    break;
                                case "ZERO_RESULTS":
                                    document.getElementById("location_found").value = 0;
                                    break;
                            }
                        }
                    }
                } else {
                    html = "error";
                }
                $("#results").html( html );
            }
        }
    });
}

var min_price_any_ride = 	12;
//alert(min_price_any_ride);
function hide_me_dates(){
    $("#rb").hide();
    $('#hide_dates').hide();
    $('#show_dates').show();

}

function show_me_dates(){
    //alert("show_me_date");
    var sdate=document.getElementById('sdate').value;
    var edate=document.getElementById('edate').value;
    var outboundTotal= $('input[name="outbound[]"]:checked').length;

    if(sdate == '' || edate == '' || outboundTotal == 0)
    {
        $("#rb").hide();
        return false;
    }else{
        //$("#rb").show();
        var request = $.ajax({
            type: "POST",
            url: site_url+'index.php?file=c-ride_dates',
            data: $("#frmride").serialize(),
            success: function(data) {//alert(data);
                //$("#rb").html(data);
                var objCalender = JSON.parse(data);
                $("#rb").html(objCalender.DATES);
                $("#rb").show();
                $('#show_dates').hide();
                $('#hide_dates').show();

            }
        });

        request.fail(function(jqXHR, textStatus) {
            showNotification({type : 'error', message: "Request failed: " + textStatus });
        });
    }

}

function select_date(type, date){
    document.getElementById("addtype").value = type;
    document.getElementById("adddate").value = date;
    if(type == 'out'){
        document.getElementById("addout").checked=true;
        document.getElementById("addret").checked=false;
    }else if(type == 'ret'){
        document.getElementById("addout").checked=false;
        document.getElementById("addret").checked=true;
    }else if(type == 'both'){
        document.getElementById("addout").checked=true;
        document.getElementById("addret").checked=true;
    }else{
        document.getElementById("addout").checked=false;
        document.getElementById("addret").checked=false;
    }
    $.fancybox("#searchmodel");return false;
}

function check_add(){
    var request = $.ajax({
        type: "POST",
        url: site_url+'index.php?file=c-add_date',
        data: $("#add_box").serialize(),

        success: function(data) { //alert(data);
            $.fancybox.close();
            show_me_dates();
        }
    });

    request.fail(function(jqXHR, textStatus) {
        loading_hide() ;
        showNotification({type : 'error', message: "Request failed: " + textStatus });
    });
}

$('#sdate').Zebra_DatePicker({direction: ['2017-03-30', '2017-09-26'],onSelect: function(view, elements){if($("#edate").val() != ''){show_me_dates();}},pair: $('#edate')});
$('#edate').Zebra_DatePicker({direction: 1,onSelect: function(view, elements){if($("#sdate").val() != ''){show_me_dates();}}});

$('#sdateone').Zebra_DatePicker({direction: ['2017-03-30', '2017-09-26']});
$('#edateone').Zebra_DatePicker({direction: ['2017-03-30', '2017-09-26']});


$("#roundtripric").on( "click", function() {
    if($("#roundtripric").is(':checked')){
        $("#returndays").show();
        $("#returntime").show();
    }else{
        $("#returndays").hide();
        $("#returntime").hide();
    }
});

/*function magage_trip_type(){
 $("#onetime").attr('checked', 'checked');
 show_trip_type('onetime');
 }*/

function go_next_page(){
    if(chk_route=="OK"){
        document.frmride.submit();
    }
    else{
        showNotification({type : 'error', message: 'There are something wrong in Your arrival point or your departure point.'});
    }
}



$("#returndaystime").hide();
$('#roundtriponetime').attr("checked", false);


$("#returndays").hide();
$("#returntime").hide();
$('#roundtripric').attr("checked", false);


var tot_points = '0';
var min_price_any_ride = 12;

function preLoaderStart()
{
    //alert("before");
    var over = '<div id="overlay">' +
        '<img id="loading" src="http://bbcsproducts.com/carsharing/public_html/images/hourglass.gif">' +
        '</div>';
    var maxHeight = $("body").height()+"px" ;
    $(over).appendTo('body');
    $("#overlay").css("height",maxHeight/2);
    //alert("after");

}
function preLoaderStop()
{
    setTimeout(function(){
        $('#overlay').remove();
    }, 1000);
}



/* START FOR Recurring-Onetime TIME INTERVAL */

function show_trip_type(type){
    //console.log(type);
    if(type == 'onetime'){
        $("#frmric").hide();
        $("#frmonetime").show();
    }else{
        $("#frmonetime").hide();
        $("#frmric").show();
    }
}
$('input[type="checkbox"][id="triptype"]').click(function(){
    if($(this).prop("checked") == true){
        $(this).val('recurring');
        $('#sdateone').val('');
        $('#edateone').val('');
        $('#sdateone').attr('disabled', true);
        $('#edateone').attr('disabled', true);

        $('#onetihourstart').val($("#onetihourstart option:first").val());
        $('#onetihourstart').closest('em').find('.holder').text($("#onetihourstart option:first").text());
        $('#onetimeminstart').val($("#onetimeminstart option:first").val());
        $('#onetimeminstart').closest('em').find('.holder').text($("#onetimeminstart option:first").text());

        $('#onetihourend').val($("#onetihourend option:first").val());
        $('#onetihourend').closest('em').find('.holder').text($("#onetihourend option:first").text());
        $('#onetimeminend').val($("#onetimeminend option:first").val());
        $('#onetimeminend').closest('em').find('.holder').text($("#onetimeminend option:first").text());
        $('#onetihourstart').attr('disabled', true);
        $('#onetimeminstart').attr('disabled', true);
        $('#onetihourend').attr('disabled', true);
        $('#onetimeminend').attr('disabled', true);

        show_trip_type('recurring');
        $('.addNewCar').attr('id','showCarBox');
        $('.regular-trip-popup').removeClass('regular-trip-popup-hide');
        $('.offer-ride-box4-popup').addClass('offer-ride-box4-popup-hide');
        $('.price-details-popup').addClass('price-details-popup-hide');
        if($("#roundtriponetime").is(':checked')){
            $("#returndaystime").hide();
            clearRoundTripReturn();
        }
        $('#editCalender').show();
        $('#hide_dates').hide();
        $('#show_dates').show();

    }
    else if($(this).prop("checked") == false){
        $(this).val('onetime');
        $('#sdateone').attr('disabled', false);
        $('#edateone').attr('disabled', false);
        $('#onetihourstart').attr('disabled', false);
        $('#onetimeminstart').attr('disabled', false);
        $('#onetihourend').attr('disabled', false);
        $('#onetimeminend').attr('disabled', false);

        show_trip_type('onetime');
        $('.addNewCar').attr('id','showCarBox');
        $('.regular-trip-popup').addClass('regular-trip-popup-hide');
        if($("#roundtriponetime").is(':checked')){
            $("#returndaystime").show();
        }

        resetOutRetudays();
        $('#editCalender').hide();
    }
});
show_trip_type('onetime');

$("#roundtriponetime").on( "click", function() {
    if($("#roundtriponetime").is(':checked')){
        $("#returndaystime").show();
        if($("#triptype").is(':checked')){
            $("#returndaystime").hide();
            clearRoundTripReturn();
        }
    }else{
        $("#returndaystime").hide();
        clearRoundTripReturn();
    }
});


function clearRoundTripReturn()
{
    $("#returndaystime").hide();
    document.getElementById("edateone").value = '';
    document.getElementById("onetihourend").value = '';
    document.getElementById("onetimeminend").value = '';

    $('#rb').hide();

    $('#hide_dates').hide();
    $('#show_dates').show();
    $("input[name='retturn[]']:checkbox").prop('checked',false);
    $('#richourend').val($("#richourend option:first").val());
    $('#richourend').closest('em').find('.holder').text($("#richourend option:first").text());
    $('#ricminend').val($("#ricminend option:first").val());
    $('#ricminend').closest('em').find('.holder').text($("#ricminend option:first").text());
}
function closeCalenderpSlider()
{
    $('#rb').hide();
    $("#triptype").attr('checked',false);
    $('#editCalender').hide();
    $('.regular-trip-popup').addClass('regular-trip-popup-hide');
    $('#sdateone').attr('disabled', false);
    $('#edateone').attr('disabled', false);
    $('#onetihourstart').attr('disabled', false);
    $('#onetimeminstart').attr('disabled', false);
    $('#onetihourend').attr('disabled', false);
    $('#onetimeminend').attr('disabled', false);
    //saveDateCheck();
    /*var tempflag =
     if(tempflag){
     $('#editCalender').show();
     $('.regular-trip-popup').addClass('regular-trip-popup-hide');

     }*/
}

function closeLocationSlider()
{

    $('.price-details-popup').addClass('price-details-popup-hide');
}
$('#editCalender').click(function(){
    $('.regular-trip-popup').removeClass('regular-trip-popup-hide');
    $('.price-details-popup').addClass('price-details-popup-hide');
    $('.offer-ride-box4-popup').addClass('offer-ride-box4-popup-hide');
    $('.addNewCar').attr('id','showCarBox');
    $('#hide_dates').hide();
    $('#show_dates').show();
});
$("#regular-trip-popup-but").click(function () {
    $('#rb').hide();
    saveDateCheck();
    /*var tempflag =
     if(tempflag){
     $('#editCalender').show();
     $('.regular-trip-popup').addClass('regular-trip-popup-hide');
     }*/
});
/* END FOR Recurring-Onetime TIME INTERVAL*/

/* START FOR CAR */
function change_seat(iMemberCarId)
{
    if(iMemberCarId != '')
    {
        var request = $.ajax({
            type: "POST",
            url: 'http://bbcsproducts.com/carsharing/'+'/index.php?file=m-offerride_ajax_function',
            data: "iMemberCarId="+iMemberCarId+"&&ACTION=CARSEATLIST",
            success: function(data) {
                var carSeatObject = JSON.parse(data);
                //	console.log(carSeatObject);
                $('#seats').html(carSeatObject.CARSEATS);
                $('#seats').val($("#seats option:first").val());
                $('#seats').closest('em').find('.holder').text($("#seats option:first").text());
            }
        });
        request.fail(function(jqXHR, textStatus) {
            //alert( "Request failedd: " + textStatus );
            showNotification({type : 'error', message: "Request failed :" + textStatus });
        });
    }
    else{
        var scs = "Select Seats";
        var CARSEATS = '<option value="">'+scs+'</option>';
        $('#seats').html(CARSEATS);
        $('#seats').val($("#seats option:first").val());
        $('#seats').closest('em').find('.holder').text($("#seats option:first").text());
    }
}
// # NEW CAR ADD
$('.addNC').click(function (){ //hideshow Caraddbox
    var id = $('.addNewCar').attr('id');
    if(id === 'showCarBox') {
        $('.addNewCar').attr('id','hideCarBox');
        $('.offer-ride-box4-popup').removeClass('offer-ride-box4-popup-hide');
        $('.price-details-popup').addClass('price-details-popup-hide');
        $('.regular-trip-popup').addClass('regular-trip-popup-hide');
    }else{
        $('.addNewCar').attr('id','showCarBox');
        $('.offer-ride-box4-popup').addClass('offer-ride-box4-popup-hide');
    }
    $('.formErrorContent').hide();
    $('.formErrorArrow').hide();
});

$("#frmaddcar").submit(function(e)
{
    var formObj = $(this);
    var formData = new FormData(this);
    resp = jQuery("#frmaddcar").validationEngine('validate');
    //alert(resp);
    if(resp != true){
        $('.formErrorContent').show();
        $('.formErrorArrow').show();
    }
    if(resp == true){
        preLoaderStart();
        $("input[type='submit'][name='submit']").attr("disabled", true);
        $("input[type='submit'][name='submit']").val('Please Wait...');
        $.ajax({
            url: 'http://bbcsproducts.com/carsharing/'+'/index.php?file=m-offerride_ajax_function',
            type: 'POST',
            data:  formData,
            mimeType:"multipart/form-data",
            contentType: false,
            cache: false,
            processData:false,
            success: function(data, textStatus, jqXHR)
            {
                var carAddObject = JSON.parse(data);
                //console.log(carAddObject);console.log(carAddObject.STATUS);console.log(carAddObject.CARLIST);
                if(carAddObject.FLAG_ERROR == 1)
                {  preLoaderStop();
                    showNotification({type : 'success', message: carAddObject.VAR_MSG});
                    clearCarAdd();
                    $('.addNewCar').attr('id','showCarBox');
                    $('.offer-ride-box4-popup').addClass('offer-ride-box4-popup-hide');
                    $('#iMemberCarId').html(carAddObject.CARLIST);
                    $('#iMemberCarId').val($("#iMemberCarId option:first").val());
                    $('#iMemberCarId').closest('em').find('.holder').text($("#iMemberCarId option:first").text());
                    $("input[type='submit'][name='submit']").attr("disabled", false);
                    $("input[type='submit'][name='submit']").val('SAVE');
                }
                if(carAddObject.FLAG_ERROR == 0)
                {preLoaderStop();
                    showNotification({type : 'error', message: carAddObject.VAR_MSG});
                    $("input[type='submit'][name='submit']").attr("disabled", false);
                    $("input[type='submit'][name='submit']").val('SAVE');
                }
            },
            error: function(jqXHR, textStatus, errorThrown)
            {   preLoaderStop();
                showNotification({type : 'error', message: "Request failed : " + textStatus });
                $("input[type='submit'][name='submit']").attr("disabled", false);
                $("input[type='submit'][name='submit']").val('SAVE');
            }
        });

    }
    e.preventDefault(); //Prevent Default action.
    //e.unbind();
});

function checkmembercar1(){
    resp = jQuery("#frmaddcar").validationEngine('validate');

    if(resp == true){
        var request = $.ajax({
            type: "POST",
            url: 'http://bbcsproducts.com/carsharing/'+'/index.php?file=m-offerride_ajax_function',
            data: $('#frmaddcar').serialize(),
            mimeType:"multipart/form-data",
            success: function(data) {
                var carAddObject = JSON.parse(data);
                //console.log(carAddObject);cosnsole.log(carAddObject.STATUS);console.log(carAddObject.CARLIST);
                if(carAddObject.FLAG_ERROR == 1)
                {
                    showNotification({type : 'success', message: carAddObject.VAR_MSG});
                    clearCarAdd();
                    $('.addNewCar').attr('id','showCarBox');
                    $('.offer-ride-box4-popup').addClass('offer-ride-box4-popup-hide');
                    $('#iMemberCarId').html(carAddObject.CARLIST);
                }
                if(carAddObject.FLAG_ERROR == 0)
                {
                    showNotification({type : 'error', message: carAddObject.VAR_MSG});
                }
            }
        });
        request.fail(function(jqXHR, textStatus) {
            //alert( "Request failedd: " + textStatus );
            showNotification({type : 'error', message: "Request failed : " + textStatus });
        });
    }else{
        return false;
    }
}
var defaultPhoto = "http://bbcsproducts.com/carsharing/public_html/images/plush.png";
function clearCarAdd() //Set blank value for Add New car
{
    $('#vPlateno').val('');
    $("#iMakeId").val($("#iMakeId option:first").val());
    $('#iMakeId').closest('em').find('.holder').text($("#iMakeId option:first").text());
    $("#iModelId").val($("#iModelId option:first").val());
    $('#iModelId').closest('em').find('.holder').text($("#iModelId option:first").text());
    $("#eComfort").val($("#eComfort option:first").val());
    $('#eComfort').closest('em').find('.holder').text($("#eComfort option:first").text());
    $("#iSeats").val($("#iSeats option:first").val());
    $('#iSeats').closest('em').find('.holder').text($("#iSeats option:first").text());
    $("#iColourId").val($("#iColourId option:first").val());
    $('#iColourId').closest('em').find('.holder').text($("#iColourId option:first").text());
    $("#iCarTypeId").val($("#iCarTypeId option:first").val());
    $('#iCarTypeId').closest('em').find('.holder').text($("#iCarTypeId option:first").text());
    $('#OpenImgUpload').attr('src',defaultPhoto);

}
function get_model(code,selected)
{
    //$("#model").html("Please wait...");
    var request = $.ajax({
        type: "POST",
        url: 'http://bbcsproducts.com/carsharing/'+'/index.php?file=m-offerride_ajax_function',
        data: "code="+code+"&stcode="+selected+"&ACTION=MODELLIST",
        success: function(data) {
            //$("#model").html(data);
            var modelObject = JSON.parse(data);
            //CARMODELLIST
            $("#iModelId").html(modelObject.CARMODELLIST);
            $('#iModelId').val($("#iModelId option:first").val());
            $('#iModelId').closest('em').find('.holder').text($("#iModelId option:first").text());
        }
    });
    request.fail(function(jqXHR, textStatus) {
        //alert( "Request failedd: " + textStatus );
        showNotification({type : 'error', message: "Request failed : " + textStatus });
    });
}
$("#OpenImgUpload").click(function () {
    $('#carPhotoUpload').trigger('click');
});
$("#carPhotoUpload").change(function () {

    if (typeof (FileReader) != "undefined") {
        var regex = /^([a-zA-Z0-9\s_\\.\-:\)\(])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        $($(this)[0].files).each(function () {
            var file = $(this);
            if (regex.test(file[0].name.toLowerCase())) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#OpenImgUpload').attr('src',e.target.result);
                }
                reader.readAsDataURL(file[0]);
            } else {
                showNotification({type : 'error', message: file[0].name + " is not a valid image file."});
                $('#OpenImgUpload').attr('src',defaultPhoto);
                return false;
            }
        });
    } else {
        //alert("This browser does not support HTML5 FileReader.");
        showNotification({type : 'error', message: 'This browser does not support HTML5 FileReader'});
    }
    $('#OpenImgUpload').attr('src',defaultPhoto);
});

/* END FOR CAR */

/* START Offer Ride Buttone click*/
function go_for_publish(){
    var err_flag = checkRequired();
    if(err_flag != false ){
        preLoaderStart();
        var request = $.ajax({
            type: "POST",
            url: 'http://bbcsproducts.com/carsharing/'+'/index.php?file=m-offerride_ajax_function',
            data: $('#frmride').serialize(),
            success: function(data) {
                //	console.log(data);
                var objData = JSON.parse(data);
                //	console.log(objData);
                if(objData.STATUS == 'ERROR'){
                    preLoaderStop();
                    showNotification({type : 'error', message: objData.ERROR_MSG});
                    return false;
                }
                if(objData.STATUS == 'SUCCESS'){
                    //preLoaderStop();
                    document.frmride.submit();
                    //showNotification({type : 'success', message: objData.ERROR_MSG});
                }

            }
        });

        request.fail(function(jqXHR, textStatus) {
            preLoaderStop();
            showNotification({type : 'error', message: "Request failed: " + textStatus });
            return false;
        });

    }else{
        preLoaderStop();
    }

}
function checkRequired()
{
    if(chk_route=="OK"){	}else{
        showNotification({type : 'error', message: 'There are something wrong in Your arrival point or your departure point.'});
        return false;
    }

    /*var str1 = document.getElementById('from').value;
     var str2 = document.getElementById('to').value;
     if(str1.localeCompare(str2) == 0)
     {
     showNotification({type : 'error', message: 'You can not enter source and destination address same.'});
     return false;
     } */

    var from_lat_temp = document.getElementById('from_lat_long').value;
    var to_lat_temp = document.getElementById('to_lat_long').value;

    if(from_lat_temp.localeCompare(to_lat_temp) == 0)
    {
        showNotification({type : 'error', message: 'Your arrival point can\&#039;t be the same as your departure point. Please be more specific.'});
        return false;
    }

    if(document.getElementById('iMemberCarId').value == ''){
        showNotification({type : 'error', message: 'Please select your car first'});
        return false;
    }

    if($("#tos").is(':checked')){
    }else{
        showNotification({type : 'error', message: 'Please select Terms and conditions'});
        return false;
    }

    for (var i=0;i<tot_points;i++)
    {
        if($("#price_"+i).val() < min_price_any_ride){
            //showNotification({type : 'error', message: "You can't enter any ride point price smallar than "+min_price_any_ride});
            //return false;
        }else if($("#price_"+i).val() == 0 || $("#price_"+i).val() == ''){
            showNotification({type : 'error', message: "You can&#039;t enter zero or blank price for any ride point"});
            return false;
        }
    }
    if($("#main_price_show").val() < min_price_any_ride){
        showNotification({type : 'error', message: "Minimum price for any ride is "+min_price_any_ride+". Please check price for your ride."});
        return false;
    }
    //return false;
}

function seeDateCheck() {
    //$('#rb').hide();
    if($("#triptype").is(':checked')){
        var sDateFrom = $('#sdate').val();
        var eDateTo = $('#edate').val();
        if(sDateFrom =='' || eDateTo ==''){
            showNotification({type : 'error', message: 'Please Select From and To date First'});
            return false;
        }
        else{
            var outboundTotal = $('input[name="outbound[]"]:checked').length;
            if(outboundTotal == 0){
                showNotification({type : 'error', message: 'Please Select Outbounds Days First'});
                return false;
            }
            var roundTripStatus = $("#roundtriponetime").is(':checked');
            if(roundTripStatus)
            {
                var retturnTotal= $('input[name="retturn[]"]:checked').length;
                if(retturnTotal == 0){
                    showNotification({type : 'error', message: 'Please Select Round Trip'});
                    return false;
                }
            }
        }
    }

}


function saveDateCheck() {
    if($("#triptype").is(':checked')){
        var sDateFrom = $('#sdate').val();
        var eDateTo = $('#edate').val();
        if(sDateFrom =='' || eDateTo ==''){
            showNotification({type : 'error', message: 'Please Select From and To date First'});
            return false;
        }
        else{
            var outboundTotal = $('input[name="outbound[]"]:checked').length;
            if(outboundTotal == 0){
                showNotification({type : 'error', message: 'Please Select Outbounds Days First'});
                return false;
            }
            var richourstartTemp = $('#richourstart').val();
            var ricminstartTemp = $('#ricminstart').val();
            if(richourstartTemp == '' || ricminstartTemp  == '')
            {
                showNotification({type : 'error', message: 'Please select Outbound Time.'});
                return false;
            }
            var roundTripStatus = $("#roundtriponetime").is(':checked');
            if(roundTripStatus)
            {
                var retturnTotal= $('input[name="retturn[]"]:checked').length;
                if(retturnTotal == 0){
                    showNotification({type : 'error', message: 'Please Select Round Trip'});
                    return false;
                }
                var richourendTemp = $('#richourend').val();
                var ricminendTemp = $('#ricminend').val();
                if(richourendTemp == '' || ricminendTemp  == '')
                {
                    showNotification({type : 'error', message: 'Please select Return Time.'});
                    return false;
                }
            }
        }
    }
    var request = $.ajax({
        type: "POST",
        url: site_url+'index.php?file=c-ride_dates',
        data: $("#frmride").serialize(),
        success: function(data) {
            var objCalender = JSON.parse(data);
            if(objCalender.DAYSTATUSOUTBOUND != 2){
                showNotification({type : 'error', message: "Your selected outbound days are not in date range."});
                return false;
            }
            else if (objCalender.DAYSTATUSRETURN != 2) {
                if($("#roundtriponetime").is(':checked')) {
                    showNotification({type : 'error', message: "Your selected return days are not in date range."});
                    return false;
                }else{
                    $('#editCalender').show();
                    $('.regular-trip-popup').addClass('regular-trip-popup-hide');
                }
            }else{
                $('#editCalender').show();
                $('.regular-trip-popup').addClass('regular-trip-popup-hide');
            }
        }
    });

    request.fail(function(jqXHR, textStatus) {
        showNotification({type : 'error', message: "Request failed: " + textStatus });
        return false;
    });
}


$('input[name="outbound[]"]').click(function(){
    var sDateFrom = $('#sdate').val();
    var eDateTo = $('#edate').val();
    if(sDateFrom =='' || eDateTo ==''){
        showNotification({type : 'error', message: 'Please Select From and To date First'});
        return false;
    }else{
        $('#rb').hide();
        $('#hide_dates').hide();
        $('#show_dates').show();
    }
});


$('input[name="retturn[]"]').click(function(){
    var roundTripStatus = $("#roundtriponetime").is(':checked');
    var sDateFrom = $('#sdate').val();
    var eDateTo = $('#edate').val();
    if(roundTripStatus ==''){
        showNotification({type : 'error', message: 'Please Select Round Trip'});
        return false;
    }if(sDateFrom =='' || eDateTo ==''){
        showNotification({type : 'error', message: 'Please Select From and To date First'});
        return false;
    }else{
        $('#rb').hide();
        $('#hide_dates').hide();
        $('#show_dates').show();
    }
});

$('#sdate').Zebra_DatePicker({
    onClear: function(view, elements) {
        var outboundTotal = $('input[name="outbound[]"]:checked').length;
        if(outboundTotal == 0){
            return false;
        }else{
            $("input[name='outbound[]']:checkbox").prop('checked',false);
            $("input[name='retturn[]']:checkbox").prop('checked',false);
        }
    },
    direction: ['2017-03-30', '2017-09-26'],
    pair: $('#edate')
});

$('#edate').Zebra_DatePicker({
    onClear: function(view, elements) {
        var retturnTotal= $('input[name="retturn[]"]:checked').length;
        if(retturnTotal == 0){
            return false;
        }else{
            $("input[name='outbound[]']:checkbox").prop('checked',false);
            $("input[name='retturn[]']:checkbox").prop('checked',false);
        }
    },
    direction: 1
});

function resetOutRetudays(){
    $('#sdate').val('');
    $('#edate').val('');
    $('#richourstart').val($("#richourstart option:first").val());
    $('#richourstart').closest('em').find('.holder').text($("#richourstart option:first").text());
    $('#ricminstart').val($("#ricminstart option:first").val());
    $('#ricminstart').closest('em').find('.holder').text($("#ricminstart option:first").text());
    $('#richourend').val($("#richourend option:first").val());
    $('#richourend').closest('em').find('.holder').text($("#richourend option:first").text());
    $('#ricminend').val($("#ricminend option:first").val());
    $('#ricminend').closest('em').find('.holder').text($("#ricminend option:first").text());
    $("input[name='outbound[]']:checkbox").prop('checked',false);
    $("input[name='retturn[]']:checkbox").prop('checked',false);
    $('#rb').hide();
}


/* END Offer Ride Buttone click*/


/* START ADD STEP OVER Location */
var locationAdd = 0;
var btn_status_flag = 0;
function add_remove_cp()
{
    //if(locationAdd==1)
    if(btn_status_flag==1)
    {
        var rfshimg = 'http://bbcsproducts.com/carsharing/public_html/images/'+'refresh-img.png';

        $(".offer-ride-box2 span #calculate_price").remove();
        var r= '<em><p id="refresh_img"><img src="'+rfshimg+'" alt="" /><input type="button" name="calculate_price" id="calculate_price" class="calculate_price" value="LBL_CALCULATE_PRICE"/></p></em>';
        $(".offer-ride-box2 span").append(r);
        calculate_price();
    }else if(btn_status_flag == 0){//if(locationAdd < 2){
        //$(".offer-ride-box2 span #calculate_price").remove();
        $(".offer-ride-box2 span #refresh_img").remove();
    }
    else{}
    preLoaderStop();
}
//add_remove_cp();
function calculate_price(){
    $('#calculate_price').click(function () {
        $('.price-details-popup').removeClass('price-details-popup-hide');
        $('.offer-ride-box4-popup').addClass('offer-ride-box4-popup-hide');
        $('.regular-trip-popup').addClass('regular-trip-popup-hide');
        $('.addNewCar').attr('id','showCarBox');
    });
    $('.price-details-popup-but').click(function () {
        $('.price-details-popup').addClass('price-details-popup-hide');
        $("#calculate_price").val("Reset price");

    });
}

calculate_price();
$('#stopover').click(function(){
    if(locationAdd <6 && locationAdd >=0)
    {
        locationAdd = locationAdd + 1;
        $('#locAddspan_' + locationAdd).slideDown();
        $('#remove_loc_' + locationAdd).slideDown(100);
        $('#locAddspan_' + locationAdd).show();
        //add_remove_cp();
    }
    else{
        showNotification({type : 'error', message: "You can't add more than 6 location." });
    }
});
$('.remove_loc').click(function(){
    preLoaderStart();
    var spanName =$(this).closest( "span").attr('id');
    var idNo = spanName.split("_");
    idNo = idNo[1];
    $('#loc'+idNo).val('');
    $('#'+spanName).slideUp();
    $('#remove_loc_'+idNo).slideUp(200);

    //START Remove location and points AND UPDATE PRICE LIST WITH LOCATION AND MAP
    $('#loc'+idNo).val('');
    $('#loc'+idNo+'_lat_long').val('');

    locationAdd = locationAdd - 1;
    setTimeout(function(){
        highAlert();
        from_to('','');
    }, 1000);
    //END Remove location and points
    add_remove_cp();
});
/* END ADD STEP OVER Location  */

/* START PRICE MANAGE*/
var gp = 0 ;
var td = 0;
var idctr = 0;
function give_price_details(addr, id){
    var modes = addr.split(" &rarr; ");
    $("#map-canvas").gmap3({
        getdistance:{
            options:{
                origins:modes[0],
                destinations:modes[1],
                travelMode: google.maps.TravelMode.DRIVING
            },
            callback: function(results, status){
                if (results){
                    for (var i = 0; i < results.rows.length; i++){
                        var elements = results.rows[i].elements;
                        for(var j=0; j<elements.length; j++){
                            switch(elements[j].status){
                                case "OK":
                                    //data: "distance="+elements[j].distance.text+"&duration="+elements[j].duration.text+"&from="+modes[0]+"&to="+modes[1]+"&pos="+pos+"&index="+index,
                                    $("#distance_"+id).val(elements[j].distance.text);
                                    $("#disi_"+id).text(elements[j].distance.text);
                                    $("#duration_"+id).val(elements[j].duration.text);

                                    var dist = elements[j].distance.text.split(" ");
                                    dist[0] = dist[0].replace(/,/g,'');
                                    var miles = Math.round(dist[0] * 0.6214);
                                    //var price_per_100_miles = 1;
                                    var price_per_100_miles = '1';
                                    var Price_per_passenger = Math.round((price_per_100_miles * miles)/100);

                                    $("#price_orig_"+id).val(Price_per_passenger);

                                    if(Price_per_passenger == 0){
                                        Price_per_passenger = 1;
                                    }
                                    $("#price_"+id).val(Price_per_passenger);


                                    gp = gp + Price_per_passenger;
                                    td = td + elements[j].distance.text;

                                    $("#main_price").val(gp);
                                    $("#main_price_orig_"+id).val(gp);

                                    $("#main_price_show").val(gp);
                                    //	$("#mainpriceshow").html(gp);
                                    idctr = idctr + 1;
                                    $("#disi_"+idctr).text(td);
                                    preLoaderStop();
                                    break;
                            }
                        }
                    }
                } else {
                    html = "error";
                }
            }
        }
    });
}
$('.highalert').focusout(function () {
    $('.price-details-popup').addClass('price-details-popup-hide');
    var id = $(this).attr('id');
    var txt_id = $('#'+id).val();
    var hidd_id = $('#'+id+"_lat_long").val();

    if(txt_id != '' || hidd_id != ''){
        preLoaderStart();
        /* setTimeout(function(){
         from_to('','');
         }, 1000); */
    }
    setTimeout(function(){
        from_to('','');
        setTimeout(function(){
            highAlert();
        }, 1000);
    }, 1000);


});
function highAlert()
{

    $(".price-details-popup-inner").html('');
    var request = $.ajax({
        type: "POST",
        url: 'http://bbcsproducts.com/carsharing/'+'/index.php?file=m-offerride_ajax_highalert',
        data: $('#frmride').serialize(),
        success: function(data) {
            var objData = JSON.parse(data);
            console.log(objData);
            if(objData.STATUS == 'ERROR'){
                showNotification({type : 'error', message: objData.ERROR_MSG});
            }
            if(objData.STATUS == 'SUCCESS'){
                $('#vCountryCodeTo').val(objData.destination_country);
                var main_point = objData.MAIN_POINTS_ARR;
                var pointLen = objData.MAIN_POINTS_ARR.length;
                tot_points = pointLen;
                //console.log("pointLen => "+pointLen);
                if(objData.CALCULATE_BTN_STATUS == 1){
                    btn_status_flag = 1;
                    add_remove_cp();
                }else{
                    $('#main_price_show').val(0);
                    //$('#mainpriceshow').html(0);
                    btn_status_flag = 0;
                    add_remove_cp();
                }
                if(pointLen == 2){
                    add_remove_cp();
                }
                gp=0; td= 0; idctr= 0;
                preLoaderStop();
                for(var ctr= 0; ctr < pointLen ; ctr++)
                {
                    give_price_details(main_point[ctr].addr, ctr);
                }
                $(".price-details-popup-inner").html(objData.OUTPUR_PRICE_DETAILS);
                calculate_price();
                priceZero();
                priceValidation();
                tooltip_price();
            }
        }
    });

    request.fail(function(jqXHR, textStatus) {
        showNotification({type : 'error', message: "Request failed : " + textStatus });
    });
    return false;
}



function increase_price(id){
    var old_price = $("#price_"+id).val();
    var new_price = Number(old_price) + Number(1);
    $("#price_"+id).val(new_price);
    change_price_amount(id);
}

function descrese_price(id){
    var old_price = $("#price_"+id).val();
    if(old_price > 1){
        var new_price = Number(old_price) - Number(1);
        $("#price_"+id).val(new_price);
        change_price_amount(id);
    }else{
        $("#price_"+id).val(1);
        change_price_amount(id);
    }
}

function cacl_all(){
    var price = 0;
    for (var i=0;i<tot_points;i++)
    {
        price = Number(price) + Number($("#price_"+i).val());
    }
    $("#main_price").val(price);
    $("#main_price_show").val(price);
    //$("#mainpriceshow").html(price);

}

function change_price_amount(id){

    var price = $("#price_"+id).val();
    var origional_price = $("#price_orig_"+id).val();

    if(typeof(price) !== 'undefined' && price != 'undefined' && price != "") {
        $("#price_"+id).val(price.replace(/[^/(0-9)/]/ig, ""));

        var main_price = $("#main_price").val();
        var origional_main_price = $("#main_price_orig").val();

        var price_diff = price - origional_price;
        price_diff = Math.abs(price_diff);

        if(Number(price_diff) > Number(2) && Number(price) > Number(origional_price)){
            $("#price_"+id).css( "color", "#FF8000" );
            $("#price_type_"+id).val("High");
            cacl_all();
            return false;
        }else if(Number(price_diff) > Number(2) && Number(price) < Number(origional_price)){
            $("#price_"+id).css( "color", "#149414" );
            $("#price_type_"+id).val("Low");
            cacl_all();
            return false;
        }else{
            $("#price_"+id).css( "color", "#000" );
            $("#price_type_"+id).val("Average");
            cacl_all();
            return false;
        }
    }
}
/* END  PRICE MANAGE*/

$("#publish").click(function() {
    $("#tDetails").html($("#tDetails").val().replace(/\n/g, "<br>"));
});

$('.price_check_vali').keypress(function (event) {
    return isNumber(event, this)
});
function isNumber(evt, element) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (
        (charCode != 45 || $(element).val().indexOf('-') != -1) &&      // “-” CHECK MINUS, AND ONLY ONE.
        (charCode != 46 || $(element).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
        (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function priceZero(){
    $('.price_check_vali').keyup(function (event) {
        //console.log("THis => "+$(this).val());
        var pVal = $(this).val();
        var idArray = $(this).attr('id').split('_');
        //console.log(idArray[1]);
        if(pVal == '') {
            $(this).val('1');
            showNotification({type : 'error', message: "You can not left this blank."});
        }
        else if(pVal == 0) {
            $(this).val('1');
            showNotification({type : 'error', message: "You can not enter zero price."});
        }
        change_price_amount(idArray[1]);
        return true;
    });
}
priceZero();

function priceValidation()
{
    $('.price_check_vali').keypress(function (event) {
        var txtVal = $(this).val();
        var len = txtVal.length;
        var maxlen = len+1;
        console.log(len+1);
        if(maxlen <=6 ){
            return isNumber(event, this);
        }else{
            showNotification({type : 'error', message: "You can not enter more than six digit price."});
            return false;
        }


    });
    function isNumber(evt, element) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      // “-” CHECK MINUS, AND ONLY ONE.
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      // “.” CHECK DOT, AND ONLY ONE.
            (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
}
priceValidation();
function tooltip_price()
{
    $('#tooltip_info').tooltipster({
        animation: 'grow', //grow,swing,fall
        content: $('<table><tr><td style="color:#149414; background-color:#149414;"></td><td>- Low Price</td></tr><tr><td style="color:#000;background-color:#000;">&nbsp;&nbsp; </td><td>- Average price</td></tr><tr><td style="color:#FF8000;background-color:#FF8000;"> </td><td>- High Price</td></tr></table>'),
        // setting a same value to minWidth and maxWidth will result in a fixed width
        minWidth: 300,
        maxWidth: 300,
        position: 'top'
    });
}
tooltip_price();



var info = "If select Yes then All Passengers should be Female and childrens are allowed up to age 17.";
$('#tooltip_info1').tooltipster({
    animation: 'grow', //grow,swing,fall
    content: $("<p>"+info+"</p>"),
    // setting a same value to minWidth and maxWidth will result in a fixed width
    minWidth: 300,
    maxWidth: 300,
    position: 'top'
});


/*
 // DISABLE
 $(document).on('contextmenu', function() {
 return false;
 });
 document.onkeypress = function (event) {
 event = (event || window.event);
 if (event.keyCode == 123) {
 return false;
 }
 }
 document.onmousedown = function (event) {
 event = (event || window.event);
 if (event.keyCode == 123) {
 return false;
 }
 }
 document.onkeydown = function (event) {
 event = (event || window.event);
 if (event.keyCode == 123) {
 return false;
 }
 if(event.shiftKey){
 return false;
 }
 }

 */

(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-75969877-1', 'auto');
ga('send', 'pageview');

