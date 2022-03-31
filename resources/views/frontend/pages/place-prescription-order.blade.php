@extends('frontend.layouts.master')

@section('title','E-SHOP || Place Prescription Order')

@section('main-content')




<div id="content">

						
<div id="inner-content" class="wpisset-container wpisset-container-center wpisset-container-fluid">			
<div class="wpisset-row wpisset-main-grid">

    
    <main id="main" class="wpisset-main wpisset-col-xs-12">

        
        <div class="entry-content">
        
                
            <div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1638456011441 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid wpb_row_background-right-top vc_custom_1624524697112 vc_row-has-fill vc_row-o-content-middle vc_row-flex"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid wpb_row_background-center-top vc_custom_1598293517242 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner"><div class="wpb_wrapper"><h3 style="font-size: 36px;text-align: center" class="vc_custom_heading" >Prescription Order Form</h3><p style="text-align: center" class="vc_custom_heading vc_custom_1624519734912" ></p></div></div></div><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1598293436477"><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div><div class="wpb_column vc_column_container vc_col-sm-8"><div class="vc_column-inner"><div class="wpb_wrapper"><h3 style="font-size: 16px;text-align: center" class="vc_custom_heading vc_custom_1645693632812" >Fill our prescription order form and have one of our experienced staff members call you!</h3><div role="form" class="wpcf7" id="wpcf7-f45169-p45144-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/place-prescription-order/#wpcf7-f45169-p45144-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="45169" />
