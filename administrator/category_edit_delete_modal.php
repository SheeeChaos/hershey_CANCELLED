<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['category_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Category Information</h4></center>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="category_edit.php">
                        <input type="hidden" class="form-control" name="category_id" value="<?php echo $row['category_id']; ?>">

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label modal-label">Category</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="category_name" value="<?php echo $row['category_name']; ?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-sm-4">
                                <label class="control-label modal-label">Description</label>
                            </div>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>">
                            </div>
                        </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="edit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['category_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Category Information</h4></center>
            </div>
            <div class="modal-body">    
                <p class="text-center">Are you sure you want to Delete</p>
                <h2 class="text-center"><?php echo $row['category_name']; ?></h2>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="category_delete.php?category_id=<?php echo $row['category_id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>
        </div>
    </div>
</div>
