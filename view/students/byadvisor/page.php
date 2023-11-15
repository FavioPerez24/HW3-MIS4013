<div class="row">
  <div class="col">
<h1>Student's Advisor</h1>
  </div>
  <div class="col-auto">
<?php
include "new-form.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Advisor ID</th>
      <th>Advisor Name</th>
      <th>Meeting Times</th>
      <th></th>
      <th></th>  
      </tr>
    </thead>
    <tbody>
      <?php 
      while ($advisor = $advisors->fetch_assoc()) {
      ?>
      <tr>
        <td><?php echo $advisor['Advisor_ID']; ?></td>
        <td><?php echo $advisor['Advisor_Name']; ?></td>
        <td><?php echo $advisor['Meeting_Times']; ?></td>
        <td><?php include "edit-form.php"; ?></td>
        <td>
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: "btn btn-success",
    cancelButton: "btn btn-danger"
  },
  buttonsStyling: false
});
swalWithBootstrapButtons.fire({
  title: "Are you sure?",
  text: "You won't be able to revert this!",
  icon: "warning",
  showCancelButton: true,
  confirmButtonText: "Yes, delete it!",
  cancelButtonText: "No, cancel!",
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
    swalWithBootstrapButtons.fire({
      title: "Deleted!",
      text: "Your file has been deleted.",
      icon: "success"
    });
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire({
      title: "Cancelled",
      text: "Your imaginary file is safe :)",
      icon: "error"
    });
  }
});
        
          
    </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>
