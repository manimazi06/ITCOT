<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Itcot</title>
       <link rel="shortcut icon" href="<?= $this->Url->build('/') ?>favicon.png" type="image/x-icon">
      <?php echo $this->Html->css('bootstrap'); ?>
      <?php echo $this->Html->css('index'); ?>
      <?php echo $this->Html->css('../fonts/fontawesome/webfonts/fontawesome'); ?>
      <?php echo $this->Html->css('style'); ?>
      <?php echo $this->Html->css('simple-ver-21'); ?>
      <?php echo $this->Html->css('sz-slider'); ?>
      <?php echo $this->Html->css('loginstyle'); ?>
      <?php echo $this->Html->css('multiple-items-11'); ?>
	  <?php echo $this->Html->script('jquery'); ?>    
	  <?php echo $this->Html->script('admin/libs/jquery/dist/jquery.min'); ?>
	  <?php echo $this->Html->script('admin/jquery.validate.min'); ?>    
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link
         href="https://fonts.googleapis.com/css2?family=Chivo+Mono:wght@200&family=Rajdhani&family=Roboto+Condensed&family=Rubik+Pixels&display=swap"
         rel="stylesheet"
         />
   </head>
   <style>
   .error{	   
	  color:red; 
   }
   </style>
   <body>
     <center> <?= $this->Flash->render() ?></center>
      <?= $this->fetch('content') ?>
       
      
      <!--script>
         $('.dropdown').on("mouseenter", () => {
            $('.dropdown > a > button').addClass('show')
            $('.dropdown > a > button').attr("aria-expanded","true");
            $('.dropdown > div').addClass('show')
            $('.dropdown > div').attr("data-bs-popper","none");
          })
         
          $('.dropdown').on("mouseleave", () => {
            $('.dropdown > a > button').removeClass('show')
            $('.dropdown > a > button').attr("aria-expanded","false");
            $('.dropdown > div').removeClass('show')
            $('.dropdown > div').removeAttr("data-bs-popper","none");
          })
        // });
          
      </script-->


      <script>
    jQuery('body').on('keyup', '.num', function(e) {
      this.value = this.value.replace(/[^0-9]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.amount', function(e) {
      this.value = this.value.replace(/[^0-9\.]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.alphanumeric', function(e) {
      this.value = this.value.replace(/[^0-9a-zA-Z ]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.specialfield', function(e) {
      this.value = this.value.replace(/[^a-zA-Z0-9\.\&\-\_\/\s]/g, '').replace(/  +/g, ' ');
    });

    jQuery('body').on('keyup', '.trimspace', function(e) {
      var value = this.value.trim();
    });

    $(document).on("input", ".name", function() {
      this.value = this.value.replace(/[^a-zA-Z\s]/g, '');
    });

    $(document).on("input", ".number", function() {
      this.value = this.value.replace(/[^0-9]/g, '');
    });
    $(document).on("input", ".decimal", function() {
      this.value = this.value.replace(/[^\d.]/g, '');
    });
    // Datepicker
    $('.flatpickr').flatpickr({
      maxDate: "today",
      dateFormat: "d-m-Y",
      allowInput: true





      //   altInput: true,

      // dateFormat: "d-m-Y",
      // mode: "range"

      // enableTime: true,
      //     dateFormat: "Y-m-d H:i",

    });

    $('.monthpicker').flatpickr({
      maxDate: "today",
      allowInput: false,
      plugins: [
        new monthSelectPlugin({
          shorthand: true,
          dateFormat: "Y-m",
          altFormat: "F Y"
        })
      ]
    });

    $('.dropdown').on("mouseenter", () => {
      $('.dropdown > a > button').addClass('show')
      $('.dropdown > a > button').attr("aria-expanded", "true");
      $('.dropdown > div').addClass('show')
      $('.dropdown > div').attr("data-bs-popper", "none");
    });

    $('.dropdown').on("mouseleave", () => {
      $('.dropdown > a > button').removeClass('show')
      $('.dropdown > a > button').attr("aria-expanded", "false");
      $('.dropdown > div').removeClass('show')
      $('.dropdown > div').removeAttr("data-bs-popper", "none");
    });
  </script>
      <?php echo $this->Html->script('jquery'); ?>
      <?php echo $this->Html->script('bootstrap'); ?>
      <?php echo $this->Html->script('sz-slider'); ?>
   </body>
</html>