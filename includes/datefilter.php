<div>

	<div class="card-body">

		<form action="" method="GET">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group" style="margin-left:200px;">
						<label>Date Début:</label>
						<input type="date" name="from_date"
							value="<?php if(isset($_GET['from_date'])){ echo $_GET['from_date']; } ?>"
							class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group" style="margin-left:-20px;">
						<label>Date Arrivé:</label>
						<input type="date" name="to_date"
							value="<?php if(isset($_GET['to_date'])){ echo $_GET['to_date']; } ?>" class="form-control">
					</div>

				</div>
				<div class="col-md-4">
					<div class="form-group" style="margin-left:-250px;">
						<button type="submit" class="btn btn-primary"><i class="fas fa-filter"></i></button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>