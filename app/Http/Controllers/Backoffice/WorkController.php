<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Work;

class WorkController extends Controller
{
    public function overview() {

        $allWorks = Work::all();

        return view('backoffice.works.all', compact('allWorks'));
    }

    public function categoricalWorks($category) {

        if($category == "all") {

            $allWorks = Work::where('show_on_all', 1)
                        ->orderBy('all_works_sequence')
                        ->get();

        } else {

            $allWorks = Work::where('published', 1)
                        ->where('category', $category)
                        ->orderBy('sequence')
                        ->get();
        }

        return view('backoffice.works.overview', compact('allWorks', 'category'));
    }

    public function addWork() {

        return view('backoffice.works.create');
    }

    public function editWork(Work $work) {

        /* Get cover mage */
        $coverImage = $work->getWorkCoverImage->first();

        /* Get extra images */
        $extraImages = $work->getWorkExtraImages;

        return view('backoffice.works.edit', compact('work', 'coverImage', 'extraImages'));
    }

    public function saveWork(Request $request) {

        $this->validate($request, [

            'projectCategory' => 'required',
            'projectName' => 'required',
            'projectLocation' => 'required',
        ]);
        
        /* Save new store to DB */
        $work = new Work();
        $work->category = $request->input('projectCategory');
        $work->name = $request->input('projectName');
        $work->slug = Str::slug($request->input('projectName'), '-');
        $work->location = $request->input('projectLocation');
        $work->published = $request->input('projectPublished');
        $work->show_on_all = $request->input('projectShowOnAll');
        $work->sequence = $request->input('projectSequence');
        $work->all_works_sequence = $request->input('projectAllPageSequence');
        $work->save();

        return response()->json([
            "id" => $work->id
        ]);
    }

    public function updateWork(Request $request, Work $work) {

        $this->validate($request, [

            'projectCategory' => 'required',
            'projectName' => 'required',
            'projectLocation' => 'required',
        ]);
        
        /* Save new store to DB */
        $work->category = $request->input('projectCategory');
        $work->name = $request->input('projectName');
        $work->slug = Str::slug($request->input('projectName'), '-');
        $work->location = $request->input('projectLocation');
        $work->published = $request->input('projectPublished');
        $work->show_on_all = $request->input('projectShowOnAll');
        $work->sequence = $request->input('projectSequence');
        $work->all_works_sequence = $request->input('projectAllPageSequence');
        $work->save();

        return response()->json([
            "id" => $work->id
        ]);
    }

    public function deleteWork(Work $work) {

        $work->delete();
        return redirect()->back()->with('success' , 'Work deleted successfully.');
    }
}
