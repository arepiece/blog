
/***********************************
 *           BUSINESS             *
 * *********************************
 */

var db = 'business'

API.prototype.partial = {
    allBusiness:function(){
        return _.map(store(db),function(biz){
                        return{
                            key:biz.key,
                            agency:{
                                key:biz.agency,
                                data:store('general.agensi')[biz.agency] ? store('general.agensi')[biz.agency]:""
                            },
                            professional_qualification:{
                                key:biz.professional_qualification,
                                data:store('general.professional_qualification')[biz.professional_qualification]?store('general.professional_qualification')[biz.professional_qualification]:""
                            },
                            business_type:{
                                key:biz.business_type,
                                data:store('general.business_type')[biz.business_type]? store('general.business_type')[biz.business_type] : ""
                            },
                            active:biz.active 
                        }					
                    })
    }
    
}

API.prototype.addBusiness =  function(business){
	
	business.key = guid()

	var bizs = store(db)
	bizs.push(business)
	store(db,bizs)
}

//Simple handle delete by index
API.prototype.deleteBusiness = function(key){
	
	var bizs = store(db)

	if (bizs) {
		bizs.splice(key, 1);
	}
	return store(db,bizs)
}

//get 
API.prototype.getBusiness =  function(key){
	return _.find(store(db),{'key':key})
}

//update
API.prototype.updateBusiness =  function(biz,key){
	var bizs = store(db)
	bizs = _.map(bizs,function(data){
			console.log(data.key,key)
			if(data.key === key){
				biz.key = data.key
				data = biz
			}
			return data;
		})
	store(db,bizs)
}


//-------
//Business type
//----------
API.prototype.allBusinessTypes = function(){
	return store('general.business_type')
}
