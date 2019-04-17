/***********************************
 *             AGENCY              *
 * *********************************
 */

//--------------
//Agency Data
//--------------
API.prototype.getAgency = function(key){
	return store('general.agensi')[key]
}

API.prototype.allAgencies = function(){
	return store('general.agensi')
}

//-------
//Professional Qualification
//----------
API.prototype.allProfessionalQualifications = function(){
	return store('general.professional_qualification')
}
