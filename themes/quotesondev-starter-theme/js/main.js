// var currentQuote = "";
// var currentAuthor = "";

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
          
          window.location.href = data[0].link;
          // $('#quote-author').text(data[0].slug);
          // $('.quote').text(data[0].content.rendered);

        })
        .fail(function(err) {
          console.log('error', err);
        });
    }); //end of button click
  }); //end of doc ready
})(jQuery);


(function( $ ) {
$(".show-me").on("click", function(event) {
  event.preventDefault();
  $.ajax({
    method: "post",
    url: qod_api.rest_url + "wp/v2/posts/" + qod_api.post_id,
    data: {
      comment_status: "closed"
    },
    beforeSend: function(xhr) {
      xhr.setRequestHeader("X-WP-Nonce", qod_api.wpapi_nonce);
    }
  }).done(function(response) {
    alert("Success! Comments are closed for this post.");
  });
});
})( jQuery );
