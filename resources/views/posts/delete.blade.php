{{-- !-- Delete Warning Modal --> --}}
<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    <div class="modal-body">
        @csrf
        @method('DELETE')
        <h5 class="text-center text-uppercase">Are you sure you want to delete</h5>
        <h5 class="text-center font-weight-bold" , style="color: red">"{{ $post->title }}"<span
                style="color: rgb(33, 24, 24)"> ?</span></h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-danger">Yes, Delete Post</button>
    </div>
</form>
