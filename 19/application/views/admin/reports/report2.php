<h1>PARTICIPATION BY STATE</h1>
<div class="wrapper" style="padding:0px;">
  <div class="container"> <?php echo form_open('admin/reports/setParticipationByState',array('id'=>'participationByState')); ?>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <label for="pwd">Select First State :</label>
      <?php echo form_dropdown('state1', $states, $this->input->post('state1'), array('class' => 'form-control', 'id' => 'country-select')); ?></div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><br/>
      <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="compare" onclick="return Validate()">
    </div>
    <?php echo form_close(); ?> </div>
</div>
