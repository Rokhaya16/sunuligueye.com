<div x-data="{ open: true }" x-on:click.away="open = false; @this.resetIndex();" x-on:keydown.escape="open = false; @this.resetIndex();">
    <input type="text" class="form-control" placeholder="rechercher mission" @click.prevent="open = true" wire:model="query"
    wire:keydown.prevent.arrow-down="incrementIndex"
    wire:keydown.prevent.arrow-up="decrementIndex"
    wire:keydown.enter.prevent="showJob"
    wire:keydown.backspace="resetIndex"
    style="border-radius: 15px;">
    @if (strlen($query) >= 2)
        <div x-show="open">
        @if (count($jobs) > 0)
            @foreach ($jobs as $index => $job)
                <a href="{{route('jobs.show',$job['id'])}}" class="" style="text-decoration: none;color:black;">{{ $job['title'] }}</a><br>
            @endforeach 
        @else
        <span style="color:red;">0 résultat pour "{{ $query }}"</span>
        @endif
        </div>
    @endif
</div>
