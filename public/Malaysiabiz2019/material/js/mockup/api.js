
function API() {
	
	if (!(this instanceof API)) {
		if(store.size()==0 || $.urlParam('db') == 'reset'){
			addScriptTag($.rootPath+'db.js')
			location.href=location.pathname
		}
		return new API()
	}

}

API.prototype = {
	getAllData:function(){return store()}
}