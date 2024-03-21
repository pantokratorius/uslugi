class coreJSUtils {

    uint32 = (int32) => Uint32Array.from(Int32Array.of(int32))[0];
    int32 = (uint32) => Int32Array.from(Uint32Array.of(uint32))[0];
    
    htmlEntities(str) {
        return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }

    getTimeZone() {
        var offset = new Date().getTimezoneOffset();
        return (offset < 0 ? "+" : "-") + ("00" + Math.floor(Math.abs(offset) / 60)).slice(-2) + ":" + ("00" + (Math.abs(offset) % 60)).slice(-2);
    }    
    
    lsPut(key, value){
        localStorage.setItem(key, this.base64Encode(value));    
    }

    lsGet(key){
        var r = localStorage.getItem(key);
        if (!r) {return "";}
        return this.base64Decode(r);    
    }
    
    lsPutJ(key, value){
        localStorage.setItem(key, this.base64Encode(JSON.stringify(value)));    
    }

    lsGetJ(key){
        var r = localStorage.getItem(key);
        if (!r) {return "";}
        return JSON.parse(this.base64Decode(r));    
    }

    randUID(length = 8) {
        var r = '';
        var cA = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        for ( var i = 0; i < length; i++ ) { r += cA.charAt(Math.floor(Math.random() * cA.length)); }
        return r;
    }     

    makeCRCTable = function(){
        var c;
        var crcTable = [];
        for(var n =0; n < 256; n++){
            c = n;
            for(var k =0; k < 8; k++){ c = ((c&1) ? (0xEDB88320 ^ (c >>> 1)) : (c >>> 1)); }
            crcTable[n] = c;
        }
        return crcTable;
    }

    getCookie(n) {
        let name = n + "=";
        let dCookie = decodeURIComponent(document.cookie);
        let ca = dCookie.split(';');
        for(let i = 0; i < ca.length; i++) {
          let c = ca[i];
          while (c.charAt(0) == ' ') { c = c.substring(1); }
          if (c.indexOf(name) == 0) { return c.substring(name.length, c.length); }
        }
        return "";
      } 
      
      
    setCookie(n, v, days=0) {
        const d = new Date();
        d.setTime(d.getTime() + (days*24*60*60*1000));
        let expires = (days > 0) ? "expires="+ d.toUTCString()+";" : "";
        document.cookie = n + "=" + v + ";" + expires + "path=/";
    }  

    
    crc32 = function(str) {
        var crcTable = window.crcTable || (window.crcTable = this.makeCRCTable());
        var crc = 0 ^ (-1);
        for (var i = 0; i < str.length; i++ ) { crc = (crc >>> 8) ^ crcTable[(crc ^ str.charCodeAt(i)) & 0xFF]; }
        return this.uint32((crc ^ (-1)) >>> 0);
    };

    base64Encode(str) {
        //return window.btoa(unescape(encodeURIComponent(str)));
        //return $.base64.encode(str);
        return Base64.encode(str);
    }

    base64Decode(str) {
        //return decodeURIComponent(escape(window.atob(str)));
        //return $.base64.decode(str);
        return Base64.decode(str);
    }
    
    ArrayElRemove(arr, value) {
        var i; while (arr.length > 0) {i = arr.indexOf(value); if (i === -1) {break;} arr.splice(i,1); }
        return arr;
    }

    showPhotos(title='', ph='') {
        if (title != '' ) { title = this.base64Decode(title); }
        var photos = JSON.parse(this.base64Decode(ph));
        if (photos.length < 1) {return;}
        var inputs = '';
        photos.forEach((el, index) => { inputs+='<input type="hidden" id="photo'+index+'" class="photo" value="'+el+'">'; });
        title = '<div class="w3-large tr-bg-black w3-padding w3-text-white app-text-center app-nw app-oh app-oe">'+title+'</div>';
        var close = '<i class="bi bi-x-lg w3-red w3-button fs-4" onClick="$(this).parent().remove();" style="position:absolute; top:0; right:0"></i>';
        $('body').append('<div data-offset="0" class="app-fullscreen app-img-bg-full app-pointer" style="background-image:url('+photos[0]+');" onClick="var o = $(this).data(\'offset\'); o++; $(this).data(\'offset\',o);  if (o >= $(\'.photo\').length ) { $(this).remove(); } else { $(this).css(\'background-image\',\'url(\'+$(\'#photo\'+o).val()+\')\'); }">'+title+close+inputs+'</div>');
    }
	
	
	loadDynJS(url, callback, jsID="dyn-js-01", async = true) {
		if (!document.getElementById(jsID))
		{
			var head  = document.getElementsByTagName('head')[0];
			var js  = document.createElement('script');
			js.id   = jsID;
			js.type = 'text/javascript';
			js.src = url;
			js.async = async;
			js.addEventListener("load", () => {
				callback(true);
			});
			js.addEventListener("error", (ev) => {
				callback(false);
			});
			head.appendChild(js);
		} else {callback(true);}
	}	
	
	loadDynCSS(url, callback, cssID="dyn-css-01") {
		if (!document.getElementById(cssID))
		{
			var head  = document.getElementsByTagName('head')[0];
			var css  = document.createElement('link');
			css.id   = cssID;
			css.rel  = 'stylesheet';
			css.type = 'text/css';
			css.media = 'all';
			css.href = url;
			css.addEventListener("load", () => {
				callback(true);
			});
			css.addEventListener("error", (ev) => {
				callback(false);
			});
			head.appendChild(css);
		} else {callback(true);}
	}


    getGeoIp(ip, callback) {
        var coords = {"latitude":0, "longitude":0, "empty":true};
        if (ip==='') {callback(coords); return;}
        $.getJSON('https://ipapi.co/'+ip+'/json', function(data){
            coords.latitude = (data.latitude === undefined) ? 0 : data.latitude;
            coords.longitude = (data.longitude === undefined) ? 0 : data.longitude;
            if ((coords.latitude + coords.longitude) != 0) {coords.empty=false;}
            callback(coords);
        }).fail(function() {
            callback(coords);
        });  
      } 


    getGeo(ip='', callback){
        var mThis = this;
        var coords = {"latitude":0, "longitude":0, "empty":true};
        if (!navigator.geolocation) {
            mThis.getGeoIp(ip, function(coords){ callback(coords); });
        } else {
            const options = {
                enableHighAccuracy: false,
                timeout: 5000,
                maximumAge: 0
            };                
            function success(position){
                coords.latitude = position.coords.latitude;
                coords.longitude = position.coords.longitude;
                if ((coords.latitude + coords.longitude) != 0) {coords.empty=false;}                
                callback(coords);    
            }
            function error(err) {
                mThis.getGeoIp(ip, function(coords){ callback(coords); });
            }
            navigator.geolocation.getCurrentPosition(success, error, options);
        }
    }



    showGeoPicker(params, callback, dic = {"txtA":"Search by address..","txtD":"Done","txtC":"Cancel"}){
        var coord = {"latitude":0, "longitude":0};
        var divID = coreJSW.create({"type":'normal noclose'})+'-center';
        $('#'+divID).html(
          '<div class="core-tab bg-light" style="width:95vw; height: 95vh; max-width:800px; max-height:800px">'+
            '<div class="header">'+
              '<div class="p-1">'+
              '<div class="col-12">'+
                '<div class="input-group input-group-sm">'+
                    '<input class="form-control geo-picker-addr" type="text" placeholder="'+dic.txtA+'">'+             
                 '</div>'+
              '</div>'+
              '</div>'+
            '</div>'+
            '<div class="main">'+
              '<div><div id="map" class="w-100 h-100"></div></div>'+
            '</div>'+
            '<div class="footer text-center">'+
              '<div>'+
                '<div class="btn btn-outline-dark fs-6 m-1 py-1 button-cancel-location">'+dic.txtC+'</div>'+
				'<div class="btn btn-primary fs-6 m-1 py-1 px-5 button-set-location">'+dic.txtD+'</div>'+
              '</div>'+
            '</div>'+
          '</div>'        
        );

        $('.button-set-location').on("click", function() {
          callback(coord);
          coreJSW.closeWindow();
        });

        $('.button-cancel-location').on("click", function() {
          coreJSW.closeWindow();
        });

        coreJSU.loadDynCSS(params.CORE_CDN+'/leaflet/leaflet.css', function(){
          coreJSU.loadDynJS(params.CORE_CDN+'/leaflet/leaflet.js', function(){
            coreJSU.getGeo(params.IP, function(coords){
              /* - */
              coord.latitude = coords.latitude;
              coord.longitude = coords.longitude;
              if (coords.empty) {
                coords.latitude = (params.lat === undefined) ? 0 : params.lat;
                coords.longitude = (params.lon === undefined) ? 0 : params.lon;                
              }

              var map = L.map('map', { center: [coords.latitude, coords.longitude], zoom: 12});
              const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                minZoom: 2,
                maxZoom: 19,
                cursor: true,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
              }).addTo(map);

              var marker = L.marker(map.getCenter(),{
                draggable: false,
                autoPan: true
              }).addTo(map);
                
              map.on("moveend", function () {
                var mc = map.getCenter();
                marker.setLatLng(mc);
                coord.latitude = mc.lat;
                coord.longitude = mc.lng;    
              })

              map.on("move", function () {
                marker.setLatLng(map.getCenter());
              })

                $('.geo-picker-addr').on("change", function() {
                    if ($(this).val()!='') {
                        //var url = 'https://nominatim.openstreetmap.org/search/'+encodeURIComponent($(this).val())+'?format=json&addressdetails=0&limit=1';
						var url = 'https://nominatim.openstreetmap.org/search.php?q='+encodeURIComponent($(this).val())+'&format=jsonv2&addressdetails=0&limit=1';
						
                        $.getJSON(url, function(data){
                            if (data.length > 0) {map.panTo(new L.LatLng(data[0].lat, data[0].lon));} else {alert('Place not found');}
                        }).fail(function() {
                            //callback(coords);
                        });                        
                    }
                });              
              /* - */
            });      
          });
        });
    } 

    loadCapcha(url, callback) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                const status = xhr.status;
                //if (status === 0 || (status >= 200 && status < 400)) {
				if (status === 200) {
                    const h = xhr.getResponseHeader("x-image-ch");
                    var bin = this.response;
                    var reader = new FileReader();
                    reader.onload = function() { callback(true, reader.result, h); }
                    reader.readAsDataURL(bin);
                } else {callback(false, null, null); }
            }
        }
		xhr.onerror = function () {callback(false, null, null);}
        xhr.responseType = 'blob';
		xhr.send();
    }


}
var coreJSU = new coreJSUtils();




