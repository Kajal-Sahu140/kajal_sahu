<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ __('Whoops! Something went wrong.') }}
                    </div>
                    <div>
                        <ul class="m-b text-sm text-danger">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
  <form action="/submit" method="POST">
    
    @csrf
  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" name="name" class="form-control" placeholder="Enter name" >
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email"  class="form-control" placeholder="Enter email" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" name="pwd" class="form-control"  placeholder="Enter password" >
    </div>
    
    <button type="submit"   value ="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
