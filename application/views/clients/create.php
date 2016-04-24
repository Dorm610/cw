<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clients/create'); ?>

<select name="myselect">
    <option value="name1" <?php echo  set_select('myselect', '1', TRUE); ?> >One</option>
    <option value="name2" <?php echo  set_select('myselect', '2'); ?> >Two</option>
    <option value="name3" <?php echo  set_select('myselect', '3'); ?> >Three</option>
</select>

    <label for="name">Name</label>
    <input type="input" name="name" /><br/>

    <label for="wx_id">wx_id</label>
    <input type="input" name="wx_id" /><br/>

    <label for="wx_name">wx_name</label>
    <input type="input" name="wx_name" /><br/>

    <label for="qq">qq</label>
    <input type="input" name="qq" /><br/>

    <label for="phone">phone</label>
    <input type="input" name="phone" /><br/>

    <label for="address">address</label>
    <input type="input" name="address" /><br/>

    <label for="email">email</label>
    <input type="input" name="email" /><br/>

    <label for="company">company</label>
    <input type="input" name="company" /><br/>

    <input type="submit" name="submit" value="create new client"/>

</form>


