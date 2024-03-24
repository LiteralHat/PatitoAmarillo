var folder = "../fanart/";
let fanartgallery = document.getElementById('fanartgallery');



$.ajax({
    url : folder,
    success: function (data) {
        $(data).find("a").attr("href", function (i, val) {
            if( val.match(/\.(jpe?g|png|gif)$/) ) { 
                $(fanartgallery).append( "<div><img class='idiot' src='"+ folder + val +"' loading='lazy'></div>" );
            } 
        });
    }
}); 
