function showEditBox(editobj,id) {
	$('#frmAdd').hide();
	$(editobj).prop('disabled','true');
	var currentMessage = $("#message_" + id + " .message-content").html();
	var editMarkUp = '<textarea rows="5" cols="80" id="txtmessage_'+id+'">'+currentMessage+'</textarea><button name="ok" onClick="callCrudAction(\'edit\','+id+')">Save</button><button name="cancel" onClick="cancelEdit(\''+currentMessage+'\','+id+')">Cancel</button>';
	$("#message_" + id + " .message-content").html(editMarkUp);
}
function cancelEdit(message,id) {
	$("#message_" + id + " .message-content").html(message);
	$('#frmAdd').show();
}
function cartAction(action,product_code) {
	var queryString = "";
	if(action != "") {
		switch(action) {
			case "add":
				queryString = 'action='+action+'&code='+ product_code+'&quantity='+$("#qty_"+product_code).val();
			break;
			case "remove":
				queryString = 'action='+action+'&code='+ product_code;
			break;
			case "empty":
				queryString = 'action='+action;
			break;
		}	 
	}
	jQuery.ajax({
	url: "http://localhost/cityook/cart/cart/cart",
	data:queryString,
	type: "POST",
	beforeSend: function() {
		// Show full page LoadingOverlay
		$.LoadingOverlay("show");
	},
	success:function(data){
		console.log(data);
		if(data.status === 200) {
			$.LoadingOverlay("hide");
			setTimeout(function() {
			
				swal({
				title: "success",
				text: data.message,
				icon: "success",
				buttons: true,
				}).then((willDelete) => {
					if (willDelete) {
						location.reload();
					} else {
						swal("Your imaginary file is safe!");
					}
				});
			}, 800);
		}
		if(data.status === 302) {
			$.LoadingOverlay("hide");
			setTimeout(function() {
				swal({
				title: "warning",
				text: data.message,
				icon: "warning",
				buttons: true,
				})
			}, 800);
		}
		
		//$("#cart-item").html(data);
		if(action != "") {
			switch(action) {
				case "add":
					//$("#add_"+product_code).hide();
					//$("#added_"+product_code).show();
				break;
				case "remove":
				if(data.status === 200) {
					setTimeout(function() {
						$.LoadingOverlay("hide");
						swal({
						title: "Success",
						text: data.message,
						icon: "Success",
						buttons: true,
						})
						.then((willDelete) => {
							if (willDelete) {
								location.reload();
							} else {
								swal("Your imaginary file is safe!");
							}
						});
					}, 1000);
					//location.reload();
				}
				break;
				case "empty":
					$(".btnAddAction").show();
					$(".btnAdded").hide();
				break;
			}	 
		}
	},
	error:function (){}
	});
}
