<div class="col">
    <?php
    // Assuming $player is defined outside the loop
    $matches = selectMatchByPlayer($player['PID']);
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
                <table class="table">
                    <thead>
                        <tr>
            <th>Match ID</th>
            <th>Goals</th>
            <th>Shoots On Target</th>
            <th>Passes Completed</th>
            <th>Chances Created</th>
            <th>Miles Run</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
            <td><?php echo $match['MID']; ?></td>
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
