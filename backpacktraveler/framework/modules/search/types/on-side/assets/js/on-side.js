(function($) {
    "use strict";

    var searchOnside = {};
    mkdf.modules.searchOnside = searchOnside;

    searchOnside.mkdfOnDocumentReady = mkdfOnDocumentReady;

    $(document).ready(mkdfOnDocumentReady);

    /*
        All functions to be called on $(document).ready() should be in this function
    */
    function mkdfOnDocumentReady() {
        mkdfSearchOnside();
    }

    /**
     * Init Search Types
     */
    function mkdfSearchOnside() {
        if ( mkdf.body.hasClass( 'mkdf-on-side-search' ) ) {

            var searchOpener = $('a.mkdf-search-opener');

            if (searchOpener.length) {
                var searchOpenerParent = searchOpener.parent();
                searchOpener.on('click', function(e){
                    searchOpenerParent.addClass("opened");
                });

                $(document).on('click', function(e){
                    if (searchOpenerParent.hasClass("opened") &&
                        e.target.className !== 'mkdf-search-field' &&
                        e.target.parentElement.className !== 'mkdf-onside-btn' &&
                        e.target.parentElement.className !== 'mkdf-search-opener-wrapper') {
                        searchOpenerParent.removeClass("opened");
                    }
                });
            }
        }
    }

})(jQuery);
