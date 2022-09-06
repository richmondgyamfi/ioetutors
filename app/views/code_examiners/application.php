<?php 
include APPROOT.'/views/includes/shrheader2.php';
// include APPROOT.'/views/includes/nav.php';
// include APPROOT.'/views/includes/sidenav.php';
// include APPROOT.'/views/includes/chat.php';
// var_dump($data['total_cos']);
?>
<section class="container">
    <div class="block-header mt-5">
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>CODE EXAMINERS APPLICATION FORM <?php //var_dump($data['total_app']);?>
                <small class="text-muted">Apply as an examiner for the CoDE UCC </small>
                </h2>
                <h5 class="text-danger"><strong>This application is open to ONLY tutors at the various study centres.</strong></h5>

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="" id="application_fm" method="post">
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="card">
					<div class="header">
						<h2 class="text-uppercase font-weight-bold"><strong class="txt">Personal</strong> Details <small>Please fill the following form</small> </h2>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="fname">First Name</label>
                                    <input type="text" class="form-control" id="fname" required name="fname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="mname">Middle Name</label>
                                    <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle Name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="lname">Last Name</label>
                                    <input type="text" class="form-control" id="lname" required name="lname" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="staffno">Tutors Staff Number</label>
                                    <input type="text" class="form-control" id="staffno" required name="staffno" placeholder="Code Staff Number">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="dob">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" required name="dob" placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="text-uppercase font-weight-bold" for="gender">Gender</label>
                                <select class="form-control show-tick" id="gender" required name="gender">
                                    <option value="">- Gender -</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                <label class="text-uppercase font-weight-bold" for="phone_no">Phone Number</label>
                                    <input type="tel" class="form-control" maxlength="10" id="phone_no" required name="phone_no" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" required name="email" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="curr_loc">CURRENT LOCATION (Eg. Town or City)</label>
                                    <input type="text" class="form-control" id="curr_loc" required name="curr_loc" placeholder="Enter Your Current Location">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
        <div class="row clearfix">
			<div class="col-md-12">
				<div class="card">
					<div class="header mt-5 text-uppercase">
						<h2 class="font-weight-bold"><strong class="txt">OTHER </strong> CREDENTIALS <small>Enter your academic infomation</small> </h2>
					</div>
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="course">Course To Mark</label>
                                    <select class="form-control show-tick" id="course" required name="course">
                                        <option value="">- Course -</option>
                                        <?php foreach($data['total_cos'] as $totalcos){ ?>
                                            <option value="<?=$totalcos->course_name?>"><?=$totalcos->course_name?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="text-uppercase font-weight-bold" for="program">Programme</label>
                                <select class="form-control show-tick" id="program" required name="program">
                                    <option value="">- Programme -</option>
                                    <?php foreach($data['total_prog'] as $totalcos){ ?>
                                        <option value="<?=$totalcos->prog_name?>"><?=$totalcos->prog_name?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="text-uppercase font-weight-bold" for="centre">Centre</label>
                                <select class="form-control show-tick" id="centre" required name="centre">
                                    <option value="">- Centre -</option>
                                    <?php foreach($data['total_cen'] as $totalcos){ ?>
                                        <option value="<?=$totalcos->centre_name?>"><?=$totalcos->centre_name?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="text-uppercase font-weight-bold" for="level">Level</label>
                                <select class="form-control show-tick" id="level" required name="level">
                                    <option value="">- level -</option>
                                    <option value="100">100</option>
                                    <option value="150">150</option>
                                    <option value="200">200</option>
                                    <option value="300">300</option>
                                    <option value="400">400</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <label class="text-uppercase font-weight-bold" for="marked">Have You mark before?</label>
                                <select class="form-control show-tick" id="marked" required name="marked">
                                    <option value="">- Select One -</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <hr><br>
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="bankname">Bank Name</label>
                                    <input type="text" class="form-control" id="bankname" required name="bankname" placeholder="Bank Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="branch">Branch</label>
                                    <input type="text" class="form-control" id="branch" required name="branch" placeholder="Branch Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="acc_name">Account Name</label>
                                    <input type="text" class="form-control" id="acc_name" required name="acc_name" placeholder="Account Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="acc_no">Account Number</label>
                                    <input type="text" class="form-control" id="acc_no" required name="acc_no" placeholder="Account Number">
                                </div>
                            </div>
                        </div>
                        <hr><br>
                        <div class="col-sm-12 mt-5 mb-5">
                            <button type="submit" class="btn btn-block btn-round" style="background-color:#1c2473;">Submit</button>
                        </div>
                    </div>
				</div>
			</div>
		</div>
        </form>
    </div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header text-white" style="background-color: #1c2473;">
        <h5 class="modal-title" id="staticBackdropLabel">NOTICE TO APPLICANTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <h4 class="text-white bg-danger"><strong>This application is open to ONLY tutors at the various Colleges of Education in Ghana.</strong></h4>
      <p>
        <h5>Qualifications</h5>
        <p>Applicants must have at least a Master’s Degree with Dissertation or thesis. 
        The applicant must also have a post-graduate teaching experience.</p>


        <h5>Duties of A Course Tutor</h5>
        A Course Tutor is expected to: <br>
        •	Adopt/adapt teaching strategies to enhance the teaching and learning of the course applied for. <br>
        •	Support the assessment strategy proposed by the Course Expert at the University of Cape Coast. <br>
        •	Mark Quizzes and End-of-Semester Examination scripts.<br>
        •	Organise remedial teaching/learning sessions as and when necessary to meet the learning needs of students.<br>
        •	Guide the students to develop independent learning and critical thinking skills. <br>
        •	Provide advisory services to the Institute of Education, University of Cape Coast.<br>
        •	Etc.<br><br>

        <h5>Mode of Delivery</h5>
        <p>Successful applicants will use both online and face-to-face mode of delivery to engage students. </p>
        

        <h5>Accompanying documents to be uploaded</h5> 
        
        1.	Scanned copies of: <br>
        i)	1st degree certificate and transcript.<br>
        ii)	2nd degree certificate and transcript.<br>
        iii) PhD certificate and transcript (if any).<br><br>

        2.	Curriculum Vitae
        </p>
             </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default text-white" data-dismiss="modal" style="background-color:#1c2473;border-radius:20px;">Understood</button>
              </div>
    </div>
  </div>
