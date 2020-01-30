
(function($) {
  $(function() {
    // get request for wp/v2/posts

    

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

          $('#quote-author').text(data[0].slug);

        })
        .fail(function(err) {
          console.log('error', err);
        });
    }); //end of button click
  }); //end of doc ready
})(jQuery);


  