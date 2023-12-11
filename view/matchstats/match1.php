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
        </tr>
    </tbody>
</table>
