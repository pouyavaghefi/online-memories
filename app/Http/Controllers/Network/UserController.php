<?php

namespace App\Http\Controllers\Network;

use Illuminate\Http\Request;
use App\Http\Controllers\Network\NetworkController;
use App\Models\Member;

class UserController extends NetworkController
{
    public function viewForm()
    {
        $data = $this->getMemoriesAndNotebooks();

        return view('frontend.pages.info', $data);
    }

    public function submitForm(Request $request)
    {
        $validatedData = $request->all();

        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $validatedData['avatar'] = $avatarPath;
        }

        $validatedData['user_id'] = auth()->user()->id;

        Member::create($validatedData);

        return redirect()->route('show.memories', auth()->user()->id);
    }
}
