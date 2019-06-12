<div class="modal fade" id="createPostModal" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="">Create post</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="methodPost/createPost.php" method="POST">

                <div class="modal-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter title">
                    </div>

                    <div class="form-group">
                        <label for="comment">Description</label>
                        <textarea class="form-control" rows="5" name="description" placeholder="Enter description"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-dark">Clear</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>

        </div>
    </div>
</div>