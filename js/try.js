
photoHTML += '<a href="#" data-role="'+photo.link+'" class="image">';


$(document.body).on("click", '.image', function(){ // EXPL: http://stackoverflow.com/questions/15090942/jquery-event-handler-not-working-on-dynamic-content
    //alert('c');
    event.preventDefault();
    ////event.stopPropagation();
    var link = $(event.target).data("url");
    //alert(link);
    ////link.open("GET", "save-link.php?q=" + link, true);
    ////link.send();
    console.log(link);

});