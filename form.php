<div class="da-panel">
    <div class="da-panel-header">
            <span style="font-size:28px;">Progress Report </span><br>
            <span style="font-size:24px;">Grants for Advanced Research in Education (GARE)</span><br><hr>
            <span style="font-size:14px;">Government of the peoples' Republic of Bangladesh</span><br>
            <span style="font-size:14px;">Ministry of Education</span><br>
            <span style="font-size:14px;">Seceondary and higher Education division</span><br>
            <span style="font-size:14px;">Bangladesh Bureau of Educational Information Statistics (BANBEIS)</span>
    </div>

		<div class="da-panel-content">
                <form method="post" id="progress_form" action="<?php echo base_url('pi_request/progress_report_submit'); ?>">

<table id="table">
    <tr style="border-bottom:2px solid #fff;">
        <td align="left" colspan="2">Progress Report for the Fiscal Year</td>
        <td align="left" colspan="3">
            <select name="fiscal_year" id="fiscal_year" style="padding:5px;">
                <option value="">Select Fiscal Year</option>
                <option value="2020-2021">2020-2021</option>
                <option value="2021-2022">2021-2022</option>
                <option value="2022-2023">2022-2023</option>
                <option value="2023-2024">2023-2024</option>
                <option value="2024-2025">2024-2025</option>
                <option value="2025-2026">2025-2026</option>
            </select>
        </td>
    </tr>
    <tr style="border-bottom:2px solid #fff;"> 
      <td align="left" colspan="2">Project status</td>
      <td align="left" colspan="3">
      <select name="project_status_year" id="project_status_year" style="padding:5px;">
                <option value="">Select Project status</option>
                <option value="1">1st year running</option>
                <option value="2">2nd year running</option>
                <option value="3">3rd year running</option>
      </select>
      </td>
    </tr>
    <tr style="border-bottom:2px solid #fff;"> 
      <td align="left" colspan="2">Project report of</td>
      <td align="left" colspan="3">
      <select name="project_report_year" id="project_report_year" style="padding:5px;">
                <option value="">Select Project report</option>
                <option value="1">1st year</option>
                <option value="2">2nd year</option>
                <option value="3">3rd year</option>
      </select>
      </td>
    </tr>
    <tr>
        <td align="left" colspan="2">1.a) Name of the Project Title </td>
        <td align="left" colspan="3" style="color:black; font-size:15px;"><?php echo $records['project_title']; ?></td>
        <input type="hidden" name="project_title" value="<?php echo $records['project_title']; ?>">
    </tr>
    <tr style="border-bottom:2px solid #fff;">
        <td align="left" colspan="2" style="padding-left:22px;">b) Project ID: </td>
        <td align="left" colspan="3" style="color:black; font-size:15px;"><?php echo $records['pcn_number']; ?></td>
        <input type="hidden" name="pcn_number" value="<?php echo $records['pcn_number']; ?>">
    </tr>
    <tr>
        <td align="left" colspan="2">2.a) Name and designation of Principal Investigator (PI): </td>
        <td align="left" colspan="3" style="color:black; font-size:15px;"><?php echo $records['pi_full_name'].' ,'.$records['pi_designation']; ?></td>
        <input type="hidden" name="pi_full_name" value="<?php echo $records['pi_full_name'].' ,'.$records['pi_designation']; ?>">
    </tr>
    <tr style="border-bottom:2px solid #fff;">
        <td align="left" style="padding-left:22px; font-size:15px;" colspan="2">b) Name and designation of Co-principal Investigator (Co-PI): </td>
        <td align="left" colspan="3" style="color:black; font-size:15px;"><?php echo $records['ci_full_name'].' ,'.$records['ci_designation']; ?></td>
        <input type="hidden" name="ci_full_name" value="<?php echo $records['ci_full_name'].' ,'.$records['ci_designation']; ?>">
    </tr>
    <tr style="border-bottom:2px solid #fff;">
        <td align="left" colspan="2">3. Funding fiscal year: </td>
        <td align="left" colspan="3">
        <select name="funding_fiscal_year" id="funding_fiscal_year" style="padding:5px;">
                <option value="">Select Funding Fiscal Year</option>
                <option value="2020-2021">2020-2021</option>
                <option value="2021-2022">2021-2022</option>
                <option value="2022-2023">2022-2023</option>
                <option value="2023-2024">2023-2024</option>
                <option value="2024-2025">2024-2025</option>
                <option value="2025-2026">2025-2026</option>
            </select>
        </td>
    </tr>
    <tr><td colspan="6">&nbsp;&nbsp;</td></tr>
    <tr>
        <td align="left" colspan="2">4. Budget Allocation: </td>
        <td align="left" colspan="3"></td>
    </tr>
    <tr>
        <td style="border:1px solid #ccc;" width="17%">Installment</td>
        <td style="border:1px solid #ccc;" width="17%">1st year(FY)</td>
        <td style="border:1px solid #ccc;" width="17%">2nd year(FY)</td>
        <td style="border:1px solid #ccc;" width="17%">3rd year(FY)</td>
        <td style="border:1px solid #ccc;" width="17%">Total</td>
    </tr>
    <tr>
        <td style="border:1px solid #ccc; color:black; font-size:15px;"  width="17%">Allocation (in Tk lac.)</td>
        <td style="border:1px solid #ccc; color:black; font-size:15px;" width="17%"><?php echo $records['grand_total_year1']; ?></td>
            <input type="hidden" name="grand_total_year1" value="<?php echo $records['grand_total_year1']; ?>">
        <td style="border:1px solid #ccc; color:black; font-size:15px;" width="17%"><?php echo $records['grand_total_year2']; ?></td>
            <input type="hidden" name="grand_total_year2" value="<?php echo $records['grand_total_year2']; ?>">
        <td style="border:1px solid #ccc; color:black; font-size:15px;" width="17%"><?php echo $records['grand_total_year3']; ?></td>
            <input type="hidden" name="grand_total_year3" value="<?php echo $records['grand_total_year3']; ?>">
        <td style="border:1px solid #ccc; color:black; font-size:15px;" width="17%"><?php echo $records['grand_total_all_year']; ?></td>
            <input type="hidden" name="grand_total_all_year" value="<?php echo $records['grand_total_all_year']; ?>">
    </tr>
    </table>
    <table id="objective_workplan">
    <tr style="border-bottom:2px solid #fff;"><td colspan="6">&nbsp;&nbsp;</td></tr>
    <tr>
        <td align="left" colspan="6">5. Progress of the Research activities with respective year: (objectivewise) </td>
    </tr>
    <tr>
        <td style="border:1px solid #ccc;" colspan="2">Objectives/Workplan</td>
        <td style="border:1px solid #ccc;" colspan="2">Progress/achievements</td>
        <td style="border:1px solid #ccc;">% of the achievement with respect to target</td>
        <td style="border:1px solid #ccc;">Remarks</td>
    </tr>
    
    <tr>
        <td style="border:1px solid #ccc;" colspan="2"><input type="text" size="47" style="padding:7px;" name="objectives_name[]" id="objectives_name"></td>
        <td style="border:1px solid #ccc;"  colspan="2"><input type="text" size="45" style="padding:7px;" name="progress_achiev1[]" id="progress_achiev1"></td>
        <td style="border:1px solid #ccc;"><input type="number" id="parcent_range1" style="width:50px;" size="5" name="parcent_range1[]">%</td>
        <td style="border:1px solid #ccc;"><textarea id="remark1" name="remark1[]" rows="2" cols="25"></textarea></td>
    </tr>
    <tr>
        <td style="border:1px solid #ccc;" colspan="2"><input type="text" size="47" style="padding:7px;" name="objectives_name[]" id="objectives_name"></td>
        <td style="border:1px solid #ccc;"  colspan="2"><input type="text" size="45" style="padding:7px;" name="progress_achiev1[]" id="progress_achiev1"></td>
        <td style="border:1px solid #ccc;"><input type="number" size="5" id="parcent_range1" style="width:50px;" name="parcent_range1[]">%</td>
        <td style="border:1px solid #ccc;"><textarea id="remark1" name="remark1[]" rows="2" cols="25"></textarea></td>
    </tr>
    </table>
    <table id="table">
    <tr>
        <td colspan="6" align="right"><input type="button" id="add_btn" value="Add More.."></td>
    </tr>
    </table>
    <table id="table_expenditure">
	<!-- <tr style="border-bottom:2px solid #fff;"><td colspan="6">&nbsp;&nbsp;</td></tr>	 -->
    									
    <tr>
        <td align="left" colspan="6" style="border-top:2px solid #fff;">6. Expenditure details: </td>
    </tr>
    <tr>
        <td style="border:1px solid #ccc;">Name of the Item</td>
        <td style="border:1px solid #ccc;">Qty</td>
        <td style="border:1px solid #ccc; width:130px;">Allocatted Amount</td>
        <td style="border:1px solid #ccc; width:120px;">Expenditure</td>
        <td style="border:1px solid #ccc;">Process of Procurement/Engagement</td>
        <td style="border:1px solid #ccc;">Remarks</td>
    </tr>
    <tr>
        <td style="border:1px solid #ccc;"><input type="text" size="30" style="padding:10px; height:30px;" name="name_of_itme[]" id="name_of_itme" placeholder="1. Equipment (if applicable)"></td>
        <td style="border:1px solid #ccc;"><input type="number" name="expenditure_qty[]" id="expenditure_qty" style="width:35px; padding:7px;"></td>
        <td style="border:1px solid #ccc;"><input type="number" name="allocated_amnt[]" id="allocated_amnt" style="width:100px; padding:7px;"></td>
        <td style="border:1px solid #ccc;"><input type="number" name="expenditure_amnt[]" id="expenditure_amnt" style="width:100px; padding:7px;"></td>
        <td style="border:1px solid #ccc;"><input type="text" size="30" style="padding:10px; height:30px;" name="process_of_procurement[]" id="process_of_procurement"></td>
        <td style="border:1px solid #ccc;"><textarea id="remark3" name="remark3[]" rows="2" cols="20"></textarea></td>
    </tr>
    <tr>
        <td style="border:1px solid #ccc;"><input type="text" size="30" style="padding:10px; height:30px;" name="name_of_itme[]" id="name_of_itme" placeholder="2. Consumables accessories/Laboratory/Field supplies"></td>
        <td style="border:1px solid #ccc;"><input type="number" name="expenditure_qty[]" id="expenditure_qty" style="width:35px; padding:7px;"></td>
        <td style="border:1px solid #ccc;"><input type="number" name="allocated_amnt[]" id="allocated_amnt" style="width:100px; padding:7px;"></td>
        <td style="border:1px solid #ccc;"><input type="number" name="expenditure_amnt[]" id="expenditure_amnt" style="width:100px; padding:7px;"></td>
        <td style="border:1px solid #ccc;"><input type="text" size="30" style="padding:10px; height:30px;" name="process_of_procurement[]" id="process_of_procurement"></td>
        <td style="border:1px solid #ccc;"><textarea id="remark3" name="remark3[]" rows="2" cols="20"></textarea></td>
    </tr>
    </table>
    <table id="table">
    <tr>
        <td colspan="6" align="right"><input type="button" id="add_btn_expenditure" value="Add More.."></td>
    </tr>
	<!-- <tr style="border-bottom:2px solid #fff;"><td colspan="6">&nbsp;&nbsp;</td></tr>										 -->
    </table>
    <table id="table_publication">
    <tr>
        <td align="left" colspan="6" style="border-top:2px solid #fff;">7. List of Publications (Other than thesis paper): </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="text" name="publications_name[]" id="publications_name" style="padding:7px;" size="50" placeholder="name"></td>
        <td colspan="3" align="left"><input type="text" name="publications_title[]" id="publications_title" style="padding:7px;" size="90" placeholder="title"></td>
        <td align="right"><input type="button" id="add_btn_publish" value="Add More.."></td>
    </tr>
    </table>
    <table id="table">
    <tr style="border-bottom:2px solid #fff;"><td colspan="6">&nbsp;&nbsp;</td></tr>										
    <tr>
        <td align="left" colspan="6">8. Overall Remarks: </td>
    </tr>
    <tr>
        <td align="left" colspan="6"><textarea id="overall_remarks" name="overall_remarks" rows="4" cols="160"></textarea></td>
    </tr>	
    <tr>
        <td colspan="3">
            <p style="margin-top:50px;text-align:center;margin-left:0px;"><input type="file" name="ci_sig" id="ci_sig"></p>
            <p style="margin-top:-20px;text-align:center;">-------------------------------------------------------------------------</p>
            <p style="margin-top:-20px;margin-left:0px;text-align:center;margin-bottom:30px;font-weight:bold;font-size:12px;">
                    (Image Format .jpg, .jpeg, .png and Size : 300 kb)</p>
            <p style="margin-top:-20px;margin-left:0px;text-align:center;margin-bottom:30px;font-weight:bold;font-size:12px;color:red;">
                    (You Must Upload Co- Principal Investigator Signature Image)</p>
            <p style="margin-top:-20px;margin-left:0px;text-align:center;font-size:20px;">Signature of the Co- Principal Investigator</p>
        </td>
        <td colspan="3">
            <p style="margin-top:50px;text-align:center;margin-left:0px;"><input type="file" name="pi_sig" id="pi_sig"></p>
            <p style="margin-top:-20px;text-align:center;">-------------------------------------------------------------------------</p>
            <p style="margin-top:-20px;margin-left:0px;text-align:center;margin-bottom:30px;font-weight:bold;font-size:12px;">
                    (Image Format .jpg, .jpeg, .png and Size : 300 kb)</p>
            <p style="margin-top:-20px;margin-left:0px;text-align:center;margin-bottom:30px;font-weight:bold;font-size:12px;color:red;">
                    (You Must Upload Principal Investigator Signature Image)</p>
            <p style="margin-top:-20px;margin-left:0px;text-align:center;font-size:20px;">Signature of the Principal Investigator</p>
        </td>
    </tr>					
