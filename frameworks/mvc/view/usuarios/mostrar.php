<div class="col-md-8 col-md-offseet-1">
    <table class="table table-hover bg-info">
        <tr>
            <td>identificador</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>email</td>

        </tr>

        <?php
            while ($user = $resultUser->fetch_object()): ?>
            <tr>
                <td><?=$user->id?></td>
                <td><?=$user->Nombre?></td>
                <td><?=$user->Apellido?></td>
                <td><?=$user->Email?></td>
            </tr>
                <?php endwhile;
                ?>
    </table>

</div>