<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="newCourseModal">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg>
</button>

<!-- Modal -->
<div class="modal fade" id="newCourseModal" tabindex="-1" aria-labelledby="newCourseModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newCourseModalLabel">New Course</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <form method="post" action="">
            <div class="mb-3">
              <label for="mProgramCode" class="form-label">Program Code</label>
              <input type="text" class="form-control" id="mProgramCode" name="mProgramCode">
            </div>
           <div class="mb-3">
              <label for="mDivision" class="form-label">Division</label>
              <input type="text" class="form-control" id="mDivision" name="mDivision">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        
      </div>
    </div>
  </div>
</div>
