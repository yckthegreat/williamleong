<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Input, Validator;
use Illuminate\Support\Facades\File;

use App\People;
use App\Media;

class PeopleController extends Controller
{
    public function overview() {

        $allPeople = People::orderBy('sequence')->get();

        return view('backoffice.people.overview', compact('allPeople'));
    }

    public function addPeople() {

        return view('backoffice.people.create');
    }

    public function editPeople(People $people) {

        /* Get people image */
        $peopleImage = Media::where('owner_id' , $people->id)
                       ->where('owner_type' , 'people_image')
                       ->first();
        
        return view('backoffice.people.edit', compact('people', 'peopleImage'));
    }

    public function storePeople(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'peopleImage' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:1024'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $people = new People;
        $people->name = $request->get('name');
        $people->sequence = $request->get('sequence');
        $people->save();

        if($request->hasFile('peopleImage')){
            $file = $request->file('peopleImage');
            $file_size = $request->file('peopleImage')->getSize();
            $name = "people_" .rand(1111,9999).'_'.date('Ymdhis');
            $extension = strtolower($file->getClientOriginalExtension());
            $name_extension = $name . '.' . $extension;
            $destinationPath = public_path('/uploads/people/');
            $imagePath = $destinationPath. "/".  $name;
            $file->move($destinationPath, $name_extension);

            $media = new Media;
            $media->owner_id = $people->id;
            $media->owner_type = 'people_image';
            $media->name = $name;
            $media->url = '/uploads/people/';
            $media->extension = $extension;
            $media->size = $file_size;
            $media->mime = $file->getClientMimeType();
            $media->save();
        }

        return redirect()->back()->with('success' , 'People added successfully.');
    }

    public function updatePeople(Request $request, People $people) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $people->name = $request->get('name');
        $people->sequence = $request->get('sequence');
        $people->save();

        if($request->hasFile('peopleImage')){

            $media = Media::where('owner_id' , $people->id)->where('owner_type' , 'people_image')->first();

            if(!empty($media)) {

                $image_name = $media->name . '.' . $media->extension;
            }

            if(!empty($image_name)) {
                $filename = public_path().'/uploads/people/'.$image_name;
                File::delete($filename);
                $media->delete();
            }

            $file = $request->file('peopleImage');
            $file_size = $request->file('peopleImage')->getSize();
            $name = "people_" .rand(1111,9999).'_'.date('Ymdhis');
            $extension = strtolower($file->getClientOriginalExtension());
            $name_extension = $name . '.' . $extension;
            $destinationPath = public_path('/uploads/people/');
            $imagePath = $destinationPath. "/".  $name;
            $file->move($destinationPath, $name_extension);

            $media = new Media;
            $media->owner_id = $people->id;
            $media->owner_type = 'people_image';
            $media->name = $name;
            $media->url = '/uploads/people/';
            $media->extension = $extension;
            $media->size = $file_size;
            $media->mime = $file->getClientMimeType();
            $media->save();
        }

        return redirect()->back()->with('success' , 'People updated successfully.');
    }

    public function deletePeople(People $people) {

        $people->delete();
        return redirect()->route('admin.people.overview')->with('success' , 'People deleted successfully.');
    }
}
