
//Add and remove buttons on olevel and a level
$('#theada').on('click', '.addRow', function(){
	
	var tr = '<tr class="input-group" style="width:100%;margin-bottom:10px;">		<td style="width:100px"><input style="border:1px solid;" type="text" class="form-control"  name="year[]" id="year" value="" required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="examboard[]" id="examboard" placeholder="e.g. Zimsec" value=""  required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="subject[]" id="subject" value=""  required></td>		<td style="width:25%">			<select style="height:34px;width:100%;border:1px solid;" name="symbol[]"  id="symbol" required ><option >D</option><option >C</option><option class="open-computers">B</option><option class="open-computers2">A</option>			</select>		</td>		<td><a href="javascript:void(0)" class="btn btn-danger btn-sm  deleteRow">-</a></td>		<input type="text" class="form-control" name="status" id="status" value="1" hidden required>	</tr>';	$('#tbodya').append(tr);
	});
	
	$('#tbodya').on('click', '.deleteRow', function(){
		$(this).parent().parent().remove();
	});
	
	//Add and remove buttons on olevel and a level
	$('#thead').on('click', '.addRow', function(){
		
		var tr = '<tr class="input-group" style="width:100%;margin-bottom:10px;">		<td style="width:100px"><input style="border:1px solid;" type="text" class="form-control"  name="year[]" id="year" value="" required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="examboard[]" id="examboard" placeholder="e.g. Zimsec" value=""  required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="subject[]" id="subject" value=""  required></td>		<td style="width:25%">			<select style="height:34px;width:100%;border:1px solid;" name="symbol[]"  id="symbol" required > <option >C</option><option class="open-computers">B</option><option class="open-computers2">A</option>			</select>		</td>		<td><a href="javascript:void(0)" class="btn btn-danger btn-sm  deleteRow">-</a></td>		<input type="text" class="form-control" name="status" id="status" value="1" hidden required>	</tr>';	$('#tbody').append(tr);
		});
		
		$('#tbody').on('click', '.deleteRow', function(){
			$(this).parent().parent().remove();
		});

//Add and remove buttons on tertiary
$('#thead1').on('click', '.addRow', function(){
	
	var tr = '<tr class="input-group" style="width:100%;margin-bottom:10px;">		<td style="width:100px"><input style="border:1px solid;" type="text" class="form-control"  name="year[]" id="year" value="" required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="examboard[]" id="examboard" placeholder="e.g. Hexco" value=""  required></td>		<td style="width:50%"><input style="border:1px solid;" type="text" class="form-control"  name="course[]" id="course" value=""  required></td><td><a href="javascript:void(0)" class="btn btn-danger btn-sm  deleteRow">-</a></td></tr>';	$('#tbody1').append(tr);
	});
	
	$('#tbody1').on('click', '.deleteRow', function(){
		$(this).parent().parent().remove();
	});
	
	
//Add and remove buttons on olevel and a level on bluepage
$('#theado').on('click', '.addRow', function(){
	
	var tr = '<tr class="input-group" style="width:100%;margin-bottom:10px;">		<td style="width:20%"><input style="border:1px solid;" type="text" class="form-control"  name="oyear[]" id="oyear" value="" required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="oexamboard[]" id="oexamboard" placeholder="e.g. Zimsec" value=""  required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="osubject[]" id="osubject" value=""  required></td>		<td style="width:25%">			<select style="height:34px;width:100%;border:1px solid;" name="osymbol[]"  id="osymbol" required ><option >D</option><option >C</option><option class="open-computers">B</option><option class="open-computers2">A</option>			</select>		</td>		<td><a href="javascript:void(0)" class="btn btn-danger btn-sm  deleteRow">-</a></td>		<input type="text" class="form-control" name="status" id="status" value="1" hidden required>	</tr>';	$('#tbodyo').append(tr);
	});
	
	$('#tbodyo').on('click', '.deleteRow', function(){
		$(this).parent().parent().remove();
	});
	
	//Add and remove buttons on olevel and a level
	$('#theadal').on('click', '.addRow', function(){
		
		var tr = '<tr class="input-group" style="width:100%;margin-bottom:10px;">		<td style="width:20%"><input style="border:1px solid;" type="text" class="form-control"  name="ayear[]" id="ayear" value="" required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="aexamboard[]" id="aexamboard" placeholder="e.g. Zimsec" value=""  required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="asubject[]" id="asubject" value=""  required></td>		<td style="width:25%">			<select style="height:34px;width:100%;border:1px solid;" name="asymbol[]"  id="asymbol" required > <option >C</option><option class="open-computers">B</option><option class="open-computers2">A</option>			</select>		</td>		<td><a href="javascript:void(0)" class="btn btn-danger btn-sm  deleteRow">-</a></td>		<input type="text" class="form-control" name="status" id="status" value="1" hidden required>	</tr>';	$('#tbodyal').append(tr);
		});
		
		$('#tbodyal').on('click', '.deleteRow', function(){
			$(this).parent().parent().remove();
		});

//Add and remove buttons on tertiary
$('#theadc').on('click', '.addRow', function(){
	
	var tr = '<tr class="input-group" style="width:100%;margin-bottom:10px;">		<td style="width:20%"><input style="border:1px solid;" type="text" class="form-control"  name="tyear[]" id="tyear" value="" required></td>		<td style="width:25%"><input style="border:1px solid;" type="text" class="form-control"  name="texamboard[]" id="texamboard" placeholder="e.g. Hexco" value=""  required></td>		<td style="width:50%"><input style="border:1px solid;" type="text" class="form-control"  name="tcourse[]" id="tcourse" value=""  required></td><td><a href="javascript:void(0)" class="btn btn-danger btn-sm  deleteRow">-</a></td></tr>';	$('#tbodyc').append(tr);
	});
	
	$('#tbodyc').on('click', '.deleteRow', function(){
		$(this).parent().parent().remove();
	});
	
	
	
	//header hover
	$(document).ready(function(){
		$('.dropdown').hover(function(){
			$(this).find('.dropdown-menu')
			.stop(true,true).delay(100).fadeIn(200);
	},	function(){
		$(this).find('.dropdown-menu')
		.stop(true,true).delay(100).fadeOut(200);
		});
	});

	// validate student age
	function ageCalculate(){
		var userinput=document.getElementById('dobirth').value;
		var dob=new Date(userinput);
		if(userput==null||userinput==''){
			document.getElementById('result').innerHTML='choose a date';
			return false;
		}
		else{
			//calculate age
			var month_diff=Date.now()-dobirth.getTime();
			//calculate the difference in in date format
			var age_dt=new Date(month_diff);
			//extract year from date
			var year=age_dt.getUTCFullYear();
			//calculate the age of the student
			var age=Math.abs(year-1970)
			//display message
			if(age>16 || age==16){
				document.getElementById('dobirth').innerHTML="";
				 document.getElementById('result').innerHTML=age;
				 return false;
			}
			else{
				return true;
			}

		}
		}

		// serach a relative if exists
		
		
			  