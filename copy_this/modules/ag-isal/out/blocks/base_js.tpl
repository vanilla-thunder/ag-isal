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
                msgText: 'Lade Daten ...',
                finishedMsg: 'Keine weiteren Produkte gefunden',
                finished: function(){
                    $('#infscr-loading').remove();
                }
            }
        });
    })
    [{/capture}]
    [{oxscript include=$oViewConf->getModuleUrl('ag-isal','out/src/jquery.infinitescroll.min.js') }]
    [{oxscript add=$infiniteScroll}]
[{/if}]
