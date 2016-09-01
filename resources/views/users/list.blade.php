<html>
<head>

    <link rel="stylesheet" href="assets/css/boostrap.min.css">
    <link rel="stylesheet" href="assets/css/boostrap-theme.min.css">
    <link rel="stylesheet" href="assets/css/boostrap.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>j
</title>

</head>
<body>
 <div class="container">
  <row>
      <table class="table table-striped table-bordered">
          <tr>
            {{-- <th>first_name</th>--}}
             {{-- <th>last_name</th>--}}
              <th>full name</th>
              <th>address</th>
              <th>phone</th>
              <th>Action</th>



          </tr>
          @foreach($users as $user)

          <tr>
              <td>{{$user->name}}</td>
              {{--<td>{{$user->last_name}}</td>--}}
              <td>{{$user->address}}</td>
              <td>{{$user->phone}}</td>
              <td><a href="{{ route('editUser',$user->id )}}">edit/</a>
                  <a href="delete">delete</a>
              </td>
          </tr>
 @endforeach
      </table>
  </row>

 </div>
</body>
</html>