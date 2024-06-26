<div class="modal fade" id="messages{{$category->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryTitle">{{ $category->category_name }}</h5>
                <button type=" button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col mb-0">
                    <label for="message" class="form-label">Description</label>
                    <textarea id="message" name="description" class="form-control" placeholder="Enter Description" readonly>{{ $category->description }}</textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</div>
</script>