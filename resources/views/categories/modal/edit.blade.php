<div class="modal fade" id="editModal{{$category->id}}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalTitle">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col mb-3">
                            <label for="editCategory" class="form-label">Image</label>
                            <input type="file" name="category_img" id="editCategory" class="form-control" value="{{ $category->category_name }}" placeholder="Enter Category">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-3">
                            <label for="editCategory" class="form-label">Category Name</label>
                            <input type="text" name="category_name" id="editCategory" class="form-control" value="{{ $category->category_name }}" placeholder="Enter Category">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="editDescription" class="form-label">Description</label>
                            <textarea name="description" id="editDescription" class="form-control" placeholder="Enter Description">{{ $category->description }}</textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
            </form>
        </div>
    </div>
</div>