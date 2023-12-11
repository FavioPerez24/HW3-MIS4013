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
                            <th>Data ID</th>
                            <!-- Add other table headers -->
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
