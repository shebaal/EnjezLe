 //open menu and close it[home page]
 const menuToggle = document.querySelector('.menu-toggle');
 const navigation = document.querySelector('.navigation');
 const navigationMenu = document.querySelector('.navigationmenu');

 menuToggle.onclick = function() {
     navigation.classList.toggle('open');

     navigationMenu.classList.toggle('menunavActive');
 }