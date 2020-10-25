<!doctype html>
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
      <h1> Student Details</h1>
    
    <form  method="post" action=""  >
        @csrf
    <div class="form-group col-md-6">
    <label for="fname">Student ID:</label><br>
    <input type="text" id="fname" name="fname" class="form-control"  value="{{$student->id}}"><br>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname" class="form-control"  value="{{$student->first_name}}"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname" class="form-control"  value="{{$student->last_name}}"><br>
    <label for="lname">gender:</label><br>
    <input type="text" id="lname" name="lname" class="form-control"  value="{{$student->gender}}"><br>
    <label for="lname">joined_year:</label><br>
    <input type="text" id="lname" name="lname" class="form-control"  value="{{$student->joined_year}}">
    </form>

    </body>
</html>
