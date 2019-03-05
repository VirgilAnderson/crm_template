<div class="form-group">
  <label class="form-control-label" for="user[user_first_name]">First Name</label>
  <input class="form-control" type="text" name="user[user_first_name]" value="<?php echo h($user->user_first_name); ?>">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="user[user_last_name]">Last Name</label>
  <input class="form-control" type="text" name="user[user_last_name]" value="<?php echo h($user->user_last_name); ?>">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="user[user_email]">Email</label>
  <input class="form-control" type="text" name="user[user_email]" value="<?php echo h($user->user_email); ?>">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="user[user_username]">Username</label>
  <input class="form-control" type="text" name="user[user_username]" value="<?php echo h($user->user_username); ?>">
</div><!-- form-group -->

<div class="form-group">
  <label for="user[user_role]">User Role</label>
    <select class="form-control" name="user[user_role]">
      <?php foreach(USER::USER_ROLE as $role) { ?>
        <option value='<?php echo $role; ?>' <?php if($role == $user->user_role) {echo 'selected'; } ?>><?php echo $role; ?></option>
      <?php } ?>
    </select>
 
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="user[user_password]">Password</label>
  <input class="form-control" type="password" name="user[user_password]">
</div><!-- form-group -->

<div class="form-group">
  <label class="form-control-label" for="user[user_confirm_password]">Confirm Password</label>
  <input class="form-control" type="password" name="user[user_confirm_password]">
</div><!-- form-group -->
