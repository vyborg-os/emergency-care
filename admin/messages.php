<?php 
include_once('header.php');
?>

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Inbox</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <div class="email-header">
                                <div class="row">
                                    <div class="col-sm-10 col-md-8 col-8 top-action-left">
                                        <div class="float-left">
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Select <i class="fa fa-angle-down "></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">All</a>
                                                    <a class="dropdown-item" href="#">None</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Read</a>
                                                    <a class="dropdown-item" href="#">Unread</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown">Actions <i class="fa fa-angle-down "></i></button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Reply</a>
                                                    <a class="dropdown-item" href="#">Forward</a>
                                                    <a class="dropdown-item" href="#">Archive</a>
                                                    <div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Mark As Read</a>
                                                    <a class="dropdown-item" href="#">Mark As Unread</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" class="btn btn-white dropdown-toggle" data-toggle="dropdown"><i class="fa fa-folder"></i> <i class="fa fa-angle-down"></i></button>
                                                <div role="menu" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Social</a>
                                                    <a class="dropdown-item" href="#">Forums</a>
                                                    <a class="dropdown-item" href="#">Updates</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Spam</a>
                                                    <a class="dropdown-item" href="#">Trash</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">New</a>
                                                </div>
                                            </div>
                                            <div class="btn-group dropdown-action">
                                                <button type="button" data-toggle="dropdown" class="btn btn-white dropdown-toggle"><i class="fa fa-tags"></i> <i class="fa fa-angle-down"></i></button>
                                                <div role="menu" class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Work</a>
                                                    <a class="dropdown-item" href="#">Family</a>
                                                    <a class="dropdown-item" href="#">Social</a>
													<div class="dropdown-divider"></div> 
                                                    <a class="dropdown-item" href="#">Primary</a>
                                                    <a class="dropdown-item" href="#">Promotions</a>
                                                    <a class="dropdown-item" href="#">Forums</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="float-left d-none d-sm-block">
                                            <input type="text" placeholder="Search Messages" class="form-control search-message">
                                        </div>
                                    </div>
                                    <div class="col-sm-2 col-md-4 col-4 top-action-right">
                                        <div class="text-right">
                                            <span class="text-muted d-none d-md-inline-block">Showing 10 of 112 </span>
                                            <button type="button" title="Refresh" data-toggle="tooltip" class="btn btn-white d-none d-md-inline-block"><i class="fa fa-refresh"></i></button>
                                            <div class="btn-group">
                                                <a class="btn btn-white"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-white"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="email-content">
								<div class="table-responsive">
									<table class="table table-inbox table-hover">
										<thead>
											<tr>
												<th colspan="6">
													<input type="checkbox" id="check_all">
												</th>
											</tr>
										</thead>
										<tbody>
											<tr class="unread clickable-row" data-href="viewmsg.php">
                                            <a href="viewmsg.php">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><a href="viewmsg.php">view <i class="fa fa-eye"></i></a></td>
												<td class="name">John Doe</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td></td>
                                                <td class="mail-date">13:14</td>
                                            </a>
											</tr>
											<tr class="unread clickable-row" data-href="#">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><a href="viewmsg.php">view <i class="fa fa-eye"></i></a></td>
												<td class="name">Richard Parker</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td></td>
												<td class="mail-date">18 Sep</td>
											</tr>
											<tr class="clickable-row" data-href="#">
												<td>
													<input type="checkbox" class="checkmail">
												</td>
												<td><a href="viewmsg.php">view <i class="fa fa-eye"></i></a></td>
												<td class="name">John Smith</td>
												<td class="subject">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</td>
												<td></td>
												<td class="mail-date">21 Aug</td>
											</tr>
											
										</tbody>
									</table>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
include_once('footer.php');
?>