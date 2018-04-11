ymaps.ready(init);
var myMap,
    myPlacemark;

function init() {
    myMap = new ymaps.Map("map", {
        center: [51.170463, 71.420790],
        zoom: 17
    });

    myPlacemark = new ymaps.Placemark([51.170463, 71.420790], {
        hintContent: 'Это мы!',
        balloonContent: 'Марден'
    });

    myMap.geoObjects.add(myPlacemark);
    myMap.behaviors
        .disable(['scrollZoom', 'multiTouch'])
}