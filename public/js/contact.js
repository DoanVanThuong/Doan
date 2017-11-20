/*GOOGLE API*/

var host = 'http://' + window.location.host;
var map;

function initMap(lat1 = 10.7761524, lng1 = 106.6898554) {
    var ou = {
        lat: lat1,
        lng: lng1,
    };
   
    var ous =[ {
         position: new google.maps.LatLng(10.817033,106.6759040),

     },
     {
         position: new google.maps.LatLng(10.7760576,106.6893662),

     },
     {
         position: new google.maps.LatLng(10.7611666,106.6925135),

     },

    ];
     map = new google.maps.Map(document.getElementById('map'), {
        center: ou,
        zoom: 17
    });
    var img = {
        url: 'img/icon/icon-map.png',
        size: new google.maps.Size(100, 100),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(50, 50),
        scaledSize: new google.maps.Size(100, 78)
    };
    // var marker = new google.maps.Marker({
    //     position: ou,
    //     draggable: false,
    //     map: map,
    //     icon: img
    // });
    ous.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            map: map,
            icon: img,
          });
        });
}


$('.item-branches').on('click', function() {
    var lat1 = parseFloat($(this).data('l'));
    var lng1 = parseFloat($(this).data('lg'));
    initMap(lat1, lng1);
    $('.item-branches').removeClass('active');
    $(this).addClass('active');
});
/*button đính kèm file*/
// $("label[type='image']").click(function() {
//     $("input[type='file']").click();
//     // var filename = $('input[type="file"]').val().split('\\').pop();
//     $("input[type='file']").change(function() {
//         // var i = $(this).prev('.lb').clone();
//         var file = $('#file')[0].files[0].name;
//         // $(this).prev('.lb').text(file);
//         alert(file);
//     });
//     // $('.lb[name]').next().text(filename);

// });
$('#upload').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#upload')[0].files[0].name;
  $(this).prev('label').text(file);
});