<div class="modal fade" id="event{{$event->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="event{{$event->id}}ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="{{ route('admin.events.destroy', $event) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-header">
            <h5 class="modal-title" id="event{{$event->id}}ModalLabel">Delete Event</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
                <h4>Event Title</h4>
                <p>{{ $event->title }}</p>
            </div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>