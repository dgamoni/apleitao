jQuery(function($) {
    // Asynchronously Load the map API
    var script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyBWV01zUbDpNHwBV6E4hNWsUtb6StjK7Yg&callback=initMap";
    document.body.appendChild(script);
});

function initMap() {
    var map;
    var mapOptions = {
      zoom: 7,
          mapTypeId: 'roadmap',
        center: new google.maps.LatLng(40.7032934, -8.4987261)
    };


    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(0);

    // Multiple Markers

    var markers = [
      ['Santo Tirso Warehouse', 41.343693,-8.5011136, 'https://www.apleitao.com/marker-blue.png'],
      ['Albergaria-a-Velha Warehouse', 40.7137911,-8.4839657, 'https://www.apleitao.com/marker-blue.png'],
      ['Alcobaça Warehouse', 39.541510, -8.900360, 'https://www.apleitao.com/marker-blue.png'],
      ['Headquarters | Factory | Lameiras', 38.842424, -9.340419, 'https://www.apleitao.com/marker-blue.png'],
      ['Palmela Warehouse', 38.574486, -9.015328, 'https://www.apleitao.com/marker-blue.png']
    ];

    // Info Window Content
    var infoWindowContent = [
      ['<div class="info_content">' + '<div class="info_content__title">Warehouse<br><span>SANTO TIRSO</span></div><div class="info_content__text">With 2500m2, this warehouse, located in the Vale do Ave industrial park, by the A3, between Oporto and Braga, supplies the northern Portuguese market. </div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button1" checked /><input type="radio" name="buttons" id="button2" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide1" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/sttirso-img1.jpg" alt="" /></li><li id="slide2" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/sttirso-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button1"></label><label for="button2"></label></div></div>'+'<p></p>' + '</div>'],
      ['<div class="info_content">' + '<div class="info_content__title">Warehouse<br><span>Albergaria-a-Velha</span></div><div class="info_content__text">Located in the Albergaria-a-Velha industrial park, between the A25 and the A1, close to Aveiro. Supplies the areas of the centre north, littoral and interior of the country.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button3" checked /><input type="radio" name="buttons" id="button4" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide3" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/albergaria-img1.jpg" alt="" /></li><li id="slide4" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/albergaria-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button3"></label><label for="button4"></label></div></div>'+'<p></p>' + '</div>'],
      ['<div class="info_content">' + '<div class="info_content__title">Warehouse<span><br>Alcobaça</span></div><div class="info_content__text">By the IC2, near Leiria, Alcobaça and Batalha, covers the needs of our clients in that area of the country.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button5" checked /><input type="radio" name="buttons" id="button6" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide5" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/alcobaca-img1.jpg" alt="" /></li><li id="slide6" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/alcobaca-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button5"></label><label for="button6"></label></div></div>'+'<p></p>' + '</div>'],
      ['<div class="info_content">' + '<div class="info_content__title">Headquarters | Factory | Warehouse<br><span>LAMEIRAS</span></div><div class="info_content__text">Few Kms from Lisbon and serviced by excellent roads, Lameira’s warehouse, near Pêro Pinheiro, combines the offices, with the factory and one quarry.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button1" checked /><input type="radio" name="buttons" id="button2" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide1" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/lameiras-img1.jpg" alt="" /></li><li id="slide2" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/lameiras-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button1"></label><label for="button2"></label></div></div>'+'<p></p>' + '</div>'],
      ['<div class="info_content">' + '<div class="info_content__title">Warehouse<span><br>Palmela</span></div><div class="info_content__text">Serves the market south of Lisbon. This 2500m2 warehouse is located in Palmela, by the A2.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button7" checked /><input type="radio" name="buttons" id="button8" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide7" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/palmela-img1.jpg" alt="" /></li><li id="slide8" class="slide"><img src="https://www.apleitao.com/wp-content/themes/apleitao/assets/images/palmela-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button7"></label><label for="button8"></label></div></div>'+'<p></p>' + '</div>']
    ];

     var marcadores = new Array();
    // Display multiple markers on a map
    var infoWindow = new google.maps.InfoWindow(), marker, i;

    // Loop through our array of markers & place each one on the map
    for( i = 0; i < markers.length; i++ ) {
        var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            icon: markers[i][3],
            title: markers[i][0]
        });

marcadores.push(marker);

        // Allow each marker to have an info window
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {

                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.setOptions({
                  // pixelOffset: new google.maps.Size(300,200)
                });
                infoWindow.open(map, marker);

            }
        })(marker, i));


        //using the index provided by jquery.each()
        jQuery('.warehouses__item').each(function(i){
            jQuery(this).on('click', function(){
                google.maps.event.trigger(marcadores[i], 'click');
            });
        });


        // Automatically center the map fitting all markers on the screen
        // map.fitBounds(bounds);
    }
}
