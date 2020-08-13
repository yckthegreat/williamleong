<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Media;

class WorkImageController extends Controller
{
    public function uploadWorkCoverImage(Request $request) {

        $file = $request->file('workCoverImage');
        $file_size = $file->getSize();
        $name = "work_cover" .rand(1111,9999).'_'.date('Ymdhis');
        $extension = strtolower($file->getClientOriginalExtension());
        $name_extension = $name . '.' . $extension;
        $destinationPath = public_path('/uploads/works/');
        $imagePath = $destinationPath. "/".  $name;
        $file->move($destinationPath, $name_extension);

        $media = new Media;
        $media->owner_id = $request->input('work_id');
        $media->owner_type = 'work_cover_image';
        $media->name = $name;
        $media->url = '/uploads/works/';
        $media->extension = $extension;
        $media->size = $file_size;
        $media->mime = $file->getClientMimeType();
        $media->save();

        return $media->id;
    }


    public function uploadWorkExtraImage(Request $request) {

        $file = $request->file('workExtraImages');
        $file_size = $file->getSize();
        $name = "work_extra" .rand(1111,9999).'_'.date('Ymdhis');
        $extension = strtolower($file->getClientOriginalExtension());
        $name_extension = $name . '.' . $extension;
        $destinationPath = public_path('/uploads/works/');
        $imagePath = $destinationPath. "/".  $name;
        $file->move($destinationPath, $name_extension);

        $media = new Media;
        $media->owner_id = $request->input('work_id');
        $media->owner_type = 'work_extra_image';
        $media->name = $name;
        $media->url = '/uploads/works/';
        $media->extension = $extension;
        $media->size = $file_size;
        $media->mime = $file->getClientMimeType();
        $media->save();

        return $media->id;
    }


    public function deleteWorkImage($imageId) {

        $image = Media::find($imageId);
        $image->delete();

        return redirect()->back()->with('success' , 'Image deleted successfully.');
    }
}
