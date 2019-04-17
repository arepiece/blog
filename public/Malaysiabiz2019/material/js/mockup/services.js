function Services() {
	if (!(this instanceof Services)) {
		return new Services()
	}
}



// Services attr and functions

Services.prototype.route = function (path) {
	addScriptTag($.rootPath + '/module/' + path + '.js')
}




$(function () {
	//load routes
	Services.route($.urlPath())

})


//Global function
//Get url path file name
$.urlPath = function () {
	return location.pathname.split('/').slice(-1)[0].split('.').slice(0)[0]
}
//Get parameter
$.urlParam = function (name) {
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results ? results[1] || 0 : undefined;
}

//Upper case first letter
$.upperFirst = function(s){
	return s&&s.replace(/./,s.toUpperCase()[0])
}

function guid() {
	function s4() {
	  return Math.floor((1 + Math.random()) * 0x10000)
		.toString(16)
		.substring(1);
	}
	return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
  }


//serialize form
$.serializeForm = function($form){
    return _.object(_.map($form.serializeArray(), function(item){return [item.name, item.value]; }));
}

var API = API()
var Services = Services()
var IS_EDIT = $.urlParam('action') =='edit'