<!DOCTYPE html>
<html>
<head>
	<title>data retrievel</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <div class="col-md-12">
	 <form method="POST">
      
          <table class="table table-hover vr">
            @csrf
            <tr>
              <th>User ID</th>
              <th>Name</th>
              <th>Age</th>
              <th>Gender</th>
              <th>Mobile</th>
              <th>Location</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>

            @foreach($data as $data)
            <tr>
              <td>{{$data['id']}}</td>
              <td>{{$data['name']}}</td>
              <td>{{$data['age']}}</td>
              <td>{{$data['gender']}}</td>
              <td>{{$data['mobile']}}</td>
              <td>{{$data['place']}}</td>
              
              <td><a href="/update/{{$data['id']}}" class="btn btn-primary">Update</a></td>
              <td><a href="/delete/{{$data['id']}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
            
            
            <tr>

         

        </table>
    </form>
</div>
</div>
</body>
</html>