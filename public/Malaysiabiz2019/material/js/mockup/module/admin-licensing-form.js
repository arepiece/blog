
Config ={
    default:{
        form_title:'Add New Business Licensing'
    },
    edit:{
        form_title:'Edit Business Licensing'
    }
    
}



$.save = function(){
    
    var formData = $.serializeForm($('form'))
    //save to db
    console.log(formData)
    console.log($('form').serialize())
    console.log($('input[name = "active"]:checked').val())
    IS_EDIT ? API.updateLicensing(formData,$.urlParam('id')):API.addLicensing(formData)
    location.href = "admin-licensing.php"

}
/**
 * ToDo : problem on radio selection -name=active
 * The value cannot change
 */
renderForm = function() {
    ExtGUI.renderElementOptions(API.allLicenseCategories(),$('[name=category]'),null,'name')
    
    if(IS_EDIT){
        
        var fields = API.getLicensing($.urlParam('id'))
        console.log(fields)
        if(typeof(fields) !== 'object'){
            return
        }
        _.map(fields,function(val,key){
            $(`[name=${key}]`).val(val);
        })


        $('input[name=active]').filter(`[value="${fields.active}"]`).prop('checked');        
    }
    
}


$(function(){
    //Dom 
    ExtGUI.initFormDOM(Config)
    renderForm()
    $('button[name=btnSave]').click($.save)    
})

