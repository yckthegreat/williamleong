<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;
use Validator;

class ArticlesController extends Controller
{
    public function index() {

        $articles = Article::get();

        return view('admin.module.articles.index', compact('articles'));
    }

    public function create() {

        return view('admin.module.articles.create');
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $slug = mb_strtolower(trim(mb_ereg_replace('/[^A-Za-z0-9-]+/', '-', $request->get('title')), '-'));
        $unique = false;
        $counter = 0;
        while(!$unique) {
            $newSlug = Article::whereSlug($slug)->first();
            if(empty($newSlug)) {
                $unique = true;
            }else {
                $slug = mb_strtolower(trim(mb_ereg_replace('/[^A-Za-z0-9-]+/', '-', $request->get('title')), '-')) . '-' . $counter;
            }
            $counter++;
        }

        $article = Article::create([
            "slug" => $slug,
            "title" => $request->get('title'),
            "body" => $request->get('content'),
            "active" => 1
        ]);

        return back()->with('success' , 'Article added successfully.');
    }

    public function edit(Article $article) {

        return view('admin.module.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article) {

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $slug = mb_strtolower(trim(mb_ereg_replace('/[^A-Za-z0-9-]+/', '-', $request->get('title')), '-'));
        if($slug != $article->slug) {
            $unique = false;
            $counter = 0;
            while(!$unique) {
                $newSlug = Article::whereSlug($slug)->first();
                if(empty($newSlug)) {
                    $unique = true;
                }else {
                    $slug = mb_strtolower(trim(mb_ereg_replace('/[^A-Za-z0-9-]+/', '-', $request->get('title')), '-')) . '-' . $counter;
                }
                $counter++;
            }
        }

        $article->update([
            "slug" => $slug,
            "title" => $request->get('title'),
            "body" => $request->get('content'),
            "active" => 1
        ]);

        return back()->with('success' , 'Article update successfully.');
    }

    public function destroy(Article $article) {

        $article->delete();
        return redirect()->route('admin.article.index')->with('success' , 'Article deleted successfully.');
    }

    public function upload_image(Request $request) {

        $validator = Validator::make($request->all(), [
            'upload' => 'required|file|image|max:2048'
        ], [
            'upload.required' => "Please select an image to upload.",
            'upload.file' => "Please upload an image",
            'upload.image' => "Invalid file type. Please upload image type only. (jpg, jpeg, png, bmb and svg)",
            'upload.max' => "Upload limit exceeded, please upload the image within 2MB"
        ]);

        if ($validator->fails()) {
            return response()->json([
                "uploaded" => 0,
                "error" => [
                    "message" => $validator->errors()->first()
                ]
            ]);
        }

        if($request->hasFile('upload')){
            $file = $request->file('upload');
            $file_size = $file->getSize();
            $name = "article_" .rand(1111,9999).'_'.date('Ymdhis');
            $extension = strtolower($file->getClientOriginalExtension());
            $name_extension = $name . '.' . $extension;
            $destinationPath = public_path('/uploads/article/');
            $imagePath = $destinationPath. "/".  $name;
            $upload = $file->move($destinationPath, $name_extension);

            if($upload) {
                return response()->json([
                    "uploaded" => 1,
                    "fileName" => $name,
                    "url" => asset('/uploads/article/' . $name . '.' . $extension)
                ]);
            }else {
                return response()->json([
                    "uploaded" => 0,
                    "error" => [
                        "message" => "Failed to upload image."
                    ]
                ]);
            }


        }
    }
}
