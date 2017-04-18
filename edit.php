<?php
include "./header.php";
if (isset($_REQUEST['edit_student'])) {
    $edit_data = $_REQUEST;
    extract($edit_data);
    if ($obj->Update("students", "student_name='$student_name',student_email='$student_email',student_phone='$student_phone',student_address='$student_address',student_type='$student_type',student_group='$student_group'", "student_id='$edited_id'")) {
        header('Location:index.php');
    }
}
?>
<body>
    <section class="registation">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <?php
                    if (isset($_REQUEST["edit_id"])) {
                        $edit_id = $_REQUEST["edit_id"];
                        $get_data = $obj->getById("students", "*", "student_id='$edit_id'");
                        extract($get_data);
                    } else {
                        header("Location:view.php");
                    }
                    ?>

                    <form role="get" method="get">
                        <div class="form-group">
                            <input type="text" value="<?php echo $student_name; ?>" name="student_name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" value="<?php echo $student_email; ?>" name="student_email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" value="<?php echo $student_phone; ?>" name="student_phone" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="student_address" class="form-control" rows="4" placeholder="Address"><?php echo $student_address; ?></textarea>
                        </div>
                        <div class="form-group">
                            <select name="student_type" class="form-control" id="sel1">
                                <option value="1" <?php
                                if ($student_type == 1) {
                                    echo "selected";
                                }
                                ?>>Regular</option>
                                <option value="0" <?php
                                if ($student_type == 0) {
                                    echo "selected";
                                }
                                ?>>Irregular</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="student_group" class="form-control" id="sel1">
                                <option value="cse" <?php
                                if ($student_group == "cse") {
                                    echo "selected";
                                }
                                ?>>Cse</option>
                                <option value="software" <?php
                                if ($student_group == "software") {
                                    echo "selected";
                                }
                                ?>>Software</option>
                                <option value="it" <?php
                                if ($student_group == "it") {
                                    echo "selected";
                                }
                                ?>>IT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="text-right">
                                <input type="hidden" name="edited_id" value="<?php echo $student_id; ?>">
                                <button type="submit" name="edit_student" class="btn btn-default">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>



