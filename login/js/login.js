jQuery(function($){
   $('body').vegas({
      slides: [
         { src: login_images.theme_path + "1.jpg" },
         { src: login_images.theme_path + "2.jpg" },
         { src: login_images.theme_path + "3.jpg" },
      ],
      overlay: login_images.theme_path + 'overlays/05.png',
      transition: ['fade', 'zoomIn2', 'swirlLeft']
   })
});