</table>
<div class="buttonsarea" style="margin-bottom:10px;">
    <input type="submit" value="Save &amp; Submit" name="submit_form" id="btn_submit_form" class="btn btn-primary btn-large">
</div>

                </form>

		</div>
</div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    //form validation
    $("#progress_form").validate({
        rules: {
            fiscal_year: "required",
            project_status_year: "required",
            project_report_year: "required",
            funding_fiscal_year: "required",
            ci_sig: {
                required: true,
                extension: "jpg|jpeg|png"
            },
            pi_sig: {
                required: true,
                extension: "jpg|jpeg|png"
            }
        },
        messages: {
            fiscal_year: "Please select fiscal year",
            project_status_year: "Please select project status",
            project_report_year: "Please select project report",
            funding_fiscal_year: "Please select funding fiscal year",
        }
    });
    

    var n = 1;
    var j = 1;
    var k = 1;
    //add more objective workplan
    $('#add_btn').click(function(){
        n++;
        var html = '';
        html += '<tr id="row'+n+'"><td style="border:1px solid #ccc;" colspan="2"><input type="text" size="47" style="padding:7px;" name="objectives_name[]" id="objectives_name"></td>';
        html += '<td style="border:1px solid #ccc;" colspan="2"><input type="text" size="45" style="padding:7px;" name="progress_achiev1[]" id="progress_achiev1"></td>';
        html += '<td style="border:1px solid #ccc;"><input type="number" style="width:50px;" id="parcent_range1" size="5" name="parcent_range1[]">%</td>';
        html += '<td style="border:1px solid #ccc;"><textarea id="remark1" name="remark1[]" rows="2" cols="25"></textarea></td>';
        html += '<td><button type="button" id="'+n+'" class="remove_btn">&#x2716;</button></td></tr>';
        $('#objective_workplan').append(html);
    });

    //remove objective workplan
    $(document).on('click', '.remove_btn', function(){
        var row_id = $(this).attr('id');
        $('#row'+row_id+'').remove();
        console.log('workplan: '+row_id);
    });

    //add more expenditure details
    $('#add_btn_expenditure').click(function(){
        j++;
        var html_output = '';
        html_output += '<tr id="rows'+j+'"><td style="border:1px solid #ccc;"><input type="text" size="30" style="padding:10px; height:30px;" name="name_of_itme[]" id="name_of_itme"></td>';
        html_output += '<td style="border:1px solid #ccc;"><input type="number" name="expenditure_qty[]" id="expenditure_qty" style="width:35px; padding:7px;"></td>';
        html_output += '<td style="border:1px solid #ccc;"><input type="number" name="allocated_amnt[]" id="allocated_amnt" style="width:100px; padding:7px;"></td>';
        html_output += '<td style="border:1px solid #ccc;"><input type="number" name="expenditure_amnt[]" id="expenditure_amnt" style="width:100px; padding:7px;"></td>';
        html_output += '<td style="border:1px solid #ccc;"><input type="text" size="30" style="padding:10px; height:30px;" name="process_of_procurement[]" id="process_of_procurement"></td>';
        html_output += '<td style="border:1px solid #ccc;"><textarea id="remark3" name="remark3[]" rows="2" cols="20"></textarea></td>';
        html_output += '<td><button type="button" id="'+j+'" class="romove_btn_exp">&#x2716;</button></td></tr>';
        $('#table_expenditure').append(html_output);
    });

    //remove expenditure details
    $(document).on('click', '.romove_btn_exp', function(){
        var exp_row_id = $(this).attr('id');
        $('#rows'+exp_row_id+'').remove();
        console.log('expenditure: '+exp_row_id);
    });

    //add more publication
    $('#add_btn_publish').click(function(){
        k++;
        var html_pub = '';
        html_pub += '<tr id="rowsp'+k+'"><td colspan="2" align="right"><input type="text" name="publications_name[]" id="publications_name" style="padding:7px;" size="50"></td>';
        html_pub += '<td colspan="3" align="left"><input type="text" name="publications_title[]" id="publications_title" style="padding:7px;" size="90"></td>';
        html_pub += '<td><button type="button" id="'+k+'" class="romove_btn_pub">&#x2716;</button></td></tr>';
        $('#table_publication').append(html_pub);
    });

    //remove publication
    $(document).on('click', '.romove_btn_pub', function(){
        var pub_row_id = $(this).attr('id');
        $('#rowsp'+pub_row_id+'').remove();
        console.log('publication: '+pub_row_id);
    });
    
});

</script>