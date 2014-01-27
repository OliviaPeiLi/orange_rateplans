<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Orange Rate Plans</title>
</head>
<body>

<div id="container">

<?php foreach ($orange_RatePlans as $key => $group): ?>
	
	<table border="1">	
			<tr>
				<td colspan="<?=count($group['pos1'])?>" align="center">
					$<?=$group['pos1'][0] ?>
				</td>
			</tr>
			<tr>
				<?php foreach ($group['pos2'] as $pos2): ?>
					<td align="center">
						<?=$pos2 ?>
					</td>
				<?php endforeach ?>
			</tr>
			<tr>
				<?php foreach ($group['pos3'] as $key => $pos3): ?>
					<? $colspan = calColspan($group['pos3'], $key); ?>
					<? if($colspan > 0){ ?>
					<td colspan="<?=$colspan?>" align="center">
						<?=$pos3 ?>
					</td>
					<? } ?>
				<?php endforeach ?>
			</tr>
			<tr>
				<?php foreach ($group['pos4'] as $key => $pos4): ?>
					<? $colspan = calColspan($group['pos4'], $key); ?>
					<? if($colspan > 0){ ?>
					<td colspan="<?=$colspan?>" align="center">
						<?=$pos4 ?>
					</td>
					<? } ?>
				<?php endforeach ?>
			</tr>
			<tr>
				<?php foreach ($group['pos5'] as $key => $pos5): ?>
					<? $colspan = calColspan($group['pos5'], $key); ?>
					<? if($colspan > 0){ ?>
					<td colspan="<?=$colspan?>" align="center">
						<?=$pos5 ?>
					</td>
					<? } ?>
				<?php endforeach ?>
			</tr>
			<tr>
				<?php foreach ($group['hardware1'] as $hardware1): ?>
					<td align="center">
						$<?=$hardware1 ?>
					</td>
				<?php endforeach ?>
			</tr>
			<tr>
				<?php foreach ($group['hardware2'] as $hardware2): ?>
					<td align="center">
						$<?=$hardware2 ?>
					</td>
				<?php endforeach ?>
			</tr>
			<tr>
				<?php foreach ($group['hardware3'] as $hardware3): ?>
					<td align="center">
						$<?=$hardware3 ?>
					</td>
				<?php endforeach ?>
			</tr>
			<tr>
				<?php foreach ($group['hardware4'] as $hardware4): ?>
					<td align="center">
						$<?=$hardware4 ?>
					</td>
				<?php endforeach ?>
			</tr>
			<tr>
				<?php foreach ($group['hardware5'] as $hardware5): ?>
					<td align="center">
						$<?=$hardware5 ?>
					</td>
				<?php endforeach ?>
			</tr>
	</table>
	
	</br>
<?php endforeach ?>

</div>

</body>
</html>