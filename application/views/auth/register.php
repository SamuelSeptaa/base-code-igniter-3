<div class="container">
    <form method="post">
        <div class="form-group">
            <label for="nama">Name</label>
            <input type="nama" class="form-control" id="nama" name="nama" value="<?php echo set_value('nama'); ?>">
            <small class="text-danger"><?php echo form_error('nama', '<div class="error">', '</div>'); ?></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo set_value('email'); ?>">
            <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <small class="text-danger"><?php echo form_error('email', '<div class="error">', '</div>'); ?></small>

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            <small class="text-danger"><?php echo form_error('password', '<div class="error">', '</div>'); ?></small>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <a href="<?= base_url() ?>">Login Instead</a>
</div>