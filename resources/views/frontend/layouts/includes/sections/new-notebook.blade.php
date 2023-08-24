<form class="well" method="POST" action="{{ route('submit.notebook') }}">
    @csrf
    <div class="form-group">
        <input class="form-control" placeholder="نام دفتر امسال شما" name="title">
    </div>
    <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="مختصری درباره این دفتر" name="description"></textarea>
    </div>
    <div class="margin-top-10">
        <button type="submit" class="btn btn-sm btn-primary pull-right BJadidBold">ثبت</button>
    </div>
</form>
