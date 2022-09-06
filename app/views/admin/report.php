<?php 
include APPROOT.'/views/includes/head.php';
include APPROOT.'/views/includes/nav.php';
include APPROOT.'/views/includes/sidenav.php';
?>

<section class="content">
    <div class="block-header d-print-none">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
            <?php //var_dump($data['total_app']);?>
                <h2>Report Page
                <small class="text-muted">Welcome! <?=$_SESSION['fullname']?></small>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 d-none d-print-block">
        <h1 class="hd1 text-center">UNIVERSITY OF CAPE COAST </h1>
        <h1 class="hd1 text-center">INSTITUTE OF EDUCATION </h1>
        <h2 class="hd1 text-center">TEACHERS RECRUITMENT LIST </h2>
    </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header d-print-none">
                        <h2><strong class="txt"> REPORT</strong> PAGE </h2>
                    </div>
                    <div class="row d-print-none">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                        <form action="<?php echo URLROOT; ?>/report" method="post" class="form-inline">
                        <?php //var_dump($_POST['degree_status']) ?>
                        <!-- <div class="content row"> -->
                        <!-- <div class="input-group input-lg col-md-12"> -->
                        <label for="degree_status">Select a search option</label>
                        <select class="form-control show-tick" id="degree_status" name="degree_status" >
                            <option value="">- Second Degree Status -</option>
                            <option value="1">SELECTED</option>
                            <option value="2">REJECTED</option>
                            <option value="3">APPOINTED</option>
                            <option value="4">NOT APPOINTED</option>
                        </select>
                        <!-- </div> -->
                        <!-- <div class="col-md-4"> -->
                        <button type="submit" class="btn btn-round btn-md waves-effect waves-light" style="background-color:#1c2473;">
                        SEARCH</button>
                        <!-- </div> -->
                        <!-- </div> -->
                        </form>                                                
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
            </div>
        </div> 
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                    <?php if(isset($data['total_srh'])){
                    ?>
                        <h2><strong class="txt"> 
                        <?=(($_POST['degree_status'] == 1)?'SELECTED APPLICANTS':
                        (($_POST['degree_status'] == 2)?'REJECTED APPLICANTS':
                        (($_POST['degree_status'] == 3)?'APPOINTED APPLICANTS':
                        (($_POST['degree_status'] == 1)?'NOT APPOINTED APPLICANTS':'')))) ?>
                        </strong> LIST </h2>
                        <?php } ?>
                        <ul class="header-dropdown d-print-none">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);" onclick="print()">Print Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <?php if(isset($data['total_srh'])):
                    ?>
                    <div class="body">
                        <div>
                            <table class="table table-bordered table-striped ">
                                <thead>
                                    <tr>
                                        <th>Applicants Fullname</th>
                                        <th>Phone Number</th>
                                        <th>Current Location</th>
                                        <th>First Degree</th>
                                        <th>Second Degree</th>
                                        <th>Date of Birth</th>                                            
                                        <th>Date Submitted</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($data['total_srh'] as $data){ ?>
                                    <tr>
                                        <td><?php echo $data->fname.' '.$data->mname.' '.$data->lname?></td>
                                        <td><?php echo $data->phone_no?></td>
                                        <td><?php echo $data->curr_loc?></td>
                                        <td><?php echo $data->f_degree?></td>
                                        <td><?php echo $data->s_degree?></td>
                                        <td>
                                        <?php echo $data->dob?>
                                        </td>
                                        <td><?php echo $data->date_submitted?></td>
                                        <td><span class="badge <?=((($data->status == 2) || ($data->status == 4))?'badge-danger':'badge-success')?> ">
                                        <?=(($data->status == 0)?'Pending':(($data->status == 1)?'Selected':(($data->status == 2)?'Rejected':(($data->status == 3)?'Appointed':(($data->status == 4)?'Not Appointed':'')))))?></span>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="container">
                        <marquee direction="right" behavior="alternate"><p>Please select a search option</p></marquee>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>                
    </div>
</section>

<?php 
include APPROOT."/views/includes/footer.php";
?>

