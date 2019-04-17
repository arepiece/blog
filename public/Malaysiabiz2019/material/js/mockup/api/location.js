
/***********************************
 *           LOCATION             *
 * *********************************
 */

var statedb = 'location.state'
var districtdb = 'location.district'
var citytdb = 'location.city'


//--------------
//	STATE
//--------------
API.prototype.allStates = function(){
   return store(statedb)
}

//delete
 //Simple handle delete by index
 API.prototype.deleteState = function(key){
	
	var states = store(statedb)

	if (states) {
		states.splice(key, 1);
	}
	return store(statedb,states)
}

//get state
API.prototype.getState = function(key){
	return store(statedb)[key]
}

//get state
API.prototype.getStateByCode = function(code){
	return _.find(store(statedb),function(s){
		return s.code == code
	})
}


//update
API.prototype.updateState =  function(obj,key){
	var states = store(statedb)
	if(states){
        states[key] = obj
    }
	store(statedb,states)
}

//add
API.prototype.addState =  function(obj){
	var objs = store(statedb)
	objs.push(obj)
	store(statedb,objs)
}


//--------------
//	DISTRICT
//--------------

API.prototype.allDistricts = function(){
	var districs = store(districtdb)
	return _.map(districs,function(dist){
		var state = API.getStateByCode(dist.state);
		return {
			...dist,
			state:{
				key:dist.state,
				name: state ? state.name : ""
			}
		}
	})

 }

 //Simple handle delete by index
API.prototype.deleteDistrict = function(key){
	
	var districs = store(districtdb)

	if (districs) {
		districs.splice(key, 1);
	}
	return store(districtdb,districs)
}

API.prototype.getDistrict = function(row){
	return store(districtdb)[0]
}

API.prototype.getAllDistrictGroup = function(){
	var districs = _.groupBy(store(districtdb),function(dist){
					return dist.state
				})
	return  _.map(districs,function(d,i){
		var s = API.getStateByCode(i);
		return {[s.name]:d}

		})

}


//--------------
//	CITY
//--------------

API.prototype.allCities = function(){
	return store(citytdb)
}

API.prototype.getCity = function(id){
	return store(citytdb)[id]
}
