$(document).ready(function () {
//others designation
$('#pi_designation').change(function() {
    
    var pidVal = $(this).val();

    //Type Others
    if (pidVal == 10) {
        console.log(pidVal);
        $('#piDesignationOthers').show();
    } else {
        $('#piDesignationOthers').hide();
    }
});

//others department
$('.universit').change(function() {

    var pidpVal = $(this).val();
    console.log(pidpVal);
    if (pidpVal == 1268) {
        $('#universityOthers').show();
    } else {
        $('#universityOthers').hide();
    }
});

});
<p style="margin-left:80px;">
b) Designation <span style="color:red;font-size: 20px;">*</span>:
<?php
$select_attr = "class='universit' id='pi_designation'";
echo form_dropdown('pi_designation', array('' => 'Select..') + $designation_id, '', $select_attr);
?>
<span id="piDesignationOthers" style="display:none;"><input name="pi_designation_others" id="pi_designation_others" type="text" style="margin-left:10px" size="30"/></span>
<span id="pi_designation_msg"></span>
</p>
<p style="margin-left:80px;">d) Name of the University/Institution<span style="color:#FF0000;font-size: 25px;">*</span>: 
<?php $sty_class = 'class="universit",id="university_id"';
echo form_dropdown('university_id', $university_list, '', $sty_class); ?>
<span id="universityOthers" style="display:none;"><input name="university_id_others" id="university_id_others" type="text" style="margin-left:10px" size="30"/></span>
<span id="institute_id_msg"></span> <br></p>


if ($this->input->post('pi_designation') == 10) {
			$this->form_validation->set_rules('pi_designation_others', 'Designation Others', 'required');
} 
if ($this->input->post('university_id') == 1268) {
    $this->form_validation->set_rules('university_id_others', 'University/Institution Others', 'required');
} 