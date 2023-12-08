@extends('requester.layout')

@section('pagename', 'Request Page')
@section('content')
    <!-- <form id="makeRequest" class="makeRequest"> -->
    <form id="makeRequest" enctype="multipart/form-data">
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail4">I'm looking for …</label>
                <select class="form-control selectServices" multiple="multiple" name="looking_for">
                    <option label="Choose all services you want"></option>
                    <option value="Firefox">Firefox</option>
                    <option value="Chrome">Chrome</option>
                    <option value="Safari">Safari</option>
                    <option value="Opera">Opera</option>
                    <option value="Internet Explorer">Internet Explorer</option>
                </select>
            </div>
            <div class="form-group col-md-8">
                <label for="inputEmail4">Select Which of Your Property</label>
                <select class="form-control select2" name="property_selection">
                    <option label="Choose one"></option>
                    @foreach ($specificData as $data)
                        <option value="{{ $data->id }}">{{ $data->property_number }}</option>
                    @endforeach
                </select>

            </div>
            <div class="form-group col-md-4">
                <label for="inputEmail4">Request Expected Date</label>
                <input type="date" class="form-control" name="expected_date">
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail4">Describe the job in more detail</label>
                <textarea class="form-control" id="textAreadetail" name="job_description" maxlength="200"></textarea>
                <div id="charCount">Characters remaining: <span id="count">200</span></div>
                <div id="error-message" class="error"></div>
            </div>

            <div class="form-group col-md-12">
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
                    <!--To give the control a modern look, I have applied a stylesheet in the parent span.-->
                    <span class="btn btn-success fileinput-button">
          <span>Add Pictures</span>
          <input type="file" name="image_files[]" id="files" multiple accept="image/jpeg, image/png, image/gif"><br/>
        </span>
                </div>
            </div>

            <div class="form-group col-md-12">
                <output id="Filelist"></output>
            </div>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary btn-block" name="post_job_button">Post Job</button>
        <!-- <button type="submit" class="btn btn-primary">Save Changes</button> -->
    </form>

@endsection
