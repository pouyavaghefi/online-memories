<?php

namespace App\Http\Controllers\Network;

use App\Http\Controllers\Controller;
use App\Models\Memory;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Notebook;
use App\Models\User;
use App\Http\Controllers\Network\NetworkController;

class MemoryController extends NetworkController
{
    public function showMemories(Request $request)
    {
        $data = $this->getMemoriesAndNotebooks();

        return view('frontend.pages.profile', $data);
    }

    public function submitNew(Request $request)
    {
        $data = $request->validate([
            'memory' => 'required',
            'notebook' => 'required',
        ]);

        $memory = Memory::create([
            'memory' => $data['memory'],
            'user_id' => auth()->user()->id,
            'notebook_id' => $request->notebook
        ]);

        return redirect()->back()->withSuccess('خاطره مورد نظر با موفقیت ساخته شد');
    }
}
