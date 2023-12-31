<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="continer">
        <form action="{{route('save-user')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
        <label for="inputname" class="col-sm-2 col-form-label">NAME</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name">
    </div>
    
  </div>
  <div class="mb-3 row">
    <label for="inputemail" class="col-sm-2 col-form-label">email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" name="email">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputdob" class="col-sm-2 col-form-label">Date of birth</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dob" name="dob">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputdob" class="col-sm-2 col-form-label">Place</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="dob" name="place">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="input_dob" class="col-sm-2 col-form-label">imgage</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="fimg" name="img">
    </div>
  </div>
  <button class="btn btn-outline-success">submit</button>
  </form>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>