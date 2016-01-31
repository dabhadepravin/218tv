/**
 * Created by alaa on 9/19/15.
 */
$(function(){
   //activate fluiddivs
   fluidvids.init({});

   $('.node-body img[alt]').each(function(index, item){
      var alt = $(this).attr('alt');
      if (alt.length > 0) {
         $(this).after($('<div/>').html(alt).addClass('img-caption'));
      }
    });

   //call owl carousel
   $("#owl-gallery").owlCarousel({
      items : 1,
      direction: 'rtl'
   });

   var appid = '3cf5624a5c79fd0ab3f0578b1c703f3f';

   $('.weather-temperature-tr').openWeather({
      id: '2210247',
      key: appid,
      iconTarget: '.weather-icon-tr',
      customIcons: Drupal.settings.core.themePath + '/assets/weather/',
      success: function() {
         $('.icon.tr, .weather-temperature-tr').css('visibility','visible');
      }
   });

   $('.weather-temperature-ny').openWeather({
      key: appid,
      city: 'Sabha, Libya',
      iconTarget: '.weather-icon-ny',
      customIcons: Drupal.settings.core.themePath + '/assets/weather/',
      success: function() {
         $('.icon.ny, .weather-temperature-ny').css('visibility','visible');
      }
   });

   $('.weather-temperature-ca').openWeather({
      key: appid,
      id: '88319',
      iconTarget: '.weather-icon-ca',
      customIcons: Drupal.settings.core.themePath + '/assets/weather/',
      success: function() {
         $('.icon.ca, .weather-temperature-ca').css('visibility','visible');
      }
   });
});