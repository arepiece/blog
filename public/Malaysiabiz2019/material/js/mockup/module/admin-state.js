Config ={}

var tableInfoPath;

// $('#editModal').on('show.bs.modal',function(){
//     var table = ExtGUI.renderAgencyTable('agency_table/'+tableInfoPath)
//     if(!table){
//         alert('table path not found')
//         return
//     }
//     $('.modal-dialog').find('div.modal-body').append($.parseHTML(table)[0])
// })

// function renderModalData(category,linkInfo){
//     console.log(category,linkInfo)
//     $('.modal-dialog').find('div.modal-body').empty()
//     var path = API.getLicenseCategory(category)['link_info'][linkInfo];
//     tableInfoPath = path;
//     console.log(tableInfoPath)
// }

function deleteData(row){
    var funcDelete = function(){
        API.deleteState(row)
        $('#myTable').DataTable().row(row).remove().draw()
    }

    ExtGUI.comfirmToDelete(funcDelete)
    
}

renderList = function(){
    var columns= [
        { data: null },
        { data: 'code' },
        { data: 'name'},
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
                    `<a href="admin-state-form.php?action=edit&id=${meta.row}"><button type="submit" class="btn btn-info btn-sm btn-circle"><i class="ti-pencil-alt"></i></button></a>`+
                    `<button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('${meta.row}');"> <i class="ti-trash"></i></button>`
                )
                
            }
        },
    ]

    var columnDefs = [
            {
                "targets": 1,
                "className": "text-center",
            },
    ]

    ExtGUI.renderDataTable('#myTable',columns,API.allStates(),columnDefs)
}

$(function(){
    //render list 
    renderList()
})