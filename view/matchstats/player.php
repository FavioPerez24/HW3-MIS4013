        <div class="col">
           <div class="card" style="width: 18rem;">
        <a href="https://www.tsn.ca/content/dam/tsn/en/home/images/2023/11/4/jeremy-doku--l--1-2031006-1699122086615.jpeg">
            <img src="https://www.tsn.ca/content/dam/tsn/en/home/images/2023/11/4/jeremy-doku--l--1-2031006-1699122086615.jpeg" class="card-img-top" alt="Player Image">
        </a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $player['PName']; ?></h5>
                    <p class="card-text">
                        <ul class="list-group">
                            <?php
                            $matches = selectMatchbyPlayer($player['PID']);
                            while ($match = $matches->fetch_assoc()) {
                              include "match.php";
                           } 
                          ?>
                        </ul>
                    </p>
                    <p class="card-text"><small class="text-body-secondary">Date of Birth: <?php echo $player['PDOB']; ?></small></p>
                </div>
            </div>
        </div>
