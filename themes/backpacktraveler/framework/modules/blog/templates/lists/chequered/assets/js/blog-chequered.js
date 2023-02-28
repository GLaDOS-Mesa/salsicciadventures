(function($) {
    "use strict";

    var blogChequered = {};
    mkdf.modules.blogChequered = blogChequered;

    blogChequered.mkdfOnWindowLoad = mkdfOnWindowLoad;

    $(window).on('load',mkdfOnWindowLoad);

    /*
     All functions to be called on $(window).load() should be in this function
     */
    function mkdfOnWindowLoad() {
        mkdfInitBlogChequered();
        mkdfInitBlogChequeredLoadMore();
    }

    /**
     *  Init Blog Chequered
     */
    function mkdfInitBlogChequered(){
        var container = $('.mkdf-blog-holder.mkdf-blog-chequered');
        var masonry = container.children('.mkdf-blog-holder-inner');
        var newSize;

        if(container.length) {
            newSize = masonry.find('.mkdf-masonry-grid-sizer').outerWidth();
            masonry.children('article').css({'height': (newSize) + 'px'});
            masonry.isotope( 'layout', function(){
                masonry.css('opacity', '1');
            });
        }
    }

    function mkdfInitBlogChequeredLoadMore() {
        $( document.body ).on( 'blog_list_load_more_trigger', function() {
            mkdfInitBlogChequered();
        });
    }

})(jQuery);