<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
    th{ 
        color:#fff;
            }
</style>


<table class="table table-striped">
    <tr  class="bg-info">
        <th>First</th>
        <th>Last</th>
        <th>Email</th>
    </tr>

    <tbody id="myTable">
        
    </tbody>
</table>

<script>
	var myArray = []
	

	$.ajax({
		method:'POST',
		url:'https://scanspree.shop/data.php',
		success:function(response){
			myArray = response.data
			buildTable(myArray)
			console.log(myArray)
		}
	})



	function buildTable(data){
		var table = document.getElementById('myTable')

		for (var i = 0; i < data.length; i++){
			var row = `<tr>
							<td>${data[i].product_id}</td>
							<td>${data[i].product_name}</td>
							<td>${data[i].product_price}</td>
					  </tr>`
			table.innerHTML += row


		}
	}

</script>