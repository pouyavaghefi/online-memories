<div class="BKoodakBold">
    <section class="panel panel-default">
        <header class="panel-heading">
            <h2 class="panel-title elipsis">
                دفاتر
            </h2>
        </header>
        <div class="panel-body noradius padding-10">
            <div class="row profile-activity">
                @forelse($notebooks as $notebook)
                    <div class="col-xs-10 col-sm-11">
                        <a href="">
                            {{ $notebook->title }}
                        </a>
                    </div>

                    <div class="col-sm-12">
                        <hr class="half-margins">
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <section class="panel panel-default">
        <header class="panel-heading">
            <h2 class="panel-title elipsis BKoodakBold">
                 فعالیت ها
            </h2>
        </header>
        <div class="panel-body noradius padding-10">
            <div class="row profile-activity">
                @forelse($latestMemories as $lm)
                    <div class="col-xs-10 col-sm-11">
                        <a href="">
                            {{ $lm->memory }}
                        </a>
                    </div>

                    <div class="col-sm-12">
                        <hr class="half-margins">
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
</div>
