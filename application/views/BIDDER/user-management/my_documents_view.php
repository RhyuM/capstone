<?php 
	$this->load->view('BIDDER/layouts/head');
	$this->load->view('BIDDER/layouts/header');
	$this->load->view('BIDDER/layouts/sidebar');
 ?>
 
 <style>
	.portlet-title {
		background-color: #003924!important;
	}
	.description_text{
		font-size: 16px;
	}
	.description_title{
		font-size: 20px;
		font-weight: 700;
	}
	.file_input{
		width: 50%;
		margin: auto;
	}
	.input-block{
		text-align: center;
	}
	.img_button {
		background: #af9500;
		color: #fff!important;
	}

	#replace_modal .modal-body {
		position: relative;
		padding: 40px 15px;
	}
	
	.replace_btn {
		background: #005841;
		color: #fff!important;
	}
	a.btn.back_button {
		float: right;
		background: #af9500;
		color: #ffffff;
	}
 </style>


 <!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
		<div class="page-content">
			
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			User Management
			</h3>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="<?php echo base_url()?>">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
				</ul>
			</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
            <div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>My Documents
							</div>
							
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<h2 style="font-weight: 600;">Technical Documents</h2>
									</div>
									<div class="col-md-6">
									<a class="btn back_button" type="button" onclick="history.back()">Back</a>
									</div>
								</div>
							</div>

							<div class="row">
									<div class="col-md-12">
										<div class="table-scrollable">
											<table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">
												<thead>
													<tr role="row">
														<th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Username: activate to sort column ascending" >#</th>
														<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Email" >Description</th>
														<th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Points" >Action</th>
													</tr>
												</thead>
												<tbody class="table_data" >
													<tr class="documents_1">
														<td class="sorting_1">1</td>
														<td class="description_name">DTI</td>
														<td class="td_button">
															<?php 
																if(!empty($docs1)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs1.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="DTI">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="DTI">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_2">
														<td class="sorting_1">2</td>
														<td class="description_name">Valid and current Mayor’s permit/municipal license</td>
														<td class="td_button">
															<?php 
																if(!empty($docs2)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs2.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Valid and current Mayor’s permit/municipal license">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Valid and current Mayor’s permit/municipal license">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_3">
														<td class="sorting_1">3</td>
														<td class="description_name">Tax Clearance</td>
														<td class="td_button"> 
															<?php 
																if(!empty($docs3)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs3.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Tax Clearance">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Tax Clearance">upload</a>'; 
																}
															?>
														</td>
													</tr>


													<tr class="documents_4">
														<td class="sorting_1">4</td>
														<td class="description_name">Statement Completed Government and Private Construction Contract</td>
														<td class="td_button">
															<?php 
																if(!empty($docs4)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs4.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Statement Completed Government and Private Construction Contract">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Statement Completed Government and Private Construction Contract">upload</a>'; 
																}
															?>
														</td>
													</tr>


													<tr class="documents_5">
														<td class="sorting_1">5</td>
														<td class="description_name">Statement of All Ongoing Government and Private Construction Contract including Contracts Awarded but Not Yet Started</td>
														<td class="td_button">
															<?php 
																if(!empty($docs5)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs5.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Statement of All Ongoing Government and Private Construction Contract including Contracts Awarded but Not Yet Started">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Statement of All Ongoing Government and Private Construction Contract including Contracts Awarded but Not Yet Started">upload</a>'; 
																}
															?>
														</td>		
													</tr>

													<tr class="documents_6">
														<td class="sorting_1">6</td>
														<td class="description_name">Valid PCAB license</td>
														<td class="td_button">
															<?php 
																if(!empty($docs6)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs6.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Valid PCAB license">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Valid PCAB license">upload</a>'; 
																}
															?>
														</td>	
													</tr>


													<tr class="documents_7">
														<td class="sorting_1">7</td>
														<td class="description_name">Audited financial statements and current assets and liabilities</td>
														<td class="td_button">
															<?php 
																if(!empty($docs7)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs7.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Audited financial statements and current assets and liabilities">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Audited financial statements and current assets and liabilities">upload</a>'; 
																}
															?>
														</td>	
													</tr>


													<tr class="documents_8">
														<td class="sorting_1">8</td>
														<td class="description_name">Net Financial Contracting Capacity (NFCC)</td>
														<td class="td_button">
															<?php 
																if(!empty($docs8)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs8.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Net Financial Contracting Capacity (NFCC)">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Net Financial Contracting Capacity (NFCC)">upload</a>'; 
																}
															?>
														</td>	
													</tr>


													<tr class="documents_9">
														<td class="sorting_1">9</td>
														<td class="description_name">Bid Security/Bid Securing Declaration</td>
														<td class="td_button">
															<?php 
																if(!empty($docs9)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs9.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Bid Security/Bid Securing Declaration">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Bid Security/Bid Securing Declaration">upload</a>'; 
																}
															?>
														</td>
													</tr>


													<tr class="documents_10">
														<td class="sorting_1">10</td>
														<td class="description_name">Contractor’s Organizational Chart for the contract</td>
														<td class="td_button">
															<?php 
																if(!empty($docs10)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs10.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Contractor’s Organizational Chart for the contract">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Contractor’s Organizational Chart for the contract">upload</a>'; 
																}
															?>
														</td>
													</tr>
													<tr class="documents_11">
														<td class="sorting_1">11</td>
														<td class="description_name">List of Qualification of Key Personnel Proposed to be Assigned to the Contract</td>
														<td class="td_button">
															<?php 
																if(!empty($docs11)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs11.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="List of Qualification of Key Personnel Proposed to be Assigned to the Contract">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="List of Qualification of Key Personnel Proposed to be Assigned to the Contract">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_12">
														<td class="sorting_1">12</td>
														<td class="description_name">List of Equipment, Owned or Leased and/or under purchased agreements</td>
														<td class="td_button">
															<?php 
																if(!empty($docs12)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs12.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="List of Equipment, Owned or Leased and/or under purchased agreements">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="List of Equipment, Owned or Leased and/or under purchased agreements">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_13">
														<td class="sorting_1">13</td>
														<td class="description_name">Omnibus Sworn Statement</td>
														<td class="td_button">
															<?php 
																if(!empty($docs13)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs13.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Omnibus Sworn Statement">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Omnibus Sworn Statement">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_14">
														<td class="sorting_1">14</td>
														<td class="description_name">Affidavit of Site Inspection</td>
														<td class="td_button">
															<?php 
																if(!empty($docs14)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs14.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Affidavit of Site Inspection">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Affidavit of Site Inspection">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_15">
														<td class="sorting_1">15</td>
														<td class="description_name">PhilGEPS Registration Certificate</td>
														<td class="td_button">
															<?php 
																if(!empty($docs15)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs15.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="PhilGEPS Registration Certificate">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="PhilGEPS Registration Certificate">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_16">
														<td class="sorting_1">16</td>
														<td class="description_name">Safety and Health Program</td>
														<td class="td_button">
															<?php 
																if(!empty($docs16)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs16.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Safety and Health Program">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Safety and Health Program">upload</a>'; 
																}
															?>
														</td>
													</tr>
													
													<tr class="documents_17">
														<td class="sorting_1">17</td>
														<td class="description_name">Income Tax Return (ITR)</td>
														<td class="td_button">
															<?php 
																if(!empty($docs17)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs17.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Income Tax Return (ITR)">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Income Tax Return (ITR)">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_18">
														<td class="sorting_1">18</td>
														<td class="description_name">Construction Method</td>
														<td class="td_button">
															<?php 
																if(!empty($docs18)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs18.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Construction Method">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Construction Method">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_19">
														<td class="sorting_1">19</td>
														<td class="description_name">Equipment Utilization Schedule</td>
														<td class="td_button">
															<?php 
																if(!empty($docs19)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs19.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																
																	echo '<a class="btn replace_btn" data-d_id="Equipment Utilization Schedule">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Equipment Utilization Schedule">upload</a>'; 
																}
															?>
														</td>
													</tr>

													<tr class="documents_20">
														<td class="sorting_1">20</td>
														<td class="description_name">Manpower Utilization Schedule</td>
														<td class="td_button">
															<?php 
																if(!empty($docs20)) {
																	echo '<a class="btn img_button"data-link='.base_url()."".$docs20.' rel="noopener noreferrer" target="_blank">VIEW</a>';
																	echo '<a class="btn replace_btn" data-d_id="Manpower Utilization Schedule">replace</a>';
																}
																else{ 
																	echo '<a class="btn upload_btn" data-d_id="Manpower Utilization Schedule">upload</a>'; 
																}
															?>
														</td>
													</tr>
												</tbody>
											</table>

										</div>
									</div>
							</div>


						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>

			<!-- modal for upload documents -->
			<div id="upload_modal" class="modal fade in" tabindex="-1" aria-hidden="true" style="display: none; padding-right: 17px;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="text-align: center;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 style="font-weight: 600;" class="modal-title">Upload Technical Documents</h4>
						</div>
						<div class="modal-body">
							<div class="slimScrollDiv" style="position: relative;  width: auto; height: auto"><div class="scroller" style="height: auto;  width: auto; padding-right: 0px;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
								
								<form class="form-horizontal contact-form" id="upload_docs">
									<div class="form-body" style="margin-bottom: 20px;">
										<div class="input-block">
											<label class="description_title">Description</label>
											<p class="description_text"></p>
											<input type="hidden" name="techdesc" class="hide_dec"/>
											<input type="file" class="file_input form-control" name="file" required>
										</div>
									</div>
							
									<div class="form-actions">
										<div class="row">
											<div class="col-md-12" style="text-align: center;">
												<button type="submit"  class="btn green">Submit</button>
												<a  type="button" data-dismiss="modal" class="btn default">Cancel</a>
											</div>
										</div>
									</div>
								</form>

							</div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
						</div>

					</div>
				</div>
			</div>
			<!-- modal end -->

			<!-- modal for replace documents -->
			<div id="replace_modal" class="modal fade in" tabindex="-1" aria-hidden="true" style="display: none; padding-right: 17px;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="text-align: center;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 style="font-weight: 600;" class="modal-title">Replace Document</h4>
						</div>
						<div class="modal-body">
							<div class="slimScrollDiv" style="position: relative;  width: auto; height: auto"><div class="scroller" style="height: auto;  width: auto; padding-right: 0px;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
								
								<form class="form-horizontal contact-form" id="replace_docs">
									<div class="form-body" style="margin-bottom: 20px;">
										<div class="input-block">
											<label class="description_title">Description</label>
											<p class="description_text"></p>
											<input type="hidden" name="techdesc" class="hide_dec"/>
											<input type="file" class="file_input form-control" name="file" required>
										</div>
									</div>
							
									<div class="form-actions">
										<div class="row">
											<div class="col-md-12" style="text-align: center;">
												<button type="submit"  class="btn green">Submit</button>
												<a  type="button" data-dismiss="modal" class="btn default">Cancel</a>
											</div>
										</div>
									</div>
								</form>

							</div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
						</div>

					</div>
				</div>
			</div>
			<!-- modal end -->
			<!-- modal for view file -->
			<div id="view_file" class="modal fade in" tabindex="-1" aria-hidden="true" style="display: none; padding-right: 17px;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" style="text-align: center;">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="pdf-description" style="font-weight: 600;" class="modal-title"></h4>
						</div>
						<div class="modal-body">
							<div class="slimScrollDiv" style="position: relative;  width: auto; height: auto"><div class="scroller" style="height: auto;  width: auto; padding-right: 0px;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
							<div class="spinner-box ">
								<div class="configure-border-1">  
									<div class="configure-core"></div>
								</div>  
								<div class="configure-border-2">
									<div class="configure-core"></div>
								</div> 
							</div>
							<div id="display_file"> 
							
							</div>
							</div><div class="slimScrollBar" style="background: rgb(187, 187, 187); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 1px; height: 300px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
						</div>
					</div>
				</div>
			</div>
			<!-- modal end -->
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->

 
	<?php 
		$this->load->view('BIDDER/layouts/quick_sidebar');
		$this->load->view('BIDDER/layouts/footer');
	?>


<script>
        jQuery(document).ready(function() {
			
			// show modal and assign value to inputs
			$('.table_data').on('click','.upload_btn',function(){
				$('#upload_modal').modal('toggle');
				$(".description_text").text($(this).data('d_id'));
				$(".hide_dec").val($(this).data('d_id'));
			});

			// show modal and assign value to inputs
			$('.table_data').on('click','.replace_btn',function(){
				$('#replace_modal').modal('toggle');
				$(".description_text").text($(this).data('d_id'));
				$(".hide_dec").val($(this).data('d_id'));
			});

			// show modal and assign value to inputs
			$('.table_data').on('click','.img_button',function(){
				$('.spinner-box').fadeIn();
				$('#view_file').modal('toggle');
				
				var imageSource = $(this).attr('data-link');
				console.log(imageSource);
				// var description = $(this).attr('data-description');
				var description = $(this).parent().parent().find('.description_name').text();
				
				$(".pdf-description").text(description);
				var file_div="<object class='pdfembed1' data='"+imageSource+"' type='application/pdf' width='100%' height='800'><embed class='pdfembed2' src='"+imageSource+"' type='application/pdf' /></object>";
				var file_image ="<img class='img_file' src='"+imageSource+"' width='100%' height='800'>";
				if (imageSource.indexOf(".pdf") >= 0){
					jQuery('#display_file ').html(file_div);
				}
				else{
					jQuery('#display_file ').html(file_image);
				}

				$('.spinner-box').fadeOut(3000);
			});

			$('#upload_docs').on('submit',function(e){
				e.preventDefault();

				$.ajax({
					url: "<?php echo base_url(); ?>BidderUserManagementController/inserttechdocs",
					type: "POST",
					data:new FormData(this),
					processData:false,
					contentType:false,
					cache:false,
					async:false,
					success: function(response){
							// alert($('input[type=file]').val());
							$('#upload_modal').modal('toggle');
							swal("Added!", "File has been Added!", "success");
							console.log(response);
							
							if(response == "DTI")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_1_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_1').html(data);
									}
								});
							}

							if(response == "Valid and current Mayor’s permit/municipal license")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_2_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_2').html(data);
									}
								});
							}
							if(response == "Tax Clearance")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_3_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_3').html(data);
									}
								});
							}
							if(response == "Statement Completed Government and Private Construction Contract")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_4_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_4').html(data);
									}
								});
							}
							if(response == "Statement of All Ongoing Government and Private Construction Contract including Contracts Awarded but Not Yet Started")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_5_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_5').html(data);
									}
								});
							}

							if(response == "Valid PCAB license")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_6_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_6').html(data);
									}
								});
							}

							if(response == "Audited financial statements and current assets and liabilities")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_7_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_7').html(data);
									}
								});
							}
							if(response == "Net Financial Contracting Capacity (NFCC)")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_8_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_8').html(data);
									}
								});
							}

							if(response == "Bid Security/Bid Securing Declaration")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_9_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_9').html(data);
									}
								});
							}

							if(response == "Contractor’s Organizational Chart for the contract")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_10_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_10').html(data);
									}
								});
							}

							if(response == "List of Qualification of Key Personnel Proposed to be Assigned to the Contract")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_11_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_11').html(data);
									}
								});
							}

							if(response == "List of Equipment, Owned or Leased and/or under purchased agreements")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_12_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_12').html(data);
									}
								});
							}

							if(response == "Omnibus Sworn Statement")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_13_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_13').html(data);
									}
								});
							}

							if(response == "Affidavit of Site Inspection")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_14_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_14').html(data);
									}
								});
							}

							if(response == "PhilGEPS Registration Certificate")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_15_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_15').html(data);
									}
								});
							}

							if(response == "Safety and Health Program")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_16_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_16').html(data);
									}
								});
							}

							if(response == "Income Tax Return (ITR)")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_17_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_17').html(data);
									}
								});
							}

							if(response == "Construction Method")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_18_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_18').html(data);
									}
								});
							}

							if(response == "Equipment Utilization Schedule")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_19_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_19').html(data);
									}
								});
							}

							if(response == "Manpower Utilization Schedule")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_20_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_20').html(data);
									}
								});
							}
					}
				});
			});
			$('#replace_docs').on('submit',function(e){
				e.preventDefault();

				$.ajax({
					url: "<?php echo base_url(); ?>BidderUserManagementController/updatetechdocs",
					type: "POST",
					data:new FormData(this),
					processData:false,
					contentType:false,
					cache:false,
					async:false,
					success: function(response){
							// alert($('input[type=file]').val());
							$('#replace_modal').modal('toggle');
							swal("Added!", "File has been Added!", "success");
							console.log(response);
							
							if(response == "DTI")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_1_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_1').html(data);
									}
								});
							}

							if(response == "Valid and current Mayor’s permit/municipal license")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_2_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_2').html(data);
									}
								});
							}
							if(response == "Tax Clearance")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_3_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_3').html(data);
									}
								});
							}
							if(response == "Statement Completed Government and Private Construction Contract")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_4_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_4').html(data);
									}
								});
							}
							if(response == "Statement of All Ongoing Government and Private Construction Contract including Contracts Awarded but Not Yet Started")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_5_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_5').html(data);
									}
								});
							}

							if(response == "Valid PCAB license")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_6_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_6').html(data);
									}
								});
							}

							if(response == "Audited financial statements and current assets and liabilities")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_7_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_7').html(data);
									}
								});
							}
							if(response == "Net Financial Contracting Capacity (NFCC)")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_8_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_8').html(data);
									}
								});
							}

							if(response == "Bid Security/Bid Securing Declaration")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_9_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_9').html(data);
									}
								});
							}

							if(response == "Contractor’s Organizational Chart for the contract")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_10_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_10').html(data);
									}
								});
							}

							if(response == "List of Qualification of Key Personnel Proposed to be Assigned to the Contract")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_11_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_11').html(data);
									}
								});
							}

							if(response == "List of Equipment, Owned or Leased and/or under purchased agreements")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_12_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_12').html(data);
									}
								});
							}

							if(response == "Omnibus Sworn Statement")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_13_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_13').html(data);
									}
								});
							}

							if(response == "Affidavit of Site Inspection")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_14_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_14').html(data);
									}
								});
							}

							if(response == "PhilGEPS Registration Certificate")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_15_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_15').html(data);
									}
								});
							}

							if(response == "Safety and Health Program")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_16_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_16').html(data);
									}
								});
							}

							if(response == "Income Tax Return (ITR)")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_17_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_17').html(data);
									}
								});
							}

							if(response == "Construction Method")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_18_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_18').html(data);
									}
								});
							}

							if(response == "Equipment Utilization Schedule")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_19_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_19').html(data);
									}
								});
							}

							if(response == "Manpower Utilization Schedule")
							{
								$.ajax({
									type  : 'get',
									url   : '<?php echo base_url('BidderUserManagementController/technical_documents_20_show')?>',
									async : true,
									success : function(data){
										
										$('.documents_20').html(data);
									}
								});
							}
					}
				});
			});
		});
	</script>