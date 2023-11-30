<?php
// namespace App\Http\Controllers;
namespace App\Http\Controllers\Requester;


// use App\TradesmanProfile;
// use Cartalyst\Sentinel\Laravel\Facades\Activation;
// use Cartalyst\Sentinel\Native\Facades\Sentinel;
// use Illuminate\Http\Request;
// use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;
use App\Home_owners;
use App\HomeOwnersProperties;
use App\RequesterRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RequesterController extends Controller
{
    //

    public function index(){

        $self = Home_owners::where('email', 'emmagbin@gmail.com')->get();

        // var_dump($specificData); die;
        return view('Requester.Profile', ['self' => $self]);
        // return view('Requester.Profile');
    }

    public function Security(){
        $self = Home_owners::where('email', 'emmagbin@gmail.com')->get();
        return view('Requester.Security',
            ['self' => $self]);
    }


    public function Properties(){
        $self = Home_owners::where('email', 'emmagbin@gmail.com')->get();
        $specificData = HomeOwnersProperties::where('property_owner_id', 1)->get();
        return view('Requester.Properties',['specificData' => $specificData,'self' => $self]);
    }
    public function History(){
$self = Home_owners::where('email', 'emmagbin@gmail.com')->get();
$specificData = DB::table('request')
    ->select('request.*', 'properties.property_number')
    ->join('properties', 'properties.id', '=', 'request.property_selection')
    ->get();

return view('Requester.history', ['specificData' => $specificData,'self' => $self]);

    }
    public function Payments(){
        $self = Home_owners::where('email', 'emmagbin@gmail.com')->get();
        return view('Requester.payments',
            ['self' => $self]);
    }

    public function Request(){

 $self = Home_owners::where('email', 'emmagbin@gmail.com')->get();
        $specificData = HomeOwnersProperties::select('id', 'property_number')->where('property_owner_id', 1)->get();
    return view('Requester.Request',['specificData' => $specificData,'self' => $self]);

    }

  public function RequestView(Request $request, $id){


 $self = Home_owners::where('email', 'emmagbin@gmail.com')->get();

  $viewData = DB::table('request')
    ->select('request.*','request.id as myrequestid', 'request_information.*')
    ->join('request_information', 'request_information.request_id', '=', 'request.id')
    ->where('request.id', $id)
    ->get();

     // var_dump($id); die;

$specificData = HomeOwnersProperties::select('id', 'property_number')->where('property_owner_id', 1)->get();

return view('Requester.RequestView', [
    'specificData' => $specificData,
    'viewData' => $viewData,'self' => $self
]);

    }


     public function addproperty(){
        return view('Requester.AddProperty');
    }

public function updateHomeOwnerProfile(Request $request) {
    try {
        // Retrieve the ID of the user profile to be updated from the request
        $id = $request->input('id');
        // Find the user's profile in the database by ID
        $userData = Home_owners::findOrFail($id);
        // Update the user's profile attributes with the data from the request
        $userData->last_name = $request->input('last_name');
        $userData->first_name = $request->input('first_name');
        $userData->other_names = $request->input('other_names');
        $userData->email = $request->input('email');
        $userData->phone_number1 = $request->input('phone_number1');
        $userData->phone_number2 = $request->input('phone_number2');
        $userData->address = $request->input('address');
        $userData->address2 = $request->input('address2');
        // Save the updated user's profile in the database
        $userData->save();
        // Return a JSON response to indicate a successful profile update
        return response()->json([
            'statusCode' => 200,
            'message' => 'Profile updated successfully'
        ]);
    } catch (\Exception $e) {
        // Handle any exceptions, such as database errors or validation issues
        return response()->json([
            'statusCode' => 500, // You can use a different status code to indicate an error
            'message' => 'An error occurred while updating the profile'
        ]);
    }
}



public function newproperty(Request $request)
{
    try {
    $data = $request->all();
    $propertyNumber = $data['property_number'];

    // Check if a property with the same property_number already exists
    $existingProperty = HomeOwnersProperties::where('property_number', $propertyNumber)->first();

    if ($existingProperty) {
        return response()->json([
            'statusCode' => 400,
            'message' => 'Property with the same property number already exists'
        ]);
    }


    $image = $request->file('property_images');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('\property_images'), $imageName);
    $propertyimage='/property_images/' . $imageName;


    // If the property doesn't already exist, set the property_owner_id and create the record
    $data['property_owner_id'] = '1';
    $data['property_image'] = $propertyimage;
    HomeOwnersProperties::create($data);

    return response()->json([
        'statusCode' => 200,
        'message' => 'Insert successfully'
    ]);
} catch (Exception $e) {
    return response()->json([
        'statusCode' => 500,
        'message' => 'An error occurred while saving Property'
    ]);
}

}




