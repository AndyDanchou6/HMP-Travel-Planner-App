<div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalTitle">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editFormElement">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="editCategory" class="form-label">Category Name</label>
                            <input type="text" name="category_name" id="editCategory" class="form-control" placeholder="Enter Category">
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col mb-0">
                            <label for="editDescription" class="form-label">Description</label>
                            <textarea name="description" id="editDescription" class="form-control" placeholder="Enter Description"></textarea>
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


<script>
    function openEditModal(userId) {
        var editModal = new bootstrap.Modal(document.getElementById('editModal'));
        editModal.show();

        fetch(`/api/getCategoryData/${userId}`, {
                method: 'GET',
                headers: {
                    Authorization: 'Bearer ' + localStorage.getItem('token')
                }
            })
            .then((res) => {
                return res.json();
            })
            .then(data => {
                document.getElementById('editCategory').value = data.category_name || '';
                document.getElementById('editDescription').value = data.description || '';
            })
            .catch(error => {
                console.error('Failed to fetch user information:', error.message);
            });

        document.getElementById('editFormElement').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);

            fetch(`/api/updateCategoryData/${userId}`, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        Authorization: 'Bearer ' + localStorage.getItem('token')
                    }
                })
                .then(res => {
                    return res.json();
                })
                .then(data => {
                    console.log(data);
                    if (data.status) {
                        location.reload();
                    }
                })
                .catch(error => {
                    console.error('Failed to update user information:', error.message);
                    swal("Oops!", "Failed to update user information", "error");
                });
        });
    }
</script>