</div>

<!--<div class="modal fade" id="infomodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color: #1c2473;">
                    <h5 class="modal-title" id="staticBackdropLabel">NOTICE TO APPLICANTS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>This application is open to ONLY tutors at the various Colleges of Education in Ghana.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default text-white" data-dismiss="modal" style="background-color:#1c2473;border-radius:20px;">Understood</button>
                </div>
            </div>
        </div>
    </div>-->
</section>
<?php 
include APPROOT."/views/includes/footer.php";
?>

<script>
$('#study_cen1').on('change',function(){
    var rid = $(this).val();
    // alert(rid);
    if(rid){
    $.ajax({
    method: "POST",
    url: '<?php echo URLROOT; ?>/ajax/courses',
    cache: false,
    data:'rid='+rid,
        success:function(data){
            // alert(data);
            $('.course_sel').html(data);
        },
        error: function(){
          alert("Something went wrong with the child option.")
          }
    });
}
// else{
//     $('#course_sel').html('<option value="">Select option</option>'); 
// }            
});


function showDiv(select){
    // var stval = document.getElementsByName('degree_status').value;
    if(select.value === 'COMPLETED'){
    var stval = document.getElementById('com').style.display = "block";
    var stval = document.getElementById('ongo').style.display = "none";
        // alert('select');
    }else if(select.value === 'ONGOING'){
    var stval = document.getElementById('ongo').style.display = "block";
    var stval = document.getElementById('com').style.display = "none";
        // alert('select1');
    }
}

function showDiv2(select){
    // var stval = document.getElementsByName('degree_status').value;
    if(select.value === 'COMPLETED'){
    var stval = document.getElementById('com2').style.display = "block";
    var stval = document.getElementById('ongo2').style.display = "none";
        // alert('select');
    }else if(select.value === 'ONGOING'){
    var stval = document.getElementById('ongo2').style.display = "block";
    var stval = document.getElementById('com2').style.display = "none";
        // alert('select1');
    }
}

// $(document).ready(function() {
//     // checkCookie();
//     $('#staticBackdrop').modal('show');
// });

// $(document).ready(function() {
//     // checkCookie();
//     $('#infomodal').modal('show');
// });

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$(document).ready(function(){
    $('#application_fm').on('submit',function(event){
      event.preventDefault();
      var form_data = new FormData(this);
      if ($('#fname').val() == '') {
        Swal.fire({
            // position: 'top-right',
              title: '<span class="text-danger font-weight-bold">Error!!!</span>',
              html: '<span class="text-danger">Please fill in your details</span>',
              showConfirmButton: false,
              width: 300,
              height: 200,
              imageUrl: '<?php echo URLROOT ?>/public/images/ucclogo1.png',
              imageWidth: 100,
              imageHeight: 100,
              imageAlt: 'Custom image',
              timer: 3000
            });
      }else{
        Swal.fire({
        //   position: 'top-right',
            html: '<span class="text-danger font-weight-bold"> Are you sure you want to apply?</span>',
            showConfirmButton: true,
            showCancelButton: true,
            width: 500,
            height: 200,
            imageUrl: '<?php echo URLROOT ?>/public/images/ucclogo1.png',
            imageWidth: 100,
            imageHeight: 100,
            imageAlt: 'Custom image',
            confirmButtonText: 'Yes!'
        //   timer: 3000
        }).then(function(result){
            if (result.value) {
        $.ajax({
          url:"exam_apply.php",
          method:"POST",
          dataType: 'text',
        //   cache:false,
        //   contentType:false,
        //   processData: false,
        //   data:form_data,
          data:$('#application_fm').serialize(),
          success:function(data)
          {
            console.log(data);
            var response = JSON.parse(data);
            console.log(response.status);
            if(response.status == 'success'){
              Swal.fire({
              title: 'Success!!!',
              html: '<span class="text-danger">'+response.message+'</span>',
              showConfirmButton: false,
              width: 300,
              height: 200,
              imageUrl: '<?php echo URLROOT ?>/public/images/ucclogo1.png',
              imageWidth: 100,
              imageHeight: 100,
              imageAlt: 'Custom image',
              timer: 3000
            }).then(function(){
                // location.replace("https://comedigitalize.com");
                location.reload();
            });
            $('#application_fm')[0].reset();
        //   $('#sub_form').html(data);
            }else if(response.status == 'error'){
              Swal.fire({
            //   position: 'top-right',
              title: '<span class="text-danger font-weight-bold">Error!!!</span>',
              html: '<span class="text-danger">'+response.message+'</span>',
              showConfirmButton: false,
              width: 300,
              height: 200,
              imageUrl: '<?php echo URLROOT ?>/public/images/ucclogo1.png',
              imageWidth: 100,
              imageHeight: 100,
              imageAlt: 'Custom image',
              timer: 3000
            });
            }

          }
        });
        }
    });
      }
    
    });
});

</script>
