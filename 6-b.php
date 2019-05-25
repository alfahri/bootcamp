<?php include('head.php') ?>
<?php include('query.php') ?>

<?php 
error_reporting(0);
if($_POST['submit']){
	$nama = $_POST['nama'];

	$query = "INSERT INTO user VALUES('','$nama')";
	mysqli_query($con, $query);
	?><script>document.location=""</script><?php
}else if($_POST['updateSkill']){
	$nama = $_POST['skill'];
	$id = $_POST['id'];

	$query = "INSERT INTO skill VALUES('','$nama','$id')";
	mysqli_query($con, $query);
	?><script>document.location=""</script><?php
}
?>

<section>
	<div class="col-lg-6" style="margin:40px 250px;background-color:white;">
		<div class="col-lg-12" style="padding:25px 0px;">
			<form method="post">
				<input type="text" name="nama" class="form-group form-control" placeholder="Nama">
				<input type="submit" name="submit" value="Send" class="btn btn-success">
			</form>
		</div>
		<div class="col-lg-12" style="padding:25px 0px;">
			<table class="table table-bordered">
				<th>No</th>
				<th>Nama</th>
				<th></th>
				<?php 
				$no=1;
				foreach($rows2 as $x){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $x->nama ?></td>
						<td>
							<form method="post">
								<input type="hidden" name="id" value="<?php echo $x->id ?>">
								<input type="text" name="skill" placeholder="Skill" class="form-control">
								<input type="submit" class="btn btn-success" value="Tambah Skill" name="updateSkill">
							</form>
						</td>
					</tr>

					<?php 
					$query2 = 'SELECT * FROM user INNER JOIN skill ON  skill.id_user = user.id';
					$result_select3 = mysqli_query($con, $query2) or die(mysqli_error());
					$rows3 = array();
					while($row3 = mysqli_fetch_object($result_select3))
						$rows3[] = $row3; ?>
					<tr>
						<td></td>
						<td colspan="2">
							<?php foreach($rows3 as $a){ ?>
								<?php if($x->id == $a->id_user){?>
									<?php echo $a->nm_skill.","?>
								<?php } ?>
							<?php } ?>
						</td>
					</tr>

					<?php } ?>
				</table>
			</div>
		</div>
	</section>

	<?php include('footer.php') ?>