
/***********************************
 *           LICENSING             *
 * *********************************
 */

API.prototype.allLicensing = function(){
	return _.map(store('licensing'),function(license){
		return{
			...license,
			license_name:{
				key:license.license_name,
				data:store('general.license_name')[license.license_name] ? store('general.license_name')[license.license_name]:""
			},
			category:{
				key:license.category,
				data:store('general.license_categories') ? store('general.license_categories')[license.category]:""
			},
			
		}					
	})
 }

 API.prototype.getLicenseCategory = function(key){
	return store('general.license_categories')[key]
 }

 API.prototype.allLicenseCategories = function(){
	return store('general.license_categories')
}

 //Simple handle delete by index
API.prototype.deleteLicensing = function(key){
	
	var licenses = store('licensing')

	if (licenses) {
		licenses.splice(key, 1);
	}
	return store('licensing',licenses)
}

//get 
API.prototype.getLicensing =  function(key){
	return _.find(store('licensing'),{'key':key})
}

//add
API.prototype.addLicensing =  function(ls){
	
	ls.key = guid()
	var name = ls.license_name
	var key = ls.license_name.replace(/[\s-]+/g,'_').toLowerCase()
	API.addLicenseName(key,name)
	ls.license_name = key
	var licensings = store('licensing')
	licensings.push(ls)
	store('licensing',licensings)
}

API.prototype.addLicenseName = function(key,value){
	var licenses = store('general.license_name')?store('general.license_name'):{}
	licenses[key] = value
	store('general.license_name',licenses)
}


//update
API.prototype.updateLicensing =  function(biz,key){
	var licenses = store('licensing')
	licenses = _.map(licenses,function(data){
			console.log(data.key,key)
			if(data.key === key){
				biz.key = data.key
				data = biz
			}
			return data;
		})
	store('licensing',licenses)
}
