API.prototype.getAllAPI =  function(){
    return store('api')
}

API.prototype.getAPI =  function(id) {
    return store('api')[id]
}

API.prototype.getAll12Digit = function(){
    return store('12digit')
}

API.prototype.get12Digit = function(id){
    return store('12digit')[id]
}


API.prototype.allBusinessIdDirectory = function(){
    return store('businessid_directory')
}

API.prototype.getBusinessIdDirectory = function(id){
    return store('businessid_directory')[id]
}


API.prototype.allSections = function(){
    return store('section')
}

API.prototype.getSection = function(id){
    return store('section')[id]
}

API.prototype.allDivisions = function(){
    return store('division')
}

API.prototype.getDivision = function(id){
    return store('division')[id]
}


API.prototype.allGroups = function(){
    return store('group')
}

API.prototype.getGroup = function(id){
    return store('group')[id]
}

API.prototype.allClass =  function(){
    return store('class')
}

API.prototype.getClass =  function(id){
    return store('class')[id]
}