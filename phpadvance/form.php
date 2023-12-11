<div class="modal fade" id="usermodal"  role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">update or add user</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">hi &times</button>
      </div>

      <form id="addform" methode="post" enctype="multipart/form-data">   
      <div class="modal-body">
        <!-- name -->
        <div class="form-group">
    <label>Namee:</label>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text bg-dark">
            <i class="fas fa-user-alt text-light"></i>
            </span>
        </div>
            <input type="text" class="form-control" id="usernmae" 
            placeholder="search" autocomplete="off" required="required" name="username">     
    </div>
        </div>
        <!-- email -->
        <div class="form-group">
    <label>Email:</label>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text bg-dark">
            <i class="fas fa-user-alt text-light"></i>
            </span>
        </div>
            <input type="email" class="form-control" id="email" 
            placeholder="search" autocomplete="off" required="required" name="email">     
    </div>
        </div>
        <!-- mobile -->
        <div class="form-group">
    <label>mobile</label>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text bg-dark">
            <i class="fas fa-user-alt text-light"></i>
            </span>
        </div>
            <input type="text" class="form-control" id="mobile" 
            placeholder="search" autocomplete="off" required="required" name="mobile">     
    </div>
        </div>
          <!-- photo -->
          <div class="form-group">
            <label>Photo</label>
    <div class="input-group">
    <label class="custom-file-label" for="userphoto">Choose file</label>           
            <input type="file" class="custom-file-input" name="photo" id="userphoto">     
    </div>
        </div>
       </div>
 <!--  -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>