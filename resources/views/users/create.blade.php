@extends('layouts.admin)
@section('content')
<div class="row">
    <h1>Add User</h1>
    <form action="{{ url('users') }}" class="form" method="post">
        <input type="hidden" name="user_id">
        <div class="form-group">

            {{csrf_field()}}
            <label for="">First Name</label>
            <input type="text" class="form-control" name="first_name" >
        </div>
        <div class="form-group">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="last_name" >
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" class="Form-control" name="phone">
        </div>
        <div class="form-group"><label for="address">Address</label><input type="text" class="form-control"
                                                                           name="address" id="address">
        </div>
        <div class="form-group">
            <button type="text" class="btn btn-info">Submit</button>
        </div>


    </form>

</div>
@stop
