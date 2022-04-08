    <div class="row">
    <div class="col-md-12">
        <form id="requestForm" enctype="multipart/form-data" method="post">
      <div>
      <div class="alert alert-danger" role="alert" style="display: none" id="error-box">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> There are errors on the page. Please review the items in red below.
      </div>

<div class="content formBorder">
    <div  style="margin-bottom: 10px">
    <strong>Class "Planning for Remembering Successful Outcomes" Information</strong>
    This form will help you, as the name, in your "Planning for Successful Outcomes".<br>
    <span class="required">*</span> indicates a required field
    </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="name"><strong>Facilitator</strong></label> <span class="required">*</span>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="email"><strong>Email</strong></label> <span class="required">*</span>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label heading" for="extension"><strong>Extension</strong></label> <span class="required">*</span>
                        <input type="text" class="form-control" id="extension" name="extension">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label heading" for="department"><strong>Department</strong></label> <span class="required">*</span>
                        <input type="text" class="form-control" id="department" name="department">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label heading"><strong>Location</strong></label>
                <div class="radio" style="margin-top:0">
                    <label>
                        <input type="checkbox" name="pa-campus" value="PCOM">
                        PCOM
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="checkbox" name="ga-campus" value="GA-PCOM">
                        GA-PCOM
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="checkbox" name="online-campus" value="ONLINE">
                        Online
                    </label>
                </div>
            </div>
<!-- BEGIN PLANNING FOR SUCCESSFUL OUTCOMES -->
<div class="row">
  <div class="col-md-12">
    <div class="form-group">           
            <div class="checkbox">
              <label>
                <input type="checkbox" name="outcomes" id="outcomes" value="yes">
                <strong><em>Remembering Expected Outcomes</em></strong>
              </label>
            </div>
            <div class="sub-options">
    <div class="formBorder">
            <div class="row">
                <div class="col-md-8">
                  <strong><u>Planning for Remembering Successful Outcomes</u></strong>
                    <div class="form-group">
                        <label for="class-module" class="control-label heading"><strong>Class Module</strong></label> <span class="required">*</span>
                        <input type="text" class="form-control" id="class-module" name="class-module">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="class-module" class="control-label heading"><strong>Dates:</strong></label> <span class="required">*</span>
                        <input class="pull-right" type="text" name="datefilter" value="" /><p></p><p></p>
                    </div>
                </div>

                        <script type="text/javascript">
                        $(function() {

                            $('input[name="datefilter"]').daterangepicker({
                                autoUpdateInput: false,
                                locale: {
                                    cancelLabel: 'Clear'
                                }
                            });

                            $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                                $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                            });

                            $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });

                            $('.daterange-single').on('show.daterangepicker', function(e){
                                var modalZindex = $(e.target).closest('.modal').css('z-index');
                            $('.daterangepicker').css('z-index', modalZindex+1);
                            });
                        });
                        </script>
            </div>
    <div class="formBorder">
            <div class="row">
                <div class="col-md-3">
                    <div>
                        <label for="date" class="control-label heading"><strong>Expected Outcome(s)</strong></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="to-date" class="control-label heading"><strong>% of Module Spent on This Outcome</strong></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="date" class="control-label heading"><strong>Level(s) of Mastery Expected</strong></label>
                    </div>
                </div>
                <div class="col-md-3">
                    <div>
                        <label for="to-date" class="control-label heading"><strong># of Exam Questions</strong></label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="outcome-a" name="outcome-a" value="Outcome (a)">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="percent-a" name="percent-a">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="levels-a" name="levels-a">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="questions-a" name="questions-a">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="outcome-b" name="outcome-b" value="Outcome (b)">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="percent-b" name="percent-b">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="levels-b" name="levels-b">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="questions-b" name="questions-b">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="outcome-c" name="outcome-c" value="Outcome (c)">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="percent-c" name="percent-c">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="levels-c" name="levels-c">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="questions-c" name="questions-c">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="text" class="form-control" id="outcome-d" name="outcome-d" value="Outcome (d)">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="percent-d" name="percent-d">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="levels-d" name="levels-d">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input type="number" class="form-control form-control-inline" id="questions-d" name="questions-d">
                    </div>
                </div>
            </div>
    </div>

    <div class="formBorder">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
            <div id='toolbar'>
                <button class='toolbar-btn bold' data-format='bold'>B</button>
                <button class='toolbar-btn italic' data-format='italic'>I</button>
                <button class='toolbar-btn underline' data-format='underline'>U</button>
                <select class='toolbar-ddl fontname' data-format='fontname'>
                    <option value=''></option>
                    <option value='Arial'>Arial</option>
                    <option value='Courier New'>Courier New</option>
                    <option value='Times New Roman'>Times New Roman</option>
                </select>
                <select class='toolbar-ddl fontsize' data-format='fontsize'>
                    <option value=''></option>
                    <option value='2'>Small</option>
                    <option value='3'>Normal</option>
                    <option value='4'>Big</option>
                    <option value='5'>Bigger</option>
                </select>
            </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
            <div id='container' contenteditable='true'>
            </div>
            </div>
          </div>
        </div>
    </div>

            </div>
          </div>
        </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group" id="file-group">
                            <label for="file" class="control-label heading">Attach any supplementary files and photos here <br>(limit 5 MB per file, 20 MB total)</label>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="file[]"></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="file[]"></span>
                                <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                            <button type="button" class="btn btn-default" id="add-file" style="margin-bottom: 15px;">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add another file
                            </button>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <p>All questions pertaining to filling out this form should be submitted to <a href="mailto:LouiseJo@pcom.edu?subject=PCOM Bloom's Revised Taxonomy">Louise Jones</a>.</p>
                <div class="form-group">
                    <button type="submit-re" value="Validate!" class="btn btn-primary">Submit</button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<!-- END PLANNING FOR SUCCESSFUL OUTCOMES -->
    </div>
  </div>
<!-- END REQUESTOR SECTION -->
