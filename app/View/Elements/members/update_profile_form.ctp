<div class="innerLR">
    <div class="widget widget-4">
        <div class="widget-head">
            <h4 class="heading">Add/Update New Member</h4>
        </div>
        <div class="widget-body">
<div class="widget widget-2 widget-tabs widget-tabs-2">
    <div class="widget-head">
        <ul>
            <li class="active"><a class="glyphicons cardio" href="#website-traffic-tab" data-toggle="tab"><i></i>Personal Information
            <li><a class="glyphicons cardio" href="#website-traffic-tab3" data-toggle="tab"><i></i>Branch Information</a></li>
            <li><a class="glyphicons cardio" href="#website-traffic-tab4" data-toggle="tab"><i></i>Professional Information</a></li>
        </ul>
    </div>
    <div class="widget-body">
        <div class="tab-content">
            <div class="tab-pane active" id="website-traffic-tab">
                <!--<h5>Tab content #1</h5>-->
                <p><?php echo $this->element('members/personal_info_form'); ?></p>
            </div>
            <div class="tab-pane" id="website-traffic-tab3">
               <!-- <h5>Tab content #3</h5>-->
                <p><?php echo $this->element('members/branch_info_form'); ?></p>
            </div>
            <div class="tab-pane" id="website-traffic-tab4">
               <!-- <h5>Tab content #4</h5>-->
                <p><?php echo $this->element('members/profession_prof_form'); ?></p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>