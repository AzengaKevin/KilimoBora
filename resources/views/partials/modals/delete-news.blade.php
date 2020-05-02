<div class="modal fade" id="news{{ $new->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="news{{ $new->id }}ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="{{ route('admin.news.destroy', $new) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-header">
            <h5 class="modal-title" id="news{{ $new->id }}ModalLabel">Delete News Item</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">Are you sure you want to delete: <span class="font-weight-bold">{{ $new->title }}</span></div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Sure</button>
            </div>
        </form>
        </div>
    </div>
</div>