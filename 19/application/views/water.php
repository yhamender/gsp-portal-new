<?php $this->load->view('header'); ?>
<link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/jquery.fileuploader.css" />
<link href="<?php echo base_url() ?>assets/css/jquery.fileuploader-theme-onebutton.css" media="all" rel="stylesheet">
<style>
    .form-group > label ul {
        list-style-type: none !important;
    }

	#Q8W1S1-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S2-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S3-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S4-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S5-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S6-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S7-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S9-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -16px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S10-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S11-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W1S12-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: 13px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W3S1-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W3S2-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W3S3-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W3S4-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W3S5-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W3S6-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -17px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W3S7-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q8W3S8-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -4px !important;
    position: absolute;
    margin-left: -210px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q7W1-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -44px !important;
    position: absolute;
    margin-left: 329px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q16W1-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -46px !important;
    position: absolute;
    margin-left: 530px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q19W12-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -46px !important;
    position: absolute;
    margin-left: 421px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q21W1-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -44px !important;
    position: absolute;
    margin-left: 254px;
    text-shadow: 1px 1px 1px #000;
	}
	#Q18W1-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -44px !important;
    position: absolute;
    margin-left: 213px;
    text-shadow: 1px 1px 1px #000;
	}
	#Q18W2-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 213px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q19W1-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -45px !important;
    position: absolute;
    margin-left: 292px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q19W15-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -45px !important;
    position: absolute;
    margin-left: 646px;
    text-shadow: 1px 1px 1px #000;
	}
	
	#Q20W1-error
	{
		color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -45px !important;
    position: absolute;
    margin-left: 392px;
    text-shadow: 1px 1px 1px #000;
	}
	
    #Q8W2S4-error{
                        color: #fb4f2a !important;
					font-size: 18px !important;
					margin-top: -36px !important;
					position: absolute;
					margin-left: 380px;
					    text-shadow: 1px 1px 1px #000;
                
        }

    #Q8W2S2S10-error{

            color: #fb4f2a !important;
  font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 762px;
	 text-shadow: 1px 1px 1px #000;

}

#Q8W2S2S6-error
{
         color: #fb4f2a !important;
  font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 278px;
	 text-shadow: 1px 1px 1px #000;

}

#Q7W2-error
{
	color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -39px !important;
    position: absolute;
    margin-left: 334px;
    text-shadow: 1px 1px 1px #000;
}

#Q8W2S1S1-error
{
	color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -39px !important;
    position: absolute;
    margin-left: 505px;
    text-shadow: 1px 1px 1px #000;
}
#Q8W2S2S5-error
{

             color: #fb4f2a !important;
   font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 208px;
	 text-shadow: 1px 1px 1px #000;

}

#Q8W2S5-error
{
	
      color: #fb4f2a !important;
  font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 302px;
	 text-shadow: 1px 1px 1px #000;

}

#Q8W2S7-error
{

      color: #fb4f2a !important;
   font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 611px;
	 text-shadow: 1px 1px 1px #000;

}

#Q8W2S9-error
{
     color: #fb4f2a !important;
  font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 563px;
	 text-shadow: 1px 1px 1px #000;

}

#Q8W2S10-error
{
    color: #fb4f2a !important;
   font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 546px;
	 text-shadow: 1px 1px 1px #000;

}

#Q8W2S13-error
{
     color: #fb4f2a !important;
  font-size: 18px !important;
    margin-top: -43px !important;
    position: absolute;
    margin-left: 272px;
	 text-shadow: 1px 1px 1px #000;

}

#Q8W2S8-error
{
  color: #fb4f2a !important;
   font-size: 18px !important;
    margin-top: -43px !important;
    position: absolute;
    margin-left: 605px;
		 text-shadow: 1px 1px 1px #000;


}

#Q8W2S61-error
{
     color: #fb4f2a !important;
  font-size: 18px !important;
    margin-top: -43px !important;
    position: absolute;
    margin-left: 405px;
	 text-shadow: 1px 1px 1px #000;
}

#Q8W2S2-error
{
    color: #fb4f2a !important;
   font-size: 18px !important;
    margin-top: -43px !important;
    position: absolute;
    margin-left: 344px;
	 text-shadow: 1px 1px 1px #000;
}


#Q8W2-error
{
        color: #fb4f2a !important;
   font-size: 18px !important;
    margin-top: -43px !important;
    position: absolute;
    margin-left: 494px;
	 text-shadow: 1px 1px 1px #000;
}

#Q8W2S2S2-error
{
      color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -43px !important;
    position: absolute;
    margin-left: 404px;
	 text-shadow: 1px 1px 1px #000;
}

#Q8W2S2S7-error
{
    color: #fb4f2a !important;
   font-size: 18px !important;
    margin-top: -43px !important;
    position: absolute;
    margin-left: 468px;
	 text-shadow: 1px 1px 1px #000;
}

#Q8W2S11-error
{
         color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -37px !important;
    position: absolute;
    margin-left: 378px;
	 text-shadow: 1px 1px 1px #000;
}

#Q8W2S12-error
{
       color: #fb4f2a !important;
   font-size: 18px !important;
    margin-top: -44px !important;
    position: absolute;
    margin-left: 378px;
	 text-shadow: 1px 1px 1px #000;
}

#Q8W2S4S1-error
{
	color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -38px !important;
    position: absolute;
    margin-left: 248px;
    text-shadow: 1px 1px 1px #000;
}

.error{
  color: #fb4f2a !important;
              font-size: 18px !important;
 text-shadow: 1px 1px 1px #000;
}
</style>
<div class="container">
<div class="content-form">
<div class="log-nav">
  <div class="welcome">Welcome, <span
                        style="font-weight:bold"><?php echo $this->session->userdata('USERNAME'); ?></span></div>
  <ul>
    <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
    <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
    <li>|</li>
    <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li>
  </ul>
</div>
<div id="pprg" class="newprog progress" style="text-align:center">
  <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
</div>
<div class="intro">
  <h1>WATER <small class="pull-right" style="position: relative;
    top: -28px;
    font-weight: bolder;"><i class="h6"><strong>If the new changes are not saved, please press Ctrl+F5</strong></i></small></h1>
  <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img
                            src="<?php echo base_url(); ?>assets/img/video-icon.png"
                            style="width: 45px; height: 40px; margin-top:47px;"></a></div>
</div>
<br>
To understand water, it is important to know the source of water in your school premise. As you know, most
        cities in India have to deal with depleting water supply, marked by falling ground water levels, vanishing water
        bodies, severe pollution and urban floods. With their own supplies drying up, cities are forced to source water
        from further and further away. This is expensive. The questions below will help students to understand where
        their water is coming from – at a cost. <br>
<br>
<strong>The unit of measurement to be used in the Water section is Litre (L).</strong> <br>
<br>
<?php echo form_open('water/set', array('id' => 'water')); ?>
<div class="form-group">
  <label>
  <h6> Task 1: Choose your Water Audit Team</h6>
  </label>
  <br>
  Before you start, you must put together a team. An ideal team would consist of one teacher (Science or
  Social Science) to guide you during the audit. You would also require the help of the administrative staff
  of your school and other staff, such as the plumber, electrician and other maintenance staff. And, most
  importantly, five to 10 of your schoolmates </div>
<div class="form-group">
  <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
</div>
<div class="form-group row">
  <div class="col-xs-1"></div>
  <div class="col-xs-3">
    <label class="text-gray">First Name</label>
  </div>
  <div class="col-xs-3">
    <label class="text-gray">Last Name</label>
  </div>
  <div class="col-xs-3">
    <label class="text-gray">Email ID</label>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-1"> 1</div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1W1S1" type="text" name="Q1W1S1"
                       placeholder="<?php if (isset($data['Q1W1S1'])) echo $data['Q1W1S1']; ?>"
                       value="<?php if (isset($data['Q1W1S1'])) echo $data['Q1W1S1']; ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1W1S3" type="text" name="Q1W1S3"
                       placeholder="<?php if (isset($data['Q1W1S3'])) echo $data['Q1W1S3']; ?>"
                       value="<?php if (isset($data['Q1W1S3'])) echo $data['Q1W1S3']; ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('email'); ?>
    <input class="form-control space-textbox" id="Q1W1S2" type="email" name="Q1W1S2"
                       placeholder="<?php if (isset($data['Q1W1S2'])) echo $data['Q1W1S2']; ?>"
                       value="<?php if (isset($data['Q1W1S2'])) echo $data['Q1W1S2']; ?>"/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-1"> 2</div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1W2S1" type="text" name="Q1W2S1"
                       placeholder="<?php if (isset($data['Q1W2S1'])) echo $data['Q1W2S1'] ?>"
                       value="<?php echo set_value('Q1W2S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1W2S3" type="text" name="Q1W2S3"
                       placeholder="<?php if (isset($data['Q1W2S3'])) echo $data['Q1W2S3']; ?>"
                       value="<?php echo set_value('Q1W2S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1W2S2" type="email" name="Q1W2S2"
                       placeholder="<?php if (isset($data['Q1W2S2'])) echo $data['Q1W2S2'] ?>"
                       value="<?php echo set_value('Q1W2S2'); ?>"/>
  </div>
</div>
<div class="form-group row">
  <div class="col-xs-1"> 3</div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1W3S1" type="text" name="Q1W3S1"
                       placeholder="<?php if (isset($data['Q1W3S1'])) echo $data['Q1W3S1'] ?>"
                       value="<?php echo set_value('Q1W3S1'); ?>"/>
  </div>
  <div class="col-xs-3"> <?php echo form_error('name'); ?>
    <input class="form-control space-textbox" id="Q1W3S3" type="text" name="Q1W3S3"
                       placeholder="<?php if (isset($data['Q1W3S3'])) echo $data['Q1W3S3']; ?>"
                       value="<?php echo set_value('Q1W3S3'); ?>"/>
  </div>
  <div class="col-xs-3">
    <input class="form-control space-textbox" id="Q1W3S2" type="email" name="Q1W3S2"
                       placeholder="<?php if (isset($data['Q1W3S2'])) echo $data['Q1W3S2'] ?>"
                       value="<?php echo set_value('Q1W3S2'); ?>"/>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
  <div class="form-group row">
    <div class="col-xs-1"></div>
    <div class="col-xs-3">
      <label class="text-gray">First Name</label>
    </div>
    <div class="col-xs-3">
      <label class="text-gray">Last Name</label>
    </div>
    <div class="col-xs-3">
      <label class="text-gray">Email ID</label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 1</div>
    <div class="col-xs-3"> <?php echo form_error('name1'); ?>
      <input class="form-control space-textbox" id="Q2W1S1" type="text" name="Q2W1S1"
                           placeholder="<?php if (isset($data['Q2W1S1'])) echo $data['Q2W1S1'] ?>"
                           value="<?php if (isset($data['Q2W1S1'])) echo $data['Q2W1S1'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W1S3" type="text" name="Q2W1S3"
                           placeholder="<?php if (isset($data['Q2W1S3'])) echo $data['Q2W1S3'] ?>"
                           value="<?php if (isset($data['Q2W1S3'])) echo $data['Q2W1S3'] ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email1'); ?>
      <input class="form-control space-textbox" id="Q2W1S2" type="email" name="Q2W1S2"
                           placeholder="<?php if (isset($data['Q2W1S2'])) echo $data['Q2W1S2'] ?>"
                           value="<?php if (isset($data['Q2W1S2'])) echo $data['Q2W1S2'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 2</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W2S1" type="text" name="Q2W2S1"
                           placeholder="<?php if (isset($data['Q2W2S1'])) echo $data['Q2W2S1'] ?>"
                           value="<?php echo set_value('Q2W2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W2S3" type="text" name="Q2W2S3"
                           placeholder="<?php if (isset($data['Q2W2S3'])) echo $data['Q2W2S3'] ?>"
                           value="<?php echo set_value('Q2W2S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W2S2" type="email" name="Q2W2S2"
                           placeholder="<?php if (isset($data['Q2W2S2'])) echo $data['Q2W2S2'] ?>"
                           value="<?php echo set_value('Q2W2S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 3</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W3S1" type="text" name="Q2W3S1"
                           placeholder="<?php if (isset($data['Q2W3S1'])) echo $data['Q2W3S1'] ?>"
                           value="<?php echo set_value('Q2W3S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W3S3" type="text" name="Q2W3S3"
                           placeholder="<?php if (isset($data['Q2W3S3'])) echo $data['Q2W3S3'] ?>"
                           value="<?php echo set_value('Q2W3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W3S2" type="email" name="Q2W3S2"
                           placeholder="<?php if (isset($data['Q2W3S2'])) echo $data['Q2W3S2'] ?>"
                           value="<?php echo set_value('Q2W3S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 4</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W4S1" type="text" name="Q2W4S1"
                           placeholder="<?php if (isset($data['Q2W4S1'])) echo $data['Q2W4S1']; ?>"
                           value="<?php echo set_value('Q2W4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W4S3" type="text" name="Q2W4S3"
                           placeholder="<?php if (isset($data['Q2W4S3'])) echo $data['Q2W4S3'] ?>"
                           value="<?php echo set_value('Q2W4S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W4S2" type="email" name="Q2W4S2"
                           placeholder="<?php if (isset($data['Q2W4S2'])) echo $data['Q2W4S2']; ?>"
                           value="<?php echo set_value('Q2W4S2'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 5</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W5S1" type="text" name="Q2W5S1"
                           placeholder="<?php if (isset($data['Q2W5S1'])) echo $data['Q2W5S1'] ?>"
                           value="<?php echo set_value('Q2W5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W5S3" type="text" name="Q2W5S3"
                           placeholder="<?php if (isset($data['Q2W5S3'])) echo $data['Q2W5S3'] ?>"
                           value="<?php echo set_value('Q2W5S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q2W5S2" type="email" name="Q2W5S2"
                           placeholder="<?php if (isset($data['Q2W5S2'])) echo $data['Q2W5S2'] ?>"
                           value="<?php echo set_value('Q2W5S2'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="control-label">Students (maximum of ten students can be part of the team):</label>
  <div class="form-group row">
    <div class="col-xs-1"></div>
    <div class="col-xs-3">
      <label class="text-gray">First Name</label>
    </div>
    <div class="col-xs-3">
      <label class="text-gray">Last Name</label>
    </div>
    <div class="col-xs-3">
      <label class="text-gray">Grade</label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 1</div>
    <div class="col-xs-3"> <?php echo form_error('name2'); ?>
      <input class="form-control space-textbox" id="Q3W1S1" type="text" name="Q3W1S1"
                           placeholder="<?php if (isset($data['Q3W1S1'])) echo $data['Q3W1S1'] ?>"
                           value="<?php if (isset($data['Q3W1S1'])) echo $data['Q3W1S1'] ?>"/>
    </div>
    <div class="col-xs-3"> <?php echo form_error('email2'); ?>
      <input class="form-control space-textbox" id="Q3W1S2" type="text" name="Q3W1S2"
                           placeholder="<?php if (isset($data['Q3W1S2'])) echo $data['Q3W1S2'] ?>"
                           value="<?php if (isset($data['Q3W1S2'])) echo $data['Q3W1S2'] ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W1S3" type="text" name="Q3W1S3"
                           placeholder="<?php if (isset($data['Q3W1S3'])) echo $data['Q3W1S3'] ?>"
                           value="<?php if (isset($data['Q3W1S3'])) echo $data['Q3W1S3'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 2</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W2S1" type="text" name="Q3W2S1"
                           placeholder="<?php if (isset($data['Q3W2S1'])) echo $data['Q3W2S1'] ?>"
                           value="<?php echo set_value('Q3W2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W2S2" type="text" name="Q3W2S2"
                           placeholder="<?php if (isset($data['Q3W2S2'])) echo $data['Q3W2S2'] ?>"
                           value="<?php echo set_value('Q3W2S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W2S3" type="text" name="Q3W2S3"
                           placeholder="<?php if (isset($data['Q3W2S3'])) echo $data['Q3W2S3'] ?>"
                           value="<?php echo set_value('Q3W2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 3</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W3S1" type="text" name="Q3W3S1"
                           placeholder="<?php if (isset($data['Q3W3S1'])) echo $data['Q3W3S1'] ?>"
                           value="<?php echo set_value('Q3W3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W3S2" type="text" name="Q3W3S2"
                           placeholder="<?php if (isset($data['Q3W3S2'])) echo $data['Q3W3S2'] ?>"
                           value="<?php echo set_value('Q3W3S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W3S3" type="text" name="Q3W3S3"
                           placeholder="<?php if (isset($data['Q3W3S3'])) echo $data['Q3W3S3'] ?>"
                           value="<?php echo set_value('Q3W3S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 4</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W4S1" type="text" name="Q3W4S1"
                           placeholder="<?php if (isset($data['Q3W4S1'])) echo $data['Q3W4S1'] ?>"
                           value="<?php echo set_value('Q3W4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W4S2" type="text" name="Q3W4S2"
                           placeholder="<?php if (isset($data['Q3W4S2'])) echo $data['Q3W4S2'] ?>"
                           value="<?php echo set_value('Q3W4S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W4S3" type="text" name="Q3W4S3"
                           placeholder="<?php if (isset($data['Q3W4S3'])) echo $data['Q3W4S3'] ?>"
                           value="<?php echo set_value('Q3W4S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 5</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W5S1" type="text" name="Q3W5S1"
                           placeholder="<?php if (isset($data['Q3W5S1'])) echo $data['Q3W5S1'] ?>"
                           value="<?php echo set_value('Q3W5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W5S2" type="text" name="Q3W5S2"
                           placeholder="<?php if (isset($data['Q3W5S2'])) echo $data['Q3W5S2'] ?>"
                           value="<?php echo set_value('Q3W5S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W5S3" type="text" name="Q3W5S3"
                           placeholder="<?php if (isset($data['Q3W5S3'])) echo $data['Q3W5S3'] ?>"
                           value="<?php echo set_value('Q3W5S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 6</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W6S1" type="text" name="Q3W6S1"
                           placeholder="<?php if (isset($data['Q3W6S1'])) echo $data['Q3W6S1'] ?>"
                           value="<?php echo set_value('Q3W6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W6S2" type="text" name="Q3W6S2"
                           placeholder="<?php if (isset($data['Q3W6S2'])) echo $data['Q3W6S2'] ?>"
                           value="<?php echo set_value('Q3W6S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W6S3" type="text" name="Q3W6S3"
                           placeholder="<?php if (isset($data['Q3W6S3'])) echo $data['Q3W6S3'] ?>"
                           value="<?php echo set_value('Q3W6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 7</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W7S1" type="text" name="Q3W7S1"
                           placeholder="<?php if (isset($data['Q3W7S1'])) echo $data['Q3W7S1'] ?>"
                           value="<?php echo set_value('Q3W7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W7S2" type="text" name="Q3W7S2"
                           placeholder="<?php if (isset($data['Q3W7S2'])) echo $data['Q3W7S2'] ?>"
                           value="<?php echo set_value('Q3W7S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W7S3" type="text" name="Q3W7S3"
                           placeholder="<?php if (isset($data['Q3W7S3'])) echo $data['Q3W7S3'] ?>"
                           value="<?php echo set_value('Q3W7S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 8</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W8S1" type="text" name="Q3W8S1"
                           placeholder="<?php if (isset($data['Q3W8S1'])) echo $data['Q3W8S1'] ?>"
                           value="<?php echo set_value('Q3W8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W8S2" type="text" name="Q3W8S2"
                           placeholder="<?php if (isset($data['Q3W8S2'])) echo $data['Q3W8S2'] ?>"
                           value="<?php echo set_value('Q3W8S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W8S3" type="text" name="Q3W8S3"
                           placeholder="<?php if (isset($data['Q3W8S3'])) echo $data['Q3W8S3'] ?>"
                           value="<?php echo set_value('Q3W8S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 9</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W9S1" type="text" name="Q3W9S1"
                           placeholder="<?php if (isset($data['Q3W9S1'])) echo $data['Q3W9S1'] ?>"
                           value="<?php echo set_value('Q3W9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W9S2" type="text" name="Q3W9S2"
                           placeholder="<?php if (isset($data['Q3W9S2'])) echo $data['Q3W9S2'] ?>"
                           value="<?php echo set_value('Q3W9S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W9S3" type="text" name="Q3W9S3"
                           placeholder="<?php if (isset($data['Q3W9S3'])) echo $data['Q3W9S3'] ?>"
                           value="<?php echo set_value('Q3W9S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 10</div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W10S1" type="text" name="Q3W10S1"
                           placeholder="<?php if (isset($data['Q3W10S1'])) echo $data['Q3W10S1'] ?>"
                           value="<?php echo set_value('Q3W10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W10S2" type="text" name="Q3W10S2"
                           placeholder="<?php if (isset($data['Q3W10S2'])) echo $data['Q3W10S2'] ?>"
                           value="<?php echo set_value('Q3W10S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3W10S3" type="text" name="Q3W10S3"
                           placeholder="<?php if (isset($data['Q3W10S3'])) echo $data['Q3W10S3'] ?>"
                           value="<?php echo set_value('Q3W10S3'); ?>"/>
    </div>
  </div>
