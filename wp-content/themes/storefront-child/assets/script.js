//ANIMATION ON SCROLL
AOS.init();

//REPLACE SEARCH
let inputSearch = document.querySelector('#is-search-input-0');
inputSearch.placeholder = 'Recherche...';

// ARTICLES HOME PAGE

function isMobileDevice() { 
  if( navigator.userAgent.match(/iPhone/i)
  || navigator.userAgent.match(/webOS/i)
  || navigator.userAgent.match(/Android/i)
  || navigator.userAgent.match(/iPad/i)
  || navigator.userAgent.match(/iPod/i)
  || navigator.userAgent.match(/BlackBerry/i)
  || navigator.userAgent.match(/Windows Phone/i)
  ){
     return true;
   }
  else {
     return false;
   }
 }

 console.log('IS MOBILE DEVICE : ' + isMobileDevice());

// POP OUR PRODUCT
const menuItem = document.querySelector('#menu-item-436');

menuItem.addEventListener('click', () => {
  let a = document.querySelectorAll('.popup-content p');
  a.forEach(element => { element.remove() })
})



// GOOGLE MAPS
let map;

function initMap() {

  const hsTours = { lat: 47.410203289620235, lng: 0.6825110848333529 }
  const contentStr = 
  '<div class="content">'
  + '<h2 class="audrey">Hemp Selection Tours</h2>'
  + '<p>09.83.33.32.68</p>'
  + '<p>32 Avenue Maginot</p>'
  + '<p>37100 Tours</p>'
  + '</div>';

  const urlIcon = 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png';

  map = new google.maps.Map(document.getElementById("map"), {
    center: hsTours,
    zoom: 10,
  });

  const infoWindow = new google.maps.InfoWindow({
      content: contentStr
  });

  const marker = new google.maps.Marker({
      position: hsTours,
      map,
      title: 'HempSelection Tours',
      icon: urlIcon
  });
  infoWindow.open(map, marker);
  
  marker.addListener('click', () => {
      infoWindow.open(map, marker);
  })
}