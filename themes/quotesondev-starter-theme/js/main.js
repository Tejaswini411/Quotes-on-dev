

(function($) {
  $(function() {

    $('.show-me').on('click', function(event) {
      event.preventDefault();

      $.ajax({
        method: 'get',
        url:
          qod_api.rest_url +
          'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
      })
        .done(function(data) {
          console.log(data);
          
         // window.location.href = data[0].link;
           $('#quote-author').text(data[0].slug);
           $('.quote').html(data[0].content.rendered);

        })
        .fail(function(err) {
          console.log('error', err);
        });
    }); 
  }); 



$('form').on('submit', function(event) {
  

  let $valAuthor = $('#author').val().trim().length < 1 ? null : $('#author').val(),
              $valContent = $('#quote').val().trim().length < 1 ? null : $('#quote').val(),
              $valSource = $('#source').val().trim().length < 1 ? null : $('#source').val(),
              $valUrl = $('#url').val().trim().length < 1 ? null : $('#url').val();
  
              event.preventDefault();

  $.ajax({
    method: 'post',
    url: qod_api.rest_url + 'wp/v2/posts/',
    data: {
                  title: $valAuthor,
                  content: $valContent,
                  _qod_quote_source: $valSource,
                  _qod_quote_source_url: $valUrl
    },
    beforeSend: function(xhr) {
      xhr.setRequestHeader('X-WP-Nonce', qod_api.nonce);
    }
  })
  .done(function() {
    alert('Success! Comments are closed for this post.');
  })
  .fail(function(){
    alert('submission failed')
  });
});
})( jQuery );
