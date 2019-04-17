
Config ={
    default:{
        form_title:'Add New State'
    },
    edit:{
        form_title:'Edit State'
    }
    
}



$.save = function(){
    var formData = $.serializeForm($('form'))
    IS_EDIT ? API.updateState(formData,$.urlParam('id')):API.addState(formData)
    location.href = "admin-state.php"

}
/**
 * ToDo : problem on radio selection -name=active
 * The value cannot change
 */
renderForm = function() {
    
    if(IS_EDIT){
        var fields = API.getState($.urlParam('id'))
        if(typeof(fields) !== 'object'){
            return
        }
        _.map(fields,function(val,key){
            $(`input[name=${key}]`).val(val);
        })


       var k = $('input[name=active]').filter(`[value="${fields.active}"]`).prop('checked');  
    }
    
}


$(function(){
    // //Dom 
    ExtGUI.initFormDOM(Config)
    renderForm()
    $('button[name=btnSave]').click($.save)    
})

