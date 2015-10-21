<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min','metisMenu.min','sb-admin-2','font-awesome.min','style','jquery.dataTables'));
		echo $this->Html->script(array('jquery.min','bootstrap.min','metisMenu.min','sb-admin-2','location','jquery.dataTables.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div id="wrapper">
		<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Career Guidance System 1.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>

                    <!-- <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <!-- <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                   <!--  <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul> -->
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul> -->
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse" style="background-color:#B5AFAF;min-height: Auto;">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <?php echo $this->Html->link('Dashboard',array('controller'=>'admin','action'=>'index')); ?>
                        </li>
    
                        <li>
                            <a href="#"><i class="fa fa-university"></i> Certify Authority<span class="fa arrow"></span></a>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-university"></i> Certify Authority<span class="fa arrow"></span></a>

                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Certify Authority',array('controller'=>'CertAuthorities','action'=>'index')) ?>
                                        </li>                            
                                        <li>
                                            <?php echo $this->Html->link('Add Certify Authority',array('controller'=>'CertAuthorities','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-university"></i> Certify Authority Type<span class="fa arrow"></span></a>
                                    
                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Certify Authority Type',array('controller'=>'CATypes','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Certify Authority Type',array('controller'=>'CATypes','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>
                             
                             <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-university"></i> Course By Certify Authority<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course By Certify Authority',array('controller'=>'CourseByCas','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course By Certify Authority',array('controller'=>'CourseByCas','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>

                                    <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-pencil"></i> Entrance<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Entrance',array('controller'=>'Entrances','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Entrance',array('controller'=>'Entrances','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                                    <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-pencil"></i> Course By Certify Authority Entrance<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course By Certify Authority Entrance',array('controller'=>'CourseByCaEntrances','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course By Certify Authority Entrance',array('controller'=>'CourseByCaEntrances','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>

                             <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Eligibility<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Eligibility',array('controller'=>'Eligibilities','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Eligibility',array('controller'=>'Eligibilities','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                            </ul>

                             <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Course Eligibility<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course Eligibility',array('controller'=>'CourseEligibilities','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course Eligibility',array('controller'=>'CourseEligibilities','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                            </ul>


                          <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Eligibility Test<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Eligibility Test',array('controller'=>'EligibilityTests','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Eligibility Test',array('controller'=>'EligibilityTests','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                            </ul>


                             <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Course Eligibility Test<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course Eligibility Test',array('controller'=>'CourseEligibilityTests','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course Eligibility Test',array('controller'=>'CourseEligibilityTests','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                            </ul>

                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Stream<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Stream',array('controller'=>'Streams','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Stream',array('controller'=>'Streams','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                            </ul>

                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-thumbs-up"></i> Mode Of Study<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Mode Of Study',array('controller'=>'modes','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Mode Of Study',array('controller'=>'modes','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                            </ul>

                        </li>   

                        <li>
                            <a href="#"><i class="fa fa-book"></i> Course<span class="fa arrow"></span></a>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-book"></i> Course<span class="fa arrow"></span></a>

                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course',array('controller'=>'Courses','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Courses',array('controller'=>'Courses','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-book"></i> Course Levels<span class="fa arrow"></span></a>
                                    
                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course Levels',array('controller'=>'CourseLevels','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course Levels',array('controller'=>'CourseLevels','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>
                             
                             <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-book"></i> Course Types<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course Types',array('controller'=>'CourseTypes','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course types',array('controller'=>'CourseTypes','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>
                        </li>  
                        <li>
                            <a href="#"><i class="fa fa-university"></i> Institution<span class="fa arrow"></span></a>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-university"></i> Institution<span class="fa arrow"></span></a>

                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Institution',array('controller'=>'Institutions','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Courses',array('controller'=>'Institutions','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-university"></i> Institution Types<span class="fa arrow"></span></a>
                                    
                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Institution Types',array('controller'=>'InstTypes','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Institution Types',array('controller'=>'InstTypes','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>
                             
                             <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-university"></i> Affiliation<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Affiliation',array('controller'=>'Affiliations','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Affiliation',array('controller'=>'Affiliations','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                                    <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-university"></i> Course By Institution<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course By Institution',array('controller'=>'CourseByInsts','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course By Institution',array('controller'=>'CourseByInsts','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>

                        </li>


                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Rank<span class="fa arrow"></span></a>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Rank<span class="fa arrow"></span></a>

                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Rank',array('controller'=>'Ranks','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Courses',array('controller'=>'Ranks','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Ranking Authority<span class="fa arrow"></span></a>
                                    
                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Ranking Authority',array('controller'=>'RankingAuthorities','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Ranking Authority',array('controller'=>'RankingAuthorities','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>
                                     <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Ranking Authority Type<span class="fa arrow"></span></a>
                                    
                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Ranking Authority Type',array('controller'=>'RaTypes','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Ranking Authority Type',array('controller'=>'RaTypes','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>
                                    
                             

                             
                             <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Certify Authority Rank<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Certify Authority Rank',array('controller'=>'CaRanks','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Certify Authority Rank',array('controller'=>'CaRanks','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                                    <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Course By Institution Rank<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course By Institution Rank',array('controller'=>'CourseByInstRanks','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course By Institution Rank',array('controller'=>'CourseByInstRanks','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>

                                      <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Course  Rank<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Course  Rank',array('controller'=>'CourseRanks','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Course  Rank',array('controller'=>'CourseRanks','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                                    <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Institution Rank<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Institution Rank',array('controller'=>'InstRanks','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Institution Rank',array('controller'=>'InstRanks','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-globe"></i> Place<span class="fa arrow"></span></a>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i> Country<span class="fa arrow"></span></a>

                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('Country',array('controller'=>'Countries','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add Courses',array('controller'=>'Countries','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i> State<span class="fa arrow"></span></a>
                                    
                                       <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('State',array('controller'=>'states','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add State',array('controller'=>'states','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>
                             
                             <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#"><i class="fa fa-globe"></i> City<span class="fa arrow"></span></a>
                                    
                                      <ul class="nav nav-second-level">
                                             <li>
                                            <?php echo $this->Html->link('City',array('controller'=>'cities','action'=>'index')) ?>
                                        </li>
                                        <li>
                                            <?php echo $this->Html->link('Add City',array('controller'=>'cities','action'=>'add')) ?>
                                        </li>

                                       </ul>
                                    </li>
                                    </ul>


                                   

                        </li>


                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->

        </nav>
        <!-- Page Content -->
        <div id="page-wrapper" style="margin: 0 0 0 222px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="content">
                                <?php echo $this->Session->flash(); ?>

                            <?php echo $this->fetch('content'); ?>
                        </div>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
		
		
	</div>
    <!-- <div id="footer">
        <span class="pull-right">Footer Content</span>
    </div> -->
	<style type="text/css">

	#footer {

		    height: 60px;
		    /*position: relative;*/
		    /*bottom: 0px;*/
            /*margin-bottom: 200px;*/
		    width: 100%;
		    background: #000;
		    padding:10px;
		    color:#fff;
	}
    .mandatory {
        color: red;
    }
    #flashMessage {
        background-color: #8BBD8B;
        padding: 15px;
        margin-top: 15px;
    }
    
	</style>
    <script type="text/javascript">
        $(document).ready(function(){
            
        });
    </script>
	
</body>
</html>
