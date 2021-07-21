
		<?php
		foreach ($loket as $row) { ?>
		<div class="col-md-3">
			<div class="box">
				<div class="loket" id="loket">
					Loket <?php echo $row->loket; ?>
				</div>
				<div class="antrian" id="antrian<?php echo $row->id_loket; ?>">
					<?php $antri = $this->M_crud->get_max_id('transaksi', 'no_antrian', array('id_loket' => $row->id_loket, 'tgl' => date('dmY')))->row('no_antrian');
					?>
  <script type="text/javascript">
     	  setInterval(function(){
				var lok= <?php echo $row->id_loket; ?>;
		        $.ajax({
		        type:"POST",
		        url: "<?php echo site_url('welcome/get_antri/'); ?>",
		        data: "id_loket="+lok,
		        success:function(data){	
			        document.getElementById("antrian<?php echo $row->id_loket ?>").innerHTML = data;
		       		 }
		   	 	})
       		 }, 1000);
  </script>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
</div>