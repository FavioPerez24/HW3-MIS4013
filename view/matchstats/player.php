        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $player['PName']; ?></h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            $matches = selectMatchByPlayer($player['PID']);
                            while ($match = $matches->fetch_assoc()) {
                              include "match.php";
                           } 
                          ?>
                        </ul>
                    </p>
                    <p class="card-text"><small class="text-body-secondary">DOB: <?php echo $player['PDOB']; ?></small></p>
                </div>
            </div>
        </div>
