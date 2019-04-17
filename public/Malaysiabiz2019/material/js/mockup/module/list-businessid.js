Config ={}

var tableInfoPath;

// $('#editModal').on('show.bs.modal',function(){
//     var table = ExtGUI.renderAgencyTable('agency_table/'+tableInfoPath)
//     if(!table){
//         alert('table path not found')
//         return
//     }
//     $('[name=table-container').append($.parseHTML(table)[0])
// })

// function renderModalData(agency,linkInfo){
//     console.log(agency,linkInfo)
//     $('[name=table-container').empty()
//     var path = API.getAgency(agency)['link_info'][linkInfo];
//     tableInfoPath = path;
// }

function deleteData(row){
    
    var funcDelete = function(){
        API.deleteBusiness(row)
        $('#myTable').DataTable().row(row).remove().draw()
    }

    ExtGUI.comfirmToDelete(funcDelete)
    
}

renderList = function(){
    var columns= [
        { data: null },
        { data: 'agency_name' },
        { data: 'business_type' },
        { data: 'professional_qualification'},
        { data: '12_digit'},
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
                    `<a href="businessid-form.php?action=edit&id=${meta.row}"><button type="submit" class="btn btn-info btn-sm btn-circle"><i class="ti-pencil-alt"></i></button></a>`+
                    `<button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('${meta.row}');"> <i class="ti-trash"></i></button>`
                )
                
            }
        },
    ]

    ExtGUI.renderDataTable('#myTable',columns,API.getAll12Digit())
}

$(function(){
    //render list  
    renderList()
})