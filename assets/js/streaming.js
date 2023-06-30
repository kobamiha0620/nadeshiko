
jQuery(function(){
        const selectSp = $('#streamingSelect');
        // 全ての選択を外す
        selectSp.attr("selected", false);
        const array = new Array('category-discography', 'category-single', 'category-album', 'category-blueray','category-streaming', 'category-other');
        // const opLength = selectSp.length;
        for(var i = 0; i < array.length; i++){
            if($('body').hasClass(array[i])){
                // selectSp.options[i].selected = true;
                let eloption = selectSp.prop("selectedIndex", i);
                eloption.prop('selected', true);
                // $("#view_method option[value='4']").prop('selected', true);
                console.log('あるよ');

            }else{
                console.log('ないよ');
            }
        }
    

});


