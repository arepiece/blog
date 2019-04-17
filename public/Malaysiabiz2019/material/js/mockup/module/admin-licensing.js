Config ={}

var tableInfoPath;

$('#editModal').on('show.bs.modal',function(){
    var table = ExtGUI.renderAgencyTable('agency_table/'+tableInfoPath)
    if(!table){
        alert('table path not found')
        return
    }
    $('[name=table-container').append($.parseHTML(table)[0])
})

function renderModalData(category,linkInfo){
    console.log(category,linkInfo)
    $('[name=table-container').empty()
    var path = API.getLicenseCategory(category)['link_info'][linkInfo];
    tableInfoPath = path;
    console.log(tableInfoPath)
}

function deleteData(row){
    var funcDelete = function(){
        API.deleteLicensing(row)
        $('#myTable').DataTable().row(row).remove().draw()
    }

    ExtGUI.comfirmToDelete(funcDelete)
    
}

renderList = function(){
    var columns= [
        { data: null },
        { data: 'license_name.data' },
        { data: 'activity_type' },
        { data: 'category.data.name'},
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
                var path = "kpdnkk";
                var category = data.category.key
                return (
                    `<button type="button" data-toggle="modal" data-target="#editModal" class="btn btn-info btn-sm btn-circle" onclick="renderModalData('${category}','${path}')"><i class="ti-eye"></i></button>`+
                    `<a href="admin-licensing-form.php?action=edit&id=${data.key}"><button type="submit" class="btn btn-info btn-sm btn-circle"><i class="ti-pencil-alt"></i></button></a>`+
                    `<button type="submit" class="btn btn-danger btn-sm btn-circle" alt="alert" id="sa-warning" onclick="deleteData('${meta.row}');"> <i class="ti-trash"></i></button>`
                )
                
            }
        },
    ]

    ExtGUI.renderDataTable('#myTable',columns,API.allLicensing())
}

$(function(){
    //render list 
    console.log(API.allLicensing()) 
    renderList()
})