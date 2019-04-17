
Object.defineProperty(Object.prototype, "partial", {
    enumerable: false,
    configurable: false,
    set: function (value) {
        if (value.constructor === Object) {
            for (prop in value) {
                if (value.hasOwnProperty(prop)) {
                    this[prop] = value[prop];
                }
            }
        }
        return this;
    },
    get: function () { return this;}
});


$.rootPath = 'js/mockup/'

$(function loadJS () {
    jsFiles = [

        { path:'libs/lodash.min.js',async:true},
        { path:'libs/store2.min.js',async:true},
        
        //load everything apis
        { path:'api.js'},
        { path:'api/agency.js'},
        { path:'api/business.js'},
        { path:'api/licensing.js'},
        { path:'api/location.js'},
        { path:'api/allsimple.js'},

        //Load services
        { path:'services.js'},

        //Load else
        { path:'extended_gui/extgui.js',async:true},,

        
    ]

    jsFiles.forEach(function(apis) {
        addScriptTag($.rootPath+apis.path,apis.async);
      });

     
})

addScriptTag = function(jsFile,async = false) { 
    var scriptTag = document.createElement('script')
    scriptTag.src = jsFile+'?v='+new Date().getTime();
    scriptTag.async = async;
    document.head.appendChild(scriptTag);
}



 