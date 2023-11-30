@extends('requester.layout')

@section('pagename', 'Change Password Page')

@section('content')
      <form>
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Old Password</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">New Password</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Confirm New Password</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email"> </div>
  
  </div>


  <button type="submit" class="btn btn-primary">Save Changes</button>
</form>
@endsection
