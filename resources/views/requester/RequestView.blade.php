@extends('requester.layout')

@section('pagename', 'Request View')
@section('content')
 <!-- <form id="makeRequest" class="makeRequest"> -->
    <form id="makeRequest" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">I'm looking for …</label>
    
      <select class="form-control selectServices" multiple="multiple" name="looking_for[]">
    <option label="Choose all services you want"></option>
    <option value="Firefox" @if(in_array('Firefox', $viewData->pluck('looking_for')->toArray())) selected @endif>Firefox</option>
    <option value="Chrome" @if(in_array('Chrome', $viewData->pluck('looking_for')->toArray())) selected @endif>Chrome</option>
    <option value="Safari" @if(in_array('Safari', $viewData->pluck('looking_for')->toArray())) selected @endif>Safari</option>
    <option value="Opera" @if(in_array('Opera', $viewData->pluck('looking_for')->toArray())) selected @endif>Opera</option>
    <option value="Internet Explorer" @if(in_array('Internet Explorer', $viewData->pluck('looking_for')->toArray())) selected @endif>Internet Explorer</option>
</select>


    </div>
    <div class="form-group col-md-8">
      <label for="inputEmail4">Select Which of Your Property</label>
      

<select class="form-control select2" name="property_selection">
    <option label="Choose one"></option>
    @foreach ($specificData as $data)
        <option value="{{ $data->id }}" @if ($data->id == $viewData->first()->property_selection) selected @endif>
            {{ $data->property_number }}
        </option>
    @endforeach
</select>


    </div>
     <div class="form-group col-md-4">
      <label for="inputEmail4">Request Expected Date</label>
      <input type="date" class="form-control" value="{{ $viewData->first()->request_date }}" name="expected_date">

    </div>
    <div class="form-group col-md-12">
      <label for="inputEmail4">Describe the job in more detail</label>
      <textarea class="form-control" id="textAreadetail" name="job_description" maxlength="200">{{ $viewData->first()->description }}</textarea>
      <div id="charCount">Characters remaining: <span id="count">200</span></div>
      <div id="error-message" class="error"></div>
    </div>

   <!--  <div class="form-group col-md-12">
      <div>
        <label style="font-size: 14px;">
          <span style='color:navy;font-weight:bold'>Upload Instructions :</span>
        </label>
        <ul>
          <li>
            Picture addition is optional
          </li>
          <li>
            Allowed only files with extension (jpg, png, gif)
          </li>
          <li>
            Maximum number of allowed files 10 with 300 KB for each
          </li>
          <li>
            you can select files from different folders
          </li>
        </ul>
        <span class="btn btn-success fileinput-button">
          <span>Add Pictures</span>
          <input type="file" name="image_files[]" id="files" multiple accept="image/jpeg, image/png, image/gif"><br />
        </span>
      </div>
    </div> -->

    <div class="form-group col-md-12">

     <div class="row">
    @foreach(File::allFiles(public_path('requestImages/' . $viewData->first()->myrequestid)) as $image)
        <div class="col-md-3 mb-3">
            <img src="{{ asset('requestImages/' . $viewData->first()->myrequestid . '/' . $image->getFilename()) }}"  class="img-fluid" style="width: 400px; height: 200px;">
        </div>
    @endforeach
</div>



      <output id="Filelist"></output>
    </div>
  </div>
  <br><br>
  <!-- <button type="submit" class="btn btn-primary btn-block" name="post_job_button">Post Job</button> -->
  <!-- <button type="submit" class="btn btn-primary">Save Changes</button> -->
</form>

@endsection
