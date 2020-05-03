<div class="modal fade" id="member{{$member->id}}Modal" tabindex="-1" role="dialog" aria-labelledby="member{{$member->id}}ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <form action="{{ route('admin.members.destroy', $member) }}" method="post">
            @csrf
            @method('DELETE')
            <div class="modal-header">
            <h5 class="modal-title" id="member{{$member->id}}ModalLabel">Delete Member</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete the member with name, <span class="font-weight-bold">{{ $member->name }}</span>
            </div>
            <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
        </div>
    </div>
</div>