public function deleteImage($filePath) {
    // Check if the file exists
    if (file_exists($filePath)) {
        // Attempt to delete the file
        if (unlink($filePath)) {
            return true; // File was deleted successfully
        } else {
            return false; // Failed to delete the file
        }
    } else {
        return false; // File does not exist
    }
}




public function editingproperty(Request $request)
{
    try {
        $data = $request->all();
        $propertyNumber = $data['property_number'];

        // Find the property you want to update
        $propertyId = $request->input('id');
        $property = HomeOwnersProperties::find($propertyId);

        if (!$property) {
            return response()->json([
                'statusCode' => 404,
                'message' => 'Property not found'
            ]);
        }

        // Check if a new image was provided
        if ($request->hasFile('property_images') && $request->file('property_images')->isValid()) {
            $image = $request->file('property_images');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/property_images');
            $image->move($destinationPath, $imageName);
            $propertyimage = '/property_images/' . $imageName;

            // Delete the old image before updating the property
            $oldImagePath = public_path($property->property_image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            // Update the property image
            $data['property_image'] = $propertyimage;
        }

        // Update the property data (including the image if provided)
        $property->update($data);

        return response()->json([
            'statusCode' => 200,
            'message' => 'Update successfully'
        ]);
    } catch (Exception $e) {
        return response()->json([
            'statusCode' => 500,
            'message' => 'An error occurred while updating the property'
        ]);
    }
}








public function editingproperty9900(Request $request)
{
    try {
    $data = $request->all();
    $propertyNumber = $data['property_number'];

 


    // $image = $request->file('property_images');
    // $imageName = time() . '.' . $image->getClientOriginalExtension();
    // $image->move(public_path('\property_images'), $imageName);
    // $propertyimage='/property_images/' . $imageName;

    // Call the uploadPropertyImage function
       // $propertyimage= $this->uploadPropertyImage($request);
       // if($imageoutput!=null){

       // }else{

       // }



    // If the property doesn't already exist, set the property_owner_id and create the record
    $data['property_owner_id'] = '1';
    $data['property_image'] = "89";
    $propertyId=$request->input('id');
    // HomeOwnersProperties::create($data);

    // Find the property you want to update
        $property = HomeOwnersProperties::find($propertyId);

        if (!$property) {
            return response()->json([
                'statusCode' => 404,
                'message' => 'Property not found'
            ]);
        }

        // Update the property data
        $property->update($data);

        return response()->json([
            'statusCode' => 200,
            'message' => 'Update successfully'
        ]);
    } catch (Exception $e) {
        return response()->json([
            'statusCode' => 500,
            'message' => 'An error occurred while updating the property'
        ]);
    }
}




public function uploadPropertyImage(Request $request)
{
    if ($request->hasFile('property_images')) {
        $image = $request->file('property_images');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/property_images');
        $image->move($destinationPath, $imageName);
        $propertyimage = '/property_images/' . $imageName;
        return $propertyimage;

        // Now you can proceed with saving the image or performing any other actions.
    } else {
       return null;
    }
}





public function Editproperty(Request $request, $propertyId)
{
    $property = HomeOwnersProperties::find($propertyId);
    return view('Requester.Editproperty',['property' => $property]);
}



public function newRequest(Request $request) {


// Create a new instance of the RequesterRequest model
$requestModel = new RequesterRequest();
// Switch to the 'first_table' fields
$requestModel->useFirstTable();
// Set the attributes for the 'first_table'
$requestModel->requester_id = 1;  // Replace with the appropriate user identifier
$requestModel->request_date = $request->input('expected_date'); // Use Laravel's Carbon for date
$requestModel->status = 'Pending';  // Replace with the appropriate status
$requestModel->property_selection = $request->input('property_selection');;  // Replace with the description
$requestModel->description = $request->input('job_description');;  // Replace with the description
// Save the data to the 'request' table (first_table)
$requestModel->save();



// Get the ID of the inserted record
$request_id = $requestModel->id;


$selectedServices = $request->input('selectServices');
if (is_array($selectedServices)) {
    foreach ($selectedServices as $service) {
    $requestModelSecondTable = new RequesterRequest();
    $requestModelSecondTable->useSecondTable();
    $requestModelSecondTable->request_id = $request_id;  // Use the ID from the first insert
    $requestModelSecondTable->looking_for = $service; // Use the service from the loop
    $requestModelSecondTable->save();
}
}



// Set the desired folder path
$folderPath = public_path('requestImages/' . $request_id);
// Check if the folder exists, and create it if not
if (!File::isDirectory($folderPath)) {
    File::makeDirectory($folderPath, 0755, true, true);
}
$uploadedImages = [];
if ($request->hasFile('image_files')) {
    foreach ($request->file('image_files') as $image) {
        // Generate a unique filename for each uploaded image
        $filename = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();

        // Move the uploaded image to the specified folder
        $image->move($folderPath, $filename);

        // Save the path of the uploaded image
        $uploadedImages[] = 'requestImages/' . $request_id . '/' . $filename;
    }
}










// Create a new instance of the RequesterRequest model for the second table
$requestModelThirdTable = new RequesterRequest();
// Switch to the 'second_table' fields
$requestModelThirdTable->useThirdTable();
// Set the attributes for the 'second_table'
$requestModelThirdTable->request_id = $request_id;  // Use the ID from the first insert
$requestModelThirdTable->file_path = "public/requestImages/" . $request_id; // Replace with appropriate data
// Save the data to the 'request_information' table (second_table)
$requestModelThirdTable->save();




// You can return a success response or redirect to another page
return response()->json([
    'statusCode' => 200,
    'message' => 'Data saved to request successfully',
]);
}




function deleteProperty(Request $request) {
    $idToDelete = $request->input('the_id');

   $idCheck = DB::table('request')
    ->select('property_selection')
    ->where('property_selection', $idToDelete)
    ->count();

    if ($idCheck > 0) {
        // Record with the given ID exists in the "request" table, don't delete it
        return response()->json([
            'statusCode' => 200,
            'message' => 'Record exists in other transactions. It cant be deleted.',
        ]);
    } else {
        // Record doesn't exist in the "request" table, delete from "HomeOwnersProperties" table
        $record = HomeOwnersProperties::find($idToDelete);
        if ($record) {
            $record->delete();
            return response()->json([
                'statusCode' => 200,
                'message' => 'Record deleted successfully',
            ]);
        } else {
            return response()->json([
                'statusCode' => 404,
                'message' => 'Record not found',
            ]);
        }
    }
}


function deleterequest(Request $request) {
    $idToDelete = $request->input('the_id');

   $idCheck = DB::table('request')
    ->where('id', $idToDelete)
    ->where('status', 'Pending')
    ->count();


    if ($idCheck > 0) {
        // Record with the given ID exists in the "request" table, don't delete it
         DB::table('request')->where('id', $idToDelete)->delete();

    return response()->json([
        'statusCode' => 200,
        'message' => 'Record deleted successfully',
    ]);


    } else {
        return response()->json([
        'statusCode' => 404,
        'message' => 'Record not found or status is not "Pending"',
    ]);
    }
}




}
