<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfProposalSubmitted
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         $jobId = $request->jobId->id;

        if (auth()->user()->proposals->contains('job_id', $jobId)) {
            return redirect()->route('jobs.index');
        }

        return $next($request);
    }
}
