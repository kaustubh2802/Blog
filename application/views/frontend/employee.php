<h1>Hello, world!</h1> 

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h5>How    
                            <a class="btn btn-primary float-right" href="<?php echo base_url('employee/add');?>">Add Employee</a> 
                        </h5>
                </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="bg-dark text-light">
                                    <th>ID</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Phone No.</th>
                                    <th>Email ID</th>
                                    <!-- <th>Action</th> -->
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>


                            <tbody>
                                <?php foreach($employee as $row):  ?>
                                <tr>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->first_name; ?></td>
                                    <td><?php echo $row->last_name; ?></td>
                                    <td><?php echo $row->phone; ?></td>
                                    <td><?php echo $row->email; ?></td> 
                                    <td>
                                        <!-- localhost:8000/employee/edit/1(user id) -->
                                        <a href="<?php echo base_url('employee/edit/'.$row->id); ?>" class="btn btn-success btn-sm">Edit</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>