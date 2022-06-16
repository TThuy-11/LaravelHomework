<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form SignUp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Fullname</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Age</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="age" placeholder="Age">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="date" placeholder="Date">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Phone">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Web</label>
            <input type="url" class="form-control" id="exampleInputPassword1" name="phone" placeholder="Web">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="address" placeholder="Address">
        </div>
        <div>
            @include('error')
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="display-infor">
            @if(isset($users))
            <p>Name:{{$users['name']}}</p>
            <p>Age:{{$users['age']}}</p>
            <p>Date:{{$users['date']}}</p>
            <p>Phone:{{$users['phone']}}</p>
            <p>Website:{{$users['web']}}</p>
            <p>Address:{{$users['address']}}</p>
            @endif
        </div>
    </form>
</body>

</html>