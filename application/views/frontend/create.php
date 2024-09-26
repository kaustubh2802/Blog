<h1>Hello, world!</h1> 

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header alert alert-secondary"><h5 class="">Insert Employee data into database   
                        <a class="btn btn-danger float-right" 
                        href="<?php echo base_url('employee');?>" >Back</a> 
                    </h5></div>
                    <div class="card-body">

                       <form action="<?php echo base_url('employee/store'); ?>" method="POST">

                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control">
                                <small class="text-danger"><?php echo form_error('first_name'); ?></small>
                            </div>     
                            
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                                <small class="text-danger"><?php echo form_error('last_name'); ?></small>
                            </div> 

                            <div class="form-group">
                                <label for="">Phone NO.</label>
                                <input type="text" name="phone" class="form-control">
                                <small class="text-danger"><?php echo form_error('phone'); ?></small>
                            </div> 

                            <div class="form-group">
                                <label for="">Email ID</label>
                                <input type="text" name="email" class="form-control">
                                <small class="text-danger"><?php echo form_error('email'); ?></small>
                            </div> 

                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div> 


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 