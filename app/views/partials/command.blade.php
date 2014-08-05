<div class="command">
    <a id="command" class="anchor"></a>
    <h3>Command Reference</h3>
    <a href="{{$moreinfo}}" target="_blank" class="moreinfo"><h4>Click here for more info!</h4></a>
    <h4>{{$alias}}</h4>
    <table>
        <tr>
            <th>Command</th>
            <th>Description</th>
        </tr>
        <?php
            for($i = 0; $i < count($commands); $i++){
                ?><tr>
                    <td><?php echo $commands[$i]; ?></td>
                    <td><?php echo $descriptions[$i]; ?></td>
                </tr><?php
            }
        ?>
    </table>

</div>
