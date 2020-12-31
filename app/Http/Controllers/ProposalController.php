<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Proposal;
use App\Models\CoverLetter;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProposalController extends Controller
{
    public function confirm(Request $request)
    {
        $proposal = Proposal::findOrFail($request->proposal);

        $proposal->fill(['validated' => true]);

        if ($proposal->isDirty())
        {
            $proposal->save();

            $conversation = Conversation::create([
                'from' => auth()->user()->id,
                'to' => $proposal->user->id,
                'job_id' => $proposal->job_id
            ]);

            Message::create([
                'user_id' => auth()->user()->id,
                'conversation_id' => $conversation->id,
                'content' => "Bonjour, j'ai validé votre offre."
                //'content' => $this->messages
            ]);

            return redirect()->route('jobs.index');
        }
    }


       public function submit(Job $jobId)
    {
        return view('proposals.submit', compact('jobId'));
    }

    public function submitStore(Request $request, Job $jobId)
    {
        $request->validate([
            'coverLetter' => 'required|max:255' 
        ]);

        $proposal = Proposal::create([
            'job_id' => $jobId->id
        ]);

        CoverLetter::create([
            'proposal_id' => $proposal->id,
            'content' => $request->input('coverLetter')
        ]);
 
        return redirect()->route('jobs.index');
    }

}
