Config ={}

var tableInfoPath;

$('#editModal').on('show.bs.modal',function(){
    var table = ExtGUI.renderAgencyTable('agency_table/'+tableInfoPath)
    if(!table){
        alert('table path not found')
        return
    }
    $('.modal-dialog').find('div.modal-body').append($.parseHTML(table)[0])
})

function renderModalData(agency,linkInfo){
    $('.modal-dialog').find('div.modal-body').empty()
    var path = API.getAgency(agency)['link_info'][linkInfo];
    tableInfoPath = path;
}

deleteData = function(row){
    var funcDelete = function(){
       
        var table = $('#myTable').DataTable()
        table.row(row).remove()

        setTimeout(function(){
            table.draw()
            API.deleteDistrict(row)
        },200)
    }
    
    ExtGUI.comfirmToDelete(funcDelete)
}

renderList = function(){
    var columns= [
        { data: null },
        { data: 'name' },
        { data: 'code' },
        { data: 'state.name'},
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
                    `<a href="admin-district-form.php?action=edit&id=${meta.row}"><button type="submit" class="btn btn-info btn-sm btn-circle"><i class="ti-pencil-alt"></i></button></a>`+
                    `<button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData(${meta.row});"> <i class="ti-trash"></i></button>`
                )
                
            }
        },
    ]

    ExtGUI.renderDataTable('#myTable',columns,API.allDistricts())
}

$(function(){
    //render list  
    renderList()
})