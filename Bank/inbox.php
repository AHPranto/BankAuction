<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>
<?php include '../classes/Bid.php'; ?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Inbox</h2>
                <div class="block">        
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
							<th>Serial No.</th>
							<th>Product Name</th>
							<th>User Name</th>
							<th>User Email</th>
							<th>User Phone</th>
							<th>User District</th>
							<th>Last Bid Amount</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$bd = new Bid();
						$getBid = $bd->getAllBidProduct();
						if ($getBid) {
							$i=0;
							while ($result = $getBid->fetch_assoc()) {
								$i++;
					?>
						<tr class="odd gradeX">
							<td><?php echo $i;?></td>
							<td><?php echo $result['productName'];?></td>
							<td><?php echo $result['name'];?></td>
							<td><?php echo $result['email'];?></td>
							<td><?php echo $result['phone'];?></td>
							<td><?php echo $result['district'];?></td>
							<td><?php echo $result['bid_data'];?></td>
						</tr>
						<?php } } ?>
					</tbody>
				</table>
               </div>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php include 'inc/footer.php';?>
