<h1 class="page-header">Add Category</h1>
<?php echo $this->Form->create($category, array('enctype'=>'multipart/form-data'));

echo '<div class="form-group">';
echo $this->Form->input('name', array('class' => 'form-control', 'id' => 'name', 'type' => 'string'));
echo '</div>';

echo $this->Form->submit('Submit', array('class' => 'btn btn-primary', 'title' => 'Submit'));
echo $this->Form->end();