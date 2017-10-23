$(document).ready(function(){
  src = "http://blogs.altavision.com.co/api/post/ambliopia";
  $("#search_txt").autocomplete({
    source: function(request, response) {
        $.ajax({
           url: src,
           dataType: "json",
           data: {term : request.term},
           success: function(data){
               response(data);
           }
        });
     }, min_length: 3,
     select: function( event, ui ) {
        $('#search_txt').val(ui.item.title);
        location.href='/'+ui.item.slug+'/'+ui.item.title;
        return false;
    }
  });
});