</div>
<div class="form-group">
  <label>
  <div class="question-text">
    <h6> Task 2: How much water does your school use?</h6>
    <p> To find total consumption, monitor water consumption over a period of three working days, spread
      over one month and take the average.The observations should be carried out when more than 90% of
      school strength is present</p>
    <p> For example: you can monitor the water consumption on August 5, August 15 and August 25. Add all
      three total consumptions and then divide it with number of days of observation (that is three
      days). You will get an average per day water consumption.</p>
    <p><strong>To collect data: </strong><a class="kplink"
                                                            href="http://www.greenschoolsprogramme.org/knowledge-bank/water/"
                                                            target="_blank"> </a></p>
    <p><strong>The bill method:</strong> If the school’s water meter is monitored regularly—water bills
      by the government/municipality state the actual amount used—students can simply compile bills to
      assess total consumption.</p>
    <p><strong>Monitoring overhead tanks:</strong> If the bills are irregular and incorrect, then
      monitor the overhead tanks. Note the difference in levels of water in your overhead tank between
      the beginning and the end of the day. Ensure that the tanks are full when the day begins. Check
      the water level when school is over by noting the difference in levels of water in your overhead
      tank between beginning and end of a day. Estimate consumption.</p>
    <p><strong>Using the motor method:</strong> If your school uses groundwater, take a bucket and know
      its measurement. Then switch on the underground-water pump. Let the water run out of the
      hosepipe into the bucket. Check how long it takes to fill up the bucket. You can now calculate
      the flow of water in litres per minute. Find out (from the gardener or other administrative
      staff) the number of hours the pump motor runs per day. Multiply the number of hours the motor
      runs by 60 to get the number of minutes the motor runs. Multiply the number of minutes the motor
      is run by how much water comes out from the hose pipe in a minute. The administrative staff and
      the plumber would be helpful in gauging the above. Conduct an audit for two or three days and
      then take an average to find the total consumption.</p>
  </div>
  </label>
</div>
<div class="question-text"> <strong>Calculate your school’s water consumption, per activity:</strong>
  <p>&nbsp; </p>
  <p><strong>&nbsp;To collect data:</strong></p>
  <p> The school will use a glass (250 ml) for drinking during the audit period; they should know the volume
    of flush tank (if they have a flush) or volume of bucket they are using for washing clothes, etc.</p>
  <p> To measure total water used in Kitchen, first measure the quantity of water (in litres) that could be
    used, before commencing the activity. Example: Use buckets, utensils, jars of known volume. Please
    monitor over a period of 15 working days.</p>
  <p><strong>Gardening:</strong> To measure total water used in Gardening, first find out what is the method
    of watering garden.</p>
  <ul>
    <li> If water from water storage tank is used with hose pipes then measure the capacity of storage tank.
      Fill the storage tank before watering session. After watering the plants, measure the water left in
      the tank. Subtract the quantity of water left in the tank by total storage capacity of the tank.&nbsp; </li>
    <li> If garden is watered manually with buckets then measure the capacity of the bucket and multiply by
      number of times the bucket is filled to water plants. </li>
    <li> If sprinkler irrigation is used to water garden, then measure the quantity of water released by the
      sprinklers and multiply it by the time the sprinkler system &nbsp;works.&nbsp; </li>
  </ul>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">1</span>Total water consumption of your school</label>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Activity</label>
    </div>
    <div class="col-xs-5">
      <label class="text-gray"> Total Quantity (litres per day)</label>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Drinking</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W1" type="number" min="0" name="Q4W1"
                           placeholder="<?php if (isset($data['Q4W1'])) echo $data['Q4W1'] ?>"
                           value="<?php if (isset($data['Q4W1'])) echo $data['Q4W1'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Toilet flushing</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W2" type="number" min="0" name="Q4W2"
                           placeholder="<?php if (isset($data['Q4W2'])) echo $data['Q4W2'] ?>"
                           value="<?php if (isset($data['Q4W2'])) echo $data['Q4W2'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Personal cleaning</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W3" type="number" min="0" name="Q4W3"
                           placeholder="<?php if (isset($data['Q4W3'])) echo $data['Q4W3'] ?>"
                           value="<?php if (isset($data['Q4W3'])) echo $data['Q4W3'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Washing clothes</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W4" type="number" min="0" name="Q4W4"
                           placeholder="<?php if (isset($data['Q4W4'])) echo $data['Q4W4'] ?>"
                           value="<?php if (isset($data['Q4W4'])) echo $data['Q4W4'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Cooking</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W5" type="number" min="0" name="Q4W5"
                           placeholder="<?php if (isset($data['Q4W5'])) echo $data['Q4W5'] ?>"
                           value="<?php if (isset($data['Q4W5'])) echo $data['Q4W5'] ?>"/>
    </div>
  </div>
  <!--
            <div class="form-group row">
                <div class="col-xs-3">
                    <label class="text-gray">Service Area on ground</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()"
                           id="Q4W6" type="number" min="0" name="Q4W6"
                           placeholder="<?php if (isset($data['Q4W6'])) echo $data['Q4W6'] ?>"
                           value="<?php echo set_value('Q4W6'); ?>"/>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-3">
                    <label class="text-gray">Roof and terrace area</label>
                </div>
                <div class="col-xs-5">
                    <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()"
                           id="Q4W7" type="number" min="0" name="Q4W7"
                           placeholder="<?php if (isset($data['Q4W7'])) echo $data['Q4W7'] ?>"
                           value="<?php echo set_value('Q4W7'); ?>"/>
                </div>
            </div>
             -->
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Cleaning Utensils</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W6" type="number" min="0" name="Q4W6"
                           placeholder="<?php if (isset($data['Q4W6'])) echo $data['Q4W6'] ?>"
                           value="<?php if (isset($data['Q4W6'])) echo $data['Q4W6'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Washing Vegetables</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W7" type="number" min="0" name="Q4W7"
                           placeholder="<?php if (isset($data['Q4W7'])) echo $data['Q4W7'] ?>"
                           value="<?php if (isset($data['Q4W7'])) echo $data['Q4W7'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Mopping floors</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W8" type="number" min="0" name="Q4W8"
                           placeholder="<?php if (isset($data['Q4W8'])) echo $data['Q4W8'] ?>"
                           value="<?php if (isset($data['Q4W8'])) echo $data['Q4W8'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Gardening</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W9" type="number" min="0" name="Q4W9"
                           placeholder="<?php if (isset($data['Q4W9'])) echo $data['Q4W9'] ?>"
                           value="<?php if (isset($data['Q4W9'])) echo $data['Q4W9'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Others</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" onKeyUp="WaterConsumption()" 
                           id="Q4W10" type="number" min="0" name="Q4W10"
                           placeholder="<?php if (isset($data['Q4W10'])) echo $data['Q4W10'] ?>"
                           value="<?php if (isset($data['Q4W10'])) echo $data['Q4W10'] ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-3">
      <label class="text-gray">Total</label>
    </div>
    <div class="col-xs-5">
      <input class="form-control space-textbox" id="Q4W11" type="number" min="0" name="Q4W11"
                           placeholder="<?php if (isset($data['Q4W11'])) echo $data['Q4W11'] ?>"
                           value="<?php if (isset($data['Q4W11'])) echo $data['Q4W11'] ?>" readonly/>
    </div>
  </div>
</div>
<div class="form-group">
  <label>
  <h6>Task 3: What Are The Sources, Supply and Storage of Water in your School? <a class="kplink"
                                                                                                 href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#sourceOfWater"
                                                                                                 target="_blank"> </a> </h6>
  </label>
  <p> To understand water, it is important to know the source of water in your school premises. As you know,
    most cities in India have to deal with depleting water supply, marked by falling ground water levels,
    vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are
    forced to source water from further and further away. This is expensive.<br>
  </p>
  <p> The questions below will help students to understand where their water is coming from – at a cost. </p>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">2</span>Where does the water your school uses, come from?
  (please tick the correct options):</label>
  <div class="form-group">
    <ul>
      <li>
        <input type="checkbox" name="Q5W1"
                               value="<?php echo set_value('Q5W1', 1); ?>" <?php if (isset($data['Q5W1'])) echo set_checkbox('Q5W1', '1', true); ?> />
        <label class="text-gray">Ground water</label>
      </li>
      <li>
        <input type="checkbox" id="Q5W2" name="Q5W2"
                               value="<?php echo set_value('Q5W2', 1); ?>" <?php if (isset($data['Q5W2'])) echo set_checkbox('Q5W2', '1', true); ?> />
        <label class="text-gray">Surface water</label>
      </li>
      <li>
        <input type="checkbox" id="Q5W3" name="Q5W3"
                               value="<?php echo set_value('Q5W3', 1); ?>" <?php if (isset($data['Q5W3'])) echo set_checkbox('Q5W3', '1', true); ?>/>
        <label class="text-gray">Rainwater</label>
      </li>
      <li>
        <input type="checkbox" name="Q5W4"
                               value="<?php echo set_value('Q5W4', 1); ?>" <?php if (isset($data['Q5W4'])) echo set_checkbox('Q5W4', '1', true); ?>/>
        <label class="text-gray">Recycled wastewater</label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group">
  <label class="control-label"> <span class="cube">3</span>Who supplies the water in your school? (please tick
  the correct options):</label>
  <br>
  <ul class="list-unstyled">
    <li>
      <input type="checkbox" name="Q6W1"
                           value="<?php echo set_value('Q6W1', 1); ?>" <?php if (isset($data['Q6W1'])) echo set_checkbox('Q6W1', '1', true); ?>/>
      <label class="text-gray">Municipality</label>
    </li>
    <li>
      <input type="checkbox" name="Q6W2"
                           value="<?php echo set_value('Q6W2', 1); ?>" <?php if (isset($data['Q6W2'])) echo set_checkbox('Q6W2', '1', true); ?> />
      <label class="text-gray">Panchayat</label>
    </li>
    <li>
      <input type="checkbox" name="Q6W3"
                           value="<?php echo set_value('Q6W3', 1); ?>" <?php if (isset($data['Q6W3'])) echo set_checkbox('Q6W3', '1', true); ?>/>
      <label class="text-gray">Public Health Engineering Department (PHED)</label>
    </li>
    <li>
      <input type="checkbox" name="Q6W4"
                           value="<?php echo set_value('Q6W4', 1); ?>" <?php if (isset($data['Q6W4'])) echo set_checkbox('Q6W4', '1', true); ?>/>
      <label class="text-gray">Private supplier</label>
    </li>
    <li>
      <input type="checkbox" name="Q6W5"
                           value="<?php echo set_value('Q6W5', 1); ?>" <?php if (isset($data['Q6W5'])) echo set_checkbox('Q6W5', '1', true); ?>/>
      <label class="text-gray">School’s own supply (bore well, rainwater harvesting facility, etc)</label>
    </li>
  </ul>
</div>
<div class="form-group">
  <label class="control-label"> <span class="cube">4</span>Does your school get daily water supply?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q7W1" onClick="WaterSupply(1)"
                           value="<?php echo set_value('Q7W1', 'Y') ?>" <?php if (isset($data['Q7W1'])) echo $data['Q7W1'] == 'Y' ? "checked" : "" ?>/>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q7W1" onClick="WaterSupply(2)"
                           value="<?php echo set_value('Q7W1', 'N') ?>" <?php if (isset($data['Q7W1'])) echo $data['Q7W1'] == 'N' ? "checked" : "" ?>/>
    No </label>
  </div>
</div>
<?php
        if (isset($data['Q7W1']))
        {
        if ($data['Q7W1'] == 'Y')
        {
        ?>
<div class="form-group" id="Q7W2">
<?php } else { ?>
<div class="form-group" id="Q7W2" style="display: none;">
<?php }
                } else { ?>
<div class="form-group" id="Q7W2" style="display: none;">
  <?php } ?>
  <label class="control-label"> <span class="cube">4(a)</span>Does your school get daily water supply?</label>
  <div class="form-group">
    <ul class="list-unstyled">
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q7W22" name="Q7W2"
                                           value="<?php echo set_value('Q7W2', 1) ?>" <?php if (isset($data['Q7W2'])) echo $data['Q7W2'] == 1 ? "checked" : ""; ?>/>
        ≤1 hours </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q7W22" name="Q7W2"
                                           value="<?php echo set_value('Q7W2', 2) ?>" <?php if (isset($data['Q7W2'])) echo $data['Q7W2'] == 2 ? "checked" : ""; ?>/>
        2-6 hours </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q7W22" name="Q7W2"
                                           value="<?php echo set_value('Q7W2', 3) ?>" <?php if (isset($data['Q7W2'])) echo $data['Q7W2'] == 3 ? "checked" : ""; ?>/>
        7-12 hours </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q7W22" name="Q7W2"
                                           value="<?php echo set_value('Q7W2', 4) ?>" <?php if (isset($data['Q7W2'])) echo $data['Q7W2'] == 4 ? "checked" : ""; ?>/>
        13-18 hours </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q7W22" name="Q7W2"
                                           value="<?php echo set_value('Q7W2', 5) ?>" <?php if (isset($data['Q7W2'])) echo $data['Q7W2'] == 5 ? "checked" : ""; ?>/>
        19-24 hours </label>
      </li>
    </ul>
  </div>
