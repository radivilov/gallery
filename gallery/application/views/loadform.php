<div id="upload">
	<?php echo Form::open('/load/post', array('enctype' => 'multipart/form-data')); ?>
		<table id="input">		
		 	<tr><th colspan="2">Loading Image<th></tr>
		 	<tr>
		 		<th colspan="2">		 			
		 				<?  if(isset($er) && ($er != '')) {?>
		 					<p style="color:red;"><? echo $er;?></p>
		 				<?}?>
		 				
		 				<?	if(isset($success) && ($success != '')) {?>
		 					<p style="color:green;"><? echo $success;?></p>
		 				<?}?>		 							
				</th>
			</tr>
		 	<tbody>
			 	<tr><td>Select image</td><td><?php echo Form::file('image') ?></td></tr>
				<tr><td>Input plain-text</td><td><?php echo Form::textarea('alt') ?></td></tr>
				<tr><td colspan="2"><?php  echo Form::submit('submit', 'Отправить') ?><td></tr>
			</tbody>
		</table>
	<?php echo Form::close(); ?>
</div>