<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Proposal;
use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = auth()->user()->conversations();
        return view('conversations.index', ['conversations' => $conversations]);
        // return view('conversations.index', compact('conversations'));

    }

    public function show(Conversation $conversation)
    {
        return view('conversations.show', ['conversation' => $conversation]);
        // return view('conversations.show', compact('conversation')); 
    }

    public function confirm()
    {
        $proposal = Proposal::findOrFail(request('proposal'));
        //$this->authorize('confirm', $proposal->job);//c'était commentée
        $proposal->fill(['validated' => 1]);

        if ($proposal->isDirty()) {

            $proposal->save();

            $to = $proposal->user_id;
            $job = $proposal->job_id;
    
            $conversation = Conversation::create([
                'from' => auth()->user()->id,
                'to' => $to,
                'job_id' => $job
            ]);
    
            Message::create([
                'user_id' => auth()->user()->id,
                'conversation_id' => $conversation->id,
                'content' => "Bonjour, j'ai validé votre offre."
                //'content' => $this->messages
            ]);
           // return redirect()->route('jobs.index');

            return redirect()->route('conversations.show', ['conversation' => $conversation]);
        } 
        else {
             return redirect()->route('home');
         }

    }
}
