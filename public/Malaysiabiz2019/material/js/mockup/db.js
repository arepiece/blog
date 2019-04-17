//initialize all data
$(function(){
    //add db/.json filename here
    //param: agensi
    dbs = [
        {name:'general',namespace:true},
        {name: 'business'},
        {name: 'licensing'},
        {name: 'location',namespace:true},
        {name: 'api'},
        {name: '12digit'},
        {name: 'businessid_directory'},
        {name: "section"},
        {name: "division"},
        {name: "group"},
        {name: "class"}
    ]
    _.each(dbs,loadDataDb)
    
})

var loadDataDb = function(db){
    $.ajax({
        'async': true,
        'global': true,
        'url': $.rootPath+`db/${db.name}.json`,
        'dataType': "json",
        'success': function (data) {
            if(db.namespace){
                var dbname = store.namespace(db.name)
                dbname(data)
                return
            }
            store(db.name,data)
        }
    })
}