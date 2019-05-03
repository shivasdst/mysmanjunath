$(document).ready(function() {

    var isWider = $( '.wider' );
    isWider.next( '.container' ).addClass( 'push-down' );

    if(isWider.length) {
        $( window ).scroll(function() {

            var tp = $( 'html' ).scrollTop();

            if(tp > 50) {

                $( '.navbar' ).removeClass( 'wider') ;
            }
            else if(tp < 50) {
        
                $( '.navbar' ).addClass( 'wider') ;
            }
        }); 
    }
    
    var hloc = window.location.href;
    if(hloc.match('#')){

        var jumpLoc = $( '#' + hloc.split("#")[1] ).offset().top - 105;

        $("html, body").animate({scrollTop: jumpLoc}, 1000);
    }

    $( '.navbar-nav li a').on('click', function(event){

        // event.preventDefault();

        var jumpLoc = $( '#' + $( this ).attr( "href" ).split('#')[1] ).offset().top - 105;

        $("html, body").animate({scrollTop: jumpLoc}, 1000);
    });

    $(".TOCtoggle").click(function(){

        var divID = "#toc-" + $(this).attr('data-name'); 
        $(divID).slideToggle(1, function(){

            buildMasonry();
           
        });
    });  

    $('#toggleSearchType input').on('change', function(){

			var actionUrl = $('#searchForm form').attr('action');

			actionUrl = ($(this).is(":checked")) ? actionUrl.replace('field', 'fulltext') : actionUrl.replace('fulltext', 'field');

			$('#searchForm form').attr('action', actionUrl);
    });

    if(document.getElementById('viewletterimages')){
        
        var viewer = new Viewer(document.getElementById('viewletterimages'), {url: 'data-original'});
    }

    $('.grid').masonry({
      // options
      itemSelector: '.grid-item',
      columnWidth: 200,
      gutter: 10
    });

});
