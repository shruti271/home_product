<script type="text/javascript">
	function goback()
	{
		window.history.back();
	}

	function mange_cart($id)
	{
		$qry="select * from product where id=".$id;
		$res=mysqli_query($con,$qry)or die(mysqli_error());

		if(!$res)
		{
			die("Invalid query".mysqli_error($con));
		}

		if(mysqli_num_rows($res)==0)
		{
			echo "no rows found";
		}
		return $res;
	}
</script>