class coreMultiselectImg {
    constructor() {
        this.onInit = null;
        this.onDelete = null;
        this.onShow = null;
        this.onError = null;
        this.initialized = false;
        this.maxImgCount = 0;
        this.maxFileSize = 0;
        this.dt = new DataTransfer();
        this.imgCRC = [];
        this.extraImgCRC = [];
        this.imgFilesTmpCRC = [];
        this.inputMultiHTML = '<input id="imgFiles" style="display: none" accept="image/*" type="file" name="imgFiles[]" multiple="multiple">' +
                              '<input id="imgFilesTmp" style="display: none" accept="image/*" type="file" name="imgFilesTmp[]" multiple="multiple">';
        this.thumbsContHTML = '<div id="imgThumbsList"></div>';
        this.addButtonHTML = '<div id="imgFileAdd" class="app-thumbImgContAddButton w3-jumbo w3-pale-green w3-hover-green app-round-5 app-pointer app-border-da" onClick="$(\'#imgFilesTmp\').click();"><div><div><i class="bi bi-camera"></i></div></div></div>';
    }

    
    fileCRC32(file, callbackFn) {
        var reader = new FileReader();
        reader.onerror = function(event) { callbackFn(0); };
        reader.onloadend = function(event) { callbackFn(coreJSU.crc32(event.target.result)); };
        reader.readAsBinaryString(file);
    }

