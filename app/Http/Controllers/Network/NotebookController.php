<?php

namespace App\Http\Controllers\Network;

use App\Http\Controllers\Controller;
use App\Models\Notebook;
use Illuminate\Http\Request;
use App\Models\Year;

class NotebookController extends Controller
{
    public function submitNew(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
        ]);

        $customYear = date('Y');
        $year = Year::where('year',$customYear)->first();

        Notebook::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'year_id' => $year->id,
            'creator_id' => auth()->user()->id
        ]);

        return redirect()->route('show.memories', auth()->user()->id)->withSuccess('دفتر مورد نظر شما با موفقیت ساخته شد');
    }
}
