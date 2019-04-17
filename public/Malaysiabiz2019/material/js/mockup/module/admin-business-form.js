
Config ={
    default:{
        form_title:'Add New Business Registration'
    },
    edit:{
        form_title:'Edit Business Registration'
    }
    
}



$.save = function(){
    var formData = $.serializeForm($('form'))
    //save to db
    console.log(formData)
    console.log($('form').serialize())
    console.log($('input[name = "active"]:checked').val())
    IS_EDIT ? API.updateBusiness(formData,$.urlParam('businessId')):API.addBusiness(formData)
    location.href = "admin-business.php"

    

}
/**
 * ToDo : problem on radio selection -name=active
 * The value cannot change
 */
renderForm = function() {
    ExtGUI.renderElementOptions(API.allAgencies(),$('[name=agency]'),null,'name')
    ExtGUI.renderElementOptions(API.allProfessionalQualifications(),$('[name=professional_qualification]'))
    ExtGUI.renderElementOptions(API.allBusinessTypes(),$('[name=business_type]'))

    if(IS_EDIT){
        
        var business = API.getBusiness($.urlParam('businessId'))
        
        if(typeof(business) !== 'object'){
            return
        }
        _.map(business,function(val,key){
            $(`[name=${key}]`).val(val);
        })


        $('input[name=active]').filter(`[value="${business.active}"]`).prop('checked');        
    }
    
}


$(function(){
    //Dom 
    ExtGUI.initFormDOM(Config)
    renderForm()
    $('button[name=btnSave]').click($.save)    
})

