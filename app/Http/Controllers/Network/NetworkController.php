<?php

namespace App\Http\Controllers\Network;

use App\Http\Controllers\Controller;
use App\Models\Memory;
use App\Models\Notebook;
use Illuminate\Http\Request;
use App\Models\User;

class NetworkController extends Controller
{
    public function getMemoriesAndNotebooks()
    {
        $memories = Memory::all();
        $notebooks = Notebook::all();

        $user = User::find(auth()->user()->id);

        $latestMemories = $latestNotebooks = [];

        if ($user) {
            $latestMemories = $user->memories()->latest('created_at')->get();
            $latestNotebooks = $user->notebooks()->latest('created_at')->get();
        }

        return compact('memories', 'notebooks', 'latestMemories', 'latestNotebooks');
    }
}
