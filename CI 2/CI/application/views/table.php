<?php include "includes/header.php"; ?>


<div class="limiter">
<span class="login100-form-logo">
					<img src="https://www.adu.edu.tr/webfolders/logoarsivi/Ayd%C4%B1n%20Adnan%20Mendreres%20%C3%9Cniversitesi/ad%C3%BC%20logo.jpg" width="80">
				</span>
    <div class="container-login100">
        <div class="wrap-login100" style="width:60%;">
            <div class="text-center" style="color:white">
                <h2>Communities</h2>
            </div>
            <hr style="background-color:white">
            <br>

            <table class="table table-hover" style="color:white">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Team Name</th>
                        <th>Group</th>
                        <th>Persons</th>
                        <th>Team Task Desc</th>
                        <th>Created Date</th>
                    </tr>
                </thead>
                <tbody><?php foreach ($items as $item) {
                        ?>
                        <tr>
                            <td><?php echo $item->id ?></td>
                            <td><?php echo $item->team_name ?></td>
                            <td><?php
                                foreach ($groups as $group) {
                                    if ($group->id == $item->team_group_id) {
                                        echo $group->group_name;
                                    }
                                }
                                ?></td>
                            <td><?php echo $item->team_persons ?></td>
                            <td><?php echo $item->team_task_desc ?></td>
                                    <td><?php echo $item->createdAt ?></td>

                        </tr><?php
                            } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "includes/footer.php"; ?>