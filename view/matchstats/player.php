<div class="col">
    <?php
    // Assuming $player is defined outside the loop
    $matches = selectMatchbyPlayer($player['PID']);
    $firstIteration = true; // Flag to check the first iteration
    while ($match = $matches->fetch_assoc()) {
    ?>
        <div class="card">
            <div class="card-body">
                <?php if ($firstIteration) { ?>
                    <h5 class="card-title"><?php echo $player['PName']; ?></h5>
                <?php
                    $firstIteration = false; // Set the flag to false after the first iteration
                }
                ?>

                <div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Match ID</th>
                        <th scope="col">Goals</th>
                        <th scope="col">Shoots On Target</th>
                        <th scope="col">Passes Completed</th>
                        <th scope="col">Chances Created</th>
                        <th scope="col">Miles Run</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $match['MID']; ?></th>
                        <td><?php echo $match['Goals_Scored']; ?></td>
                        <td><?php echo $match['Shoots']; ?></td>
                        <td><?php echo $match['Passes_Completed']; ?></td>
                        <td><?php echo $match['Chances_Created']; ?></td>
                        <td><?php echo $match['Miles_Run']; ?></td>
                         <td>
                                <?php include "edit-form1.php"; ?>
                            </td>
                            <td>
                                <form method="post" action="">
 <input type="hidden" name="Msid" value="<?php echo $match['MSID']; ?>">
                                                    <input type="hidden" name="actionType" value="Delete">
                                                    <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure?');">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                            <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                        </svg>
                                                    </button>
                                </form>
                            </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php 
    }
?>
                           
