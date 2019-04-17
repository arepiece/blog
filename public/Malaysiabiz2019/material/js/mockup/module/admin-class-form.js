
Config ={
    default:{
        form_title:'Add Class'
    },
    edit:{
        form_title:'Edit Class'
    },
    parentPage:"admin-section.php"
    
}



$.save = function(){
    var formData = $.serializeForm($('form'))
    // IS_EDIT ? API.updateState(formData,$.urlParam('id')):API.addState(formData)
    location.href = Config.parentPage

}

/**
 * ToDo : problem on radio selection -name=active
 * The value cannot change
 */

renderForm = function() {
    if(IS_EDIT){
        var fields = API.getGroup($.urlParam('id'))
        console.log(fields)
        if(typeof(fields) !== 'object'){
            return
        }
        _.map(fields,function(val,key){
            $(`[name=${key}]`).val(val);
        })


    //    $('input[name=active]').filter(`[value="${fields.active}"]`).prop('checked');
    //    $('select[name=district]').closest('option').filter(`[value="${fields.district}"]`).prop('selected');  
    }
    
}


$(function(){
    // //Dom 
    ExtGUI.initFormDOM(Config)
    renderForm()
    $('button[name=btnSave]').click($.save)  

})

