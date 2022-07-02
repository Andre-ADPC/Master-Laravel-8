<h3><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h3>

<div class="mb-3">
    <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">Edit</a>
    <form class="d-inline" action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        {{--! Transferred to Modal View called "delete.blade.php" --}}
        {{--@method('DELETE')--}}

        <a data-toggle="modal" id="smallButton" data-target="#smallModal" data-attr="{{ route('delete', $post->id) }}"
            title="Delete The Post">
            <em class="fas fa-trash text-danger  fa-lg"></em>
        </a>

        {{--! This action is transferred to the Modal View called "delete.blade.php" --}}
        {{-- <input type="submit" value="Delete!" class="btn btn-primary"> --}}
    </form>
</div>

{{--!{!! $posts->links() !!}     Do we Need this? It is only used with Pagination --}}

{{-- Small Modal --}}
<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="smallBody">
                <div>
                    {{-- The result of the Modal to be displayed will be applied in this div element --}}
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Display a modal (Small Modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // Return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });
</script>
