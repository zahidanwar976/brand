$(document).ready(function () {

	// DATE PICKER JS
	$('.date-picker').datepicker();

	// DATATABLES JS
	$('#user-table').DataTable();

	// MULTI-SELECT
	$('.multi-select').multiselect({
		selectAllValue: 'multiselect-all',
	});



	// MULTI-IMAGE UPLOAD
	if (window.File && window.FileList && window.FileReader) {
		$("#files").on("change", function (e) {
			var files = e.target.files,
				filesLength = files.length;
			for (var i = 0; i < filesLength; i++) {
				var f = files[i]
				var fileReader = new FileReader();
				fileReader.onload = (function (e) {
					var file = e.target;
					$("<span class=\"pip\">" +
						"<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
						"<br/><span class=\"remove\"><img src='./images/delete-icon.svg'></span>" +
						"</span>").appendTo(".upload-img-container");
				});
				fileReader.readAsDataURL(f);
			}
		});
		$(".remove").click(function () {
			$(this).parent(".pip").remove();
		});
	} else {
		alert("Your browser doesn't support to File API")
	}


});