    calcFilesCRC(callbackOnDone){
        var mThis = this;
        function waitForDone(){
            if (mThis.imgFilesTmpCRC.length == 0) {callbackOnDone(); return;}
            var zeroFound = false;
            for (let i = 0; i < mThis.imgFilesTmpCRC.length; i++) {
                if (mThis.imgFilesTmpCRC[i].crc == 0 ) {zeroFound = true; break;}    
            }
            if (!zeroFound) { callbackOnDone(); return; } else { setTimeout(waitForDone, 1000); }
        };
        const files = $('#imgFilesTmp').prop("files");
        this.imgFilesTmpCRC = [];
        for (let i = 0; i < files.length; i++) { this.imgFilesTmpCRC.push({crc: 0}); }        
        for (let i = 0; i < this.imgFilesTmpCRC.length; i++) {
            this.fileCRC32(files[i], function(crc){ mThis.imgFilesTmpCRC[i].crc = crc; });
        }        
        waitForDone();
    }


    init(formID, thumbsContID, maxImgCount = 4) {
        var thisMain = this;
        this.dt = new DataTransfer();
        this.imgCRC = [];
        this.extraImgCRC = [];        
        this.maxImgCount = maxImgCount;
        this.auxImgCount = 0;
        if ($('#imgFiles').length) {$('#imgFiles').remove();}
        if ($('#imgFilesTmp').length) {$('#imgFilesTmp').remove();}
        if ($('#imgThumbsList').length) {$('#imgThumbsList').remove();}
        $('#'+formID).append(this.inputMultiHTML);
        $('#'+thumbsContID).html(this.thumbsContHTML);
        $('#imgFiles').val('');
        $('#imgFilesTmp').val('');        
        $(document).off("click", "#imgFileDel");
        $(document).off("change", "#imgFilesTmp");
        $(document).on("click", "#imgFileDel", function() { thisMain.imgRemove($(this)); });
        $(document).on("change", "#imgFilesTmp", function() { thisMain.fileSelect(); });
        if (typeof this.onInit === 'function' ) {this.onInit();}
        this.initialized = true;
        
    }
    

