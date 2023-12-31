@extends('requester.layout')

@section('pagename', 'Profile Page')
@section('content')
    <form id="updateHomeOwnerProfileForm">

         @foreach ($self as $item)
  <div class="form-row">

    <div class="form-group col-md-4">
        <input type="hidden" name="id" value="{{ $item->id }}">
      <label for="inputEmail4">Last Name</label>
      <input type="text" class="form-control" value="{{ $item->last_name }}" id="inputEmail4" name="last_name" placeholder="last_name"> </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" value="{{ $item->first_name }}" id="inputEmail4" name="first_name" placeholder="first_name"> </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Other Name(s)</label>
      <input type="text" class="form-control" value="{{ $item->other_names }}" id="inputEmail4" name="other_names" placeholder="other_names"> </div>
{{--    <div class="form-group col-md-12">--}}
{{--      <label for="inputEmail4">Email address</label>--}}
{{--      <input type="email" class="form-control" value="{{ $item->email }}" id="inputEmail4" name="email" placeholder="Email"> </div>--}}
    <div class="form-group col-md-6">
      <label for="inputPassword4">Phone Number 1</label>
      <input type="text" class="form-control" value="{{ $item->phone_number1 }}" id="inputPassword4" name="phone_number1" placeholder="Phone Number"> </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Phone Number 2</label>
      <input type="text" class="form-control" value="{{ $item->phone_number2 }}" id="inputPassword4" name="phone_number2" placeholder="Phone Number"> </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" value="{{ $item->address }}" id="inputAddress" name="address" placeholder="1234 Main St"> </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" value="{{ $item->address2 }}" name="address2" placeholder="Apartment, studio, or floor"> </div>

  <!--   <div class="form-group">
    <div class="custom-control custom-checkbox">
      <input type="checkbox" class="custom-control-input" id="customCheck1">
      <label class="custom-control-label" for="customCheck1">Agree with Terms of Use and Privacy Policy</label>
    </div>
  </div> -->
  <button type="submit" class="btn btn-primary">Save Changes</button>
   @endforeach
</form>
@endsection
