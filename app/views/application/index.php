<?php 
include APPROOT.'/views/includes/shrheader.php';
// include APPROOT.'/views/includes/nav.php';
// include APPROOT.'/views/includes/sidenav.php';
// include APPROOT.'/views/includes/chat.php';
?>
<section class="container">
    <div class="block-header mt-5">
        <div class="row mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <h2>TUTORS APPLICATION FORM <?php //var_dump($data['total_app']);?>
                <small class="text-muted">Apply as a tutor for the UCC Top-up Program</small>
                </h2>
                <h5 class="text-danger"><strong>This application is open to ONLY tutors at the various Colleges of Education in Ghana.</strong></h5>

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
                                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
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
                                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="dob">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <label class="text-uppercase font-weight-bold" for="gender">Gender</label>
                                <select class="form-control show-tick" id="gender" name="gender">
                                    <option value="">- Gender -</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                <label class="text-uppercase font-weight-bold" for="phone_no">Phone Number</label>
                                    <input type="tel" class="form-control" maxlength="10" id="phone_no" name="phone_no" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="text-uppercase font-weight-bold" for="curr_loc">CURRENT LOCATION (Eg. Town or City)</label>
                                    <input type="text" class="form-control" id="curr_loc" name="curr_loc" placeholder="Enter Your Current Location">
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
						<h2 class="font-weight-bold"><strong class="txt">ACADEMIC </strong> CREDENTIALS <small>Enter your academic infomation</small> </h2>
					</div>
					<div class="body">
                        <!-- <div class="row clearfix"> -->
                        <!-- <div class="col-md-12 col-lg-12 col-sm-12"> -->
                            <div class="col-md-12 col-lg-12 col-sm-12 text-uppercase">
                                <label for="input-folder-1 mt-3 font-weight-bold">Upload your Curriculum Vitae (CV)</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="cv" name="cv">
                                    <label class="custom-file-label text-lowercase" for="cv">Upload Your CV (.pdf/.docx/.jpg)</label>
                                </div>
                                <!-- <div class="file-loading">
                                    <input id="input-folder-1" name="input-folder-1[]" type="file">
                                </div> -->
                            </div>
                        <!-- </div> -->
                        <hr><br>
                        <div class="row clearfix">
                        <!-- <div class="col-md-12 col-lg-12 col-sm-12"> -->
                            <div class="col-md-4 col-lg-4 col-sm-4">
                                <div class="form-group text-uppercase">
                                    <label for="f_degree" class="font-weight-bold">First Degree qualification</label>
                                    <input type="text" class="form-control" name="f_degree" id="f_degree" placeholder="Enter Degree Type (Eg. BSC Computer Science)">
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 text-uppercase">
                                <label for="f_degree_cert" class="font-weight-bold">UPLOAD YOUR FIRST DEGREE CERTIFICATE </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="f_degree_cert" name="f_degree_cert">
                                    <label class="custom-file-label text-lowercase" for="f_degree_cert">Upload CERTIFICATE(.pdf/.docx/.jpg) </label>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 text-uppercase">
                                <label for="f_degree_trans" class="font-weight-bold">UPLOAD YOUR FIRST DEGREE transcript </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="f_degree_trans" name="f_degree_trans">
                                    <label class="custom-file-label text-lowercase" for="f_degree_trans">Upload transcript(.pdf/.docx/.jpg)</label>
                                </div>
                            </div>
                        <!-- </div> -->
                        </div>
                        <hr><br>
                        <div class="row clearfix">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="s_degree" class="font-weight-bold">SECOND DEGREE QUALIFICATION (eg. M.Phil/MSc/M.Ed. Teacher Education)</label>
                                    <input type="text" class="form-control" name="s_degree" id="s_degree" placeholder="SECOND DEGREE QUALIFICATION">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                                <label for="degree_status" class="font-weight-bold text-uppercase">Status of your second degree*</label>
                                    <select class="form-control show-tick" id="degree_status" name="degree_status" onchange="showDiv(this)">
                                        <option value="">- Second Degree Status -</option>
                                        <option value="COMPLETED">COMPLETED</option>
                                        <option value="ONGOING">ONGOING</option>
                                    </select>
                            </div>
                            <div class="col-md-12" id="com">
                            <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 text-uppercase">
                                <label for="sec_deg_cert" class="font-weight-bold">UPLOAD YOUR SECOND DEGREE CERTIFICATE  </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sec_deg_cert" name="sec_deg_cert">
                                    <label class="custom-file-label text-lowercase" for="sec_deg_cert">Upload CERTIFICATE(.pdf/.docx/.jpg)</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 text-uppercase">
                                <label for="sec_degree_trans" class="font-weight-bold">UPLOAD YOUR SECOND DEGREE TRANSCRIPT </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="sec_degree_trans" name="sec_degree_trans">
                                    <label class="custom-file-label text-lowercase" for="sec_degree_trans">Upload transcript(.pdf/.docx/.jpg)</label>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 text-uppercase"id="ongo" style="display:none;">
                                <label for="detail_result" class="font-weight-bold">UPLOAD YOUR DETAILED RESULTS</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="detail_result" name="detail_result">
                                    <label class="custom-file-label text-lowercase" for="detail_result">Upload DETAILED RESULTS (.pdf/.docx/.jpg)</label>
                                </div>
                            </div>
                        </div>
                        <hr><br>
                        <div class="row clearfix">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="t_degree" class="font-weight-bold">PhD QUALIFICATION (eg. PhD in Economics Education)</label>
                                    <input type="text" class="form-control" name="t_degree" id="t_degree" placeholder="PhD DEGREE QUALIFICATION">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 mb-4">
                                <label for="t_degree_status" class="font-weight-bold text-uppercase">Status of your PhD*</label>
                                    <select class="form-control show-tick" id="t_degree_status" name="t_degree_status" onchange="showDiv2(this)">
                                        <option value="">- PhD Status -</option>
                                        <option value="COMPLETED">COMPLETED</option>
                                        <option value="ONGOING">ONGOING</option>
                                    </select>
                            </div>
                            <div class="col-md-12" id="com2">
                            <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6 text-uppercase">
                                <label for="t_deg_cert" class="font-weight-bold">UPLOAD YOUR PhD CERTIFICATE  </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="t_deg_cert" name="t_deg_cert">
                                    <label class="custom-file-label text-lowercase" for="t_deg_cert">Upload CERTIFICATE(.pdf/.docx/.jpg)</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 text-uppercase">
                                <label for="t_degree_trans" class="font-weight-bold">UPLOAD YOUR PhD TRANSCRIPT </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="t_degree_trans" name="t_degree_trans">
                                    <label class="custom-file-label text-lowercase" for="t_degree_trans">Upload transcript(.pdf/.docx/.jpg)</label>
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 text-uppercase"id="ongo2" style="display:none;">
                                <label for="tb_detail_result" class="font-weight-bold">UPLOAD YOUR DETAILED RESULTS</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="tb_detail_result" name="tb_detail_result">
                                    <label class="custom-file-label text-lowercase" for="tb_detail_result">Upload DETAILED RESULTS (.pdf/.docx/.jpg)</label>
                                </div>
                            </div>
                        </div>
                        <hr><br>
                        <div class="row clearfix">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="study_cen1" class="font-weight-bold">SELECT YOUR CENTRE</label>
                                    <select class="form-control show-tick" id="study_cen1" name="study_cen1">
                                        <option value="">- Select Your Study Centre -</option>
                                        <?php foreach($data['total_cen'] as $centres):?>
                                            <option value="<?=$centres->centreid?>"><?php echo $centres->centre_name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6 course_sel">
                                <div class="form-group">
                                    <label for="course_sel" class="font-weight-bold">SELECT THE COURSE OF YOUR INTEREST</label>
                                    <select class="form-control show-tick" id="course_sel" name="course_sel">
                                        <option value="">- Course of Interest -</option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        <!-- <hr> -->
                        <!-- <div class="row clearfix">
                            <div class="col-md-3 col-lg-3 col-sm-3">
                                <div class="form-group">
                                    <label for="study_cen1" class="font-weight-bold">PREFERRED STUDY CENTRE A</label>
                                    <select class="form-control show-tick" id="study_cen1" name="study_cen1">
                                        <option value="">- Select Your Preferred Study Centre -</option>
                                        <option value="1">Administration and Supervision of Basic Schools</option>
                                        <option value="2">Psychological Issues in Human Development</option>
                                        <option value="3">Algebra and Trigonometry</option>
                                        <option value="4">Computer Literacy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-3">
                                <div class="form-group">
                                    <label for="study_cen2" class="font-weight-bold">PREFERRED STUDY CENTRE B</label>
                                    <select class="form-control show-tick" id="study_cen2" name="study_cen2">
                                        <option value="">- Select Your Preferred Study Centre -</option>
                                        <option value="1">Administration and Supervision of Basic Schools</option>
                                        <option value="2">Psychological Issues in Human Development</option>
                                        <option value="3">Algebra and Trigonometry</option>
                                        <option value="4">Computer Literacy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-3">
                                <div class="form-group">
                                    <label for="study_cen3" class="font-weight-bold">PREFERRED STUDY CENTRE C</label>
                                    <select class="form-control show-tick" id="study_cen3" name="study_cen3">
                                        <option value="">- Select Your Preferred Study Centre -</option>
                                        <option value="1">Administration and Supervision of Basic Schools</option>
                                        <option value="2">Psychological Issues in Human Development</option>
                                        <option value="3">Algebra and Trigonometry</option>
                                        <option value="4">Computer Literacy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-3 col-sm-3">
                                <div class="form-group">
                                    <label for="study_cen4" class="font-weight-bold">PREFERRED STUDY CENTRE D</label>
                                    <select class="form-control show-tick" id="study_cen4" name="study_cen4">
                                        <option value="">- Select Your Preferred Study Centre -</option>
                                        <option value="1">Administration and Supervision of Basic Schools</option>
                                        <option value="2">Psychological Issues in Human Development</option>
                                        <option value="3">Algebra and Trigonometry</option>
                                        <option value="4">Computer Literacy</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-5 mb-5">
                                <button type="submit" class="btn btn-block btn-round" style="background-color:#1c2473;">Submit</button>
                            </div>
                        </div> -->
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

$(document).ready(function() {
    // checkCookie();
    $('#staticBackdrop').modal('show');
});

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
    //   var file_data = $("#cv").fileinput();
      var file_data = $('#cv')[0].files;
      var file_data = $('#f_degree_trans')[0].files;
      var file_data = $('#f_degree_cert')[0].files;
      var file_data = $('#sec_deg_cert')[0].files;
      var file_data = $('#sec_degree_trans')[0].files;
      var file_data = $('#detail_result')[0].files;
      form_data.append('file', file_data);
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
          url:"<?php echo URLROOT; ?>/users/tutor_apply",
          method:"POST",
          dataType: 'text',
          cache:false,
          contentType:false,
          processData: false,
          data:form_data,
        //   data:$('#application_fm').serialize(),
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