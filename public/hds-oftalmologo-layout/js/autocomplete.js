$(document).ready(function(){
  src = "http://blogs.altavision.com.co/api/post";
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
        $('#title').html(ui.item.value);
        $('#description').html(ui.item.content + ' ...');
        $('#browser_launch').attr('href' , ui.item.app );
    }
  });
});
