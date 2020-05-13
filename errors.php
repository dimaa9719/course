<?php  if (count($errors) > 0) : ?>
	<div class="panel panel-danger">
      <div class="panel-heading">
	  	<?php foreach ($errors as $error) : ?>
  	 	 <p><?php echo $error ?></p>
  		<?php endforeach ?>
	  </div> 
    </div>
<?php  endif ?>