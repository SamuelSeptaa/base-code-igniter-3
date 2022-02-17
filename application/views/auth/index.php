<div class="container">
    <?php if ($this->session->flashdata('flash')) { ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('flash'); ?>
        </div>
    <?php } ?>
    <form method="post" action="<?= base_url() ?>auth">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small class="text-danger"><?php echo form_error('email', '<div class="error">', '</div>'); ?></small>

        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            <small class="text-danger"><?php echo form_error('password', '<div class="error">', '</div>'); ?></small>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <a href="<?= base_url() ?>auth/register">Create a New Account</a>
</div>