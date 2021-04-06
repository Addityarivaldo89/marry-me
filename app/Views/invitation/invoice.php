<?= $this->extend('layouts/app'); ?>

<?= $this->section('page-content'); ?>
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<!-- Default box -->
				<div class="card">
					<div class="card-header">
						<h3 class="card-title"><b>Tagihan Pembayaran</b></h3>
					</div>
					<div class="card-body">
						<div class="container">
							<div class="row">
								<div class="span4">
									<img src="<?= base_url(); ?>/image/marry.me.png" class="img-rounded logo" style="height:auto; width: 50%">
								</div>
								<div class="span4 well">
									<table class="invoice-head">
										<tbody>
											<tr>
												<td class="pull-right"><strong>ID User</strong></td>
												<td>001</td>
											</tr>
											<tr>
												<td class="pull-right"><strong>invoice Number</strong></td>
												<td>1</td>
											</tr>
											<tr>
												<td class="pull-right"><strong>Date</strong></td>
												<td>10-08-2013</td>
											</tr>
											<tr>
												<td class="pull-right"><strong>Period</strong></td>
												<td>9/1/2025 - 9/30/2025</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="span8">
									<h2>Invoice</h2>
								</div>
							</div>
							<div class="row">
								<div class="span8 well invoice-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Description</th>
												<th>Date</th>
												<th>Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Modern Etnic Template</td>
												<td>10/8/2025</td>
												<td>Rp. 75.000</td>
											</tr>
											<tr>
												<td>&nbsp;</td>
												<td><strong>Total</strong></td>
												<td><strong>Rp. 75.000</strong></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="row">
								<div class="span8 well invoice-thank">
									<h5 style="text-align:center;">Thank You!</h5>
								</div>
							</div>
							<div class="row">
								<div class="span4">
									<strong>Phone:</strong> <a href="tel:555-555-5555">555-555-5555</a>
								</div>
								<div class="span4">
									<strong>Email:</strong> <a href="mailto:marryme@gmail.com">marryme@gmail.com</a>
								</div>
								<div class="span4">
									<strong>Website:</strong> <a href="http://marryme.com">http://marryme.com</a>
								</div>
							</div>
						</div>

					</div>

					<!-- /.card -->
				</div>

			</div>
		</div>
</section>
<?= $this->endSection(); ?>