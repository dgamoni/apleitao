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
      ['Armazém Santo Tirso', 41.343693,-8.5011136, 'http://www.apleitao.com/marker-blue.png'],
      ['Armazém Albergaria-a-Velha', 40.7137911,-8.4839657, 'http://www.apleitao.com/marker-blue.png'],
      ['Armazém Alcobaça', 39.541510, -8.900360, 'http://www.apleitao.com/marker-blue.png'],
      ['Sede | Fábrica | Lameiras', 38.842424, -9.340419, 'http://www.apleitao.com/marker-blue.png'],
      ['Armazém Palmela', 38.574486, -9.015328, 'http://www.apleitao.com/marker-blue.png']
    ];

    // Info Window Content
    var infoWindowContent = [
      ['<div class="info_content">' + '<div class="info_content__title">Armazém<br><span>SANTO TIRSO</span></div><div class="info_content__text">Com 2500m2 este armazém situado no polo industrial do Vale do Ave junto à A3 entre Porto e Braga, é o nosso posto de abastecimento para o mercado norte de Portugal.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button1" checked /><input type="radio" name="buttons" id="button2" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide1" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/sttirso-img1.jpg" alt="" /></li><li id="slide2" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/sttirso-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button1"></label><label for="button2"></label></div></div>'+'<p></p>' + '</div>'],
      ['<div class="info_content">' + '<div class="info_content__title">Armazém<br><span>Albergaria-a-Velha</span></div><div class="info_content__text">Encontra-se localizado na zona industrial de Albergaria-a-Velha entre a A25 e a A1, junto a Aveiro. Garante o abastecimento da zona centro norte, litoral e interior.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button3" checked /><input type="radio" name="buttons" id="button4" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide3" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/albergaria-img1.jpg" alt="" /></li><li id="slide4" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/albergaria-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button3"></label><label for="button4"></label></div></div>'+'<p></p>' + '</div>'],
      ['<div class="info_content">' + '<div class="info_content__title">Armazém<span><br>Alcobaça</span></div><div class="info_content__text">Junto à IC2, perto de Leiria, Alcobaça e Batalha, garante resposta às necessidades dos nossos clientes da zona do país.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button5" checked /><input type="radio" name="buttons" id="button6" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide5" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/alcobaca-img1.jpg" alt="" /></li><li id="slide6" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/alcobaca-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button5"></label><label for="button6"></label></div></div>'+'<p></p>' + '</div>'],
      ['<div class="info_content">' + '<div class="info_content__title">sede | fábrica | armazém<br><span>LAMEIRAS</span></div><div class="info_content__text">A poucos Kms de Lisboa e servido por excelentes vias rodoviárias, o armazém de Lameiras, junto a Pêro Pinheiro, combina os escritórios da Sede com a fábrica e uma pedreira própria.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button1" checked /><input type="radio" name="buttons" id="button2" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide1" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/lameiras-img1.jpg" alt="" /></li><li id="slide2" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/lameiras-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button1"></label><label for="button2"></label></div></div>'+'<p></p>' + '</div>'],
      ['<div class="info_content">' + '<div class="info_content__title">Armazém<span><br>Palmela</span></div><div class="info_content__text">Para servir o mercado a sul de Lisboa este armazém com 2500m2 situa-se em Palmela, junto à A2.</div>' +
      '<div class="demo"><input type="radio" name="buttons" class="info_content__button" id="button7" checked /><input type="radio" name="buttons" id="button8" class="info_content__button" /><div class="slides"><ul class="slides-wrap"><li id="slide7" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/palmela-img1.jpg" alt="" /></li><li id="slide8" class="slide"><img src="http://www.apleitao.com/wp-content/themes/apleitao/assets/images/palmela-img2.jpg" alt="" /></li></ul></div><div class="dots-slide"><label for="button7"></label><label for="button8"></label></div></div>'+'<p></p>' + '</div>']
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
