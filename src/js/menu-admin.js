(function() {

   const sidebar = document.querySelector('#sidebar')

   if(sidebar) {

      const menuItems = document.querySelectorAll('.menu__item');

      menuItems.forEach(function(item) {
         item.addEventListener('click', function() {
            // Oculta todos los submenús
            menuItems.forEach(function(item) {
               item.classList.remove('menu__activo')
            })
  
            // Muestra el submenú correspondiente si existe
            if (item.querySelector('.menu__submenu')) {
               item.classList.add('menu__activo')
            }
         })
      })

   }

})();