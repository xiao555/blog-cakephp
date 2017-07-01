<h1 class="page-header">Add Article</h1>
<?php
echo $this->Form->create($article, array('enctype'=>'multipart/form-data'));

echo '<div class="form-group">';
echo $this->Form->input('title', array('class' => 'form-control', 'id' => 'title', 'type' => 'text'));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->input('content', array('class' => 'form-control', 'id' => 'content', 'type' => 'textarea'));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->input('description', array('class' => 'form-control', 'label' => 'Description', 'id' => 'description', 'type' => 'text'));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->input('category_id', array('class' => 'form-control', 'id' => 'category_id', 'empty' => 'Please choose', 'options' => $category_ids, 'multiple' => true));
echo '</div>';

echo '<div class="form-group">';
echo $this->Form->input('status', array('class' => 'form-control', 'id' => 'status', 'type' => 'select', 'options' => array(0 => 'Draft', 1 => 'Published')));
echo '</div>';

echo $this->Form->submit('Submit', array('class' => 'btn btn-primary', 'title' => 'Submit'));
echo $this->Form->end();
?>
