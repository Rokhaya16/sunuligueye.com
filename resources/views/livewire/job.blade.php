<div class="px-3 py-5 mb-3 shadow hover:shadow-md duration-200 rounded border border-gray-200 bg-white">
    <div class="flex items-center justify-between">
      <h1>{{ $job->title }}</h1>
      <a wire:click.prevent="like()" style="float: right;top:2px;">
      @if ($job->isLiked())
      <svg style="width:30px;height:25px;" xmlns="http://www.w3.org/2000/svg" fill="green" viewBox="0 0 24 24" stroke="green">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
      </svg>
      @else
      <svg style="width:30px;height:25px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
      </svg>
      @endif
      </a>
    </div>
    <div class="flex items-center mt-2">
    <svg style="width: 10px;height: 10px;" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
    </svg>
    <a href="{{ route('jobs.show', $job->id) }}" class="ml-1 text-gray-800 font-semibold hover:text-green-800">Consulter la mission</a>
   </div>
    <div class="flex items-center text-sm text-gray-600 font-semibold mb-2">
      <span class="h-2 w-2 bg-green-300 rounded-full mr-1"></span>
      Ouvert • {{ number_format($job->price / 100, 2, ',', ' ') }} fcfa
    </div>
    <span class="block text-sm">Il y a <span style="font-weight: bold;">{{ $job->proposals->count() }}</span> @choice('proposition|propositions', $job->proposals) pour cette mission.</span><br>
    <button class="btn btn-success"><a style="color:white;text-decoration:none;" href="{{ route('jobs.edit', $job->id) }}" class="ml-1 text-gray-800 font-semibold hover:text-green-800">Modifier la mission</a></button>
</div>
