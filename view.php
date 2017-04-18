<?php
include "./header.php";
?>
<section>
    <div class="container">
        <div class="row">
            <div class="text text-center">
                <?php
                //Delete Id code Start
                if (isset($_REQUEST['dele'])) {
                    $del = $_REQUEST['dele'];
                    ?>
                    <span class="text text-danger">Are You Sure You Want to Delete</span>
                    <a class="btn btn-danger" href="?ConDelete=<?php echo $del; ?>">Yes</a>
                    <a class="btn btn-success" href="view.php">No</a>
                    <?php
                } elseif (isset($_REQUEST["ConDelete"])) {
                    $delId = $_REQUEST["ConDelete"];
                    if ($obj->Delete("students", "student_id='$delId'")) {
                        header('Location:view.php');
                    }
                }
                //Delete Id code end
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered table-hover">
                    <tr>
                        <td class="info">Sl.</td>
                        <td class="info">Student Name</td>
                        <td class="info">Student Email</td>
                        <td class="info">Student Phone</td>
                        <td class="info">Student Address</td>
                        <td class="info">Student Type</td>
                        <td class="info">Student Group</td>
                        <td class="info">Action</td>
                    </tr>
                    <?php
                    $sl = 1;
                    // Single Id View Code Start
                    if (isset($_REQUEST['view'])) {
                        $view_id = $_REQUEST['view'];
                        $view_ide = $obj->getById("students", "*", "student_id='$view_id'");
                        extract($view_ide);
                        ?>
                        <tr>
                            <td class="info"><?php echo $sl++; ?></td>
                            <td class="active"><?php echo $student_name; ?></td>
                            <td class="success"><?php echo $student_email; ?></td>
                            <td class="warning"><?php echo $student_phone; ?></td>
                            <td class="danger"><?php echo $student_address; ?></td>
                            <td class="info">
                                <?php
                                switch ($student_type) {
                                    case 1:
                                        echo "Raguller";
                                        break;
                                    case 0:
                                        echo "Irregular";
                                }
                                ?>
                            </td>
                            <td class="danger"><?php echo $student_group; ?></td>
                            <td class="success">
                                <a class="btn btn-sm btn-success" href="?view=<?php echo $student_id; ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a class="btn btn-sm btn-danger" href="?dele=<?php echo $student_id; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                <a class="btn btn-sm btn-primary" href="edit.php?edit_id=<?php echo $student_id; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8" class="success">
                                <a class="add_btn pull-right btn btn-primary" href="view.php">View All</a>
                            </td>
                        </tr>
                        <?php
                        // Single Id View Code End
                    } else {
                        //View All id Code Start
                        $all_student = $obj->getAllByVisibility("students", "*", "student_status='1'");
                        if (!empty($all_student)) {
                            foreach ($all_student as $student) {
                                extract($student);
                                ?>
                                <tr>
                                    <td class="info"><?php echo $sl++; ?></td>
                                    <td class="active"><?php echo $student_name; ?></td>
                                    <td class="success"><?php echo $student_email; ?></td>
                                    <td class="warning"><?php echo $student_phone; ?></td>
                                    <td class="danger"><?php echo $student_address; ?></td>
                                    <td class="info">
                                        <?php
                                        switch ($student_type) {
                                            case 1:
                                                echo "Raguller";
                                                break;
                                            case 0:
                                                echo "Irregular";
                                        }
                                        ?>
                                    </td>
                                    <td class="danger"><?php echo $student_group; ?></td>
                                    <td class="success">
                                        <a class="btn btn-sm btn-success" href="?view=<?php echo $student_id; ?>"><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a class="btn btn-sm btn-danger" href="?dele=<?php echo $student_id; ?>"><i class="glyphicon glyphicon-trash"></i></a>
                                        <a class="btn btn-sm btn-primary" href="edit.php?edit_id=<?php echo $student_id; ?>"><i class="glyphicon glyphicon-edit"></i></a>
                                    </td>
                                </tr>
                                <?php
                            }
                        }
                        //View All id Code End
                        ?>
                        <tr>
                            <td colspan="8" class="success">
                                <a class="add_btn pull-right btn btn-primary" href="index.php">Add Student</a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>


