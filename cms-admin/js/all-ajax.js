// JavaScript Document
/**********************************/
/*document use to call all ajax functions*/
/*author :- Cakiweb				*/
/*	on :- 30-11-2019				*/				
/**********************************/

function getAlladmitstudent(ctrlId,selectedId,branchId,session){
		$.ajax({
			method:'post',
			url:'ajax.php',
			dataType:'json',
			data:{act :"getAlladmitstudent",branchId:branchId,session:session},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var data = res.res;
					bindData += '<option value="">--Select Student--</option>';
					$.each(data, function(i){
					   var selected = (selectedId > 0 && data[i].id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+data[i].id+'" '+selected+'>'+data[i].sname+'</option>';
					});
				}else{
					bindData += '<option value="">--Select Student--</option>';
				}
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}


function loadfeelist(ctrlId,selectedId,branchId,classid){
	$.ajax({
		method:'post',
		url:'ajax.php',
		dataType:'json',
		data:{act :"loadfeelist",branchId:branchId,classid:classid},
		success:function(res){
			var bindData = '';
			if(res.status == 200){
				var data = res.res;
				bindData += '<option value="">--Select Fees--</option>';
				$.each(data, function(i){
				   var selected = (selectedId > 0 && data[i].id == selectedId)?'selected':'';				  
				  bindData += '<option value="'+data[i].id+'" '+selected+' data-fee="'+data[i].amount+'">'+data[i].fees_desc+'</option>';
				});
				
			}else{
				bindData += '<option value="">--Select Fees--</option>';
			}
			
			$('#'+ctrlId).html(bindData);
		}
	});	
}

function getDetailsins(installmentId){
	if(installmentId > 0){
		//$('#installDtls').toggle();
		$("#installDtls").modal('show');
		$.ajax({
			method:'post',
			url:'ajax.php',
			dataType:'json',
			data:{act :"getDetailsins",installmentId:installmentId},
			success:function(res){
				if(res.status == 200){
					var bindData = '';
					var data = res.res;	
					//console.log(data)
					var monname = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
					var insdate = new Date(data[0].installdate);
					var finalInstall = insdate.getDate()+'-'+monname[insdate.getMonth()]+'-'+insdate.getFullYear();
					bindData += '<table class="table"><tr><td>Paid Date</td><td>'+finalInstall+'</td></tr><tr><td>Transaction Number</td><td>'+data[0].transactionno+'</td></tr><tr><td>Fine Amount</td><td>'+data[0].extra_charge+'</td></tr><tr><td>Concession Fees</td><td>'+data[0].concession+'</td></tr></table>';
					$('.bindData').html(bindData);
				}
			}
		});	
	}
}


function getAllstudent(ctrlId,selectedId,branchId,session){
		$.ajax({
			method:'post',
			url:'ajax.php',
			dataType:'json',
			data:{act :"getAllstudent",branchId:branchId,session:session},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var data = res.res;
					bindData += '<option value="">--Select Student--</option>';
					$.each(data, function(i){
					   var selected = (selectedId > 0 && data[i].id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+data[i].id+'" '+selected+'>'+data[i].sname+'</option>';
					});
					
				}else{
					bindData += '<option value="">--Select Student--</option>';
				}
				
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}


function getallAccessories(ctrlId,selectedId,branchId,session,studentId){
		$.ajax({
			method:'post',
			url:'ajax.php',
			dataType:'json',
			data:{act :"getallAccessories",branchId:branchId,session:session,studentId:studentId},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var data = res.res;
					bindData += '<option value="">--Select Accessories--</option>';
					$.each(data, function(i){
					   var selected = (selectedId > 0 && data[i].id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+data[i].id+'" '+selected+' data-fee="'+data[i].price+'">'+data[i].accessories+'</option>';
					});
					
				}else{
					bindData += '<option value="">--Select Accessories--</option>';
				}
				
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}


function getReadmit(branchId,ctrlId,selectedId,session,reclass){
	$.ajax({
		method:'post',
		url:'ajax.php',
		dataType:'json',
		data:{act :"getReadmit",branchId:branchId,session:session,reclass:reclass},
		success:function(res){
			var bindData = '';
			if(res.status == 200){
				var data = res.res;
				bindData += '<option value="">--Select Student--</option>';
				$.each(data, function(i){
				   var selected = (selectedId > 0 && data[i].id == selectedId)?'selected':'';				  
				  bindData += '<option value="'+data[i].id+'" '+selected+'>'+data[i].sname+'</option>';
				});
			}else{
				bindData += '<option value="">--Select Student--</option>';
			}
			
			$('#'+ctrlId).html(bindData);
		}
	});	
}


function checkFine(installmentId,admissionId){
	$('#hdninstId').val(installmentId);
	$.ajax({
		method:'post',
		url:'ajax.php',
		dataType:'json',
		data:{act :"checkFine",installmentId:installmentId,admissionId:admissionId},
		success:function(res){
			if(res.status == 200){
				//console.log(res.totalfine)
				$('#extra_charge').val(res.totalfine);
				$('#dayslate').html(" (Due to "+res.daysexceed+" days exceed of installment "+res.daycharge+"% per day charge");
			}
		}
	});		
}


function getSaledtls(invid){
	if(invid > 0){
		$("#saleDtls").modal('show');
		$.ajax({
			method:'post',
			url:'ajax.php',
			dataType:'json',
			data:{act :"getSaledtls",invid:invid},
			success:function(res){
				var bindData = '';
				bindData += '<table class="table"><th>#slno</th><th>Items</th><th>Price</th><th>Quantity</th><th>Total</th>';
				if(res.status == 200){
					var data = res.res;	
					var totval = [];
					var finalTot = 0;
					$.each(data, function(i){
					  totval.push(parseInt(data[i].amt*data[i].quantity));
					  bindData += '<tr><td>'+(i+1)+'</td><td>'+data[i].accessories+'</td><td>'+data[i].amt+'</td><td>'+data[i].quantity+'</td><td>'+(data[i].amt*data[i].quantity)+'</td></tr>';
					});
					if(totval.length > 0){
						$.each(totval, function(j){
							finalTot = parseInt(finalTot)+parseInt(totval[j]);
						});
					}
					bindData += '<tr><td colspan="4">Total</td><td>'+finalTot+'</td></tr>';
					//console.log(finalTot)
				}else{
					bindData += '<tr><td colspan="5">Sorry No Record Found!!!</td></tr>';
				}
				bindData +='</table>';
				$('.bindData').html(bindData);
			}
		});		
	}
	
}



function getAllstudentforreport(ctrlId,selectedId,branchId,session,selClass){
		$.ajax({
			method:'post',
			url:'ajax.php',
			dataType:'json',
			data:{act :"getAllstudentforreport",branchId:branchId,session:session,selClass:selClass},
			success:function(res){
				var bindData = '';
				if(res.status == 200){
					var data = res.res;
					bindData += '<option value="">--Select Student--</option>';
					$.each(data, function(i){
					   var selected = (selectedId > 0 && data[i].id == selectedId)?'selected':'';				  
					  bindData += '<option value="'+data[i].studentid+'" '+selected+'>'+data[i].studname+'</option>';
					});
				}else{
					bindData += '<option value="">--Select Student--</option>';
				}
				
				$('#'+ctrlId).html(bindData);
			}
		});	
}


function getAllnewstud(session){
		if(session != ''){
			$.ajax({
				method:'post',
				url:'ajax.php',
				dataType:'json',
				data:{act :"getAllnewstud",session:session},
				success:function(res){
					var bindData = '';
					var finalTot = 0;
					if(res.status == 200){
						var data = res.res;
						var studArr = [];
						$.each(data, function(i){
						   finalTot = parseInt(finalTot)+parseInt(data[i].stud);
						   studArr.push(parseInt(data[i].stud));
						});
						if(studArr.length > 0){
							$("#sparkline-1").sparkline(studArr, {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#5969ff',
								fillColor: '#dbdeff',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true
							});
							$('#numstud').html(finalTot);
						}else{
							$("#sparkline-1").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#5969ff',
								fillColor: '#dbdeff',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true
							});
						}
					}else{
						$("#sparkline-1").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#5969ff',
								fillColor: '#dbdeff',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true
							});
					}
				}
			});	
		}
}



function getAllnewadmin(session){
		if(session != ''){
			$.ajax({
				method:'post',
				url:'ajax.php',
				dataType:'json',
				data:{act :"getAllnewadmin",session:session},
				success:function(res){
					var bindData = '';
					var finalTot = 0;
					if(res.status == 200){
						var data = res.res;
						var studArr = [];
						$.each(data, function(i){
						   finalTot = parseInt(finalTot)+parseInt(data[i].stud);
						   studArr.push(parseInt(data[i].stud));
						});
						if(studArr.length > 0){
							$("#sparkline-2").sparkline(studArr, {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#ff407b',
								fillColor: '#ffdbe6',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true
							});
							$('#newadmcnt').html(finalTot);
						}else{
							$("#sparkline-2").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#ff407b',
								fillColor: '#ffdbe6',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true
							});
						}
					}else{
						$("#sparkline-2").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], {
							type: 'line',
							width: '99.5%',
							height: '100',
							lineColor: '#ff407b',
							fillColor: '#ffdbe6',
							lineWidth: 2,
							spotColor: undefined,
							minSpotColor: undefined,
							maxSpotColor: undefined,
							highlightSpotColor: undefined,
							highlightLineColor: undefined,
							resize:true
						});
					}
				}
			});	
		}
}


