<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>CreateForm</title>
</head>

<body>
    <div class="container jumbotron">
        <div class="row">
            <div class="col-md-4">
                <h1>Update Data</h1><br>
                <form action="/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                    <input type="hidden" name="id" value="{{$data['id']}}">
                        <input type="text" name="name" value="{{$data['name']}}" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" value="{{$data['age']}}" class="form-control" placeholder="Enter your Age">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="form-control" name="Gender">{{$data['gender']}}
                            <option value="{{$data['gender']}}">{{$data['gender']}}</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="mobile" name="mobile" value="{{$data['mobile']}}" class="form-control" placeholder="Enter your Mobile no.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="place" value="{{$data['place']}}" class="form-control" placeholder="Enter your location">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Submit" class="form-control btn btn-primary">
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>