    fileSelect(){
        var mThis = this;
        this.calcFilesCRC( function(){ mThis.thumbsShow(); });
    }

    thumbsShow(){
        var mThis = this;
        mThis.dataReload();
        $('#imgThumbsList').html('');
        if (typeof mThis.onShow === 'function' ) {mThis.onShow();}        
        const files = $('#imgFiles').prop("files");
        for (let i = 0; i < files.length; i++) {
            var delButton = '<div id="imgFileDel" data-crc="'+mThis.imgCRC[i]+'" data-uid="" class="w3-text-red w3-white w3-hover-red app-btn-sq" style="position: absolute; right:0; top:0"><i class="bi bi-x-square-fill"></i></div>';                 
            $('#imgThumbsList').append('<div class="app-thumbImgCont w3-border w3-white app-round-5" style="background-image:url('+URL.createObjectURL(files[i])+');">'+delButton+'</div>')
        }
        if (mThis.dt.files.length < (mThis.maxImgCount - mThis.auxImgCount)) { $('#imgThumbsList').append(mThis.addButtonHTML); }

    }


    imgRemove(el){
        var crc = $(el).data("crc");
        if (typeof this.onDelete === 'function' ) {this.onDelete(el);}
        if (crc == '') {return;}
        const input = document.getElementById('imgFiles');
        const dataList = this.dt.items;
        for (let i = 0; i < this.imgCRC.length; i++) {    
            if (crc == this.imgCRC[i]) { 
                dataList.remove(i);
                this.imgCRC.splice(i,1);
                break;
            }
        }
        input.files = this.dt.files;
        this.thumbsShow();
    }

