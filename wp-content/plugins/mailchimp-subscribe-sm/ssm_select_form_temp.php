<?php



function ssm_select_form_meta($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;


 //////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //START                                 //
                                                                      //  
                                                                     //
    ///////  MAIN SETTINGS var assign BOX Starts HERE!!! /////////////

    $ssm_select_form_template = get_post_meta($post->ID,'ssm_select_form_template',true);

    
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    ?>

    <style type="text/css">
#lpp_wrapper{
    display: inline-block;
    width: 100%;
}

#lpp_left{
    width: 28%;
    display: inline-block;
    float: left;
    margin-right: 30px;

}
#lpp_right{
    width: 28%;
    display: inline-block;
    float: left;
    
}

#lpp_row_3{
    width: 28%;
    display: inline-block;
    float: left;
    margin-left: 30px;
}


.formLayout_s_l
    {

        
        padding: 10px;
        width: 450px;
        margin: 10px;
        font-size: 20px;
        font-weight:100;
        font-family: verdana;
    }
    
    .formLayout_s_l label 
    {
        display: block;
        margin-bottom: 30px;
        margin-top: 30px;
    }
    .formLayout_s_l input{
        display: block;
        float: left;
        margin-right: 15px;
        margin-left: 10px;


    }
 
    .formLayout_s_l label
    {
        text-align: left;
        display: block;
        font-size: 20px;
        font-family: sans-serif;
        font-weight: 100;
    }
 
    br
    {
        clear: left;
    }

    #submit{
    width: 200px;
    height: 40px;
    margin-top: 8px;
    margin-right: 50px;
    font-size: 19px;

  }
  .lck_span{
    font-size: 11px;
    color: red;
  }

    .ssm_thumb{

            width:100%;
            
  }



</style>
<div id='lpp_wrapper' class='formLayout_s_l'>
    <h2>Select a Template and click Update</h2>
    <div id='lpp_left'>
            
        Template -1
        <input type="radio" id='lpp_select_template1' name='ssm_select_form_template' value='form_1.php'
        <?php checked( "form_1.php", $ssm_select_form_template); ?>
       checked >
        <label for='lpp_select_template1'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-1.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

        Template -4<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template4' name='disabled_ssm_select_form_template' value='form_4.php'
        <?php checked( "form_4.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template4'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-4.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

        Template -7<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template7' name='disabled_ssm_select_form_template' value='form_7.php'
        <?php checked( "form_7.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template7'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-7.png',__FILE__); ?>" class='ssm_thumb' style='margin-bottom:25%;'>
        </label>
        Template -10<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template7' name='disabled_ssm_select_form_template' value='form_7.php'
        <?php checked( "form_7.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template7'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-10.png',__FILE__); ?>" class='ssm_thumb' style='margin-bottom:25%;'>
        </label>

 
    </div>
        <div id='lpp_right'>


        Template -2<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template2' name='ssm_select_form_template' value='form_2.php'
        <?php checked( "form_2.php", $ssm_select_form_template); ?>
        >

        <label for='lpp_select_template2'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-2.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

        Template -5<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template5' name='disabled_ssm_select_form_template' value='form_5.php'
        <?php checked( "form_5.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template5'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-5.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

        Template -8<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template8' name='disabled_ssm_select_form_template' value='form_8.php'
        <?php checked( "form_8.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template8'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-8.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

        Template -11<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template8' name='disabled_ssm_select_form_template' value='form_8.php'
        <?php checked( "form_8.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template8'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-11.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

        


</div>
<div id='lpp_row_3'>
    Template -3<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template3' name='disabled_ssm_select_form_template' value='form_3.php'
        <?php checked( "form_3.php", $ssm_select_form_template); ?>
        >

        <label for='lpp_select_template3'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-3.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

        Template -6<span class='lck_span'> (Locked)</span>
        <input disabled type="radio" id='lpp_select_template6' name='disabled_ssm_select_form_template' value='form_6.php'
        <?php checked( "form_6.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template6'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-6.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

          Template -9<span class='lck_span'> (Locked)</span>
        <input disabled  type="radio" id='lpp_select_template9' name='ssm_select_form_template' value='form_10.php'
        <?php checked( "form_10.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template9'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-9.png',__FILE__); ?>" class='ssm_thumb' >
        </label>

        Template -12<span class='lck_span'> (Locked)</span>
        <input disabled  type="radio" id='lpp_select_template9' name='ssm_select_form_template' value='form_10.php'
        <?php checked( "form_10.php", $ssm_select_form_template); ?>
        >
        <label for='lpp_select_template9'>
            <img src="<?php echo plugins_url('img/ssm-thumbs-12.png',__FILE__); ?>" class='ssm_thumb' >
        </label>


       
</div>
    </div>

<div style='width:100%;text-align:center; background:#e3e3e3;height:60px;border-left:5px solid #a7d142;'>
<a href="http://web-settler.com/mailchimp-subscribe-form/" style='float: left;font-size: 19px; margin: 20px 0 0 10px;'id='pr_msg_link'><i>Unlock All Templates and get more amazing features Click Here</i></a>
  <?php submit_button('Update');?>
</div>


    <?php







}









?>