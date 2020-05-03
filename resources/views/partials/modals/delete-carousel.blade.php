<div class="modal fade" id="carousel{{$carousel->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="event{{$carousel->id}}ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="{{ route('admin.carousels.destroy', $carousel) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-header">
            <h5 class="modal-title" id="event{{$carousel->id}}ModalLabel">Delete Carousel</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the carousel with title, <span class="font-weight-bold">{{ $carousel->title }}</span>
            </div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>