    dataReload(){
        const input = document.getElementById('imgFiles');
        const filesTmp = $('#imgFilesTmp').prop("files");
        for (let i = 0; i < filesTmp.length; i++) {
            if (this.dt.files.length >= (this.maxImgCount - this.auxImgCount)) {break;}
            var Fcrc = this.imgFilesTmpCRC[i].crc;
            if (this.maxFileSize > 0) {
                if (filesTmp[i].size <= this.maxFileSize) {
                    if ( (!this.imgCRC.includes(Fcrc)) && (!this.extraImgCRC.includes(Fcrc)) ) {
                        this.dt.items.add(filesTmp[i]);
                        this.imgCRC.push(Fcrc);
                    }
                } else {
                    if (typeof this.onError === 'function' ) {this.onError(filesTmp[i], 'size');}
                }
            }
        }
        input.files = this.dt.files;
        $('#imgFilesTmp').val('');
    }    

    
}
var coreMSI = new coreMultiselectImg();






class coreJsTab {
    tableData = {
        contSelector: '',
        tabID: '',
        //tabClass: '',
        tabEditable: true,
        cols: [],
        colsType: [],
        rows: []
    };
    onChange = null;

    constructor(cols=[]) {
        var T = this;
        for (const col of cols) {
            this.tableData.cols.push(col[0]);
            this.tableData.colsType.push(col[1]);
        }
        //this.tableData.cols = colNames;

        this.tableData.tabID = 'js-tab-'+coreJSU.randUID();

        $(document).off("click", "#"+T.tableData.tabID+" tr .row-remove").on("click", "#"+T.tableData.tabID+" tr .row-remove", function(){
            T.DelRow($(this).closest('tr').index());  
        });

        $(document).off("change", "#"+T.tableData.tabID+" td input").on("change", "#"+T.tableData.tabID+" td input", function(){
            var d = $(this).data(); 
            T.tableData.rows[parseInt(d.row)][parseInt(d.column)] = $(this).val();
        });

        $(document).off("keyup", "#"+T.tableData.tabID+" input").on("keyup", "#"+T.tableData.tabID+" input", function(event){
            if (event.keyCode === 13) {
                var nEL = $(this).parent().next().find('input');
                if ($(nEL).length) { $(nEL).focus(); } else {
                    var nextRow = $(this).closest('tr').next();
                    if ($(nextRow).length) { $(nextRow).find('input').first().focus(); } else { T.AddRow(true); }
                }
            }
        });          

    }

    NormalizeData(){
        var T = this;
        for (var row of T.tableData.rows) {
            for (const i in row) {
                row[i] = String(row[i]).replace(/[\s]{2,}/g, ' ');
                if (T.tableData.colsType[i] == 'text') { var cell = row[i]; }
                else if (T.tableData.colsType[i] == 'integer') {var cell = parseInt(row[i]); if (isNaN(cell)) {cell = 0;} }
                else if (T.tableData.colsType[i] == 'price') {var cell = parseFloat(String(row[i]).replace(',','.')).toFixed(2);}
                else {var cell = row[i];}
                row[i] = cell;        
            }
        }
    }

