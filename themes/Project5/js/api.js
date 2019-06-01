$( document ).ready(function() {
    console.log( red_vars);
(function( $ ) {
    $('.quote-button').on('click', function(event) {
       event.preventDefault();
       $.ajax({
          method: 'get',
          url: 'http://localhost:8888/Project5/wp-json/wp/v2/posts/',
          data: {

          },
          
       
       }).done( function(response) {
       var data = response;
       console.log(data)
       });
    });
 })( jQuery );
})

// posts?filter[orderby]=rand&filter[posts_per_page]=1