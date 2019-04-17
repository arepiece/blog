Config ={
    link_edit:"admin-group-form.php"
}

var tableInfoPath;


deleteData = function(row){
    var funcDelete = function(){
        $('#myTable').DataTable().row(row).remove().draw()
        
        // var table = 
        // table.row(row).remove()

        // setTimeout(function(){
        //     table.draw()
        //     API.deleteDistrict(row)
        // },200)
    }
    
    ExtGUI.comfirmToDelete(funcDelete)
}

renderList = function(){
    var columns= [
        { data: null },
        { data: 'sec_code' },
        { data: 'div_code' },
        { data: 'group_code' },
        { data: 'description_bm' },
        { data: 'description_bi'},
        { 
            data: 'active', 
            render:function(data,type,row,meta){
                var active = data=="true" ?`<p class="text-success">Yes`:`<p class="text-danger">No`
               return `<tr><td>${active}</td></tr>`
            }
        },
        { 
            data: null,
            className: 'center',
            render: function(data,type,row,meta){
                return (
                    `<a href="${Config.link_edit}?action=edit&id=${meta.row}"><button type="submit" class="btn btn-info btn-sm btn-circle"><i class="ti-pencil-alt"></i></button></a>`+
                    `<button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData(${meta.row});"> <i class="ti-trash"></i></button>`
                )
                
            }
        },
    ]

    ExtGUI.renderDataTable('#myTable',columns,API.allGroups())
}

$(function(){
    //render list  
    renderList()
})