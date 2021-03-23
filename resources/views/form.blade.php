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
                <h1>Insert Data</h1><br>
                <form action="insert" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="number" name="age" class="form-control" placeholder="Enter your Age">
                    </div>
                    <div class="form-group">
                        <select name="gender" class="form-control" name="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="mobile" name="mobile" class="form-control" placeholder="Enter your Mobile no.">
                    </div>
                    <div class="form-group">
                        <input type="text" name="place" class="form-control" placeholder="Enter your location">
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