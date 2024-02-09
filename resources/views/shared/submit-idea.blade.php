<h4> Share yours ideas </h4>
<div class="row">
    {{-- <form method="post" action='{{ url('/post') }}'> --}}
    <form method="POST" action='{{ route('idea.create') }}'>
        @csrf
        <div class="mb-3">
            <textarea name="idea" class="form-control" id="idea" rows="3"></textarea>
        </div>
        <div class="">
            <button type="submit" id="button" class="btn btn-dark"> Share </button>
        </div>
    </form>
</div>
