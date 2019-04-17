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
        { data: 'business_no' },
        { data: 'business_name' },
        { data: 'business_entity'},
        { data: 'registerer'},
        { data: '12_digit' }
    ]

    ExtGUI.renderDataTable('#myTable',columns,API.allBusinessIdDirectory())
}

$(function(){
    //render list  
    renderList()
})