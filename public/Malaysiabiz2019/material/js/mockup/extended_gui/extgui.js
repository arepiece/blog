

function ExtGUI() {
	if (!(this instanceof ExtGUI)) {
		return new ExtGUI()
	}
}

var defaultColumnDefs = function(lastIndex){
	return  [
				{
					"targets": 0,
					"width":"10%",
					"className": "text-center",
				},
				{
					"orderable": false,
					"targets": lastIndex
				},
				
			]
}

ExtGUI.prototype.renderDataTable = function(tableId,columns,data,columnDefs){
	columnDefs = columnDefs && columnDefs.length > 0 ? columnDefs.concat(defaultColumnDefs()) : defaultColumnDefs()
	var table = $(tableId).DataTable({
        	"language": {
            	"emptyTable": "No data available in table"
		  	},
			"columns": columns?columns:[],
			"columnDefs":columnDefs,
        	"data":data
    });

    ////  create index for table at columns zero
    table.on('order.dt search.dt', function () {
        table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();
}

ExtGUI.prototype.renderAgencyTable = function(path){
	var element = "<span/>"
	$.ajax({
		'async': false,
		 url: $.rootPath+`extended_gui/${path}?v=`+ new Date().getTime(), 
		 success: function(el) {
				element = el;
				} 
	});

	return element;
}

//Do general in dom manipulation name=form-title
ExtGUI.prototype.initFormDOM = function(config){
	//Form title
	var action = IS_EDIT ? 'edit' : 'default'
	$('[name=form-title]').text(Config[action].form_title)
    
}

//Confirmation Delete dialog

ExtGUI.prototype.comfirmToDelete = function(deleteFunc) {
	swal({
		title: "Are you sure to perform this action?",
		text: "",
		type: "warning",
		showCancelButton: true,
		confirmButtonColor: "#DD6B55",
		confirmButtonText: "Yes, delete it!",
		closeOnConfirm: false
	}, function () {
		if(typeof(deleteFunc) =='function'){
			deleteFunc()
			swal("Deleted!", "Your request has been deleted.", "success");
			return false
		}
	});
}

/**
 * @param {object} data
 * @param {html} selectDom - dom of select-option
 * @param {string} selected - selected value
 * @param {string} dispayChildData - display data from child key.default value of the key.
 * @param {string} customValue - index/key as value
 */
ExtGUI.prototype.renderElementOptions = function(data,selectDom,selected,dispayChildData,customValue){
	selectDom.empty()
	var options = []
	  _.each(data,function(data,index){
		var selected = selected == index ? 'selected' :''
		var display = dispayChildData? data[dispayChildData]: data
		var val = customValue?data[customValue]:index
		options.push(`<option ${selected} value="${val}">${display}</option>`)
	})
	
	selectDom.append(options)
}



var ExtGUI = ExtGUI()