    Draw(contSelector=''){
        var T = this;
        if (T.tableData.contSelector=='') { if (contSelector=='') {return;} T.tableData.contSelector = contSelector;}
        $(T.tableData.contSelector).html('<table id="'+T.tableData.tabID+'" class="'+T.tableData.tabClass+'"></table>');
        $('#'+T.tableData.tabID).append('<thead><tr></tr></thead>');
        $('#'+T.tableData.tabID+' thead tr').last().append('<th scope="col">&nbsp;</th>');
        for (const colName of T.tableData.cols) { $('#'+T.tableData.tabID+' thead tr').last().append('<th scope="col" class="py-2">'+coreJSU.htmlEntities(colName)+'</th>'); }
        $('#'+T.tableData.tabID+' thead tr').last().append('<th scope="col">&nbsp;</th>');
        $('#'+T.tableData.tabID).append('<tbody></tbody>');
        var rowN=0;
        if (this.tableData.tabEditable) {
            for (const row of T.tableData.rows) { rowN++;
                var colN=1;
                $('#'+T.tableData.tabID+' tbody').append('<tr><th scope="row" class="col-nr-'+colN+'">'+rowN+'</th></tr>');
                for (var cell of row) {
                    colN++;
                    var cellHTML = '<input data-row="'+(parseInt(rowN)-1)+'" data-column="'+(parseInt(colN)-2)+'" class="w-100 border-0" type="text" autocomplete="off" value="'+coreJSU.htmlEntities(cell)+'">';
                    $('#'+T.tableData.tabID+' tbody tr').last().append('<td class="col-nr-'+colN+'">'+cellHTML+'</td>'); 
                }
                colN++;
                $('#'+T.tableData.tabID+' tbody tr').last().append('<td class="w3-hover-red row-remove col-nr-'+colN+'" style="cursor:pointer">'+'<i class="bi bi-x-lg" style="cursor:pointer"></i>'+'</td>');
            }
        } else {
            /*
            for (const row of T.tableData.rows) { rowN++;
                var colN=1;
                $('#'+T.tableData.tabID+' tbody').append('<tr><td class="col-nr-'+colN+'">'+rowN+'</td></tr>');
                for (const cell of row) { colN++; $('#'+T.tableData.tabID+' tbody tr').last().append('<td class="col-nr-'+colN+'">'+cell+'</td>'); }
            } 
            */           
        }


    if (this.onChange!=null) {this.onChange(this.tableData.tabID);}
    }

    AddRow(setFocus=false){
        var cells = [];
        this.tableData.cols.forEach( function(){cells.push('');} );
        this.tableData.rows.push(cells);
        this.Draw();
        if (setFocus) {$('#'+this.tableData.tabID+' tr').last().find('input').first().focus();}
    }

    PasteFromClipboard(){
        var T = this;
        navigator.clipboard.readText()
        .then(clipText => {
            if (clipText.length > 0) {T.ImportData(clipText);}
        })
        .catch(err => {
            console.error('Failed to read clipboard: ', err);
        });          
    }

    ImportData(rawText){
        this.ClearRows();
        var cellsArray=[];
        var tmp = rawText.split("\t");
        for (let i = 0; i < tmp.length; i++) {
            if ((i % (this.tableData.cols.length-1)) === 0) { 
                //console.log('>>>'+tmp[i]);
                tmp[i] = String(tmp[i]).replace(/\r\n|\n\r|\n|\r/g, '\n');
                var t = String(tmp[i]).match(/^(.+)\n(.+?)$/);
                if (t) {
                    cellsArray.push(t[1]);
                    cellsArray.push(t[2]);
                    continue;
                }
            }
            cellsArray.push(tmp[i]);
        }
        const chunkSize = this.tableData.cols.length;
        for (let i = 0; i < cellsArray.length; i += chunkSize) {
            const row = cellsArray.slice(i, i + chunkSize);
            this.tableData.rows.push(row);
        }        
        this.NormalizeData();        
        this.Draw();
    }

    DelRow(index){
        this.tableData.rows.splice(index,1);
        this.Draw();
    }

    ClearRows(){
        this.tableData.rows=[];
        this.Draw();
    }

    RowsCount(){return this.tableData.rows.length;}
    GetRowsData(){return this.tableData.rows;}

}


