    <table class="table table-hover">
    <thead>
    <tr>
    <th><?php echo $client['name']?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td><?php echo $client['wx_name']?></td>
    <td><?php echo $client['qq']?></td>
    </tr>
    <tr>
    <td><?php echo $client['qq']?></td>
    <td><?php echo $client['phone']?></td>
    </tr>
    </tbody>
    </table>
    <?php
    echo '<h2>'.$client['id'].":".$client['name'].'</h2>';
    echo '<h3>wx:'.$client['wx_name'].'</h3>';
    echo '<h3>qq:'.$client['qq'].'</h3>';
    echo '<h3>phone:'.$client['phone'].'</h3>';
