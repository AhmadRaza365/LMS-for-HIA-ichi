<style>
	.portial-icon {
	    font-size: 5rem;
	    height: 8.5rem;
	    width: 8.5rem;
	    align-items: center;
	    justify-content: center;
	    display: flex;
	    border: 4px solid #fffafadb;
	    color: #ffffffb8;
	}
	.portal-link{
		color:unset;
	}
	.portal-link:hover{
		color:unset;
	}
	.widget-user .widget-user-image {
		position: absolute;
		top: 50px;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 100%;
		margin: unset;
		left: unset;
	}
	.portal-link .card:hover {
	    color: unset;
	    position: relative;
	    top: -3px;
	    box-shadow: 0 9px #0201010d;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-4">
					<a href="<?php echo base_url.'admin' ?>" class="portal-link">
						<div class="card card-widget widget-user rounded">
			              <!-- Add the bg color to the header using any of the bg-* classes -->
			              <div class="widget-user-header PrimaryBg">
			                <h3 class="widget-user-username tertiaryColor rounded-top">Admin</h3>
			              </div>
			              <div class="widget-user-image">
			                <span class="img-circle elevation-2 fa fa-user-cog portial-icon"></span>
			              </div>
			              <div class="card-footer PrimaryBg rounded-bottom">
			                <div class="container">
			                	<p class="text-center text-white-50"><small><i>Click here for Admin Panel</i></small></p>
			                </div>
			              </div>
			            </div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo base_url.'faculty' ?>" class="portal-link">
						<div class="card card-widget widget-user">
			              <!-- Add the bg color to the header using any of the bg-* classes -->
			              <div class="widget-user-header PrimaryBg">
			                <h3 class="widget-user-username tertiaryColor rounded-top">Faculty</h3>
			              </div>
			              <div class="widget-user-image">
			                <span class="img-circle elevation-2 fa fa-user-tie portial-icon"></span>
			              </div>
			              <div class="card-footer PrimaryBg rounded-bottom">
			                <div class="container">
			                	<p class="text-center text-white-50"><small><i>Click here for Faculty Panel</i></small></p>
			                </div>
			              </div>
			            </div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="<?php echo base_url.'student' ?>" class="portal-link">
						<div class="card card-widget widget-user">
			              <!-- Add the bg color to the header using any of the bg-* classes -->
			              <div class="widget-user-header PrimaryBg rounded-top">
			                <h3 class="widget-user-username tertiaryColor rounded-top">Student</h3>
			              </div>
			              <div class="widget-user-image">
			                <span class="img-circle elevation-2 fa fa-users portial-icon"></span>
			              </div>
			              <div class="card-footer PrimaryBg rounded-bottom">
			                <div class="container">
			                	<p class="text-center text-white-50"><small><i>Click here for Student Panel</i></small></p>
			                </div>
			              </div>
			            </div>
					</a>
				</div>
			</div>
		
		<div>
	</div>

</div>