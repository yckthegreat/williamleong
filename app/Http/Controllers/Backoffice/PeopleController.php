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
    public function index() {

        $people = People::get();

        return view('admin.module.people.index', compact('people'));
    }

    public function create() {

        return view('admin.module.people.create');
    }

    public function edit(People $person) {

        return view('admin.module.people.edit', compact('person'));
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'designation' => 'required|string',
            'email' => 'required|email|string',
            'qualification' => 'required|string',
            'experience' => 'required|string',
            'background' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $slug = mb_strtolower(trim(mb_ereg_replace('/[^A-Za-z0-9-]+/', '-', $request->get('name')), '-'));
        $unique = false;
        $counter = 0;
        while(!$unique) {
            $newSlug = People::whereSlug($slug)->first();
            if(empty($newSlug)) {
                $unique = true;
            }else {
                $slug = mb_strtolower(trim(mb_ereg_replace('/[^A-Za-z0-9-]+/', '-', $request->get('name')), '-')) . '-' . $counter;
            }
            $counter++;
        }

        $people = People::create([
            "slug" => $slug,
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "designation" => $request->get('designation'),
            "qualification" => $request->get('qualification'),
            "experience" => $request->get('experience'),
            "background" => $request->get('background'),
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_size = $request->file('image')->getSize();
            $name = "people_" .rand(1111,9999).'_'.date('Ymdhis');
            $extension = strtolower($file->getClientOriginalExtension());
            $name_extension = $name . '.' . $extension;
            $destinationPath = public_path('/uploads/people/');
            $imagePath = $destinationPath. "/".  $name;
            $file->move($destinationPath, $name_extension);

            $media = Media::create([
                "ownerable_id" => $people->id,
                "ownerable_type" => People::class,
                "name" => $name,
                "url" => "/uploads/people/",
                "extension" => $extension,
                "size" => $file_size,
                "mime" => $file->getClientMimeType()
            ]);
        }

        return back()->with('success' , 'People added successfully.');
    }

    public function update(Request $request, People $person) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'designation' => 'required|string',
            'email' => 'required|email|string',
            'qualification' => 'required|string',
            'experience' => 'required|string',
            'background' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $slug = mb_strtolower(trim(mb_ereg_replace('/[^A-Za-z0-9-]+/', '-', $request->get('name')), '-'));
        if($slug != $person->slug) {
            $unique = false;
            $counter = 0;
            while(!$unique) {
                $newSlug = People::whereSlug($slug)->first();
                if(empty($newSlug)) {
                    $unique = true;
                }else {
                    $slug = mb_strtolower(trim(mb_ereg_replace('/[^A-Za-z0-9-]+/', '-', $request->get('name')), '-')) . '-' . $counter;
                }
                $counter++;
            }
        }

        $person->update([
            "slug" => $slug,
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "designation" => $request->get('designation'),
            "qualification" => $request->get('qualification'),
            "experience" => $request->get('experience'),
            "background" => $request->get('background'),
        ]);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_size = $request->file('image')->getSize();
            $name = "people_" .rand(1111,9999).'_'.date('Ymdhis');
            $extension = strtolower($file->getClientOriginalExtension());
            $name_extension = $name . '.' . $extension;
            $destinationPath = public_path('/uploads/people/');
            $imagePath = $destinationPath. "/".  $name;
            $file->move($destinationPath, $name_extension);

            $media = Media::create([
                "ownerable_id" => $person->id,
                "ownerable_type" => People::class,
                "name" => $name,
                "url" => "/uploads/people/",
                "extension" => $extension,
                "size" => $file_size,
                "mime" => $file->getClientMimeType()
            ]);

        }

        return back()->with('success' , 'People updated successfully.');
    }

    public function destroy(People $person) {

        $person->delete();
        return redirect()->route('admin.people.index')->with('success' , 'People deleted successfully.');
    }
}
