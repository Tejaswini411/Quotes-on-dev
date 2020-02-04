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
           if (data[0]._qod_quote_source && data[0]._qod_quote_source_url) {
            $('.quote-source').html(
                '<div class=\'quote-source\'>, <a href=\'' +
                data[0]._qod_quote_source_url +
                '\'>' +
                data[0]._qod_quote_source +
                '</a></div>'
            );
        } else if (
            data[0]._qod_quote_source &&
            !data[0]._qod_quote_source_url
        ) {
            $('.quote-source').html(
                '<div class=\'source\' id=\'source\'>, ' +
                data[0]._qod_quote_source +
                '</div>'
            );
        } else {
            $('.quote-source').html('');
        }
           //History api 
        const url = qod_api.home_url + '/' + data[0].slug + '/';
        history.pushState(null , null , url);

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
                  post_status: 'publish',
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