</div>
<?php
                if (isset($data['Q7W1']))
                {
                if ($data['Q7W1'] == 'N')
                {
                ?>
<div class="form-group" id="Q7W3">
<?php } else { ?>
<div class="form-group" id="Q7W3" style="display: none;">
<?php }
                        } else { ?>
<div class="form-group" id="Q7W3" style="display: none;">
  <?php } ?>
  <label class="control-label"> <span class="cube">4(b)</span>Does your school get daily water
  supply?</label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q7W3"
                                                   value="<?php echo set_value('Q7W3', 1) ?>" <?php if (isset($data['Q7W3'])) echo $data['Q7W3'] == 1 ? "checked" : "" ?>>
        ≤1 day </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q7W3"
                                                   value="<?php echo set_value('Q7W3', 2) ?>" <?php if (isset($data['Q7W3'])) echo $data['Q7W3'] == 2 ? "checked" : "" ?>>
        2 days in a week </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q7W3"
                                                   value="<?php echo set_value('Q7W3', 3) ?>" <?php if (isset($data['Q7W3'])) echo $data['Q7W3'] == 3 ? "checked" : "" ?>>
        3 days in a week </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q7W3"
                                                   value="<?php echo set_value('Q7W3', 4) ?>" <?php if (isset($data['Q7W3'])) echo $data['Q7W3'] == 4 ? "checked" : "" ?>>
        Every alternate day in a week </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group">
  <label>
  <h6>Task 4: What are the water conservation practices followed in your school?</h6>
  </label>
  <div class="form-group">
    <label class="control-label"><span class="cube">5</span> What are the water conservation
    practices your school follows <a class="tt" data-tooltip="Please tick “Yes” if your school follows the below mentioned practices. Do upload images/ jpegs, where relevant."><span class="badge">?</span></a></label>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Does your school have any water and
      sanitation policy? </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S1"
                                               value="<?php echo set_value('Q8W1S1', 'Y') ?>" <?php if (isset($data['Q8W1S1'])) echo $data['Q8W1S1'] == 'Y' ? "checked" : "" ?>/>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S1"
                                               value="<?php echo set_value('Q8W1S1', 'N') ?>" <?php if (isset($data['Q8W1S1'])) echo $data['Q8W1S1'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> If your school has an eco-club, do
      they have water component? </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S2"
                                               value="<?php echo set_value('Q8W1S2', 'Y') ?>" <?php if (isset($data['Q8W1S2'])) echo $data['Q8W1S2'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S2"
                                               value="<?php echo set_value('Q8W1S2', 'N') ?>" <?php if (isset($data['Q8W1S2'])) echo $data['Q8W1S2'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Do all tanks in the school have
      float valves installed to stop overflow?
      <audio controls id="FLOATVALVES" class="audio hide">
        <source src="<?php echo base_url(); ?>assets/audio-files/Float Valve.MP3" type="audio/mpeg">
        Your browser does not support the audio element. </audio>
      <a class="btn" id="btn" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S3"
                                               value="<?php echo set_value('Q8W1S3', 'Y') ?>" <?php if (isset($data['Q8W1S3'])) echo $data['Q8W1S3'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S3"
                                               value="<?php echo set_value('Q8W1S3', 'N') ?>" <?php if (isset($data['Q8W1S3'])) echo $data['Q8W1S3'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Do the drinking water points have
      spill proof taps to check overflow?
      <audio controls id="SPILLPROOFTAPS" class="audio hide">
        <source src="<?php echo base_url(); ?>assets/audio-files/Spill proof taps.MP3" type="audio/mpeg">
        Your browser does not support the audio element. </audio>
      <a class="btn" id="btn1" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S4"
                                               value="<?php echo set_value('Q8W1S4', 'Y') ?>" <?php if (isset($data['Q8W1S4'])) echo $data['Q8W1S4'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S4"
                                               value="<?php echo set_value('Q8W1S4', 'N') ?>" <?php if (isset($data['Q8W1S4'])) echo $data['Q8W1S4'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Does your school use appliances
      with a quick-wash setting? </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S5"
                                               value="<?php echo set_value('Q8W1S5', 'Y') ?>" <?php if (isset($data['Q8W1S5'])) echo $data['Q8W1S5'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S5"
                                               value="<?php echo set_value('Q8W1S5', 'N') ?>" <?php if (isset($data['Q8W1S5'])) echo $data['Q8W1S5'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Are dual flush systems installed in
      the toilets?
      <audio controls id="DUALFLUSHTOILET" class="audio hide">
        <source src="<?php echo base_url(); ?>assets/audio-files/Dual flush Toilet.MP3" type="audio/mpeg">
        Your browser does not support the audio element. </audio>
      <a class="btn" id="btn2" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S6"
                                               value="<?php echo set_value('Q8W1S6', 'Y') ?>" <?php if (isset($data['Q8W1S6'])) echo $data['Q8W1S6'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S6"
                                               value="<?php echo set_value('Q8W1S6', 'N') ?>" <?php if (isset($data['Q8W1S6'])) echo $data['Q8W1S6'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Does your school encourage bottled
      water for drinking water? </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S7"
                                               value="<?php echo set_value('Q8W1S7', 'Y') ?>" <?php if (isset($data['Q8W1S7'])) echo $data['Q8W1S7'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S7"
                                               value="<?php echo set_value('Q8W1S7', 'N') ?>" <?php if (isset($data['Q8W1S7'])) echo $data['Q8W1S7'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Does your school grow local plant
      species which require limited amount of water to grow? </label>
      <label class="radio-inline text-gray">
      <?php
                                        if (empty($data['Q8W1S8']))
                                            if (isset($other['Q5L1S3']))
                                                if (isset($other['Q5L1S3'])) {
                                                    $data['Q8W1S8'] = 'Y';
                                                }
                                        ?>
      <input type="hidden" id="Q5L1S3"
                                               value="<?php if (isset($other['Q5L1S3'])) echo $other['Q5L1S3']; ?>">
      <input type="radio" id="Q8W1S8_1" name="Q8W1S8"
                                               value="<?php echo set_value('Q8W1S8', 'Y') ?>" <?php if (isset($data['Q8W1S8'])) echo $data['Q8W1S8'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" id="Q8W1S8_2" name="Q8W1S8"
                                               value="<?php echo set_value('Q8W1S8', 'N') ?>" <?php if (isset($data['Q8W1S8'])) echo $data['Q8W1S8'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Has your school initiated any water
      conservation steps in the school or outside, in the past one year? </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S9"
                                               value="<?php echo set_value('Q8W1S9', 'Y') ?>" <?php if (isset($data['Q8W1S9'])) echo $data['Q8W1S8'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S9"
                                               value="<?php echo set_value('Q8W1S9', 'N') ?>" <?php if (isset($data['Q8W1S9'])) echo $data['Q8W1S8'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Does your school use a drip or
      irrigation system? </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S10"
                                               value="<?php echo set_value('Q8W1S10', 'Y') ?>" <?php if (isset($data['Q8W1S10'])) echo $data['Q8W1S10'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S10"
                                               value="<?php echo set_value('Q8W1S10', 'N') ?>" <?php if (isset($data['Q8W1S10'])) echo $data['Q8W1S10'] == 'N' ? "checked" : "" ?>>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Any other step taken for water
      conservation? (if Yes, please specify) </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S11"
                                               value="<?php echo set_value('Q8W1S11', 'Y') ?>" <?php if (isset($data['Q8W1S11'])) echo $data['Q8W1S11'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S11"
                                               value="<?php echo set_value('Q8W1S11', 'N') ?>" <?php if (isset($data['Q8W1S11'])) echo $data['Q8W1S11'] == 'N' ? "checked" : "" ?>/>
      No </label>
    </div>
    <div class="form-group">
      <label class="radio-inline text-gray col-xs-10"> Provision for storage of leftover water in bottles at water coolers
      Any other step taken for water conservation? (if Yes, please specify): </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S12"
                                               value="<?php echo set_value('Q8W1S12', 'Y') ?>" <?php if (isset($data['Q8W1S12'])) echo $data['Q8W1S12'] == 'Y' ? "checked" : "" ?>>
      Yes </label>
      <label class="radio-inline text-gray">
      <input type="radio" name="Q8W1S12"
                                               value="<?php echo set_value('Q8W1S12', 'N') ?>" <?php if (isset($data['Q8W1S12'])) echo $data['Q8W1S12'] == 'N' ? "checked" : "" ?>/>
      No </label>
    </div>
    <br/>
    <div class="form-group question_Q8W1S12 hide">
      <label class="radio-inline text-gray col-xs-12" style="padding-bottom:12px; z-index: 10;">
      <textarea class="form-control" id="Q8W1S123443" name="Q8W1S123443"><?php if(isset($data['Q8W1S123443'])){ echo $data['Q8W1S123443'];} ?>
</textarea>
      </label>
    </div>
  </div>
</div>
<br/>
<div class="form-group">
  <label>Upload supporting documents</label>
  <br>
  <label style="font-color: white !important; ">Please upload all supporting documents related
  to this section here. Note: files must be in one of the following formats: PDF Document
  (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg)</label>
  <button class="btn uploadbtn upload" data-id="Task 4 Supporting docs" data-toggle="modal"
                                    data-target="#uploadModal"
                                    type="button">UPLOAD FILES </button>
  <br>
  <br>
</div>
<div class="clearfix">&nbsp;</div>
<table width="100%" class="question uploadedfiles">
  <thead>
    <tr>
      <!-- <th>Image</th>	    -->
      <th>File name</th>
      <th>Delete</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($task4supporting as $f) { ?>
    <tr id="index<?php echo $f->id; ?>">
      <?php 
           // $array = explode('.',$f->file_name); 
           // $count = count($array);
           // $extension = $array[$count-1];
            ?>
      <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
      <!--  <td> <img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
      file_name ?>" class="img-responsive" />
      </td>
      -->
      <?php //}else{ ?>
      <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
      <?php //}?>
      <?php $name = str_replace(" ", "_", $f->name . "_Task_4_Supporting_docs_"); ?>
      <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
      <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
      <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<div class="clearfix">&nbsp;</div>
<div class="form-group">
  <label>
  <h6>Task 5: Does your school harvest rainwater? <a class="kplink"
                                                                                   href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls"
                                                                                   target="_blank"> </a></h6>
  </label>
  <br>
  Rainfall (precipitation) is the primary source of freshwater on land. In this section, you
  will find out how much rainwater your school can catch, and how much your school can
  harvest. Rainwater harvesting is a traditional, time-tested method of collecting rainwater
  and using it to recharge groundwater or storing it for other uses.<br>
  To know the types of catchment <a class="kplink"
                                                              href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls"
                                                              target="_blank"> </a></div>
<div class="form-group">
  <label><span class="cube">6</span>Do you have Rainwater harvesting (RWH) system in your
  school?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" id="Q8W2_1" name="Q8W2" onClick="harvest(1)"
                                           value="<?php echo set_value('Q8W2', 'Y') ?>" <?php if (isset($data['Q8W2'])) echo $data['Q8W2'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" id="Q8W2_2" name="Q8W2" onClick="harvest(2)"
                                           value="<?php echo set_value('Q8W2', 'N') ?>" <?php if (isset($data['Q8W2'])) echo $data['Q8W2'] == 'N' ? "checked" : "" ?>/>
    No </label>
  </div>
</div>
<div class="form-group" id="Q8W2S1"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(a)</span>Does your school harvest different catchments? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S1" onClick="Catchment(1)"
                                           value="<?php echo set_value('Q8W2S1', 'Y') ?>" <?php if (isset($data['Q8W2S1'])) echo $data['Q8W2S1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S1" onClick="Catchment(2)"
                                           value="<?php echo set_value('Q8W2S1', 'N') ?>" <?php if (isset($data['Q8W2S1'])) echo $data['Q8W2S1'] == 'N' ? "checked" : "" ?>/>
    No </label>
  </div>
</div>
<div class="form-group" id="Q8W2S1S1"
                            <?php
                            if (isset($data['Q8W2S1']))
                                if ($data['Q8W2S1'] == 'Y') {
                                    echo ' style="display:block;"';
                                } else {
                                    echo ' style="display:none;"';
                                }
                            else {
                                echo ' style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(a)(1)</span>Which is the catchment area being harvested by your
  school? </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1"
                                                   value="<?php echo set_value('Q8W2S1S1', 1) ?>" <?php if (isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 1 ? "checked" : "" ?>>
        Rooftop </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1"
                                                   value="<?php echo set_value('Q8W2S1S1', 2) ?>" <?php if (isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 2 ? "checked" : "" ?>/>
        Paved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1"
                                                   value="<?php echo set_value('Q8W2S1S1', 3) ?>" <?php if (isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 3 ? "checked" : "" ?>/>
        Unpaved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1"
                                                   value="<?php echo set_value('Q8W2S1S1', 4) ?>" <?php if (isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 4 ? "checked" : "" ?>/>
        Rooftop + paved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1"
                                                   value="<?php echo set_value('Q8W2S1S1', 5) ?>" <?php if (isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 5 ? "checked" : "" ?>/>
        Paved + unpaved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1"
                                                   value="<?php echo set_value('Q8W2S1S1', 6) ?>" <?php if (isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 6 ? "checked" : "" ?>/>
        Rooftop + unpaved </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S1S1"
                                                   value="<?php echo set_value('Q8W2S1S1', 7) ?>" <?php if (isset($data['Q8W2S1S1'])) echo $data['Q8W2S1S1'] == 7 ? "checked" : "" ?>/>
        Rooftop + paved + unpaved </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S2"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)</span> How does your school harvest rainwater? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" onClick="RainwaterHarvest(1)" name="Q8W2S2"
                                           value="<?php echo set_value('Q8W2S2', 1) ?>" <?php if (isset($data['Q8W2S2'])) echo $data['Q8W2S2'] == 1 ? "checked" : "" ?>>
    By storing </label>
    <label class="radio-inline text-gray">
    <input type="radio" onClick="RainwaterHarvest(2)" name="Q8W2S2"
                                           value="<?php echo set_value('Q8W2S2', 2) ?>" <?php if (isset($data['Q8W2S2'])) echo $data['Q8W2S2'] == 2 ? "checked" : "" ?>/>
    By recharging groundwater </label>
    <label class="radio-inline text-gray">
    <input type="radio" onClick="RainwaterHarvest(1)" name="Q8W2S2"
                                           value="<?php echo set_value('Q8W2S2', 3) ?>" <?php if (isset($data['Q8W2S2'])) echo $data['Q8W2S2'] == 3 ? "checked" : "" ?>/>
    Combination of both</label>
  </div>
</div>
<div class="form-group" id="Q8W2S2S1"
                            <?php
                            if (isset($data['Q8W2S2']))
                                if ($data['Q8W2S2'] == 1 || $data['Q8W2S2'] == 3) {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(1)</span>If your school only stores rainwater, please select
  the use of stored rainwater: </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S14"
                                                   value="<?php echo set_value('Q8W2S2S14', 1) ?>" <?php if (isset($data['Q8W2S2S14'])) echo set_checkbox('Q8W2S2S14', '1', true); ?>>
        Drinking </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S25"
                                                   value="<?php echo set_value('Q8W2S2S25', 1) ?>" <?php if (isset($data['Q8W2S2S25'])) echo set_checkbox('Q8W2S2S25', '1', true); ?>/>
        Gardening </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S36"
                                                   value="<?php echo set_value('Q8W2S2S36', 1) ?>" <?php if (isset($data['Q8W2S2S36'])) echo set_checkbox('Q8W2S2S36', '1', true); ?>/>
        Mopping </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S47"
                                                   value="<?php echo set_value('Q8W2S2S47', 1) ?>" <?php if (isset($data['Q8W2S2S47'])) echo set_checkbox('Q8W2S2S47', '1', true); ?>/>
        Toilets </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S58"
                                                   value="<?php echo set_value('Q8W2S2S58', 1) ?>" <?php if (isset($data['Q8W2S2S58'])) echo set_checkbox('Q8W2S2S58', '1', true); ?>/>
        Washing vehicles </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S69" value="<?php echo set_value('Q8W2S2S69', 1) ?>" <?php if (isset($data['Q8W2S2S69'])) echo set_checkbox('Q8W2S2S69', '1', true); ?>/>
        Kitchen (Cooking/Washing vegetables and utensils) </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S723" value="<?php echo set_value('Q8W2S2S723', 1) ?>" <?php if (isset($data['Q8W2S2S723'])) echo set_checkbox('Q8W2S2S723', '1', true); ?>/>
        Shower, Brushing teeth, Bathing, Hand washing </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S811" value="<?php echo set_value('Q8W2S2S811', 1) ?>" <?php if (isset($data['Q8W2S2S811'])) echo set_checkbox('Q8W2S2S811', '1', true); ?>/>
        Swimming Pool </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S912"
                                                   value="<?php echo set_value('Q8W2S2S912', 1) ?>" <?php if (isset($data['Q8W2S2S912'])) echo set_checkbox('Q8W2S2S912', '1', true); ?>/>
        Fire fighting </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q8W2S2S1013"
                                                   value="<?php echo set_value('Q8W2S2S1013', 1) ?>" <?php if (isset($data['Q8W2S2S1013'])) echo set_checkbox('Q8W2S2S1013', '1', true); ?>/>
        Desert coolers </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S2S2"
                            <?php
                            if (isset($data['Q8W2S2']))
                                if ($data['Q8W2S2'] == 1 || $data['Q8W2S2'] == 3) {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(2)</span> Does your school have rainwater storage tank? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S2S2" onClick="Storage(1)"
                                           value="<?php echo set_value('Q8W2S2S2', 'Y') ?>" <?php if (isset($data['Q8W2S2S2'])) echo $data['Q8W2S2S2'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" id="Q8W2S2S2_2" name="Q8W2S2S2" onClick="Storage(2)"
                                           value="<?php echo set_value('Q8W2S2S2', 'N') ?>" <?php if (isset($data['Q8W2S2S2'])) echo $data['Q8W2S2S2'] == 'N' ? "checked" : "" ?>/>
    No </label>
  </div>
</div>
<div class="form-group" id="Q8W2S2S3"
                            <?php
                            if (isset($data['Q8W2S2S2']))
                                if ($data['Q8W2S2S2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(2) A</span>If yes, please provide: </label>
  <div class="form-group">
    <label class="text-gray"> Total number of storage tank (litres): </label>
    <input class="form-control space-textbox" id="Q8W2S2S3A" type="number" name="Q8W2S2S3"
                                       value="<?php if (isset($data['Q8W2S2S3'])) echo $data['Q8W2S2S3']; ?>" placeholder="<?php if (isset($data['Q8W2S2S3'])) echo $data['Q8W2S2S3']; ?>">
  </div>
</div>
<div class="form-group" id="Q8W2S2S4"
                            <?php
                            if (isset($data['Q8W2S2S2']))
                                if ($data['Q8W2S2S2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(2) B</span>If yes, please provide: </label>
  <div class="form-group">
    <label class="radio-inline text-gray"> Total capacity of each storage tank
    (litres): </label>
    <input class="form-control space-textbox" id="Q8W2S2S4A" type="number" name="Q8W2S2S4"
 value="<?php if (isset($data['Q8W2S2S4'])) echo $data['Q8W2S2S4']; ?>" placeholder="<?php if (isset($data['Q8W2S2S4'])) echo $data['Q8W2S2S4']; ?>">
  </div>
</div>
<div class="form-group" id="Q8W2S2S5"
                            <?php
                            if (isset($data['Q8W2S2']))
                                if ($data['Q8W2S2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(2) C</span>Location of tanks: </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S5"
                                                   value="<?php echo set_value('Q8W2S2S5', 1) ?>" <?php if (isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 1 ? "checked" : "" ?>>
        Underground </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S5"
                                                   value="<?php echo set_value('Q8W2S2S5', 2) ?>" <?php if (isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 2 ? "checked" : "" ?>/>
        Over ground </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S5"
                                                   value="<?php echo set_value('Q8W2S2S5', 3) ?>" <?php if (isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 3 ? "checked" : "" ?>/>
        Semi underground </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S5"
                                                   value="<?php echo set_value('Q8W2S2S5', 4) ?>" <?php if (isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 4 ? "checked" : "" ?>/>
        Over- ground + semi underground </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S5"
                                                   value="<?php echo set_value('Q8W2S2S5', 5) ?>" <?php if (isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 5 ? "checked" : "" ?>/>
        Underground + semi underground </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S5"
                                                   value="<?php echo set_value('Q8W2S2S5', 6) ?>" <?php if (isset($data['Q8W2S2S5'])) echo $data['Q8W2S2S5'] == 6 ? "checked" : "" ?>/>
        Underground + Over- ground + semi underground </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S2S6"
                            <?php
                            if (isset($data['Q8W2S2']))
                                if ($data['Q8W2S2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(2) D</span> Material options for tanks: </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S6"
                                                   value="<?php echo set_value('Q8W2S2S6', 1) ?>" <?php if (isset($data['Q8W2S2S6'])) echo $data['Q8W2S2S6'] == 1 ? "checked" : "" ?>>
        PVC </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S6"
                                                   value="<?php echo set_value('Q8W2S2S6', 2) ?>" <?php if (isset($data['Q8W2S2S6'])) echo $data['Q8W2S2S6'] == 2 ? "checked" : "" ?>/>
        RCC </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S6"
                                                   value="<?php echo set_value('Q8W2S2S6', 3) ?>" <?php if (isset($data['Q8W2S2S6'])) echo $data['Q8W2S2S6'] == 3 ? "checked" : "" ?>/>
        Brick </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S6"
                                                   value="<?php echo set_value('Q8W2S2S6', 4) ?>" <?php if (isset($data['Q8W2S2S6'])) echo $data['Q8W2S2S6'] == 4 ? "checked" : "" ?>/>
        Combination of PVC + RCC + brick </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S27"
                            <?php
                            if (isset($data['Q8W2S2']))
                                if ($data['Q8W2S2'] == 1 || $data['Q8W2S2'] == 3) {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(3)</span>Does your school have groundwater recharge
  structure? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S2S7" onClick="Recharge(1)"
                                           value="<?php echo set_value('Q8W2S2S7', 'Y') ?>" <?php if (isset($data['Q8W2S2S7'])) echo $data['Q8W2S2S7'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" id="Q8W2S2S7_2" name="Q8W2S2S7" onClick="Recharge(2)"
                                           value="<?php echo set_value('Q8W2S2S7', 'N') ?>" <?php if (isset($data['Q8W2S2S7'])) echo $data['Q8W2S2S7'] == 'N' ? "checked" : "" ?>/>
    No </label>
  </div>
</div>
<div class="form-group" id="Q8W2S2S8"
                            <?php
                            if (isset($data['Q8W2S2S7']))
                                if ($data['Q8W2S2S7'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(3) i</span>If yes, please provide: </label>
  <div class="form-group">
    <label class="radio-inline text-gray"> Please share the total number of groundwater
    recharge structures </label>
    <input class="form-control space-textbox" id="Q8W2S2S8A" type="number" name="Q8W2S2S8"
value="<?php if (isset($data['Q8W2S2S8'])) echo $data['Q8W2S2S8']; ?>" placeholder="<?php if (isset($data['Q8W2S2S8'])) echo $data['Q8W2S2S8']; ?>">
  </div>
</div>
<div class="form-group" id="Q8W2S2S9"
                            <?php
                            if (isset($data['Q8W2S2S7']))
                                if ($data['Q8W2S2S7'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(3) ii</span>Please tick the type of groundwater recharge
  structure used in your school: </label>
  <div class="form-group">
    <ul>
      <li>
        <input type="checkbox" name="Q8W2S2S91"
                                               value="<?php echo set_value('Q8W2S2S91', 1); ?>" <?php if (isset($data['Q8W2S2S91'])) echo set_checkbox('Q8W2S2S91', '1', true); ?> />
        <label col-xs-4>Percolation pit/tank
        <audio controls id="PERCOLATIONPIT" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Percolation pit.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn4" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" id="Q8W2S2S92" name="Q8W2S2S92"
                                               value="<?php echo set_value('Q8W2S2S92', 1); ?>" <?php if (isset($data['Q8W2S2S92']))  echo set_checkbox('Q8W2S2S92', '1', true); ?> />
        <label class="text-gray">Recharge through abandoned dug well
        <audio controls id="DUGWELL" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/dug well.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn5" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" id="Q8W2S2S93" name="Q8W2S2S93"
                                               value="<?php echo set_value('Q8W2S2S93', 1); ?>" <?php if (isset($data['Q8W2S2S93'])) echo set_checkbox('Q8W2S2S93', 1, true); ?>/>
        <label class="text-gray">Recharge through abandoned tube well/bore well
        <audio controls id="TUBEWELL" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/tube well.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn6" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S2S94"
                                               value="<?php echo set_value('Q8W2S2S94', 1); ?>" <?php if (isset($data['Q8W2S2S94'])) echo set_checkbox('Q8W2S2S94', '1', true); ?>/>
        <label class="text-gray">Recharge pits
        <audio controls id="RECHARGEPIT" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Recharge Pit.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn7" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S2S95"
                                               value="<?php echo set_value('Q8W2S2S95', 1); ?>" <?php if (isset($data['Q8W2S2S95'])) echo set_checkbox('Q8W2S2S95', '1', true); ?>/>
        <label class="text-gray">Recharge trenches
        <audio controls id="RECHARGETRENCHES" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Recharge Trench.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn8" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S2S96"
                                               value="<?php echo set_value('Q8W2S2S96', 1); ?>" <?php if (isset($data['Q8W2S2S96'])) echo set_checkbox('Q8W2S2S96', '1', true); ?>/>
        <label class="text-gray">Recharge through ponds/water bodies</label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S2S97"
                                               value="<?php echo set_value('Q8W2S2S97', 1); ?>" <?php if (isset($data['Q8W2S2S97'])) echo set_checkbox('Q8W2S2S97', '1', true); ?>/>
        <label class="text-gray">Soak pit
        <audio controls id="SOAKPIT" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Soak Pit.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn9" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S2S10"
                            <?php
                            if (isset($data['Q8W2S2']))
                                if ($data['Q8W2S2'] == 1 || $data['Q8W2S2'] == 3) {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(b)(4)</span>If your school practices rainwater harvesting, then
  what is the ratio between storage and recharge </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S2S10"
                                                   value="<?php echo set_value('Q8W2S2S10', 1) ?>" <?php if (isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 1 ? "checked" : "" ?>>
        Storage = Recharge </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S2S10_2" name="Q8W2S2S10"
                                                   value="<?php echo set_value('Q8W2S2S10', 2) ?>" <?php if (isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 2 ? "checked" : "" ?>/>
        Storage > Recharge </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S2S10_2" name="Q8W2S2S10"
                                                   value="<?php echo set_value('Q8W2S2S10', 3) ?>" <?php if (isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 3 ? "checked" : "" ?>/>
        Recharge > Storage </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S2S10_2" name="Q8W2S2S10"
                                                   value="<?php echo set_value('Q8W2S2S10', 4) ?>" <?php if (isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 4 ? "checked" : "" ?>/>
        Only recharge </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S2S10_2" name="Q8W2S2S10"
                                                   value="<?php echo set_value('Q8W2S2S10', 5) ?>" <?php if (isset($data['Q8W2S2S10'])) echo $data['Q8W2S2S10'] == 5 ? "checked" : "" ?>/>
        Only storage </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S3"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(c)</span>How much area in your school is harvested? <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls" target="_blank"> </a></label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 1) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 1 ? "checked" : "" ?>>
        10 to 20 per cent </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 2) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 2 ? "checked" : "" ?>/>
        21 to 30 per cent </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 3) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 3 ? "checked" : "" ?>/>
        31 to 40 per cent </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 4) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 4 ? "checked" : "" ?>/>
        41 to 50 per cent </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 5) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 5 ? "checked" : "" ?>/>
        51 to 60 per cent </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 6) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 6 ? "checked" : "" ?>/>
        61 to 70 per cent </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 7) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 7 ? "checked" : "" ?>/>
        71 to 80 per cent </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 8) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 8 ? "checked" : "" ?>/>
        81 to 90 per cent </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4"
                                                   value="<?php echo set_value('Q8W2S4', 9) ?>" <?php if (isset($data['Q8W2S4'])) echo $data['Q8W2S4'] == 9 ? "checked" : "" ?>/>
        91 to 100 per cent </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S4"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(d)</span>Please select (from the list given below) the rainwater
  harvesting structures present in your school: <a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#rainFalls" target="_blank"> </a></label>
  <div class="form-group">
    <ul>
      <li>
        <input type="checkbox" name="Q8W2S31"
                                               value="<?php echo set_value('Q8W2S31', 1); ?>" <?php if (isset($data['Q8W2S31'])) if ($data['Q8W2S31'] == 1 || $data['Q8W2S31'] == true) echo set_checkbox('Q8W2S31', '1', true); ?> />
        <label class="text-gray">Conduits
        <audio controls id="CONDUITS" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Conduits.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn10" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" id="Q8W2S32" name="Q8W2S32"
                                               value="<?php echo set_value('Q8W2S32', 1); ?>" <?php if (isset($data['Q8W2S32'])) if ($data['Q8W2S32'] == 1 || $data['Q8W2S32'] == true) echo set_checkbox('Q8W2S32', '1', true); ?> />
        <label class="text-gray">Gutters
        <audio controls id="GUTTERS" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Gutters.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn11" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" id="Q8W2S33" onClick="HarvestingStructure()"
                                               name="Q8W2S33"
                                               value="<?php echo set_value('Q8W2S33', 1); ?>" <?php if (isset($data['Q8W2S33'])) if ($data['Q8W2S33'] == 1 || $data['Q8W2S33'] == true) echo set_checkbox('Q8W2S33', 1, true); ?>/>
        <label class="text-gray">Filter unit
        <audio controls id="FILTERUNIT" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Filter Unit.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn12" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S34"
                                               value="<?php echo set_value('Q8W2S34', 1); ?>" <?php if (isset($data['Q8W2S34'])) if ($data['Q8W2S34'] == 1 || $data['Q8W2S34'] == true) echo set_checkbox('Q8W2S34', '1', true); ?>/>
        <label class="text-gray">First flush
        <audio controls id="FIRSTFLUSH" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/first Flush.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn13" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S35"
                                               value="<?php echo set_value('Q8W2S35', 1); ?>" <?php if (isset($data['Q8W2S35'])) if ($data['Q8W2S35'] == 1 || $data['Q8W2S35'] == true) echo set_checkbox('Q8W2S35', '1', true); ?>/>
        <label class="text-gray">Storage tank</label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S36"
                                               value="<?php echo set_value('Q8W2S36', 1); ?>" <?php if (isset($data['Q8W2S36'])) if ($data['Q8W2S36'] == 1 || $data['Q8W2S36'] == true) echo set_checkbox('Q8W2S36', '1', true); ?>/>
        <label class="text-gray">Collection sump
        <audio controls id="SUMP" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Sump.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn14" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S37"
                                               value="<?php echo set_value('Q8W2S37', 1); ?>" <?php if (isset($data['Q8W2S37'])) if ($data['Q8W2S37'] == 1 || $data['Q8W2S37'] == true) echo set_checkbox('Q8W2S37', '1', true); ?>/>
        <label class="text-gray">Pump unit</label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S38"
                                               value="<?php echo set_value('Q8W2S38', 1); ?>" <?php if (isset($data['Q8W2S38'])) if ($data['Q8W2S38'] == 1 || $data['Q8W2S38'] == true) echo set_checkbox('Q8W2S38', '1', true); ?>/>
        <label class="text-gray">Recharge structure
        <audio controls id="RECHARGESTRUCTURES" class="audio hide">
          <source src="<?php echo base_url(); ?>assets/audio-files/Recharge structures.MP3" type="audio/mpeg">
          Your browser does not support the audio element. </audio>
        <a class="btn" id="btn15" style="background:#e86549; color:#000000;">Play / Pause</a> </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S4S1"
                            <?php
                            if (isset($data['Q8W2S33']))
                                if ($data['Q8W2S33'] == 1) {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(d)(1)</span> Where is your filter unit? </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S4S1"
                                                   value="<?php echo set_value('Q8W2S4S1', 1) ?>" <?php if (isset($data['Q8W2S4S1'])) echo $data['Q8W2S4S1'] == 1 ? "checked" : "" ?>>
        Before storage tank </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S4S1_2" name="Q8W2S4S1"
                                                   value="<?php echo set_value('Q8W2S4S1', 2) ?>" <?php if (isset($data['Q8W2S4S1'])) echo $data['Q8W2S4S1'] == 2 ? "checked" : "" ?>/>
        Before recharge system </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S4S1_2" name="Q8W2S4S1"
                                                   value="<?php echo set_value('Q8W2S4S1', 3) ?>" <?php if (isset($data['Q8W2S4S1'])) echo $data['Q8W2S4S1'] == 3 ? "checked" : "" ?>/>
        Before both storage tank and recharge system </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" id="Q8W2S4S1_2" name="Q8W2S4S1"
                                                   value="<?php echo set_value('Q8W2S4S1', 4) ?>" <?php if (isset($data['Q8W2S4S1'])) echo $data['Q8W2S4S1'] == 4 ? "checked" : "" ?>/>
        We do not use filters </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S4S2"
                            <?php
                            if (isset($data['Q8W2S33']))
                                if ($data['Q8W2S33'] == 1) {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(d)(2)</span>Types of filter used in your school: </label>
  <div class="form-group">
    <ul>
      <li>
        <input type="checkbox" name="Q8W2S4S21"
                                               value="<?php echo set_value('Q8W2S4S21',1); ?>" <?php if (isset($data['Q8W2S4S21'])) echo set_checkbox('Q8W2S4S21', 1, true); ?> />
        <label class="text-gray">Sand gravel filter</label>
      </li>
      <li>
        <input type="checkbox" id="Q8W2S4S22" name="Q8W2S4S22"
                                               value="<?php echo set_value('Q8W2S4S22',1); ?>" <?php if (isset($data['Q8W2S4S22'])) echo set_checkbox('Q8W2S4S22', 1, true); ?> />
        <label class="text-gray">Charcoal filter</label>
      </li>
      <li>
        <input type="checkbox" id="Q8W2S4S23" name="Q8W2S4S23"
                                               value="<?php echo set_value('Q8W2S4S23',1); ?>" <?php if (isset($data['Q8W2S4S23'])) echo set_checkbox('Q8W2S4S23', 1, true); ?>/>
        <label class="text-gray">Readymade on line filter</label>
      </li>
      <li>
        <input type="checkbox" name="Q8W2S4S24"
                                               value="<?php echo set_value('Q8W2S4S24',1); ?>" <?php if (isset($data['Q8W2S4S24'])) echo set_checkbox('Q8W2S4S24', 1, true); ?>/>
        <label class="text-gray">Chemical used</label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S5"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(e)</span>Rate your catchment on cleanliness: </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S5"
                                                   value="<?php echo set_value('Q8W2S5', 1) ?>" <?php if (isset($data['Q8W2S5'])) echo $data['Q8W2S5'] == 1 ? "checked" : "" ?>>
        Good </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S5"
                                                   value="<?php echo set_value('Q8W2S5', 2) ?>" <?php if (isset($data['Q8W2S5'])) echo $data['Q8W2S5'] == 2 ? "checked" : "" ?>/>
        Average </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S5"
                                                   value="<?php echo set_value('Q8W2S5', 3) ?>" <?php if (isset($data['Q8W2S5'])) echo $data['Q8W2S5'] == 3 ? "checked" : "" ?>/>
        Poor </label>
      </li>
    </ul>
  </div>
</div>
<br>
<div class="form-group hide" id="file"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label>Please upload a flow chart (hand drawn) of the wastewater treatment process.<br>
  <button class="btn uploadbtn upload" data-id="Water Treatment Process"
                                        data-toggle="modal"
                                        data-target="#uploadModal"
                                        type="button">UPLOAD FILES </button>
  <br>
  </label>
  <table width="100%" class="question uploadedfiles">
    <thead>
      <tr>
        <!--<th>Image</th>	    -->
        <th>File name</th>
        <th>Delete</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($waterTreatment as $f) { ?>
      <tr id="index<?php echo $f->id; ?>">
        <?php 
            //$array = explode('.',$f->file_name); 
            //$count = count($array);
            //$extension = $array[$count-1];
            ?>
        <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
        <!--<td> <img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
        file_name ?>" class="img-responsive" />
        </td>
        -->
        <?php //}else{ ?>
        <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
        <?php //}?>
        <?php $name = str_replace(" ", "_", $f->name . "_Water_Treatment_Process_"); ?>
        <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
        <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div class="form-group" id="Q8W2S61"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(f)</span>Does your school clean your catchment and system </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S61" onClick="WaterCatchment(1)"
                                           value="<?php echo set_value('Q8W2S61', 'Y') ?>" <?php if (isset($data['Q8W2S61'])) echo $data['Q8W2S61'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S61" onClick="WaterCatchment(2)"
                                           value="<?php echo set_value('Q8W2S61', 'N') ?>" <?php if (isset($data['Q8W2S61'])) echo $data['Q8W2S61'] == 'N' ? "checked" : "" ?>/>
    No </label>
  </div>
</div>
<div class="form-group" id="Q8W2S7"
                            <?php
                            if (isset($data['Q8W2S61']))
                                if ($data['Q8W2S61'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>
                        >
  <label><span class="cube">6(f)(1)</span>Please specify when does your school clean the
  catchment and RWH system? </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S7"
                                                   value="<?php echo set_value('Q8W2S7', 1) ?>" <?php if (isset($data['Q8W2S7'])) echo $data['Q8W2S7'] == 1 ? "checked" : "" ?>>
        Pre-monsoon </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S7"
                                                   value="<?php echo set_value('Q8W2S7', 2) ?>" <?php if (isset($data['Q8W2S7'])) echo $data['Q8W2S7'] == 2 ? "checked" : "" ?>/>
        Post-monsoon </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S7"
                                                   value="<?php echo set_value('Q8W2S7', 3) ?>" <?php if (isset($data['Q8W2S7'])) echo $data['Q8W2S7'] == 3 ? "checked" : "" ?>/>
        Do not follow any such pattern </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S8"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(g)</span>Does your school monitor the rainwater harvesting
  structure for its efficiency? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S8" onClick="RainEfficiency(1)"
                                           value="<?php echo set_value('Q8W2S8', 'Y') ?>" <?php if (isset($data['Q8W2S8'])) echo $data['Q8W2S8'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S8" onClick="RainEfficiency(2)"
                                           value="<?php echo set_value('Q8W2S8', 'N') ?>" <?php if (isset($data['Q8W2S8'])) echo $data['Q8W2S8'] == 'N' ? "checked" : "" ?>/>
    No </label>
  </div>
</div>
<div class="form-group" id="Q8W2S9"
                            <?php
                            if (isset($data['Q8W2S8']))
                                if ($data['Q8W2S8'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(g)(1)</span>Please specify when does your school monitor the
  groundwater level? </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S9"
                                                   value="<?php echo set_value('Q8W2S9', 1) ?>" <?php if (isset($data['Q8W2S9'])) echo $data['Q8W2S9'] == 1 ? "checked" : "" ?>>
        Pre-monsoon </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S9"
                                                   value="<?php echo set_value('Q8W2S9', 2) ?>" <?php if (isset($data['Q8W2S9'])) echo $data['Q8W2S9'] == 2 ? "checked" : "" ?>/>
        Post-monsoon </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S9"
                                                   value="<?php echo set_value('Q8W2S9', 3) ?>" <?php if (isset($data['Q8W2S9'])) echo $data['Q8W2S9'] == 3 ? "checked" : "" ?>/>
        Do not follow any such pattern </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S10"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(h)</span>What is the trend of groundwater level in your school
  across the year? </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S10" onClick="WaterDecrease(1)"
                                                   value="<?php echo set_value('Q8W2S10', 1) ?>" <?php if (isset($data['Q8W2S10'])) echo $data['Q8W2S10'] == 1 ? "checked" : "" ?>>
        If there was a decrease, please specify </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S10" onClick="WaterDecrease(2)"
                                                   value="<?php echo set_value('Q8W2S10', 2) ?>" <?php if (isset($data['Q8W2S10'])) echo $data['Q8W2S10'] == 2 ? "checked" : "" ?>/>
        If there was an increase, please specify </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S10" onClick="WaterDecrease(0)"
                                                   value="<?php echo set_value('Q8W2S10', 3) ?>" <?php if (isset($data['Q8W2S10'])) echo $data['Q8W2S10'] == 3 ? "checked" : "" ?>/>
        No change </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S11"
                            <?php
                            if (isset($data['Q8W2S10']))
                                if ($data['Q8W2S10'] == 1) {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(h)(1)</span>Please specify how much was the decrease? </label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S11"
                                                   value="<?php echo set_value('Q8W2S11', 1) ?>" <?php if (isset($data['Q8W2S11'])) echo $data['Q8W2S11'] == 1 ? "checked" : "" ?>>
        Less than a metre annually </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S11"
                                                   value="<?php echo set_value('Q8W2S11', 2) ?>" <?php if (isset($data['Q8W2S11'])) echo $data['Q8W2S11'] == 2 ? "checked" : "" ?>/>
        1-5 metre annually </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q8W2S11"
                                                   value="<?php echo set_value('Q8W2S11', 3) ?>" <?php if (isset($data['Q8W2S11'])) echo $data['Q8W2S11'] == 3 ? "checked" : "" ?>/>
        More than 5 metres annually </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group" id="Q8W2S12"
                            <?php
                            if (isset($data['Q8W2S10']))
                                if ($data['Q8W2S10'] == 2) {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(h)(1)</span>Please specify how much was the increase? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S12"
                                           value="<?php echo set_value('Q8W2S12', 1) ?>" <?php if (isset($data['Q8W2S12'])) echo $data['Q8W2S12'] == 1 ? "checked" : "" ?>>
    Less than a metre annually </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S12"
                                           value="<?php echo set_value('Q8W2S12', 2) ?>" <?php if (isset($data['Q8W2S12'])) echo $data['Q8W2S12'] == 2 ? "checked" : "" ?>/>
    1-5 metre annually </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S12"
                                           value="<?php echo set_value('Q8W2S12', 3) ?>" <?php if (isset($data['Q8W2S12'])) echo $data['Q8W2S12'] == 3 ? "checked" : "" ?>/>
    More than 5 metres annually </label>
  </div>
</div>
<div class="form-group" id="Q8W2S13"
                            <?php
                            if (isset($data['Q8W2'])) {
                                if ($data['Q8W2'] == 'Y') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            } else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(i)</span>If your school's RWH structure is more than a year old,
  is there any improvement in the groundwater quality after the implementation of the RWH
  structure?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S13"
                                           value="<?php echo set_value('Q8W2S13', 'Y') ?>" <?php if (isset($data['Q8W2S13'])) echo $data['Q8W2S13'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W2S13"
                                           value="<?php echo set_value('Q8W2S13', 'N') ?>" <?php if (isset($data['Q8W2S13'])) echo $data['Q8W2S13'] == 'N' ? "checked" : "" ?>/>
    No </label>
  </div>
</div>
<div class="form-group" id="Q8W2S6"
                            <?php
                            if (isset($data['Q8W2']))
                                if ($data['Q8W2'] == 'N') {
                                    echo 'style="display:block;"';
                                } else {
                                    echo 'style="display:none;"';
                                }
                            else {
                                echo 'style="display:none;"';
                            }
                            ?>

                        >
  <label><span class="cube">6(a)</span> Calculate your school’s rainwater harvesting potential
  (in litres).</label>
  <input class="form-control space-textbox" id="Q8W2S6A" type="number" min="0" name="Q8W2S6"
                                   value="<?php if (isset($data['Q8W2S6'])) echo $data['Q8W2S6']; ?>"/>
</div>
<div class="form-group hide" id="rainwaterHarvestingFormula">
  <label>To calculate the maximum rainwater harvesting potential:</label>
  <br>
  <br>
  Area = length X breadth<br>
  Roof top potential (cu.m ) = Rooftop area (in sq m) x mm (if in mm then convert to m) of
  rainfall x 0.85<br>
  Paved potential (cu.m.) = Paved area (sq m) x mm (if in mm then convert to m) of rainfall x
  0.70<br>
  Unpaved potential (cu.m.) = Unpaved area (sq m) x mm (if in mm then convert to m) of
  rainfall x 0.30<br>
  <b>Maximum rainwater harvesting potential of the school</b>= Maximum Rooftop potential
  ___(cu.m) + Maximum Paved potential__ (cu.m) + Maximum Unpaved potential ______(cu.m)<br>
  Run-off coefficient is the amount of rainwater retained in an area and mainly dependent on
  roof type and catchment.<br>
  <div class="form-group ">
    <table class="table table-bordered col-xs-8">
      <thead>
        <tr>
          <td> Area</td>
          <td> Catchment Run-off coefficient</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> Roof</td>
          <td> 0.85</td>
        </tr>
        <tr>
          <td> Paved area Driveways/courtyards, roads</td>
          <td> 0.70</td>
        </tr>
        <tr>
          <td> Unpaved area garden, playground</td>
          <td> 0.30</td>
        </tr>
      </tbody>
    </table>
    <br>
    Note: *For Average Rainfall Data refer to Knowledge Bank: <a class="kplink" href="
http://www.greenschoolsprogramme.org/knowledge-bank/water/annexure-i/" target="_blank"> </a>www.greenschoolsprogramme.org</a><br>
  </div>
</div>
<br>
<div class="form-group">
  <label>
  <h6>Task 6: Are the plumbing and sanitation facilities in your school adequate?</h6>
  </label>
  <br>
  Hygiene and sanitation facilities are vitally important for a child’s health. Lack of these
  hampers attendance, especially of girls in senior grades. </div>
<br>
<div class="form-group">
  <label class="control-label"><span class="cube">7</span>Please share details about
  sanitation and hygiene practices in your school: </label>
  <div class="form-group">
    <label class="radio-inline text-gray col-xs-10"> Does the school have separate toilets
    for males and females? </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S1"
                                           value="<?php echo set_value('Q8W3S1', 'Y') ?>" <?php if (isset($data['Q8W3S1'])) echo $data['Q8W3S1'] == 'Y' ? "checked" : "" ?>/>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S1"
                                           value="<?php echo set_value('Q8W3S1', 'N') ?>" <?php if (isset($data['Q8W3S1'])) echo $data['Q8W3S1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
  <div class="form-group">
    <label class="radio-inline text-gray col-xs-10">Are there sufficient toilets for women
    in your school?</label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S2"
                                           value="<?php echo set_value('Q8W3S2', 'Y') ?>" <?php if (isset($data['Q8W3S2'])) echo $data['Q8W3S2'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S2"
                                           value="<?php echo set_value('Q8W3S2', 'N') ?>" <?php if (isset($data['Q8W3S2'])) echo $data['Q8W3S2'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
  <div class="form-group">
    <label class="radio-inline text-gray col-xs-10">Are there sufficient toilets for men in
    your school?</label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S3"
                                           value="<?php echo set_value('Q8W3S3', 'Y') ?>" <?php if (isset($data['Q8W3S3'])) echo $data['Q8W3S3'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S3"
                                           value="<?php echo set_value('Q8W3S3', 'N') ?>" <?php if (isset($data['Q8W3S3'])) echo $data['Q8W3S3'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
  <div class="form-group">
    <label class="radio-inline text-gray col-xs-10"> Are the toilets accessible and safe to
    use for children? </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S4"
                                           value="<?php echo set_value('Q8W3S4', 'Y') ?>" <?php if (isset($data['Q8W3S4'])) echo $data['Q8W3S4'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S4"
                                           value="<?php echo set_value('Q8W3S4', 'N') ?>" <?php if (isset($data['Q8W3S4'])) echo $data['Q8W3S4'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
  <div class="form-group">
    <label class="radio-inline text-gray col-xs-10">Are the toilets accessible and safe to
    use for differently abled children? </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S5"
                                           value="<?php echo set_value('Q8W3S5', 'Y') ?>" <?php if (isset($data['Q8W3S5'])) echo $data['Q8W3S5'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S5"
                                           value="<?php echo set_value('Q8W3S5', 'N') ?>" <?php if (isset($data['Q8W3S5'])) echo $data['Q8W3S5'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
  <div class="form-group">
    <label class="radio-inline text-gray col-xs-10">Are the toilets accessible and safe to
    use for differently abled staff (teaching and non-teaching)?</label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S6"
                                           value="<?php echo set_value('Q8W3S6', 'Y') ?>" <?php if (isset($data['Q8W3S6'])) echo $data['Q8W3S6'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S6"
                                           value="<?php echo set_value('Q8W3S6', 'N') ?>" <?php if (isset($data['Q8W3S6'])) echo $data['Q8W3S6'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
  <div class="form-group">
    <label class="radio-inline text-gray col-xs-10">Are the toilets situated in the right
    location in terms of privacy and safety?</label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S7"
                                           value="<?php echo set_value('Q8W3S7', 'Y') ?>" <?php if (isset($data['Q8W3S7'])) echo $data['Q8W3S7'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S7"
                                           value="<?php echo set_value('Q8W3S7', 'N') ?>" <?php if (isset($data['Q8W3S7'])) echo $data['Q8W3S7'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
  <div class="form-group">
    <label class="radio-inline text-gray col-xs-10">Is there sufficient light during day
    time?</label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S8"
                                           value="<?php echo set_value('Q8W3S8', 'Y') ?>" <?php if (isset($data['Q8W3S8'])) echo $data['Q8W3S8'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q8W3S8"
                                           value="<?php echo set_value('Q8W3S8', 'N') ?>" <?php if (isset($data['Q8W3S8'])) echo $data['Q8W3S8'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<br>
<div class="form-group">
  <label><span class="cube">8</span>How many drinking water taps do you have?</label>
  <input class="form-control space-textbox" id="Q9W1" type="number" min="0" name="Q9W1"
                                   placeholder="<?php if (isset($data['Q9W1'])) echo $data['Q9W1']; ?>"
                                   value="<?php if (isset($data['Q9W1'])) echo $data['Q9W1']; ?>"/>
</div>
<br>
<div class="form-group">
  <label><span class="cube">9</span>How many hand pumps do you have?</label>
  <input class="form-control space-textbox" id="Q10W1" type="number" min="0" name="Q10W1"
                                   placeholder="<?php if (isset($data['Q10W1'])) echo $data['Q10W1']; ?>"
                                   value="<?php if (isset($data['Q10W1'])) echo $data['Q10W1']; ?>"/>
</div>
<br>
<div class="form-group">
  <label><span class="cube">10</span>How many ablution taps (taps used for washing hands only)
  do you have?</label>
  <input class="form-control space-textbox" id="Q11W1" type="number" min="0" name="Q11W1"
                                   placeholder="<?php if (isset($data['Q11W1'])) echo $data['Q11W1']; ?>"
                                   value="<?php if (isset($data['Q11W1'])) echo $data['Q11W1']; ?>"/>
</div>
<br>
<!--div class="form-group">
      <label><span class="cube">11</span>How many water closets (used for defecation and urination) do you have?</label>
      <input class="form-control space-textbox" type="number" min="0" name="Q12W1" placeholder="<?php if (isset($data['Q12W1'])) echo $data['Q12W1']; ?>" value="<?php echo set_value('Q12W1'); ?>"/>
    </div-->
<br>
<div class="form-group">
  <label class="control-label"><span class="cube">11</span>How many water closets (used for
  defecation and urination) do you have? <a class="tt" data-tooltip="Toilets for women include wash basin and water closet; Toilets for men include wash basin and water closet and may or may not include urinals."><span class="badge">?</span></a></label>
  <div class="form-group row">
    <div class="col-xs-2">
      <label class="text-gray">Number of water closets </label>
    </div>
    <div class="col-xs-2">
      <label class="text-gray"> Girls</label>
      <input class="form-control space-textbox" onKeyUp="Toilets()" id="Q13W1S1"
                                           type="number" min="0" name="Q13W1S1"
                                           placeholder="<?php if (isset($data['Q13W1S1'])) echo $data['Q13W1S1'] ?>"
                                           value="<?php if (isset($data['Q13W1S1'])) echo $data['Q13W1S1'] ?>"/>
    </div>
    <div class="col-xs-2">
      <label class="text-gray">Boys</label>
      <input class="form-control space-textbox" onKeyUp="Toilets()" id="Q13W1S2"
                                           type="number" min="0" name="Q13W1S2"
                                           placeholder="<?php if (isset($data['Q13W1S2'])) echo $data['Q13W1S2'] ?>"
                                           value="<?php if (isset($data['Q13W1S2'])) echo $data['Q13W1S2'] ?>"/>
    </div>
    <div class="col-xs-2">
      <label class="text-gray">Common</label>
      <input class="form-control space-textbox" onKeyUp="Toilets()" id="Q13W1S3"
                                           type="number" min="0" name="Q13W1S3"
                                           placeholder="<?php if (isset($data['Q13W1S3'])) echo $data['Q13W1S3'] ?>"
                                           value="<?php if (isset($data['Q13W1S3'])) echo $data['Q13W1S3'] ?>"/>
    </div>
    <div class="col-xs-2">
      <label class="text-gray">Total</label>
      <input class="form-control space-textbox" onKeyUp="Toilets()" id="Q13W1S4"
                                           type="number" min="0" name="Q13W1S4"
                                           placeholder="<?php if (isset($data['Q13W1S4'])) echo $data['Q13W1S4'] ?>"
                                           value="<?php if (isset($data['Q13W1S4'])) echo $data['Q13W1S4'] ?>" readonly/>
    </div>
  </div>
  <div class="form-group">
    <label><span class="cube">12</span>How many urinals (strictly used for urination only)
    do you have?</label>
    <input class="form-control space-textbox" id="Q14W1" type="number" min="0" name="Q14W1"
                                       placeholder="<?php if (isset($data['Q14W1'])) echo $data['Q14W1']; ?>"
                                       value="<?php if (isset($data['Q14W1'])) echo $data['Q14W1']; ?>"/>
  </div>
  <div class="form-group">
    <label><span class="cube">13</span>How many other water outlets (example: taps in play
    fields, sprinklers, swimming pool) do you have?</label>
    <input class="form-control space-textbox" id="Q15W1" type="number" min="0" name="Q15W1"
                                       placeholder="<?php if (isset($data['Q15W1'])) echo $data['Q15W1']; ?>"
                                       value="<?php if (isset($data['Q15W1'])) echo $data['Q15W1']; ?>"/>
  </div>
</div>
<div class="form-group">
  <label> Water supply and cleaning of toilets in your school: </label>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">14</span>Is there a water storage system in
  place to supply water in the toilets?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q16W1"
                                           value="<?php echo set_value('Q16W1', 'Y') ?>" <?php if (isset($data['Q16W1'])) echo $data['Q16W1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q16W1"
                                           value="<?php echo set_value('Q16W1', 'N') ?>" <?php if (isset($data['Q16W1'])) echo $data['Q16W1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">15</span>Is the water supply
  sufficient?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q21W1" value="<?php echo set_value('Q21W1', 'Y') ?>" <?php if (isset($data['Q21W1'])) echo $data['Q21W1'] == 'Y' ? "checked" : "";?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q21W1" value="<?php echo set_value('Q21W1', 'N') ?>" <?php if (isset($data['Q21W1'])) echo $data['Q21W1'] == 'N' ? "checked" : "";?>>
    No </label>
  </div>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">16</span>Are the toilets cleaned?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q18W1" onClick="ToiletCleaned(1)"
                                           value="<?php echo set_value('Q18W1', 'Y') ?>" <?php if (isset($data['Q18W1'])) echo $data['Q18W1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q18W1" onClick="ToiletCleaned(2)"
                                           value="<?php echo set_value('Q18W1', 'N') ?>" <?php if (isset($data['Q18W1'])) echo $data['Q18W1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<?php
                        if (isset($data['Q18W1']))
                        {
                        if ($data['Q18W1'] == 'Y')
                        {
                        ?>
<div class="form-group" id="Q18W2">
<?php } else { ?>
<div class="form-group" id="Q18W2" style="display: none;">
<?php }
                                } else { ?>
<div class="form-group" id="Q18W2" style="display: none;">
  <?php } ?>
  <label class="control-label"><span class="cube">16(a)</span>If yes, please
  specify</label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q18W2"
                                                           value="<?php echo set_value('Q18W2', 1) ?>" <?php if (isset($data['Q18W2'])) echo $data['Q18W2'] == 1 ? "checked" : "" ?>>
        Once a day </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q18W2"
                                                           value="<?php echo set_value('Q18W2', 2) ?>" <?php if (isset($data['Q18W2'])) echo $data['Q18W2'] == 2 ? "checked" : "" ?>>
        Twice a day </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="radio" name="Q18W2"
                                                           value="<?php echo set_value('Q18W2', 3) ?>" <?php if (isset($data['Q18W2'])) echo $data['Q18W2'] == 3 ? "checked" : "" ?>>
        More than twice a day </label>
      </li>
    </ul>
  </div>
</div>
<div class="form-group">
  <label>
  <h6>Task 7: Does your school reuse/recycle waste water? <a class="kplink"
                                                                                                   href="http://www.greenschoolsprogramme.org/knowledge-bank/water/#recyclingSewageWater"
                                                                                                   target="_blank"> </a> </h6>
  </label>
  <br>
  Water recycling is the process of treating waste or used water, in order to upgrade
  its quality, so that it can be used again. When water, once used for a particular
  purpose, is put to use again, it is then being reused. </div>
<div class="form-group">
  <label class="control-label"><span class="cube">17</span>Does your school treat
  wastewater?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W1"
                                                   value="<?php echo set_value('Q19W1', 'Y') ?>" <?php if (isset($data['Q19W1'])) echo $data['Q19W1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W1"
                                                   value="<?php echo set_value('Q19W1', 'N') ?>" <?php if (isset($data['Q19W1'])) echo $data['Q19W1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<div class="form-group hide" id="new_question17_a_i">
  <label class="control-label"><span class="cube">17(a)(i)</span>Where does the water get treated? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W11" value="<?php echo set_value('Q19W11', '1') ?>" <?php if (isset($data['Q19W11'])) echo $data['Q19W11'] == '1' ? "checked" : "" ?>>
    Inside your school </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W11" value="<?php echo set_value('Q19W11', '2') ?>" <?php if (isset($data['Q19W11'])) echo $data['Q19W11'] == '2' ? "checked" : "" ?>>
    Outside your school </label>
  </div>
</div>
<div class="form-group hide" id="new_question17_a_ii">
  <label class="control-label"><span class="cube">17(a)(ii)</span>Who treats the wastewater outside your school? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W12" value="<?php echo set_value('Q19W12', '1') ?>" <?php if (isset($data['Q19W12'])) echo $data['Q19W12'] == '1' ? "checked" : "" ?>>
    Municipality </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W12" value="<?php echo set_value('Q19W12', '2') ?>" <?php if (isset($data['Q19W12'])) echo $data['Q19W12'] == '2' ? "checked" : "" ?>>
    Physical Health Engineering Department (PHED)</label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W12" value="<?php echo set_value('Q19W12', '1') ?>" <?php if (isset($data['Q19W12'])) echo $data['Q19W12'] == '1' ? "checked" : "" ?>>
    Panchayat </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W12" value="<?php echo set_value('Q19W12', '2') ?>" <?php if (isset($data['Q19W12'])) echo $data['Q19W12'] == '2' ? "checked" : "" ?>>
    Community driven initiative</label>
  </div>
</div>
<div class="form-group hide" id="new_question17_b">
  <label class="control-label"><span class="cube">17(b)</span>Please specify the fate of wastewater </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="checkbox" name="Q19W13" value="<?php echo set_value('Q19W13', '1') ?>" <?php if (isset($data['Q19W13'])) echo $data['Q19W13'] == '1' ? "checked" : "" ?>>
    Wastewater flows directly to the drains </label>
    <label class="radio-inline text-gray">
    <input type="checkbox" name="Q19W131" value="<?php echo set_value('Q19W131', '2') ?>" <?php if (isset($data['Q19W131'])) echo $data['Q19W131'] == '2' ? "checked" : "" ?>>
    Used for groundwater recharge</label>
    <label class="radio-inline text-gray">
    <input type="checkbox" name="Q19W132" value="<?php echo set_value('Q19W132', '3') ?>" <?php if (isset($data['Q19W132'])) echo $data['Q19W132'] == '3' ? "checked" : "" ?>>
    Used for gardening and horticulture </label>
  </div>
</div>
<div class="form-group hide" id="new_question17_b_i">
  <label class="control-label"><span class="cube">17(b)(i)</span>Does your school buy treated waste water? </label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W14" value="<?php echo set_value('Q19W14', 'Y') ?>" <?php if (isset($data['Q19W14'])) echo $data['Q19W14'] == 'Y' ? "checked" : "" ?>>
    Yes</label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W14" value="<?php echo set_value('Q19W14', 'N') ?>" <?php if (isset($data['Q19W14'])) echo $data['Q19W14'] == 'N' ? "checked" : "" ?>>
    No</label>
  </div>
</div>
<div class="form-group">
  <label>
  <h6>TASK 8 Does your school reuse the treated Wastewater? </h6>
  </label>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">18</span>Does your school reuse the wastewater from RO plant or Air conditioner drain pipes?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W15" value="<?php echo set_value('Q19W15', 'Y') ?>" <?php if (isset($data['Q19W15'])) echo $data['Q19W15'] == 'Y' ? "checked" : "" ?>>
    Yes</label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q19W15" value="<?php echo set_value('Q19W15', 'N') ?>" <?php if (isset($data['Q19W15'])) echo $data['Q19W15'] == 'N' ? "checked" : "" ?>>
    No</label>
  </div>
</div>
<div class="form-group hide" id="new_question18_i">
  <label class="control-label"><span class="cube">18 (i)</span>If yes, How does your school reuse wastewater from RO plant or AC?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="checkbox" name="Q19W16" value="<?php echo set_value('Q19W16', '1') ?>" <?php if(isset($data['Q19W16'])){ echo $data['Q19W16'] == '1' ? "checked" : "";} ?> />
    Used for  cleaning purposes (mopping, washing vehicles, etc)</label>
    <label class="radio-inline text-gray">
    <input type="checkbox" name="Q19W161" value="<?php echo set_value('Q19W161', '2') ?>" <?php if(isset($data['Q19W161'])){ echo $data['Q19W161'] == '2' ? "checked" : "";}  ?>>
    Used for gardening and horticulture</label>
    <label class="radio-inline text-gray">
    <input type="checkbox" name="Q19W162" value="<?php echo set_value('Q19W162', '3') ?>" <?php if(isset($data['Q19W162'])){ echo $data['Q19W162'] == '3' ? "checked" : "";} ?>>
    Flushing</label>
  </div>
</div>
<div class="form-group hide" id="new_question18_ii">
  <label class="control-label"><span class="cube">18 (i)</span>If no, How does your school reuse wastewater from RO plant or AC?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="checkbox" name="Q19W17" value="<?php echo set_value('Q19W17', '1') ?>" <?php if(isset($data['Q19W17'])){ echo $data['Q19W17'] == '1' ? "checked" : "";}?>>
    Wastewater flows directly to the drains</label>
  </div>
</div>
<div class="form-group">
  <label class="control-label"><span class="cube">19</span>Does your school reuse the
  treated wastewater?</label>
  <div class="form-group">
    <label class="radio-inline text-gray">
    <input type="radio" name="Q20W1" onClick="WasteWater(1)"
                                                   value="<?php echo set_value('Q20W1', 'Y') ?>" <?php if (isset($data['Q20W1'])) echo $data['Q20W1'] == 'Y' ? "checked" : "" ?>>
    Yes </label>
    <label class="radio-inline text-gray">
    <input type="radio" name="Q20W1" onClick="WasteWater(2)"
                                                   value="<?php echo set_value('Q20W1', 'N') ?>" <?php if (isset($data['Q20W1'])) echo $data['Q20W1'] == 'N' ? "checked" : "" ?>>
    No </label>
  </div>
</div>
<?php
                                if (isset($data['Q20W1']))
                                {
                                if ($data['Q20W1'] == 'Y')
                                {
                                ?>
<div class="form-group" id="Q20W1Q">
<?php } else { ?>
<div class="form-group" id="Q20W1Q" style="display: none;">
<?php }
                                        } else { ?>
<div class="form-group" id="Q20W1Q" style="display: none;">
  <?php } ?>
  <label class="control-label"><span class="cube">19(a)</span>How does your
  school reuse wastewater?</label>
  <div class="form-group">
    <ul>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q20W2" value="<?php echo set_value('Q20W2', 1) ?>" <?php if(isset($data['Q20W2'])){ echo $data['Q20W2'] == 1 ? "checked" : "";}   ?>>
        Gardening </label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q20W21" value="<?php echo set_value('Q20W21', 2) ?>" <?php if(isset($data['Q20W21'])){ echo $data['Q20W21'] == 2 ? "checked" : "";} if(isset($data['Q20W21'])){ echo $data['Q20W21'] == true ? "checked" : "";}  ?>>
        Flushing</label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q20W22" value="<?php echo set_value('Q20W22', 3) ?>" <?php if(isset($data['Q20W22'])){ echo $data['Q20W22'] == 3 ? "checked" : "";} ?>>
        Recharge Ground Water</label>
      </li>
      <li>
        <label class="radio-inline text-gray">
        <input type="checkbox" name="Q20W23" value="<?php echo set_value('Q20W23', 4) ?>" <?php if(isset($data['Q20W23'])){ echo $data['Q20W23'] == 4 ? "checked" : "";}  ?>>
        Cleaning (mopping, washing vehicles, etc)</label>
      </li>
    </ul>
  </div>
</div>
<?php
                                        if (isset($data['Q20W1']))
                                        {
                                        if ($data['Q20W1'] == 'N')
                                        {
                                        ?>
<div class="form-group" id="Q19W2">
  <?php } else { ?>
  <div class="form-group" id="Q19W2" style="display: none;">
    <?php }
                                                } else { ?>
    <div class="form-group" id="Q19W2" style="display: none;">
      <?php } ?>
      <label class="control-label"><span class="cube">19(a)</span>Please
      specify the fate of wastewater:</label>
      <div class="form-group">
        <ul>
          <li>
            <label class="radio-inline text-gray">
            <input type="checkbox" name="Q20W3" value="<?php echo set_value('Q20W3', 1) ?>" <?php if(isset($data['Q20W3'])){ echo $data['Q20W3'] == 1 ? "checked" : "";}  ?>>
            Wastewater flows directly to the drains </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="checkbox" name="Q20W31" value="<?php echo set_value('Q20W31', 2) ?>" <?php if(isset($data['Q20W31'])){ echo $data['Q20W31'] == 2 ? "checked" : "";}  ?>>
            Used for groundwater recharge </label>
          </li>
          <li>
            <label class="radio-inline text-gray">
            <input type="checkbox" name="Q20W32" value="<?php echo set_value('Q20W32', 3) ?>" <?php if(isset($data['Q20W32'])){ echo $data['Q20W32'] == 3 ? "checked" : "";}  ?>>
            Used for gardening and horticulture </label>
          </li>
        </ul>
      </div>
    </div>
    <div class="form-group">
      <label>Please upload a flow chart (hand drawn) of the wastewater
      treatment process.</label>
      <br/>
      <button class="btn uploadbtn upload"
                                                            data-id="Flow
                                                            Chart Hand Drwan"
                                                            data-toggle="modal"
                                                            data-target="#uploadModal" type="button">UPLOAD FILES </button>
      <br>
      </label>
    </div>
    <table width="100%" class="question uploadedfiles">
      <thead>
        <tr>
          <!--<th>Image</th>	  -->
          <th>File name</th>
          <th>Delete</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($flowChartHandDrawn as $f) { ?>
        <tr id="index<?php echo $f->id; ?>">
          <?php 
            //$array = explode('.',$f->file_name); 
            //$count = count($array);
            //$extension = $array[$count-1];
            ?>
          <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
          <!--<td> <img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
          file_name ?>" class="img-responsive" />
          </td>
          -->
          <?php //}else{ ?>
          <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
          <?php //}?>
          <?php $name = str_replace(" ", "_", $f->name . "_Flow_Chart_Hand_Drwan_"); ?>
          <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="form-group" id="WastePolicy">
      <label class="control-label">Please upload supporting
      documents:</label>
      <br>
      &bull;Pictures of audit team doing survey<br/>
      Please upload all supporting documents related to this section here.
      Note, files must be one of the following formats: PDF Document
      (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
      File size per document should not exceed <strong>100 KB.</strong> <br/>
      <br/>
      <button class="btn uploadbtn upload"
                                                            data-id="Supporting Document Water" data-toggle="modal"
                                                            data-target="#uploadModal" type="button">UPLOAD FILES </button>
      <br>
      <br>
    </div>
    <table width="100%" class="question uploadedfiles">
      <thead>
        <tr>
          <!--<th>Image</th>	 -->
          <th>File name</th>
          <th>Delete</th>
          <th>Download</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($supportDocWater as $f) { ?>
        <tr id="index<?php echo $f->id; ?>">
          <?php 
            //$array = explode('.',$f->file_name); 
           // $count = count($array);
           // $extension = $array[$count-1];
            ?>
          <?php //if($extension == "jpg" || $extension == "jpeg"){ ?>
          <!--<td> <img style="width:62px; height:46px;" src="<?php //echo base_url() ?>uploads/files/<?php //echo $f->
          file_name ?>" class="img-responsive" />
          </td>
          -->
          <?php //}else{ ?>
          <!--<td><img style="width:62px; height:46px;" src="<?php //echo base_url() ?>assets/img/download.jpg" class="img-responsive" /></td>-->
          <?php //}?>
          <?php $name = str_replace(" ", "_", $f->name . "_Supporting_Document_Water_"); ?>
          <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
          <td><a href="javascript:void(0)" class="air-delete-files" data-id="<?php echo $f->id; ?>"><img src="<?php echo base_url(); ?>assets/front/images/delete.png" style="position:relative; top:5px" /></a></td>
          <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <div class="text-center">
      <button type="button" class="org-btn" id="btnWaterPrevious">Previous</button>
      <button type="submit" id="movenextbtn" value="movenext"
                                                            name="movenext" accesskey="n" class="submit button">Next </button>
      <button type="button"  class="org-btn" id="watersave">Save and Resume Later</button>
    </div>
    <?php echo form_close(); ?> </div>
</div>
<!-- /.container -->
<?php $this->load->view('footer'); ?>
<style type="text/css">
                                            .text-gray {
                                                color: #666666 !important;
                                                /*font-weight:100!important;*/
                                            }
                                        </style>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content"
                                                     style="background:transparent; border-radius:0px;">
      <div class="modal-header"
                                                         style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal"> &times; </button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
      <iframe width="100%" height="330px"
                                                            src="https://www.youtube.com/embed/TcyZ1vtXsMw" id="video"
                                                            frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<!--                                        Upload Modal Starts Here.....-->
<div id="uploadModal" class="modal
                                        fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"
                                                         style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal"> &times; </button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div id="msg"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-md-offset-3" id="test">
            <form enctype="multipart/form-data">
              <input
                                                                            type="file" name="file[]" id="file1" multiple />
              <input
                                                                            type="hidden" name="Fules" value="" id="Fules_bill" />
            </form>
          </div>
        </div>
        <div class="row pull-right">
          <div class="col-md-12">
            <button class="btn btn-default" id="uploadFiles" type="button">UPLOAD</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Return to survey</button>
          </div>
        </div>
        <div class="clerarfix">&nbsp;</div>
        <div class="clerarfix">&nbsp;</div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery
.fileuploader.min.js"></script>
<!--                                        Ends Here...-->
<script>
	jQuery(document).ready(function(){
	
	jQuery('#water').validate({
		rules:{
		      Q8W2:{
				  required:true,
			  },
			  Q8W2S1:{
				  required:true,
			  },
			  Q8W2S1S1:{
				  required:true,
			  },
			  Q8W2S6:{
				  required:true,
			  },
			  Q8W2S2:{
				  required:true,
			  },
			  Q8W2S4:{
				  required:true,
			  },
			  Q8W2S5:{
				  required:true,
				  
			  },
			  Q8W2S61:{
				  required:true,
				 
			  },
			  Q8W2S8:{
				  required:true,
			  },
			   Q8W2S10:{
				  required:true,
			  },
			   Q8W2S13:{
				  required:true,
			  },
			   Q8W2S2S2:{
				  required:true,
			  },
			  Q8W2S2S7:{
				  required:true,
			  },
			   Q8W2S2S10:{
				  required:true,
			  },
			   Q8W2S2S3:{
				  required:true,
			  },
			   Q8W2S2S4:{
				  required:true,
			  },
			   Q8W2S2S5:{
				  required:true,
			  },
			   Q8W2S2S6:{
				  required:true,
			  },
			   Q8W2S2S8:{
				  required:true,
			  },
			   Q8W2S4S1:{
				  required:true,
			  },
			  Q8W2S7:{
				  required:true,
			  },
			  Q8W2S9:{
				  required:true,
			  },
			  Q8W2S11:{
				  required:true,
			  },
			  Q8W2S12:{
				  required:true,
			  },
			  Q1W1S1:{
				  required:true,
			  },
			  Q1W1S3:{
				  required:true,
			  },
			  Q1W1S2:{
				  required:true,
			  },
			  Q2W1S1:{
				  required:true,
			  },
			  Q2W1S3:{
				  required:true,
			  },
			  Q2W1S2:{
				  required:true,
			  },
			  Q3W1S1:{
				  required:true,
			  },
			  Q3W1S2:{
				  required:true,
			  },
			  Q3W1S3:{
				  required:true,
			  },
			  Q4W1:{
				  required:true,
			  },
			  Q4W2:{
				  required:true,
			  },
			  Q4W3:{
				  required:true,
			  },
			  Q4W4:{
				  required:true,
			  },
			  Q4W5:{
				  required:true,
			  },
			  Q4W6:{
				  required:true,
			  },
			  Q4W7:{
				  required:true,
			  },
			  Q4W8:{
				  required:true,
			  },
			  Q4W9:{
				  required:true,
			  },
			  Q4W10:{
				  required:true,
			  },
			  Q7W1:{
				  required:true,
			  },
			  Q8W1S1:{
				  required:true,
			  },
			  Q8W1S2:{
				  required:true,
			  },
			  Q8W1S3:{
				  required:true,
			  },
			  Q8W1S4:{
				  required:true,
			  },
			  Q8W1S5:{
				  required:true,
			  },
			  Q8W1S6:{
				  required:true,
			  },
			  Q8W1S7:{
				  required:true,
			  },
			  Q8W1S9:{
				  required:true,
			  },
			  Q8W1S10:{
				  required:true,
			  },
			  Q8W1S11:{
				  required:true,
			  },
			  Q8W1S12:{
				  required:true,
			  },
			  Q8W3S1:{
				  required:true,
			  },
			  Q8W3S2:{
				  required:true,
			  },
			  Q8W3S3:{
				  required:true,
			  },
			  Q8W3S4:{
				  required:true,
			  },
			  Q8W3S5:{
				  required:true,
			  },
			  Q8W3S6:{
				  required:true,
			  },
			  Q8W3S7:{
				  required:true,
			  },
			  Q8W3S8:{
				  required:true,
			  },
			  Q9W1:{
				  required:true,
			  },
			  Q10W1:{
				  required:true,
			  },
			  Q11W1:{
				  required:true,
			  },
			   Q13W1S1:{
				  required:true,
			  },
			   Q13W1S2:{
				  required:true,
			  },
			   Q13W1S3:{
				  required:true,
			  },
			   Q14W1:{
				  required:true,
			  },
			   Q15W1:{
				  required:true,
			  },
			   Q16W1:{
				  required:true,
			  },
			   Q21W1 :{
				  required:true,
			  },
			   Q18W1:{
				  required:true,
			  },
			   Q18W2:{
				  required:true,
			  },
			   Q19W1:{
				  required:true,
			  },
			   Q19W11:{
				  required:true,
			  },
			   Q19W12:{
				  required:true,
			  },
			   Q19W15:{
				  required:true,
			  },
			  Q20W1:{
				  required:true,
			  },
			  Q7W2:{
				  required:true,
			  }
			 
		}
       
	});
	});
	
	jQuery('#movenextbtn').click(function(e){
		
		
		$r=jQuery('#water').valid();
		if($r == false)
		{
			   e.preventDefault();
			   jQuery('#water').valid();
		}
		
		
	});
	
	</script>
<script type="text/javascript">
                                            $('.close').click(function () {
                                                $('#video').attr("src", "https://www.youtube.com/embed/TcyZ1vtXsMw");
                                            });
                                            $('body').click(function () {
                                                $('#video').attr("src", "https://www.youtube.com/embed/TcyZ1vtXsMw");
                                            });

                                            //                                            Window Load
                                            $(document).ready(function () {
                                                $('#btnWaterPrevious').on('click', function (data) {
                                                    var fd = $('#water').serialize();
                                                    //console.log(fd);
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: '<?php echo base_url('previous/waterajax') ?>',
                                                        data: fd,
                                                        success: function (data)
                                                        {
                                                            window.location.href = "<?php echo base_url('land'); ?>";
                                                        }
                                                    });
                                                });

                                                $('#watersave').on('click', function (data) {
                                                    var fd = $('#water').serialize();
                                                    //console.log(fd);
                                                    $.ajax({
                                                        type: 'POST',
                                                        url: '<?php echo base_url('previous/waterajax') ?>',
                                                        data: fd,
                                                        success: function (data)
                                                        {
                                                            window.location.href = "<?php echo base_url('logout'); ?>";
                                                        }
                                                    });
                                                });
//                                                File Upload Plugin
                                                $('#file1').fileuploader({
                                                    addMore: true,
                                                    theme: 'onebutton',
                                                    limit: 5,
                                                   // fileMaxSize:0.5,
                                                    extensions: ['jpg', 'jpeg', 'png','pdf','doc','docx'],
                                                    captions: {
                                                        button: "Select File",
                                                     //   errors: {
                                                         //   fileSize: '${name} is too large! Please choose a file up ' +
                                                            //'to 512KB.',

                                                     //   }
                                                    }
                                                });
                                                //Ends Here....

                                                //Upload Files
                                                $('#uploadFiles').on('click', function () {
                                                    $('#msg').html('');
                                                    var formdata = new FormData();
                                                    var ins = document
                                                        .getElementById('file1').files.length;
                                                    if (ins == 0)
                                                    {
                                                        $('#msg').html('<div class="alert alert-danger">' +
                                                            '<strong>&#x2716; Error!</strong> Please Select a File to upload' +
                                                            '</div>');
                                                    } else
                                                    {
                                                        for (var x = 0; x < ins; x++) {
                                                            formdata.append
                                                            ("files[]", document.getElementById('file1').files[x]);
                                                        }
                                                        formdata.append('Fuels', $('#Fules_bill').val());
                                                        $.ajax({
                                                            url: '<?php echo base_url('upload_files'); ?>', // point to server-side PHP script
                                                            dataType: 'text', // what to expect back from the PHP script
                                                            cache: false,
                                                            contentType: false,
                                                            processData: false,
                                                            data: formdata,
                                                            type: 'post',
                                                            success: function (response) {
                                                                if (response == "success")
                                                                {
                                                                    $('#msg').html('<div class="alert alert-success">' +
                                                                        '<strong>&#10004; Success!</strong> Files uploaded successfully.' +
                                                                        '</div>');
                                                                } else if (response == "error")
                                                                {
                                                                    $('#msg').html('<div class="alert alert-danger">' +
                                                                        '<strong>&#x2716; Error!</strong> There is an error uploading your files.' +
                                                                        '</div>');
                                                                }
                                                            }

                                                        });
                                                    }
                                                });

                                                //delete air files
                                                $('body').on('click', '.air-delete-files', function (data) {
                                                    var test = confirm("Are you sure you want to delete this file");
                                                    if (test == true)
                                                    {
                                                        var divId = $(this).attr('data-id');
                                                        $.ajax({
                                                            url: '<?php echo base_url('upload_files/deletFiles') ?>',
                                                            type: 'POST',
                                                            data: {id: $(this).attr('data-id')},
                                                            success: function (data)
                                                            {
                                                                if (data == "success")
                                                                {
                                                                    console.log('index' + divId);
                                                                    $('#msg').html('<div class="alert alert-success">' +
                                                                        '<strong>&#10004; Success!</strong> Files deleted successfully.' +
                                                                        '</div>');
                                                                    $('#index' + divId).html('');
                                                                } else if (data == "error")
                                                                {
                                                                    $('#msg').html('<div class="alert alert-danger">' +
                                                                        '<strong>&#x2716; Error!</strong> There is an error deleting your files.' +
                                                                        '</div>');
                                                                }
                                                            }
                                                        });
                                                    }
                                                });
                                            });
                                            //Ends Window Loading
                                            //Get Data When Modal Open
                                            $("#uploadModal").on('shown.bs' +
                                                '.modal',
                                                function (e) {
                                                    var id = e.relatedTarget.dataset.id;
                                                    $('#Fules_bill').val(id);
                                                });

                                            //Remove Data When Modal Close
                                            $("#uploadModal").on("hidden.bs.modal", function () {
                                                $('#test').html("");
                                                var fd = $('#' + document.forms[0].id).serialize();
                                                ///alert(fd);
                                                var redirect = '';
                                                switch (document.forms[0].id)
                                                {
                                                    case "air":
                                                        redirect = "airprevious";
                                                        break;
                                                    case "food":
                                                        redirect = "foodajax";
                                                        break;
                                                    case "energy":
                                                        redirect = "energyajax";
                                                        break;
                                                    case "land":
                                                        redirect = "landajax";
                                                        break;
                                                    case "water":
                                                        redirect = "waterajax";
                                                        break;
                                                    case "PrimaryWater":
                                                        redirect = "waterajax";
                                                        break;
                                                    case "waste":
                                                        redirect = "wasteajax";
                                                        break;
                                                    case "PrimaryWaste":
                                                        redirect = "wasteajax";
                                                        break;
                                                    case "PrimaryAir":
                                                        //alert('Case Called');
                                                        redirect="airprevious";
                                                        break;
                                                    case "PrimaryEnergy":
                                                        redirect = "energyajax";
                                                        break;
                                                    case "PrimaryFood":
                                                        redirect = "foodajax";
                                                        break;
                                                    case "PrimaryLand":
                                                        redirect= "landajax";
                                                }

                                                //console.log(fd);
                                                $.ajax({
                                                    type: 'POST',
                                                    url: '<?php echo base_url() ?>previous/' + redirect,
                                                    data: fd,
                                                    success: function (data) {
                                                        location.reload();
                                                    }
                                                });
                                            });
                                        </script>
<script type="text/javascript">
/*This Code Used For Stopping Enter 'E' Alphabet In Textbox Type 'Number'*/
$(document).ready(function(){
   $("input[type='number']").keypress(function (evt) {
    if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57)
    {
        evt.preventDefault();
	    if(evt.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
    }
  });
  $('input[type=number]').on('wheel', function(e){
    return false;
  });
});
/**/ 
$(document).ready(function(){ 
  if($("input[name='Q8W1S12']").val()==='Y'){ $(".question_Q8W1S12").removeClass("hide");}
  else{$(".question_Q8W1S12").addClass("hide");}
  /**/
  if($("input[name='Q8W2S2']:checked").val()==3){
	 $("input[name='Q8W2S2S2']").attr("checked",true);
  }
  /**/
  if($("input[name='Q8W2S2']:checked").val()==3){
	 $("input[name='Q8W2S2S7']").attr("checked",true);
  }
  if($("input[name='Q8W2S2S2']:checked").val()==='Y'){
	   $("#Q8W2S2S3,#Q8W2S2S4,#Q8W2S2S5,#Q8W2S2S6").css("display","block");
  }
  if($("input[name='Q8W2S2S7']:checked").val()==='Y'){
	   $("#Q8W2S2S8,#Q8W2S2S9").css("display","block");
  }
});
$("input[name='Q8W2S2S2']").click(function(){
    if($("input[name='Q8W2S2']:checked").val()==3 && $(this).val()==='N'){
	  alert("Since you have selected ‘Combination of both’, please provide information on storage tank (s)");
	  $("input[name='Q8W2S2S2'][value='N']").attr("checked",false);
	  $("input[name='Q8W2S2S2'][value='Y']").prop("checked",true);
	  $("#Q8W2S2S3,#Q8W2S2S4,#Q8W2S2S5,#Q8W2S2S6").css("display","block");
	}
});
$("input[name='Q8W2S2S7']").click(function(){
    if($("input[name='Q8W2S2']:checked").val()==3 && $(this).val()==='N'){
	alert("Since you have selected ‘Combination of both’, please provide information on storage tank (s)");
	  $("input[name='Q8W2S2S7'][value='N']").attr("checked",false);
	  $("input[name='Q8W2S2S7'][value='Y']").prop("checked",true);
	  $("#Q8W2S2S8,#Q8W2S2S9").css("display","block");
	}
});

/*This Code Used For Question 5 last Sub Question Yes/No*/
/*What are the water conservation practices your school follows */
$("input[name='Q8W1S12']").click(function(){
   if($(this).val()==='Y'){ $(".question_Q8W1S12").removeClass("hide");}
   else{$(".question_Q8W1S12").addClass("hide");}
});
/**/
$("input[name='Q8W2S2S2']").click(function(){
   if($(this).val()==='N' && $("input[name='Q8W2S2']:checked").val()==3){
     $("#Q8W2S2S31").removeClass('hide');
   }
});
/**/
$("input[name='Q8W2S2S7']").click(function(){
   if($(this).val()==='N' && $("input[name='Q8W2S2']:checked").val()==3){
     $("#Q8W2S2S71").removeClass('hide');
   }
});
/*************************************************************************/
/*This Code Perform Radio Button Click Event*/
/*This Validation Used For New Question 17(a)(i),17(a)(ii),17(b),17(b)(i)*/
$("input[name='Q19W1']").click(function(){
  if($(this).val()==='Y'){
    $("#new_question17_a_i").removeClass("hide");
	//$("#new_question17_a_ii").removeClass("hide");
  }else{
    $("#new_question17_a_i").addClass("hide");
    $("#new_question17_a_ii").addClass("hide");    
  }
  if($(this).val()==='N'){
    $("#new_question17_b").removeClass("hide");
	$("#new_question17_b_i").removeClass("hide");
  }else{
    $("#new_question17_b").addClass("hide");
	$("#new_question17_b_i").addClass("hide");
  } 
});
/*************************************************************************/
/*On Page Load Event*/
/*This Validation Used For New Question 17(a)(i),17(a)(ii),17(b),17(b)(i)*/
$(document).ready(function(){
  if($("input[name='Q19W1']:checked").val()==='Y'){
    $("#new_question17_a_i").removeClass("hide"); $("#new_question17_a_ii").removeClass("hide");
  }else{
    $("#new_question17_a_i").addClass("hide"); $("#new_question17_a_ii").addClass("hide");  }
  if($("input[name='Q19W1']:checked").val()==='N'){
    $("#new_question17_b").removeClass("hide");
	$("#new_question17_b_i").removeClass("hide");
  }else{
    $("#new_question17_b").addClass("hide");
	$("#new_question17_b_i").addClass("hide");
  } 
});
/*Validation For Question 17(a)(ii)*/
/*Where does the water get treated?*/
/*Click Event On Radio Button*/
/*************************************************************************/
$("input[name='Q19W11']").click(function(){
  if($(this).val()==2){$("#new_question17_a_ii").addClass("hide");}
  else{$("#new_question17_a_ii").removeClass("hide");}
});
/*Validation For Question 17(a)(ii)*/
/*Where does the water get treated?*/
/*Load Event On Body*/
/*************************************************************************/
/* $(document).ready(function(){
     if($("input[name='Q19W1']:checked").val()==='N' && ){
	 $("#new_question17_a_ii").addClass("hide");
	 }
     else{$("#new_question17_a_ii").removeClass("hide");}
 });*/
/*************************************************************************/
/*This Code Perform Radio Button Click Event*/
/*This Validation Used For New Question 18*/
$("input[name='Q19W15']").click(function(){
  if($(this).val()==="Y"){
   $("#new_question18_i").removeClass("hide");
   $("#new_question18_ii").addClass("hide");
  }else{ 
    $("#new_question18_i").addClass("hide");
   $("#new_question18_ii").removeClass("hide");
  }
});
/*************************************************************************/
/*On Page Load Event*/
/*This Validation Used For New Question 18*/
$(document).ready(function(){
 if($("input[name='Q19W15']:checked").val()==="Y"){
   $("#new_question18_i").removeClass("hide");
   $("#new_question18_ii").addClass("hide");
  }else{ 
    $("#new_question18_i").addClass("hide");
   $("#new_question18_ii").removeClass("hide");
  }
});
/****************************************************************************/
$("#movenextbtn").click(function(e){
  if($("input[name='Q8W2']:checked").val()==='N'){
    if($("input[name='Q8W2S6']").attr('placeholder')==''){
      if($("input[name='Q8W2S6']").val()==''){
       alert("Please Fill The Answer Of This Question:Calculate your school’s rainwater harvesting potential (in litres).");
	   e.preventDefault();
	      if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
      }
	}  
  }
   if($("input[name='Q8W1S12']:checked").val()==='Y'){
      if($("input[name='Q8W1S123443']").val()===''){
       alert("Please Fill The Answer Of This Question:Provision for storage of leftover water in bottles at water coolers Any other step taken for water conservation? (if Yes, please specify):).");
	   e.preventDefault();
	      if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	}  
  }
  
   /*  if($("input[name='Q8W2S2S2']:checked").val()==='Y'){
      if($("input[name='Q8W2S2S3']").attr("placeholder")==='' && $("input[name='Q8W2S2S3']").val()=='' || $("input[name='Q8W2S2S4']").attr("placeholder")==='' && $("input[name='Q8W2S2S4']").val()==''){
        alert("Please Fill The Answer Of This Question:6(b)(2) A If yes, please provide:");
	    alert("Please Fill The Answer Of This Question:6(b)(2) B If yes, please provide:");
	   e.preventDefault();
	      if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	}  
  } */
  
   /*  if($("input[name='Q8W2S2S7']:checked").val()==='Y'){
      if($("input[name='Q8W2S2S8']").val()==='' && $("input[name='Q8W2S2S8']").attr('placeholder')===''){
       alert("Please share the total number of groundwater recharge structures..");
	   e.preventDefault();
	      if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	}  
  }	 */
/*  if($("input[name='Q8W2S2S31']").val()==""){
    alert("Please Fill The Data Of Given Question: Since you have selected ‘Combination of both’, please provide information on storage tank (s)");
	e.preventDefault();
  }
  if($("input[name='Q8W2S2S71']").val()==""){
    alert("Please Fill The Data Of Given Question: Since you have selected ‘Combination of both’, please provide information on recharge structure (s)");
	e.preventDefault();
  }*/
/*  if($("input[name='Q8W2S2S8']").val()==""){
    alert("Please Fill The Data Of Given Question: Please share the total number of groundwater recharge structures");
	e.preventDefault();
  }*/
});
$("input[name='Q8W2']").click(function(){
   if($(this).val()==='Y'){$("#rainwaterHarvestingFormula").addClass("hide");}
   else{$("#rainwaterHarvestingFormula").removeClass("hide");}
});
$(document).ready(function(){
   if($("input[name='Q8W2']:checked").val()==='Y'){$("#rainwaterHarvestingFormula").addClass("hide");}
   else{$("#rainwaterHarvestingFormula").removeClass("hide");}
});

$("#movenextbtn").click(function(e){
if($("input[name='Q19W1']:checked").val()==='N'){
 if($("input[name='Q19W13']").prop('checked') == false && $("input[name='Q19W131']").prop('checked') == false && $("input[name='Q19W132']").prop('checked') == false){
   alert("17(b) Please specify the fate of wastewater");
   e.preventDefault();
	 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
  }
 }
});
</script>
<script>
	$("#movenextbtn").click(function(e){
if($("input[name='Q5W1']").prop('checked') == false && $("input[name='Q5W2']").prop('checked') == false && $("input[name='Q5W3']").prop('checked') == false && $("input[name='Q5W4']").prop('checked') == false){
  alert("2 Where does the water your school uses, come from");
  e.preventDefault();
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
}
});	
	</script>
<script>
	$("#movenextbtn").click(function(e){
if($("input[name='Q6W1']").prop('checked') == false && $("input[name='Q6W2']").prop('checked') == false && $("input[name='Q6W3']").prop('checked') == false && $("input[name='Q6W4']").prop('checked') == false && $("input[name='Q6W5']").prop('checked') == false){
  alert("3 Who supplies the water in your school");
  e.preventDefault();
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
}
});	
</script>
<script>
	$("#movenextbtn").click(function(e){
      if($('input[name="Q19W15"]:checked').val()==='Y'){
      if($("input[name='Q19W16']").prop('checked') == false && $("input[name='Q19W161']").prop('checked') == false && $("input[name='Q19W162']").prop('checked') == false){
        alert("18(i) If yes, How does your school reuse wastewater from RO plant or AC");
        e.preventDefault();
	      if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
       }
     }else if($('input[name="Q19W15"]:checked').val()==='N'){
         if($("input[name='Q19W17']").prop('checked') == false){
	   alert("18(i) If no, How does your school reuse wastewater from RO plant or AC?");
            e.preventDefault();
		 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	 }
     }		
});	
</script>
<script>
  $("#movenextbtn").click(function(e){
  if($('input[name="Q20W1"]:checked').val()==='Y'){
   if($("input[name='Q20W2']").prop('checked') == false && $("input[name='Q20W21']").prop('checked') == false && $("input[name='Q20W22']").prop('checked') == false  && $("input[name='Q20W23']").prop('checked') == false){
      alert("19(a) How does your school reuse wastewater?");
     e.preventDefault();
	   if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
  }else if($('input[name="Q20W1"]:checked').val()==='N'){
         if($("input[name='Q20W3']").prop('checked') == false && $("input[name='Q20W31']").prop('checked') == false && $("input[name='Q20W32']").prop('checked') == false){
	   alert("18(i) If no, How does your school reuse wastewater from RO plant or AC?");
            e.preventDefault();
		 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	 }
     }	
			  
});	

/**********************************************************************************/
/*This Validation Used For Q6 & Q6(a) Radio Button Click*/
$("input[name='Q8W2']").click(function(){
  if($(this).val()==="Y"){
     if($("input[name='Q8W2S1']").val()==='N'){ 
       $("input[name='Q8W2S1'][value='N']").prop("checked",false);
	 }
     $("input[name='Q8W2S1'][value='Y']").prop("checked",true);
  }
});
$("input[name='Q8W2S1']").click(function(){
   if($("input[name='Q8W2']:checked").val()==="Y"){
      if($("input[name='Q8W2S1']:checked").val()==="N"){
	   alert("Q6:Do you have Rainwater harvesting (RWH) system in your school? Selected Yes As Answer");
       $("input[name='Q8W2S1'][value='Y']").prop("checked",true);
      }
   }
});
	
/*This Validation Used For Q6 & Q6(a) Load Event*/
$(document).ready(function(){
  $("input[name='Q8W2']").click(function(){
  if($(this).val()==="Y"){
     if($("input[name='Q8W2S1']").val()==='N'){ 
       $("input[name='Q8W2S1'][value='N']").prop("checked",false);
	 }
     $("input[name='Q8W2S1'][value='Y']").prop("checked",true);
  }
});
});
/*This Validation Used For Q5 Submit Button Click Event*/	
$("#movenextbtn").click(function(e){
   if($('input[name="Q8W1S1"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Does your school have any water and sanitation policy?)"); 
	e.preventDefault(); 
	   if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
  if($('input[name="Q8W1S2"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(If your school has an eco-club, do they have water component?)"); 
	e.preventDefault();   
	  if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
  if($('input[name="Q8W1S3"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Do all tanks in the school have float valves installed to stop overflow?)"); 
	e.preventDefault();  
	  if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
 if($('input[name="Q8W1S4"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Do the drinking water points have spill proof taps to check overflow?)"); 
	e.preventDefault();  
	 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
 if($('input[name="Q8W1S5"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Does your school use appliances with a quick-wash setting?)"); 
	e.preventDefault(); 
	 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
 if($('input[name="Q8W1S6"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Are dual flush systems installed in the toilets?)"); 
	e.preventDefault();  
	 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
if($('input[name="Q8W1S7"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Does your school encourage bottled water for drinking water?)"); 
	e.preventDefault();
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
if($('input[name="Q8W1S8"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Does your school grow local plant species which require limited amount of water to grow?)"); 
	e.preventDefault();
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
if($('input[name="Q8W1S9"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Has your school initiated any water conservation steps in the school or outside, in the past one year?)"); 
	e.preventDefault();
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }	
if($('input[name="Q8W1S10"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Does your school use a drip or irrigation system?)"); 
	e.preventDefault();   
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }	
if($('input[name="Q8W1S11"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Any other step taken for water conservation? (if Yes, please specify))"); 
	e.preventDefault();   
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
if($('input[name="Q8W1S11"]:checked').length == 0){
	alert("Q5 What are the water conservation practices your school follows..(Provision for storage of leftover water in bottles at water coolers Any other step taken for water conservation? (if Yes, please specify):))"); 
	e.preventDefault();   
	if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
        /**Q8 How many drinking water taps do you have? (Validation)**/
	 if($('input[name="Q9W1"]').val() =="" && $('input[name="Q9W1"]').attr("placeholder")==""){
	   alert("Q8 How many drinking water taps do you have?");
	   e.preventDefault(); 	 
		 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	 }
	  /**Q9 How many drinking water taps do you have? (Validation)**/
	 if($('input[name="Q10W1"]').val() =="" && $('input[name="Q10W1"]').attr("placeholder")==""){
	   alert("Q9 How many hand pumps do you have?");
	   e.preventDefault(); 	 
		 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	 }
	/**Q10 How many ablution taps (taps used for washing hands only) do you have? (Validation)**/
	 if($('input[name="Q11W1"]').val() =="" && $('input[name="Q11W1"]').attr("placeholder")==""){
	   alert("Q10 How many ablution taps (taps used for washing hands only) do you have?");
	   e.preventDefault(); 	 
		 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	 }
	/**Q12 How many urinals (strictly used for urination only) do you have?  (Validation)**/
	 if($('input[name="Q14W1"]').val() =="" && $('input[name="Q14W1"]').attr("placeholder")==""){
	   alert("Q12 How many urinals (strictly used for urination only) do you have?");
	   e.preventDefault(); 	 
		 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	 }
	/**Q13 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have?  (Validation)**/
	 if($('input[name="Q15W1"]').val() =="" && $('input[name="Q15W1"]').attr("placeholder")==""){
	   alert("Q13 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have?");
	   e.preventDefault();
		 if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
	 }
	/**Q6 Do you have Rainwater harvesting (RWH) system in your school?**/	
  if($('input[name="Q8W2"]:checked').length==0){
   alert("Q6 Do you have Rainwater harvesting (RWH) system in your school?");
	   e.preventDefault(); 
	  if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
  } 
/**Q5(Last Option) Provision for storage of leftover water in bottles at water coolers Any other step taken for water conservation? (if Yes, please specify):**/
	if($('input[name="Q8W1S12"]:checked').length==0){
   alert("Q5 Provision for storage of leftover water in bottles at water coolers Any other step taken for water conservation? (if Yes, please specify):");
	   e.preventDefault(); 
		if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
/**/   
   if($('input[name="Q8W1S12"]:checked').length==0){
     alert("Q5 Provision for storage of leftover water in bottles at water coolers Any other step taken for water conservation? (if Yes, please specify):(Please Fill The Textarea Value.)");
	 e.preventDefault();
	   if(e.isDefaultPrevented()){
	     setTimeout(function(){ $(".hide_one").css("display","none"); },600);
	  }
   }
   /*6(a) Calculate your school’s rainwater harvesting potential (in litres).*/ 
    if($('input[name="Q8W2"]:checked').val()==='N'){
     if($('input[name="Q8W2S6"]').val()=="" || $('input[name="Q8W2S6"]').val()==null){
      alert("Q6(a) Calculate your school’s rainwater harvesting potential (in litres). (The value in RWH potential must be more than zero)");
	 
	     
	 }
   } 
  if($('input[name="Q8W2"]:checked').val()==='Y'){



        /* 6(d)(2)Types of filter used in your school:? */
        if($("input[name='Q8W2S33']:checked").val()===1){
		 if($('input[name="Q8W2S4S21"]:checked').length==0 && $('input[name="Q8W2S4S22"]:checked').length==0 && $('input[name="Q8W2S4S23"]:checked').length==0 && $('input[name="Q8W2S4S24"]:checked').length==0){
	     alert("6(d)(2)Types of filter used in your school:?");
		 e.preventDefault();
	     }
        }

           /*6(b)(1)If your school only stores rainwater, please select the use of stored rainwater: */
      if($("input[name='Q8W2S2']:checked").val()==1 || $("input[name='Q8W2S2']:checked").val()==3){
        if($('input[name="Q8W2S2S14"]:checked').length==0 && $('input[name="Q8W2S2S25"]:checked').length==0 && $('input[name="Q8W2S2S36"]:checked').length==0 && $('input[name="Q8W2S2S47"]:checked').length==0 && $('input[name="Q8W2S2S58"]:checked').length==0 && $('input[name="Q8W2S2S69"]:checked').length==0 && $('input[name="Q8W2S2S723"]:checked').length==0 && $('input[name="Q8W2S2S811"]:checked').length==0 && $('input[name="Q8W2S2S912"]:checked').length==0 && $('input[name="Q8W2S2S1013"]:checked').length==0){
	     alert("6(b)(1)If your school only stores rainwater, please select the use of stored rainwater:?");
		 e.preventDefault();
	    }}

            /* 6(d) Please select (from the list given below) the rainwater harvesting structures present in your school:  */

         if($('input[name="Q8W2S31"]:checked').length==0 && $('input[name="Q8W2S32"]:checked').length==0 && $('input[name="Q8W2S33"]:checked').length==0 && $('input[name="Q8W2S34"]:checked').length==0 && $('input[name="Q8W2S35"]:checked').length==0 && $('input[name="Q8W2S36"]:checked').length==0 && $('input[name="Q8W2S37"]:checked').length==0 && $('input[name="Q8W2S38"]:checked').length==0){
	     alert("6(d)Please select (from the list given below) the rainwater harvesting structures present in your school: ?");
		 e.preventDefault();
	    }

          /* 6(b)(3)ii Please tick the type of groundwater recharge structure used in your school: */
       if($("input[name='Q8W2S2S7']:checked").val()==="Y"){
         if($('input[name="Q8W2S2S91"]:checked').length==0 && $('input[name="Q8W2S2S92"]:checked').length==0 && $('input[name="Q8W2S2S93"]:checked').length==0 && $('input[name="Q8W2S2S94"]:checked').length==0 && $('input[name="Q8W2S2S95"]:checked').length==0 && $('input[name="Q8W2S2S96"]:checked').length==0 && $('input[name="Q8W2S2S97"]:checked').length==0){
	     alert("6(b)(3)ii Please tick the type of groundwater recharge structure used in your school:");
		 e.preventDefault();
	    }}




	  /*Q6a Does your school harvest different catchments?*/
	  if($('input[name="Q8W2S1"]:checked').length==0){
	     alert("Q6a Does your school harvest different catchments?");
		 
	  } 
	  /*6(b) How does your school harvest rainwater?*/
	  if($('input[name="Q8W2S2"]:checked').length==0){
	     alert("6(b) How does your school harvest rainwater?");
		 
		
	  }
	  /*6(c)How much area in your school is harvested?*/
	  if($('input[name="Q8W2S4"]:checked').length==0){
	     alert("6(c)How much area in your school is harvested?");
		 
		  
	  } 
	  /*6(e)Rate your catchment on cleanliness:*/
	  if($('input[name="Q8W2S5"]:checked').length==0){
	     alert("6(e)Rate your catchment on cleanliness:");
		 
		 
	  } 
	  /*6(f)Does your school clean your catchment and system*/
	   if($('input[name="Q8W2S61"]:checked').length==0){
	     alert("6(f)Does your school clean your catchment and system");
		 
		 
	  }
	  /*6(g)Does your school monitor the rainwater harvesting structure for its efficiency?*/
	 if($('input[name="Q8W2S8"]:checked').length==0){
	     alert("6(g)Does your school monitor the rainwater harvesting structure for its efficiency?");
		 
		 
	  } 
	  /*6(h)What is the trend of groundwater level in your school across the year?*/
	   if($('input[name="Q8W2S10"]:checked').length==0){
	     alert("6(h)What is the trend of groundwater level in your school across the year?");
		 
		 
	  }
	  
	 
	  /*Q6(a)(1): Which is the catchment area being harvested by your school?*/
     if($("input[name='Q8W2S1']:checked").val()==="Y"){
       if($("input[name='Q8W2S1S1']:checked").length==0){
	     alert("Q6(a)(1): Which is the catchment area being harvested by your school?");
	    
		}
      } 
	  
	  
	  
	  
	  
	  
	  /*6(i)If your school's RWH structure is more than a year old, is there any improvement in the groundwater quality after the implementation of the RWH structure?*/
	   if($('input[name="Q8W2S13"]:checked').length==0){
	     alert("6(i)If your school's RWH structure is more than a year old, is there any improvement in the groundwater quality after the implementation of the RWH structure?");
	    
		  
	  } 
	  /*6(h)(1)Please specify how much was the decrease?*/
	 if($('input[name="Q8W2S10"]:checked').val()==1){
	    if($('input[name="Q8W2S11"]:checked').length==0){
	     alert("6(h)(1)Please specify how much was the decrease?");
	    
		   
	    }
	  } 
	   /*6(h)(1)Please specify how much was the increase?*/
	   if($('input[name="Q8W2S10"]:checked').val()==2){
	    if($('input[name="Q8W2S12"]:checked').length==0){
	     alert("6(h)(1)Please specify how much was the increase?");
	   
		   
	    }
	  }
	   if($('input[name="Q8W2S33"]:checked').val()==1){
	  /*  6(d)(1) Where is your filter unit?*/
		if($('input[name="Q8W2S4S1"]:checked').length==0){
	     alert("6(d)(1) Where is your filter unit?");
		
			
	    }
		/*6(d)(2)Types of filter used in your school?*/
		if($('input[name="Q8W2S4S21"]:checked').length==0 && $('input[name="Q8W2S4S22"]:checked').length==0 && $('input[name="Q8W2S4S23"]:checked').length==0 && $('input[name="Q8W2S4S24"]:checked').length==0){
	     alert("6(d)(2)Types of filter used in your school:?");
		
			
	    }
	  }  
	}

 /**Q14 Is there a water storage system in place to supply water in the toilets??**/
      if($("input[name='Q16W1']:checked").length==0){
       alert("Q14: Is there a water storage system in place to supply water in the toilets??");
	   e.preventDefault();
      }
	  /**Q15 Is the water supply sufficient??**/
      if($("input[name='Q21W1']:checked").length==0){
       alert("Q15: Is the water supply sufficient?");
	   e.preventDefault();
      }
	  /**Q16 Are the toilets cleaned?**/
      if($("input[name='Q18W1']:checked").length==0){
       alert("Q16: Are the toilets cleaned?");
	   e.preventDefault();
      }
	  /**16(a)If yes, please specify**/
      if($("input[name='Q18W1']:checked").val()==="Y"){
       if($("input[name='Q18W2']:checked").length==0){
	     alert("Q16(a): If yes, please specify");
	     e.preventDefault();
		}
      }
	  
	  /**Q4 Does your school get daily water supply?**/
      if($("input[name='Q7W1']:checked").length==0){
       alert("Q4: Does your school get daily water supply?");
	   e.preventDefault();
      }
	  /**Q4(a): Does your school get daily water supply?**/
      if($("input[name='Q7W1']:checked").val()==="Y"){
       if($("input[name='Q7W2']:checked").length==0){
	     alert("Q4(a): Does your school get daily water supply?");
	     e.preventDefault();
		}
      }
	  
	  /**Q4(a): Does your school get daily water supply?**/
      if($("input[name='Q7W1']:checked").val()==="N"){
       if($("input[name='Q7W3']:checked").length==0){
	     alert("Q4(b): Does your school get daily water supply?");
	     e.preventDefault();
		}
      }
	  
    
	/*Date: 1 Dec 2018*/
	 /**Q6(f)(1)Please specify when does your school clean the catchment and RWH system?**/
       if($("input[name='Q8W2S61']:checked").val()==="Y"){
       if($("input[name='Q8W2S7']:checked").length==0){
	     alert("Q6(f)(1)Please specify when does your school clean the catchment and RWH system?");
	     
		}
	  } 
      /**Q6(g)(1)Please specify when does your school monitor the groundwater level?**/
       if($("input[name='Q8W2S8']:checked").val()==="Y"){
       if($("input[name='Q8W2S9']:checked").length==0){
	     alert("Q6(g)(1) Please specify when does your school monitor the groundwater level?");
	    
		}	
	  } 
	/**Q6(b)(1)If your school only stores rainwater, please select the use of stored rainwater:**/
	 if($("input[name='Q8W2S2']:checked").val()==="1"){
       if($("input[name='Q8W2S2S14']:checked").length==0 && $("input[name='Q8W2S2S25']:checked").length==0 && $("input[name='Q8W2S2S36']:checked").length==0 && $("input[name='Q8W2S2S47']:checked").length==0 && $("input[name='Q8W2S2S58']:checked").length==0 && $("input[name='Q8W2S2S69']:checked").length==0 && $("input[name='Q8W2S2S723']:checked").length==0 && $("input[name='Q8W2S2S811']:checked").length==0 && $("input[name='Q8W2S2S912']:checked").length==0 && $("input[name='Q8W2S2S1013']:checked").length==0 ){
	     alert("Q6(b)(1) If your school only stores rainwater, please select the use of stored rainwater?");
	    
		}	
	  }
  /**Q6(b)(3) iiPlease tick the type of groundwater recharge structure used in your school:***/
     if($("input[name='Q8W2S2']:checked").val()==="1"){
       if($("input[name='Q8W2S2S91']:checked").length==0 && $("input[name='Q8W2S2S92']:checked").length==0 && $("input[name='Q8W2S2S93']:checked").length==0 && $("input[name='Q8W2S2S94']:checked").length==0 && $("input[name='Q8W2S2S95']:checked").length==0 && $("input[name='Q8W2S2S96']:checked").length==0 && $("input[name='Q8W2S2S97']:checked").length==0){
	     alert("Q6(b)(3) ii Please tick the type of groundwater recharge structure used in your school?");
	    
		}	
	  } 
    /*Q6(b)(4)If your school practices rainwater harvesting, then what is the ratio between storage and recharge*/
   if($("input[name='Q8W2S2']:checked").val()==="1"){
      if($("input[name='Q8W2S2S10']:checked").length==0){
	    alert("Q6(b)(4) If your school practices rainwater harvesting, then what is the ratio between storage and recharge?");
	   
	  }
   } 
   /*Q6(d) Please select (from the list given below) the rainwater harvesting structures present in your school? */
   	 if($("input[name='Q8W2S2']:checked").val()==="1"){
	   if($("input[name='Q8W2S31']:checked").length==0 && $("input[name='Q8W2S32']:checked").length==0 && $("input[name='Q8W2S33']:checked").length==0 && $("input[name='Q8W2S34']:checked").length==0 && $("input[name='Q8W2S35']:checked").length==0 && $("input[name='Q8W2S36']:checked").length==0 && $("input[name='Q8W2S37']:checked").length==0 && $("input[name='Q8W2S38']:checked").length==0){
	     alert("Q6(d) Please select (from the list given below) the rainwater harvesting structures present in your school: ?");
	    
		}
	 }  
});
</script>
<script>
var nyan = document.getElementById('FLOATVALVES');
var nyanBtn = document.getElementById('btn');
var nyan1 = document.getElementById('SPILLPROOFTAPS');
var nyanBtn1 = document.getElementById('btn1');
var nyan2 = document.getElementById('DUALFLUSHTOILET');
var nyanBtn2 = document.getElementById('btn2');
var nyan3 = document.getElementById('SEMIUNDERGROUNDTANK');
var nyanBtn3 = document.getElementById('btn3');
var nyan4 = document.getElementById('PERCOLATIONPIT');
var nyanBtn4= document.getElementById('btn4');
var nyan5 = document.getElementById('DUGWELL');
var nyanBtn5 = document.getElementById('btn5');
var nyan6 = document.getElementById('TUBEWELL');
var nyanBtn6 = document.getElementById('btn6');
var nyan7 = document.getElementById('RECHARGEPIT');
var nyanBtn7 = document.getElementById('btn7');
var nyan8 = document.getElementById('RECHARGETRENCHES');
var nyanBtn8 = document.getElementById('btn8');
var nyan9 = document.getElementById('SOAKPIT');
var nyanBtn9 = document.getElementById('btn9');

var nyan10 = document.getElementById('CONDUITS');
var nyanBtn10 = document.getElementById('btn10');
var nyan11 = document.getElementById('GUTTERS');
var nyanBtn11 = document.getElementById('btn11');
var nyan12 = document.getElementById('FILTERUNIT');
var nyanBtn12 = document.getElementById('btn12');
var nyan13 = document.getElementById('FIRSTFLUSH');
var nyanBtn13 = document.getElementById('btn13');
var nyan14 = document.getElementById('SUMP');
var nyanBtn14 = document.getElementById('btn14');
var nyan15 = document.getElementById('RECHARGESTRUCTURES');
var nyanBtn15 = document.getElementById('btn15');
function playPause(song){
   if (song.paused && song.currentTime >= 0 && !song.ended) {
      song.play();
   } else {
      song.pause();
   }
}

function reset(btn, song){
   if(btn.classList.contains('playing')){
      btn.classList.toggle('playing');
   }
   song.pause();
   song.currentTime = 0;
}

function progress(btn, song){
   setTimeout(function(){
      var end = song.duration; 
      var current = song.currentTime;
      var percent = current/(end/100);
      //check if song is at the end
      if(current==end){
         reset(btn, song);
      }
      //set inset box shadow
      btn.style.boxShadow = "inset " + btn.offsetWidth * (percent/100) + "px 0px 0px 0px rgba(0,0,0,0.125)"
      //call function again
      progress(btn, song);     
   }, 1000);
}

nyanBtn.addEventListener('click', function(){
   nyanBtn.classList.toggle('playing');
   playPause(nyan);
   progress(nyanBtn, nyan);
});
nyanBtn1.addEventListener('click', function(){
   nyanBtn1.classList.toggle('playing');
   playPause(nyan1);
   progress(nyanBtn1, nyan1);
});
nyanBtn2.addEventListener('click', function(){
   nyanBtn2.classList.toggle('playing');
   playPause(nyan2);
   progress(nyanBtn2, nyan2);
});
nyanBtn3.addEventListener('click', function(){
   nyanBtn3.classList.toggle('playing');
   playPause(nyan3);
   progress(nyanBtn3, nyan3);
});
nyanBtn4.addEventListener('click', function(){
   nyanBtn4.classList.toggle('playing');
   playPause(nyan4);
   progress(nyanBtn4, nyan4);
});
nyanBtn5.addEventListener('click', function(){
   nyanBtn5.classList.toggle('playing');
   playPause(nyan5);
   progress(nyanBtn5, nyan5);
});
nyanBtn6.addEventListener('click', function(){
   nyanBtn6.classList.toggle('playing');
   playPause(nyan6);
   progress(nyanBtn6, nyan6);
});
nyanBtn7.addEventListener('click', function(){
   nyanBtn7.classList.toggle('playing');
   playPause(nyan7);
   progress(nyanBtn7, nyan7);
});
nyanBtn8.addEventListener('click', function(){
   nyanBtn8.classList.toggle('playing');
   playPause(nyan8);
   progress(nyanBtn8, nyan8);
});
nyanBtn9.addEventListener('click', function(){
   nyanBtn9.classList.toggle('playing');
   playPause(nyan9);
   progress(nyanBtn9, nyan9);
});
nyanBtn10.addEventListener('click', function(){
   nyanBtn10.classList.toggle('playing');
   playPause(nyan10);
   progress(nyanBtn10, nyan10);
});
nyanBtn11.addEventListener('click', function(){
   nyanBtn11.classList.toggle('playing');
   playPause(nyan11);
   progress(nyanBtn11, nyan11);
});
nyanBtn12.addEventListener('click', function(){
   nyanBtn12.classList.toggle('playing');
   playPause(nyan12);
   progress(nyanBtn12, nyan12);
});
nyanBtn13.addEventListener('click', function(){
   nyanBtn13.classList.toggle('playing');
   playPause(nyan13);
   progress(nyanBtn13, nyan13);
});
nyanBtn14.addEventListener('click', function(){
   nyanBtn14.classList.toggle('playing');
   playPause(nyan14);
   progress(nyanBtn14, nyan14);
});
nyanBtn15.addEventListener('click', function(){
   nyanBtn15.classList.toggle('playing');
   playPause(nyan15);
   progress(nyanBtn15, nyan15);
});
</script>
<style type="text/css">
	   .form-group > label {
              font-family: 'Lato Bold', sans-serif;
              font-weight: normal;
              font-size: 16px;
              line-height: 32px;
              margin-bottom: 12px;
              color: #e86549;
           }
		#btn,#btn1,#btn2,#btn3,#btn4,#btn5,#btn6,#btn7,#btn8,#btn9,#btn10,#btn11,#btn12,#btn13,#btn14,#btn15{ 
		background: rgb(232, 101, 73);
                color: rgb(0, 0, 0);
                box-shadow: rgba(0, 0, 0, 0.125) 0px 0px 0px 0px inset;
                height: 20px;
                position: relative;
                padding-top: 0px;
			font-weight:900;
			display:none; 
		}	
	</style>
<script>
$('#Q8W2S6A').change(function(){
if($('#Q8W2_2').val()=='N'){
   if($('#Q8W2S6A').val()=='0')
   {
     alert('This Question can not accept zero');
     $('#Q8W2S6A').val('');
   }
 }
});
</script>