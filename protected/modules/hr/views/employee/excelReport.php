<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      code		</th>
 		<th width="80px">
		      number		</th>
 		<th width="80px">
		      firstname		</th>
 		<th width="80px">
		      middlename		</th>
 		<th width="80px">
		      lastname		</th>
 		<th width="80px">
		      birthday		</th>
 		<th width="80px">
		      plate_of_birth		</th>
 		<th width="80px">
		      home_phone		</th>
 		<th width="80px">
		      mobile_phone		</th>
 		<th width="80px">
		      sex		</th>
 		<th width="80px">
		      email		</th>
 		<th width="80px">
		      identification		</th>
 		<th width="80px">
		      identification_plate		</th>
 		<th width="80px">
		      identification_date		</th>
 		<th width="80px">
		      image		</th>
 		<th width="80px">
		      probationary_date		</th>
 		<th width="80px">
		      official_register_date		</th>
 		<th width="80px">
		      address		</th>
 		<th width="80px">
		      address_tmp		</th>
 		<th width="80px">
		      district		</th>
 		<th width="80px">
		      district_tmp		</th>
 		<th width="80px">
		      city		</th>
 		<th width="80px">
		      city_tmp		</th>
 		<th width="80px">
		      type		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->code; ?>
		</td>
       		<td>
			<?php echo $row->number; ?>
		</td>
       		<td>
			<?php echo $row->firstname; ?>
		</td>
       		<td>
			<?php echo $row->middlename; ?>
		</td>
       		<td>
			<?php echo $row->lastname; ?>
		</td>
       		<td>
			<?php echo $row->birthday; ?>
		</td>
       		<td>
			<?php echo $row->plate_of_birth; ?>
		</td>
       		<td>
			<?php echo $row->home_phone; ?>
		</td>
       		<td>
			<?php echo $row->mobile_phone; ?>
		</td>
       		<td>
			<?php echo $row->sex; ?>
		</td>
       		<td>
			<?php echo $row->email; ?>
		</td>
       		<td>
			<?php echo $row->identification; ?>
		</td>
       		<td>
			<?php echo $row->identification_plate; ?>
		</td>
       		<td>
			<?php echo $row->identification_date; ?>
		</td>
       		<td>
			<?php echo $row->image; ?>
		</td>
       		<td>
			<?php echo $row->probationary_date; ?>
		</td>
       		<td>
			<?php echo $row->official_register_date; ?>
		</td>
       		<td>
			<?php echo $row->address; ?>
		</td>
       		<td>
			<?php echo $row->address_tmp; ?>
		</td>
       		<td>
			<?php echo $row->district; ?>
		</td>
       		<td>
			<?php echo $row->district_tmp; ?>
		</td>
       		<td>
			<?php echo $row->city; ?>
		</td>
       		<td>
			<?php echo $row->city_tmp; ?>
		</td>
       		<td>
			<?php echo $row->type; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>

