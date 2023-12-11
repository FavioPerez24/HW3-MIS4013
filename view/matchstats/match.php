                                <li class="list-group-item">
                                    <div class="row">
                                        <div class="col">

                                          <div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>Data ID</th>
      <th>Match ID</th>
      <th>Details</th>
      <th>Goals</th>
      <th>Shoots On Target</th>
      <th>Passes Completed</th>
      <th>Chances Created</th>
      <th>Miles Run</th>
      <th></th>
      <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
<?php
  $matches = selectMatchByPlayer($player['PID']);
  while ($match = $matches->fetch_assoc()) {
?>
        <td><?php echo $match['MSID']; ?></td>
        <td><?php echo $match['MID']; ?></td>
        <td><?php echo $match['MDetails']; ?></td>
        <td><?php echo $match['Goals_Scored']; ?></td>
        <td><?php echo $match['Shoots']; ?></td>
        <td><?php echo $match['Passes_Completed']; ?></td>
        <td><?php echo $match['Chances_Created']; ?></td>
        <td><?php echo $match['Miles_Run']; ?></td>                                        
                                        </div>
                                        <div class="col-auto">
                                            <?php include "edit-form.php"; ?>
                                        </div>
                                        <div class="col-auto">
                                            <form method="post" action="">
                                                <input type="hidden" name="eid" value="<?php echo $major['Enrollment_ID']; ?>">
                                                <input type="hidden" name="actionType" value="Delete">
                                                <button type="submit" class="btn" onclick="return confirm('Are you sure?');">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
