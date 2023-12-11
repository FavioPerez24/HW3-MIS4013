<div class="col">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $player['PName']; ?></h5>
            <ul class="list-group">
                <?php
                $matches = selectMatchByPlayer($player['PID']);
                while ($match = $matches->fetch_assoc()) {
                    echo '<li class="list-group-item">';
                    echo '<div class="row">';
                    echo '<div class="col">';
                        <table class="table">
    <thead>
        <tr>
            <th>Data ID</th>
            <th>MID</th>
            <th>Goals</th>
            <th>Shoots On Target</th>
            <th>Passes Completed</th>
            <th>Chances Created</th>
            <th>Miles Run</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $match['MSID']; ?></td>
            <td><?php echo $match['MID']; ?></td>
            <td><?php echo $match['Goals_Scored']; ?></td>
            <td><?php echo $match['Shoots']; ?></td>
            <td><?php echo $match['Passes_Completed']; ?></td>
            <td><?php echo $match['Chances_Created']; ?></td>
            <td><?php echo $match['Miles_Run']; ?></td>
        </tr>
    </tbody>
</table>            
                    echo '</div>';
                    echo '<div class="col-auto">';
                    include "edit-form1.php";
                    echo '</div>';
                    echo '<div class="col-auto">';
                    ?>
                    <form method="post" action="">
                        <input type="hidden" name="Msid" value="<?php echo $match['MSID']; ?>">
                        <input type="hidden" name="actionType" value="Delete">
                        <button type="submit" class="btn" onclick="return confirm('Are you sure?');">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <!-- SVG content for the trash icon -->
                            </svg>
                        </button>
                    </form>
                    <?php
                    echo '</div>';
                    echo '</div>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</div>
