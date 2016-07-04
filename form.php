<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" name="print">
		<label>姓名</label>
		<input type="text" name="name" id="name">
		<label>职位</label>
		<input type="text" name="position" id="position">
		<label>公司</label>
		<input type="text" name="company" id="company">
	</form>
	<a href="javascript:void(0);" id="submit">提交</a>
	<script type="text/javascript" src="/public/jquery.js"></script>
	<script type="text/javascript">
		$("#submit").click(function(){
			var name = $("#name").val();
			var position = $("#position").val();
			var company = $("#company").val();

			if(name == ''){
				alert('null');
			}else{
				$.post('/printer.php',{"name":name,"company":company},function(res){
					
				})
			}
		})
	</script>
</body>
</html>