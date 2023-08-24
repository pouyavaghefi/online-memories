<form class="well" method="POST" action="{{ route('user.information') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="avatar">آواتار:</label>
        <input type="file" class="form-control" id="avatar" name="avatar">
    </div>
    <div class="form-group">
        <label for="fullName">نام و نام خانوادگی:</label>
        <input type="text" class="form-control" id="fullName" name="fullName" required>
    </div>
    <div class="form-group">
        <label for="job">شغل:</label>
        <input type="text" class="form-control" id="job" name="job" required>
    </div>
    <div class="form-group">
        <label for="bio">بیو:</label>
        <textarea class="form-control" id="bio" name="bio" rows="5" required></textarea>
    </div>

    <div class="margin-top-10">
        <button type="submit" class="btn btn-sm btn-primary pull-right BJadidBold">ثبت</button>
    </div>
</form>
