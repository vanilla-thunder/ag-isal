[{$smarty.block.parent}]
[{if $oView->getClassName() eq "alist" || $oView->getClassName() eq "search" || $oView->getClassName() eq "manufacturerlist" }]
    [{assign var="pages" value=$oView->getPageNavigationLimitedBottom() }]
    [{capture assign=infiniteScroll}]
    $(function(){
        var productlistselector = '#' + $("ul[class*='View'][id*='List']").attr('id');
        $(productlistselector).infinitescroll({
            navSelector  : "div.refineParams.bottomParams",
            // selector for the paged navigation (it will be hidden)
            nextSelector : "div.pager a.next",
            // selector for the NEXT link (to page 2)
            itemSelector : productlistselector + " li.productData",
            // so no loading happens if not needed
            maxPage: [{$pages->NrOfPages}],
            // selector for all items you'll retrieve
            path: function(page){
            [{assign var=fp value='&amp;'|str_replace:'&':$pages->firstpage}]
            [{if $fp|stristr:'index.php' === FALSE}]
                return '[{$fp}]'+page;
            [{else}]
                return '[{$fp}]&pgNr='+(page-1);
            [{/if}]
            },
            loading: {
                msgText: '[{oxmultilang ident="AG_ISAL_LOADING"}]',
                finishedMsg: '[{oxmultilang ident="AG_ISAL_NO_MORE_PRODUCTS"}]',
                finished: function(){
                    $('#infscr-loading').remove();
                }
            }
            },function(arr){
    		alignScrolltopButton();
            });

            var scrollbutton = $('<a id="scrolltop" class="submitButton largeButton" style="position:fixed; bottom:30px; display:none;"><span class="asc">[{oxmultilang ident="AG_ISAL_TOP"}]</span></a>');
            $('body').append(scrollbutton); 

            $(window).scroll(function(e){
                    var scrollTop = $(window).scrollTop();
                    if(scrollTop > 800){
                            alignScrolltopButton();
                            scrollbutton.show();
                    }else{
                            scrollbutton.hide();
                    }
            });

            $(window).resize(function(e){
                    alignScrolltopButton();
            })

            scrollbutton.click(function(){
                    $(window).scrollTop(0);
                    return false;
            });

            alignScrolltopButton();

            function alignScrolltopButton(){
                    var pos = $('#sidebar').offset();
                    var left = pos.left;
                    scrollbutton.css('left', left+'px');

                    var pos = $('#content').offset();
                    var maxTop = pos.top + $('#content').height();
                    var top = $(window).height() - 30 + $(window).scrollTop();
                    if(top > maxTop){
                            scrollbutton.css('position', 'absolute');
                            scrollbutton.css('bottom','');
                            scrollbutton.css('top', maxTop);
                    }else{
                            scrollbutton.css('position', 'fixed');
                            scrollbutton.css('bottom','30px');
                            scrollbutton.css('top', '');
                    }

            }
    })
    [{/capture}]
    [{oxscript include=$oViewConf->getModuleUrl('ag-isal','out/src/jquery.infinitescroll.min.js') }]
    [{oxscript add=$infiniteScroll}]
[{/if}]
