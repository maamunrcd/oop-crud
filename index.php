<?php
   include "./header.php";
?>
<body>
    <section class="registation">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="text text-center"><h1 class="text-danger">Registration Form</h1></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form role="form" method="get">
                        <div class="form-group">
                            <input type="text" name="student_name" class="form-control" id="exampleInputEmail1" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="student_email" class="form-control" id="exampleInputPassword1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="student_phone" class="form-control" id="exampleInputPassword1" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="student_address" class="form-control" rows="4" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <select name="student_type" class="form-control" id="sel1">
                                <option selected>Type</option>
                                <option value="1">Regular</option>
                                <option value="0">Irregular</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="student_group" class="form-control" id="sel1">
                                <option selected>Group</option>
                                <option value="cse">Cse</option>
                                <option value="software">Software</option>
                                <option value="it">IT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="text-right">
                                <button type="submit" name="add_student" class="btn btn-default">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>