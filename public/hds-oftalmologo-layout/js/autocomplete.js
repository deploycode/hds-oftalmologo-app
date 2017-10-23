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
        $('#search_txt').val(ui.item[0].title);
        location.href='/'+ui.item.menu+'/'+ui.item.post;
        return false;
    }
  });
});
