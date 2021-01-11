<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="jquery-3.4.1.min.js"></script>     
</head>
<body>
<div id="table-data"><table border="2" >
	<th>
		<td>id</td>
		<td>name</td>
	</th>
</table>

</div>
<script type="text/javascript">
	// $(document).ready(function(){
	// 	$("#sub").on('click',function(e){
	// 		// e.preventDefault();
	// 		$.ajax({
	// 			url:"pagin.php",
	// 			type:"POST",
	// 			data:{page_no:5},
	// 			success:function(date){
	// 				$("#table-data").html(date);
	// 			}
	// 		});			
	// 	});
		function load_tab(page){			
			$.ajax({
				url:"pagin.php",
				type:"POST",
				data:{page_no:5},
				success:function(date){
					$("#table-data").html(date);
				}
			});
		}
		load_tab();
		// load_tab();

		// $(document).on("click","#pagination a",function(e){
		// 	e.preventDefault();
		// 	var page_id=$(this).attr("id");
		// 	load_tab(page_id);
		// });
	});
</script>
</body>
</html>