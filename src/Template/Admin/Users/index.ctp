<h1 class="page-header">User</h1>
<?php echo $this->Form->create($user, array('enctype'=>'multipart/form-data'));

echo '<div class="form-group">';
echo $this->Form->input('username', array('class' => 'form-control', 'type' => 'text'));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->input('password', array('class' => 'form-control', 'type' => 'password', 'autocomplete' => 'new-password' ));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->input('email', array('class' => 'form-control', 'type' => 'text'));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->input('admin', array('class' => 'form-control', 'id' => 'admin', 'type' => 'select', 'options' => array(0 => 'Default', 1 => 'Admin')));
echo '</div>';

echo $this->Form->submit('Submit', array('class' => 'btn btn-primary', 'title' => 'Submit'));
echo $this->Form->end();