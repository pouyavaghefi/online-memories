<form class="well" method="POST" action="{{ route('submit.memory') }}">
    @csrf
    <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="هرچه میخواهد دل تنگت بگو" name="memory"></textarea>
    </div>
    <div class="form-group ">
        <select class="custom-select" name="notebook">
            @foreach(auth()->user()->notebooks as $notebook)
                <option value="{{ $notebook->id }}">{{ $notebook->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="margin-top-10">
        <button type="submit" class="btn btn-sm btn-primary pull-right BJadidBold">ثبت</button>
    </div>
</form>
