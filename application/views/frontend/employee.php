<!-- <h1>Hello, world!</h1> -->
<a class="btn btn-info m-3" href="<?php echo base_url(''); ?>">HOME</a>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">


                    <?php if ($this->session->flashdata('status')): ?>
                        <div class="alert alert-success">
                            <?php echo $this->session->flashdata('status') ?>
                        </div>
                    <?php endif; ?>

                    
                    <h5>All Employee Data
                        <a class="btn btn-primary float-right" href="<?php echo base_url('employee/add'); ?>">Add Employee</a>
                    </h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('employee/deleteall') ?>" method="POST">
                    <table id="myTableOne" class="table table-bordered">
                        <thead>
                            <!-- <tr class="bg-dark text-light"> -->
                            <tr>
                                <th>
                                    <button type="submit" name="deleteEmpBtn" class="btn btn-danger btn-sm">Delete All</button>
                                </th>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Phone No.</th>
                                <th>Email ID</th>
                                <!-- <th>Action</th> -->
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>Confirm Delete</th>
                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($employee as $row):  ?>
                                <tr>
                                    <td class="text-center text-wrap">
                                        <input type="checkbox" name="checkbox_value[]" value="<?= $row->id; ?>">
                                    </td>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->first_name; ?></td>
                                    <td><?php echo $row->last_name; ?></td>
                                    <td><?php echo $row->phone; ?></td>
                                    <td><?php echo $row->email; ?></td>
                                    <td>
                                        <!-- localhost:8000/employee/edit/1(user id) -->
                                        <a href="<?php echo base_url('employee/edit/' . $row->id); ?>" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url('employee/delete/' . $row->id); ?>" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-warning confirm-delete" value="<?php echo $row->id; ?>">Confirm Delete</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>