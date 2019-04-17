
Config ={
    default:{
        form_title:'New Business ID'
    },
    edit:{
        form_title:'Edit Business ID'
    },
    parentPage:"list-businessid.php"
    
}



$.save = function(){
    var formData = $.serializeForm($('form'))
    // IS_EDIT ? API.updateState(formData,$.urlParam('id')):API.addState(formData)
    location.href = Config.parentPage

}

renderOptChild = function(data){
    var opts = []
     _.each(data,function(opt){
        opts.push(`<option value="${opt.name}">${opt.name}</option>`)
    })
    return opts
}
renderOptGroup = function(selectEl){
    var el = []
    _.map(API.getAllDistrictGroup(),function(a){
        var lbl = Object.keys(a)[0]
        var opts = renderOptChild(a[lbl])
        el.push(`<optgroup label="${lbl}">${opts}</optgroup>`)
    })
    selectEl.append(el)
}

/**
 * ToDo : problem on radio selection -name=active
 * The value cannot change
 */

renderForm = function() {

    if(IS_EDIT){
        var fields = API.get12Digit($.urlParam('id'))
        console.log(fields)
        if(typeof(fields) !== 'object'){
            return
        }
        _.map(fields,function(val,key){
            $(`input[name=${key}]`).val(val);
        })


       $('input[name=active]').filter(`[value="${fields.active}"]`).prop('checked');
       $('select[name=district]').closest('option').filter(`[value="${fields.district}"]`).prop('selected');  
    }
    
}


$(function(){
    // //Dom 
    ExtGUI.initFormDOM(Config)
    renderForm()
    renderOptGroup($('select[name=district]'))
    $('button[name=btnSave]').click($.save)  
    console.log($('select[name=district]').closest('option'))

    console.log(API.getAllDistrictGroup())
})