<input type="hidden" name="_wpcf7_version" value="5.3.1" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f45169-p45144-o1" />
<input type="hidden" name="_wpcf7_container_post" value="45144" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
<input type="hidden" name="_wpcf7cf_hidden_group_fields" value="" />
<input type="hidden" name="_wpcf7cf_hidden_groups" value="" />
<input type="hidden" name="_wpcf7cf_visible_groups" value="" />
<input type="hidden" name="_wpcf7cf_repeaters" value="[]" />
<input type="hidden" name="_wpcf7cf_steps" value="{}" />
<input type="hidden" name="_wpcf7cf_options" value="{&quot;form_id&quot;:45169,&quot;conditions&quot;:[{&quot;then_field&quot;:&quot;contact-person&quot;,&quot;and_rules&quot;:[{&quot;if_field&quot;:&quot;i-am&quot;,&quot;operator&quot;:&quot;not equals&quot;,&quot;if_value&quot;:&quot;Patient&quot;}]},{&quot;then_field&quot;:&quot;delivery-address&quot;,&quot;and_rules&quot;:[{&quot;if_field&quot;:&quot;preferred-method&quot;,&quot;operator&quot;:&quot;equals&quot;,&quot;if_value&quot;:&quot;Delivery&quot;}]},{&quot;then_field&quot;:&quot;address&quot;,&quot;and_rules&quot;:[{&quot;if_field&quot;:&quot;same-address&quot;,&quot;operator&quot;:&quot;not equals&quot;,&quot;if_value&quot;:&quot;Yes&quot;}]}],&quot;settings&quot;:{&quot;animation&quot;:&quot;yes&quot;,&quot;animation_intime&quot;:200,&quot;animation_outtime&quot;:200,&quot;conditions_ui&quot;:&quot;normal&quot;,&quot;notice_dismissed&quot;:false,&quot;notice_dismissed_update-cf7-5.5.6&quot;:true}}" />
</div>
<div class="one-full"><label>I am a<br />
<span class="wpcf7-form-control-wrap i-am"><select name="i-am" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="Patient">Patient</option><option value="Caregiver">Caregiver</option><option value="Healthcare professional">Healthcare professional</option><option value="Other">Other</option></select></span> </label> </div>
<div data-id="contact-person" data-orig_data_id="contact-person"  data-class="wpcf7cf_group">
<div>
<h3>Contact Person</h3>
</div>
<div class="one-half"><label>Contact First Name<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap contact-first-name"><input type="text" name="contact-first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-half last"><label>Contact Last Name<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap contact-last-name"><input type="text" name="contact-last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-half"><label>Phone Number<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap contact-phone-number"><input type="text" name="contact-phone-number" value="" size="11" maxlength="12" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-half last"><label>Email Address<br />
<span class="wpcf7-form-control-wrap contact-email-address"><input type="email" name="contact-email-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" /></span> </label></div>
</div>
<div>
<h3>Patient</h3>
</div>
<div class="one-half"><label>Patient First Name<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap patient-first-name"><input type="text" name="patient-first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-half last"><label>Patient Last Name<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap patient-last-name"><input type="text" name="patient-last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-half"><label>Patient DOB<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap patient-dob"><input type="date" name="patient-dob" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-required wpcf7-validates-as-date" min="1900-01-01" aria-required="true" aria-invalid="false" placeholder="YY-mm-dd" /></span> </label></div>
<div class="one-half last"><label>Patient Phone Number<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap patient-phone-number"><input type="text" name="patient-phone-number" value="" size="11" maxlength="12" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-full"><label> Patient Email Address<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap patient-email-address"><input type="email" name="patient-email-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label></div>
<div>
<h3>Address</h3>
</div>
<div class="one-half"><label>Street Address<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap street-address"><input type="text" name="street-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-half last"><label>Apartment Number<br />
<span class="wpcf7-form-control-wrap apartment-number"><input type="text" name="apartment-number" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label></div>
<div class="one-third"><label>City<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap city"><input type="text" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<p>    <span id="wpcf7-6242f2e53c694-wrapper" class="wpcf7-form-control-wrap email-wrap" ><input type="hidden" name="email-time-start" value="1648554725"><input type="hidden" name="email-time-check" value="10"><label for="wpcf7-6242f2e53c694-field" class="hp-message">Please leave this field empty.</label><input id="wpcf7-6242f2e53c694-field"  placeholder="email"  class="wpcf7-form-control wpcf7-text" type="text" name="email" value="" size="40" tabindex="-1" autocomplete="off" /></span></p>
<div class="one-third"><label>State<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap state"><select name="state" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">Select One</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="American Samoa">American Samoa</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Marshall Islands">Marshall Islands</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Palau">Palau</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virgin Islands">Virgin Islands</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select></span> </label></div>
<div class="one-third last"><label> Zip<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap zip"><input type="tel" name="zip" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-full"><label>Preferred Method<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap preferred-method"><select name="preferred-method" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">Select One</option><option value="Delivery">Delivery</option><option value="Pickup">Pickup</option></select></span> </label></div>
<div data-id="delivery-address" data-orig_data_id="delivery-address"  data-class="wpcf7cf_group">
<div class="one-full"><label>Is your delivery address same as your residential address?<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap same-address"><select name="same-address" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">Select One</option><option value="Yes">Yes</option><option value="No">No</option></select></span> </label></div>
<div data-id="address" data-orig_data_id="address"  data-class="wpcf7cf_group">
<div>
<h3>Delivery Address</h3>
</div>
<div class="one-half"><label>Street Address<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap street-address"><input type="text" name="street-address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-half last"><label>Apartment Number<br />
<span class="wpcf7-form-control-wrap apartment-number"><input type="text" name="apartment-number" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label></div>
<div class="one-third"><label>City<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap city"><input type="text" name="city" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-third"><label>State<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap state"><select name="state" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false"><option value="">Select One</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="American Samoa">American Samoa</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Guam">Guam</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Marshall Islands">Marshall Islands</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Palau">Palau</option><option value="Pennsylvania">Pennsylvania</option><option value="Puerto Rico">Puerto Rico</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virgin Islands">Virgin Islands</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option></select></span> </label></div>
<div class="one-third last"><label> Zip<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap zip"><input type="tel" name="zip" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-full last"><label>Note for Delivery Driver<span style="color: #900;"></span><br />
<span class="wpcf7-form-control-wrap note-for-delivery-driver"><textarea name="note-for-delivery-driver" cols="5" rows="3" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></div>
</div>
</div>
<div>
<h3>Insurance</h3>
</div>
<div class="one-half"><label>Insurance Provider<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap insurance-provider"><input type="text" name="insurance-provider" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-half last"><label>Insurance Policy ID<span style="color: #900;">*</span><br />
<span class="wpcf7-form-control-wrap insurance-policy-id"><input type="text" name="insurance-policy-id" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></div>
<div class="one-full"><label>Upload Insurance Card Front and Back Image<span style="color: #900;"></span><span class="wpcf7-form-control-wrap card-front-back-image"><input type="file" size="40" class="wpcf7-form-control wpcf7-drag-n-drop-file d-none" aria-invalid="false" multiple="multiple" data-name="card-front-back-image" data-limit="10485760" data-min="0" data-max="10" data-id="45169" data-version="free version 1.3.6.3" accept="." /></span></label></div>
<div>
<h3>Prescription</h3>
</div>
<div class="one-full"><label>Upload Prescription Image<span style="color: #900;"></span><span class="wpcf7-form-control-wrap prescription-image"><input type="file" size="40" class="wpcf7-form-control wpcf7-drag-n-drop-file d-none" aria-invalid="false" multiple="multiple" data-name="prescription-image" data-limit="10485760" data-min="0" data-max="10" data-id="45169" data-version="free version 1.3.6.3" accept="." /></span></label></div>
<div class="one-full"><label>Upload Other Image<span style="color: #900;"></span><span class="wpcf7-form-control-wrap other-image"><input type="file" size="40" class="wpcf7-form-control wpcf7-drag-n-drop-file d-none" aria-invalid="false" multiple="multiple" data-name="other-image" data-limit="10485760" data-min="0" data-max="10" data-id="45169" data-version="free version 1.3.6.3" accept="." /></span></label></div>
<p></group></p>
<div class="one-full"><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" />
<div>
<input type="hidden" id="ct_checkjs_cf7_f0adc8838f4bdedde4ec2cfad0515589" name="ct_checkjs_cf7" value="0" /><div class="wpcf7-response-output" aria-hidden="true"></div></form></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-2"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div><div id="GetDirection" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid GetDirection vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1598424778734"><div class="wpb_wrapper">
<div class="wpb_raw_code wpb_content_element wpb_raw_html" >
<div class="wpb_wrapper">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3102.8117858358332!2d-77.01469968464802!3d38.951127979562386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5a71aad4648510be!2sNew%20Hampshire%20Pharmacy%20%26%20Medical%20Equipment!5e0!3m2!1sen!2suk!4v1599031682527!5m2!1sen!2suk" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>
</div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>

                
                                
        </div>

        


    </main>

                    
</div>

</div>
            
</div>



    



@endsection