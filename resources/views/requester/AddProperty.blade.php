@extends('requester.layout')

@section('pagename', 'Property Page')
@section('content')
    <style type="text/css">
        /* Container */

        .col-ting {
            width: 25em;
            margin: 0 auto;
            margin-top: 2em;
            /*  margin-bottom: 1em;*/
        }

        /* Form Elements */
        .file-upload .image-box {
            margin: 0 auto;
            margin-top: 1em;
            height: 15em;
            width: 20em;
            background: #d24d57;
            cursor: pointer;
            overflow: hidden;
        }

        .file-upload .image-box img {
            height: 100%;
            display: none;
        }

        .file-upload .image-box p {
            position: relative;
            top: 45%;
            color: #fff;
        }

    </style>
    <form id="addproperty" class="addproperty" enctype="multipart/form-data">

        <!-- <form id="addproperty" enctype="multipart/form-data"> -->
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <div class="form-row">

                        <input type="hidden" id="property_owner_id" name="property_owner_id" value="{{$userId}}">
                        <div class="form-group col-md-12">
                            <label for="property_number">Property / House Number</label>
                            <input type="text" class="form-control" id="property_number" name="property_number"
                                   placeholder="Property Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="property_type">Property Type</label>
                            <select class="form-control select2" id="property_type" name="property_type">
                                <option label="Property Type">Property Type</option>
                                <option value="Commercial">Commercial</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="property_location">Location GPS</label>
                            <input type="text" class="form-control" id="property_location" name="property_location"
                                   placeholder="Property Location">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="street_name">Street Name</label>
                            <input type="text" class="form-control" id="street_name" name="street_name"
                                   placeholder="Street Name">
                        </div>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <div class="row">


                        <div class="form-group col-md-12">

                            <div class="col-ting">
                                <div class="control-group file-upload" id="file-upload1">
                                    <div class="image-box text-center">
                                        <p>Click To Upload Property</p>
                                        <img src="" alt="">
                                    </div>
                                    <div class="controls">
                                        <!-- <input type="file" name="property_images" /> -->

                                        <input style="display:none;" type="file" name="property_images"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="district">District</label>
                    <select class="form-control select2" id="district" name="district">
                        <option label="Choose District">District</option>
                        <option value="osu">Osu</option>
                        <option value="adabraka">Adabraka</option>
                        <!-- Add other district options here -->
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="region">Region</label>
                    <select class="form-control select2" id="region" name="region">
                        <option value="greater-accra">Greater Accra</option>
                        <option value="ashanti">Ashanti</option>
                        <!-- Add other region options here -->
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <label for="nearest_landmark">Nearest Landmark</label>
                    <input type="text" class="form-control" id="nearest_landmark" name="nearest_landmark"
                           placeholder="Nearest Landmark">
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Save Property</button>
    </form>


@endsection
