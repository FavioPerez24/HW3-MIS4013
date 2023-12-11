<div class="col">
    <?php
    $matches = selectMatchByPlayer($player['PID']); // Assuming $player is defined outside the loop
    while ($match = $matches->fetch_assoc()) {
    ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title"><?php echo $player['PName']; ?></h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Data ID</th>
                            <th>Match ID</th>
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
                            <td><?php echo $match['MSID']; ?></td>
                            <!-- Add other table cells -->
                            
                            <td>
                                <?php include "edit-form1.php"; ?>
                            </td>
                            <td>
                                <form method="post" action="">
                                    <!-- Form content for deletion -->
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php } ?>
</div>
