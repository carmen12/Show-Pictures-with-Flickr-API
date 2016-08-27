function saveImg(link, src){
    event.preventDefault();

    $.post('inc/save-link.php', {link: link, src:src}, function(){
        //$(this).('.text').hide();
        //$(this).('.saved').append("Saved");
    });

    $(event.target).parent().find('p.text').html('Saved');
}

function deleteImg(src){
    event.preventDefault();

    $.post('inc/delete-img.php',{src:src}, function(){});
    $(event.target).parent().parent().remove();
    window.location.reload();
}

$(document).ready(function(){

    $('form').submit(function (evt) {
        evt.preventDefault();
        var searchTerm = $('#search').val();

        var flickerAPI = "https://api.flickr.com/services/feeds/photos_public.gne?jsoncallback=?";// "?jsoncallback=?" -- lets us get around the security limitations

        var flickerOptions = {//an object to send along with the getJSON request
            tags: searchTerm,
            format: "json"
        };
        function displayPhotos(data){
            var photoHTML ='<ul>';

            $.each(data.items, function(i, photo){
                photoHTML += '<li class="grid-25 tablet-grid-50">';
                photoHTML += '<a onclick="saveImg('+"'"+photo.link+"'"+', '+"'"+photo.media.m+"'"+')" class="image">';
                photoHTML += '<img src="'+photo.media.m+'">';
                photoHTML += '<p class="text">Save</p></a>';
                photoHTML +='</li>';
            });
            photoHTML += '</ul>';
            $('#photos').html(photoHTML);
        }//end displayPhotos
        $.getJSON(flickerAPI, flickerOptions, displayPhotos);
    });//end submit

});//end ready
