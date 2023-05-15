// function initialize()
// {
//     var mapOptions = {
//     zoom: 15,
//     scrollwheel: false,
//     center: new google.maps.LatLng(24.428256, 81.248011),
//     styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#ecddbb"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[
//         {"color":"#ecddbb"},{"lightness":20}
//         ]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#9f8f7b"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#9f8f7b"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#9f8f7b"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#d3cdc1"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#d3cdc1"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
//     };

//     var map = new google.maps.Map(document.getElementById('map'),
//     mapOptions);

//     var marker = new google.maps.Marker({
//     position: map.getCenter(),
//     icon: 'images/pointer.png',
//     map: map
//     });

// }
//     google.maps.event.addDomListener(window, 'load', initialize);

 //Desktop Navbar Fixed Top Start Here
$(document).ready(function() {
        var $navbar = $("#navbar-desktop");
        var $mycss = $("header .main-header ul li a");
        var $active = $("header .main-header ul li.active a");

        AdjustHeader(); // Incase the user loads the page from halfway down (or something);
        $(window).scroll(function() {
            AdjustHeader();
        });

        function AdjustHeader(){
            if ($(window).scrollTop() > 370) {
                if (!$navbar.hasClass("navbar-fixed-top")) {
                    $navbar.addClass("navbar-fixed-top");
                    $navbar.css({"background" : "rgba(0, 0, 0, 0.6)"});
                    $mycss.css({"color" : "#dcd794"});
                }
                // else
                // {
                //     $mycss.css({"color" : "#dcd794"});
                // }
            } else {
                $navbar.removeClass("navbar-fixed-top");
                $navbar.css({"background" : "none"});
                $mycss.css({"color" : "#000"});
            }
        }
});
//Desktop Navbar Fixed Top End Here