function getAllexp(session){
		if(session != ''){
			$.ajax({
				method:'post',
				url:'ajax.php',
				dataType:'json',
				data:{act :"getAllexp",session:session},
				success:function(res){
					var bindData = '';
					var finalTot = 0;
					if(res.status == 200){
						var data = res.res;
						var studArr = [];
						$.each(data, function(i){
						   finalTot = parseInt(finalTot)+parseInt(data[i].stud);
						   studArr.push(parseInt(data[i].stud));
						});
						if(studArr.length > 0){
							$("#sparkline-4").sparkline(studArr, {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#fec957',
								fillColor: '#fff2d5',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true,
							});
							$('#expensed').html(finalTot);
						}else{
							$("#sparkline-4").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#fec957',
								fillColor: '#fff2d5',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true,
							});
						}
					}else{
						$("#sparkline-4").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], {
							type: 'line',
							width: '99.5%',
							height: '100',
							lineColor: '#fec957',
							fillColor: '#fff2d5',
							lineWidth: 2,
							spotColor: undefined,
							minSpotColor: undefined,
							maxSpotColor: undefined,
							highlightSpotColor: undefined,
							highlightLineColor: undefined,
							resize:true,
						});
					}
				}
			});	
		}
}



function getAllrevenue(session){
		if(session != ''){
			$.ajax({
				method:'post',
				url:'ajax.php',
				dataType:'json',
				data:{act :"getAllrevenue",session:session},
				success:function(res){
					var bindData = '';
					var finalTot = 0;
					if(res.status == 200){
						var data = res.res;
						var studArr = [];
						$.each(data, function(i){
						   finalTot = parseInt(finalTot)+(parseInt(data[i].accso)+parseInt(data[i].totval));
						   studArr.push(parseInt(data[i].accso)+parseInt(data[i].totval));
						});
						if(studArr.length > 0){
							$("#sparkline-3").sparkline(studArr, {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#fec957',
								fillColor: '#fff2d5',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true,
							});
							$('#totPrice').html(finalTot);
						}else{
							$("#sparkline-3").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], {
								type: 'line',
								width: '99.5%',
								height: '100',
								lineColor: '#25d5f2',
								fillColor: '#dffaff',
								lineWidth: 2,
								spotColor: undefined,
								minSpotColor: undefined,
								maxSpotColor: undefined,
								highlightSpotColor: undefined,
								highlightLineColor: undefined,
								resize:true
							});
						}
					}else{
						$("#sparkline-3").sparkline([0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0], {
							type: 'line',
							width: '99.5%',
							height: '100',
							lineColor: '#25d5f2',
							fillColor: '#dffaff',
							lineWidth: 2,
							spotColor: undefined,
							minSpotColor: undefined,
							maxSpotColor: undefined,
							highlightSpotColor: undefined,
							highlightLineColor: undefined,
							resize:true
						});
					}
				}
			});	
		}
}