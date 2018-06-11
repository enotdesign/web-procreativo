$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        //  Para obtener tu user ID ve a tu perfil de
        //  instagram y coloca este codigo en la consola:
        // ---> window._sharedData.entry_data.ProfilePage[0].graphql.user.id
        userId: '3492991313',
        limit: 4,
        resolution: 'standard_resolution',
        //  para obtener el Token ir a http://instagram.pixelunion.net
        accessToken: '3492991313.1677ed0.541c371193f142919fe8d37aa9d2033b',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 col-md-3 instaimg"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});