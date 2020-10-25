<!doctype html>
<html>
    <head>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
      



      <div class="row">
<div class="col-md-6 col-sm-6">
<table class="table table-striped">
  <thead>

 <th scope="col">Student_Name</th>
  <th scope="col">Personal Details</th>
 
  </thead>
  <tbody>
 @foreach ($student as $mailbox)  
  <tr>
   <td>{{ $mailbox->first_name }}</td>
   <td><a href="{{url('students',$mailbox->id)}}" class="btn btn-danger">View Details</a></td>


   
  </tr>
 @endforeach

 
</tbody>
</table>
    </body>
</html>
