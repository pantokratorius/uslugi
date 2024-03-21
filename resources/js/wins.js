class coreWin {

    constructor(params = {}) {
        var index=1; 
        var maxIndex = 0;
        $('.wins-window').each(function(){
            var i = parseInt($(this).data("index"));
            if (i > maxIndex) { maxIndex = i;}
        });
        index +=maxIndex;
        this.p = {type: "normal", /* flat */ parentSelector: "body", display: "visible"};
        Object.assign(this.p, params);
        this.uid = 'win-id-'+this.randUID();
        //console.log("created win uid:"+this.uid);
        var disp = "", class1 = 'wins-full';
        var elClose = '<div class="win-close"><i class="bi-x-lg"></i></div>';
        if (this.p.display.indexOf("visible")==-1) {disp = "wins-hide";}
        if (this.p.type.indexOf("noclose")>-1) {elClose='';}
        if (this.p.type.indexOf("normal")>-1) { class1 = 'wins-normal';}
        if (this.p.type.indexOf("small")>-1) { class1 = 'wins-small';}
            var whtml =
            '<div id="'+this.uid+'" class="wins-window" data-index="'+index+'" style="display: none">'+
                '<div class="wins-wh-100" style="position: fixed; left:0; top:0; background: rgba(0, 0, 0, 0.5);"></div>'+
                '<div class="wins-wh-100 wins-window-bg" style="position: fixed; left:0; top:0;">'+
                    '<div class="wins-wh-100" style="display: flex; justify-content: center; align-items: center;">'+
                        '<div class="wins-window-container" style="position: fixed; display: none">'+
                            '<div id="'+this.uid+'-center"></div>'+elClose+
                        '</div>'+    
                    '</div>'+
                '</div>'+
            '</div>';
        $(this.p.parentSelector).append(whtml);
        $('#'+this.uid).show(); $('#'+this.uid+' .wins-window-container').fadeIn(100);
        $('body').addClass('overflow-hidden');

    }

    randUID(length = 8) {
        var r = '';
        var cA = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        for ( var i = 0; i < length; i++ ) { r += cA.charAt(Math.floor(Math.random() * cA.length)); }
        return r;
    }    
}


class coreWins {

    constructor() {
        var mThis = this; 
        $(document).on("click", ".win-close", function() {
            $(this).closest('.wins-window').remove();
            if (mThis.count()==0) {$('body').removeClass('overflow-hidden');}
        });
        
        $(document).on("click", ".closewindow", function() {
            $(this).closest('.wins-window').remove();
            if (mThis.count()==0) {$('body').removeClass('overflow-hidden');}
        });

        $(document).on("click", ".wins-window-bg", function(e) {
            e.stopImmediatePropagation();
            $(this).closest('.wins-window').remove();
            if (mThis.count()==0) {$('body').removeClass('overflow-hidden');}
        });
        
        $(document).on("click", ".wins-window-container", function(e) {
            e.stopImmediatePropagation();
        });        

    }






    getWinEl(childID){
        return $('#'+childID).closest('.wins-window');
    }

    findElByExtra(key, value){
        var rThis = this;
        var rr = null;
        $('.wins-window').each(function(){
            var v = rThis.getElExtraValue( $(this).attr('id'), key );
            if (v==value) {rr = this; return false;}   
        });
        return rr;
    }

    getElExtraValue(winID, key){
        var o = this.getElExtra(winID);
        if (o == null) {return o;}
        return o[key];
    }

    getElExtra(winID){
        var d = $('#'+winID).data("extra");
        if (typeof(d) != 'undefined') {
            var oData = JSON.parse(coreJSU.base64Decode(d));
            return oData;
        } else {return null;}
    }    

    setElExtra(winID, valueObj){
        var d = $('#'+winID).data("extra");
        if (typeof(d) != 'undefined') {
            var oData = JSON.parse(coreJSU.base64Decode(d));
            Object.assign(oData, valueObj);
        } else { var oData = valueObj; }
        $('#'+winID).data("extra", coreJSU.base64Encode(JSON.stringify(oData)));

    }


    lastUID() { return $('.wins-window:last-child').attr('id'); }
    count() { return parseInt($('.wins-window').length); }
    create(params) { return new coreWin(params).uid; }

    getMaxIndexEl(offsetFromEnd=0){
        var sorted = [];
        $('.wins-window').each(function(){
            var i = parseInt($(this).data("index"));
            sorted.push({ "index": i, "el": this });
        }); 
        sorted.sort((a, b) => a.index - b.index);
        if (sorted.length > 0) {
            if (offsetFromEnd > (sorted.length-1)) {return null;}
            return sorted[sorted.length-1-offsetFromEnd].el;
        }
        return null;
    }
/*
    getMaxIndexEl(){
        var maxIndex = 0;
        var maxIndexEl = null;
        $('.wins-window').each(function(){
            var i = parseInt($(this).data("index"));
            if (i > maxIndex) { maxIndex = i; maxIndexEl = this;}
        });
        return maxIndexEl;
    }    
*/
    getMaxIndex(){
        var maxIndex = 0;
        $('.wins-window').each(function(){
            var i = parseInt($(this).data("index"));
            if (i > maxIndex) { maxIndex = i;}
        });
        return parseInt(maxIndex);
    } 
    
    getWinIndex(winID){ return parseInt($('#'+winID).data("index")); }

    showWin(winID){ 
        $('.wins-window').hide();
        if (this.getWinIndex(winID) != this.getMaxIndex()) {
            $('#'+winID).data("index", parseInt(this.getMaxIndex())+1);
        }
        $('#'+winID).show();
    }


    closeWindow(){
        $('.wins-window').last().remove();
        if (this.count()==0) {$('body').removeClass('overflow-hidden');}
    }    

    closeActive(){
        var maxIndex = 0;
        var maxIndexEl = null;
        $('.wins-window').each(function(){
            var i = parseInt($(this).data("index"));
            if (i > maxIndex) { maxIndex = i; maxIndexEl = this;}
        });
        $(maxIndexEl).remove();
        var maxIndex = 0;
        var maxIndexEl = null;
        $('.wins-window').each(function(){
            var i = parseInt($(this).data("index"));
            if (i > maxIndex) { maxIndex = i; maxIndexEl = this;}
        });
        $(maxIndexEl).show();
    }

    randUID(length = 8) {
        var r = '';
        var cA = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        for ( var i = 0; i < length; i++ ) { r += cA.charAt(Math.floor(Math.random() * cA.length)); }
        return r;
    } 


    notify(text, fail=false, cBF=null){
        var d = 1800;
        if (fail) { 
            var cc = '<i class="display-1 bi-exclamation-triangle"></i><br><div class="text-center">'+text+'</div></div>'; 
            d += 5000;
        } 
        else {
            var cc = '<i class="display-1 bi-check-circle text-success"></i><br><div class="text-center text-primary">'+text+'</div></div>'; 
        }
        var cont = '<div class="rounded text-center bg-white p-3">'+cc+'</div>';
        var uid = coreJSW.create({"type":'normal noclose'});
        $('#'+uid+'-center').html(cont);

        $('#'+uid).delay(d).fadeOut(100, function(){$('#'+uid).remove(); if (cBF!=null){cBF();} });
    }

   


}
var coreJSW = new coreWins();