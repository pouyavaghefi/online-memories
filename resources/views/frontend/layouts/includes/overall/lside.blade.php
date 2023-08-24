<section class="panel">
    <div class="panel-body noradius padding-10">
        <figure class="margin-bottom-10">
            @if($findMember->avatar)
                <img class="img-responsive" src="{{ asset('storage/'.$findMember->avatar) }}" alt>
            @else
                <img class="img-responsive" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt>
            @endif
        </figure>

        <div class="progress progress-xs">

        </div>

        <ul class="list-unstyled size-13 BKoodakBold">
            <li class="text-gray"><i class="fa fa-check"></i> درج ایمیل </li>
            <li>
                @if($findMember->avatar)
                    <i class="fa fa-check"></i>
                @endif
                درج آواتار
            </li>
            <li>
                @if($findMember->fullName)
                    <i class="fa fa-check"></i>
                @endif
                درج نام و نام خانوادگی
            </li>
            <li>
                @if($findMember->job)
                    <i class="fa fa-check"></i>
                @endif
                درج شغل
            </li>
            <li>
                @if($findMember->bio)
                    <i class="fa fa-check"></i>
                @endif
                درج بیو
            </li>
            <br>
            @if(($findMember->avatar) AND ($findMember->fullName) AND ($findMember->job) AND ($findMember->bio))
            @else
                <li><a href="{{ route('user.information') }}">تکمیل اطلاعات</a></li>
            @endif
        </ul>
        <hr class="half-margins">

        <h3 class="text-black">
            {{ $user->member->fname ?? '' }}
            @if(!empty($user->member->job))<small class="text-gray size-14"> / {{ $user->member->job ?? '' }}</small>@endif
        </h3>
        <p class="size-12">{{ $user->member->bio ?? '' }}</p>
    </div>
</section>
