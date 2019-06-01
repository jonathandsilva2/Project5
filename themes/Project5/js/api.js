$( document ).ready(function() {
   
(function( $ ) {
    $('.quote-button').on('click', function(event) {
       event.preventDefault();
       $.ajax({
          method: 'get',
          url: 'http://localhost:8888/Project5/wp-json/wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1/',
          data: {

          },
          
       
       }).done( function(response) {
       let data = response;
       let author = response[0].title.rendered;
       let content = response[0].content.rendered;
       console.log(author);
       console.log(content)
       $('.quote-main').html(''); 
       $('.quote-main').append(content);
       $('.quote-main').append( '<p>&#8212 ' + author + '</p>');
    
       
       
       });
    });
 })( jQuery );
})

// posts?filter[orderby]=rand&filter[posts_per_page]=1