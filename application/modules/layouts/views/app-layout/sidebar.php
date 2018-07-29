<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">

    <div class="main-menu-content">

      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <li class=" navigation-header">

          <!-- <span>Cityook Admin</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"

          data-original-title="General"></i> -->

        </li>

        <!-- <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="">Employees</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="employees/add">Add Employee</a>

            </li>

            <li class="active"><a class="menu-item" href="employees">Employees List</a>

            </li>
          </ul>

        </li> -->
		<li class=" nav-item">
          <a class="dropdown-item" href="<?php echo base_url();?>admin/dashboard"><i class="fa fa-home"></i> Dashboard</a>

        </li>

        <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="">Category</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="<?php echo base_url('/admin/service/category/create');?>">Add Category</a>

            </li>

            <li class=""><a class="menu-item" href="<?php echo base_url('/admin/service/categories');?>">Manage Category</a>

            </li>
             <li class=""><a class="menu-item" href="<?php echo base_url('/admin/service/category/cms');?>">Manage Category Cms</a>
            </li>

            <!-- <li><a class="menu-item" href="dashboard-fitness.html">Fitness</a>

            </li> -->

          </ul>

        </li>

        <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="">Service</span></a>

          <ul class="menu-content">

            <li><a class="menu-item" href="<?php echo base_url('/admin/service/create');?>">Add Service</a>

            </li>

            <li class=""><a class="menu-item" href="<?php echo base_url('/admin/services');?>">Manage Service</a>

            </li>
            </li>
             <li class=""><a class="menu-item" href="<?php echo base_url('/admin/service/cms');?>">Manage Service Cms</a>
            </li>

            <!-- <li><a class="menu-item" href="dashboard-fitness.html">Fitness</a>

            </li> -->

          </ul>

        </li>
		
		 <li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="">Customer</span></a>
			<ul class="menu-content">
			<li class=""><a class="menu-item" href="<?php echo base_url('admin/customers');?>">Customer List</a></li>
			<!-- <li><a class="menu-item" href="dashboard-fitness.html">Fitness</a> </li> -->
			</ul>
		</li>
		<li class=" nav-item"><a href="#"><span class="menu-title" data-i18n="">Employee</span></a>
			<ul class="menu-content">
			<li class=""><a class="menu-item" href="<?php echo base_url('admin/employee/Employee');?>">Employee List</a></li>
			<!-- <li><a class="menu-item" href="dashboard-fitness.html">Fitness</a> </li> -->
			</ul>
		</li>
		

        

        <li class=" nav-item">
          <a class="dropdown-item" href="<?php echo base_url();?>logout"><i class="ft-power"></i> Logout</a>

        </li>

        

      </ul>

    </div>

  </div>