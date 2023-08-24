
<div class="tabs white nomargin-top">
    <div class="tab-content">
        <div id="overview" class="tab-pane active BHoma">

            @if(auth()->user()->notebooks->isEmpty())
                @include('frontend.layouts.includes.sections.new-notebook')
            @else
                @include('frontend.layouts.includes.sections.new-memory')
            @endif

            <hr class="invisible half-margins">

            @foreach($memories as $memory)
                @php
                    $created_at = Carbon\Carbon::parse($memory->created_at);
                    $ago = $created_at->diffForHumans();
                @endphp
                <ul class="comment list-unstyled padding-10">
                    <li class="comment">
                        @if($findMember->avatar)
                            <img class="avatar" src="{{ asset('storage/' . $findMember->avatar) }}" width="50" height="50" alt="avatar">
                        @else
                            <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" width="50" height="50" alt="avatar">
                        @endif

                        <div class="comment-body">
                            <a href="#" class="comment-author">
                                <small class="text-muted pull-right">
                                {{ $ago }}
                                </small>
                            </a>
                            <br>
                            <p>
                                {{ $memory->memory }}
                            </p>
                        </div>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
