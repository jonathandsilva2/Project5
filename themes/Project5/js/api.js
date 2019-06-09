$( document ).ready(function() {
   
(  function( $ ) {
    $('.quote-button').on('click', function(event) {
       event.preventDefault();
       $.ajax({
          method: 'get',
          url: red_vars.rest_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1/',
          data: {

          },
          
       
       }).done( function(response) {
       let data = response;
 
       let author = response[0].title.rendered;
       let content = response[0].content.rendered;
      
       $('.quote-main').html(''); 
       $('.quote-main').append(content);
       if (response[0]._qod_quote_source.length !== 0 & response[0]._qod_quote_source_url.length !== 0) {
         let source = response[0]._qod_quote_source
         let sourceURL = response[0]._qod_quote_source_url

       $('.quote-main').append( '<p>&#8212 ' + author + ', <a href ="' + sourceURL + '">' + source + '</p>' );
       } else {
                $('.quote-main').append( '<p>&#8212 ' + author + '</p>' );
       }
       

    
       
       });
       
    });
 })
( jQuery)

})

 
      $('.submit1').on('click', function(event) {
         event.preventDefault();
  
         let ourPostData = {
           "title": $('.author').val(),
           "content": $('.quote').val(),
           "_qod_quote_source": $('.source').val(),
           "_qod_quote_source_url": $('.url').val(),
           "status": "publish"
         };
         
         $.ajax({
            method: 'post',
            url: red_vars.rest_url + 'wp/v2/posts',
            
            data: ourPostData, 
 
   beforeSend: function(xhr) {
   xhr.setRequestHeader( 'X-WP-Nonce', red_vars.wpapi_nonce );
  } }).done (function (){
   $('.author').val(" ");
   $('.quote').val(" ");
   $('.source').val(" ");
   $('.url').val(" ");
   alert("Your quote was succesfully submitted.");
  })
  .fail( function (fail) {
alert('Check yourself');
})
})


 ;


