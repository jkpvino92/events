<!-- Footer -->
<footer id="page-footer">
    <section id="footer-top">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-social">
                    <figure>Follow us:</figure>
                    <div class="icons">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/Icoots-107898950784053/" target="__blank"><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-pinterest"></i></a>
                        <a href=""><i class="fa fa-youtube-play"></i></a>
                    </div><!-- /.icons -->
                </div><!-- /.social -->
                <div class="search pull-right">
                    <div class="input-group">
                        <input type="text" class="form-control" id="globalSearch" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="submit"  onclick="redirectUrl('#globalSearch','<?php echo base_url() ?>events/browse')"  class="btn"><i class="fa fa-search"></i></button>
                    </span>
                    </div><!-- /input-group -->
                </div><!-- /.pull-right -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-top -->

    <section id="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <aside class="logo">
                        <img src="<?php echo base_url() ?>assets/img/logo-white.png" class="vertical-center">
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Contact Us</h4></header>
                        <address>
                            <strong>Icoots.com</strong>
                            <br>
                            <span>Whitefield, Bangalore, </span>
                            <br>
                            <spa>Karnataka India</span>
                            <br><br>
                            <!--<abbr title="Telephone">Telephone:</abbr> +1 (734) 123-4567
                            <br>-->
                            <abbr title="Email">Email:</abbr> <a href="#">icoots2020@gmail.com</a>
                        </address>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>Important Links</h4></header>
                        <ul class="list-links">
                            <li><a href="<?php echo base_url() ?>events/category/conference">Conference</a></li>
                            <li><a href="<?php echo base_url() ?>events/category/alumini">Alumni</a></li>
                            <li><a href="<?php echo base_url() ?>events/category/workshop">Workshop</a></li>
                            <li><a href="<?php echo base_url() ?>events/category/culture">Culture Fest</a></li>
                            <li><a href="<?php echo base_url() ?>events/category/technical">Technical Fest</a></li>
                        </ul>
                    </aside>
                </div><!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-4">
                    <aside>
                        <header><h4>About Icoots</h4></header>
                        <p>Icoots orignated from the thought that there exists creative thinkers who wants to Publish events in online and prefer to do faster without coding at therir own pace .Icoots helps you to create event and publish online.
                        </p>
                        
                        <div>
                            <a href="<?php echo base_url().'events' ?>" target="__blank" class="read-more">All Events</a>
                        </div>
                    </aside>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div class="background"><img src="<?php echo base_url() ?>assets/img/background-city.png" class="" alt=""></div>
    </section><!-- /#footer-content -->

    <section id="footer-bottom">
        <div class="container">
            <div class="footer-inner">
                <div class="copyright">© Icoots.com, All rights reserved</div><!-- /.copyright -->
            </div><!-- /.footer-inner -->
        </div><!-- /.container -->
    </section><!-- /#footer-bottom -->

</footer>
<!-- end Footer -->



<?php include("contact_us.php") ?>    
</div>
<!-- end Wrapper -->
<script type="text/javascript">var base_url = '<?php echo base_url(); ?>'; </script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/bootstrap/js/moment-with-locales.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/selectize.min.js"></script> -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jQuery.equalHeights.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/icheck.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.vanillabox-0.1.5.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/retina-1.1.0.min.js"></script>



<!-- DATETIMEPICKER 
<script src="<?php echo base_url(); ?>assets/js/moment-with-locales.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datetimepicker.js"> </script>
-->
<!-- Data Table -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.min.js"></script>


<!--  ShareThis END -->


<script type="text/javascript">
    $(function() {
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='registration']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      phone_no: {
                required: true,
                 minlength:10,
                  maxlength:11,
                  number: true
            },
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      }
    },
    // Specify validation error messages
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      
      email: "Please enter a valid email address",
      phone_no:"Please enter a valid phone number"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

   $("form[name='updateprofile']").validate({

    rules: {
 
      firstname: "required",
      lastname: "required",
      phone_no: {
                required: true,
                 minlength:10,
                  maxlength:11,
                  number: true
            }
    },
    
    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      phone_no:"Please enter a valid phone number"
    },
    submitHandler: function(form) {
      form.submit();
      /*$.post(base_url+"customer/account/register", $("#register").serialize(),  function(response) {
          
      });*/
    }
  });

});
</script>
<script type="text/javascript">
function readURL(input, id) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();    
    reader.onload = function(e) {
      $(id).attr('src', e.target.result);
    }    
    reader.readAsDataURL(input.files[0]);
  }
}
$("#logo").change(function() {
  readURL(this, "#logo_preview");
}); 
$("#banner").change(function() {
  readURL(this, "#banner_preview");
});    
</script>
<!-- Event Creation -->
<script type="text/javascript">
function getEventTypes(categoryCode){
    var saveData = $.ajax({
          type: 'POST',
          url: "<?php echo base_url().'events/getEventTypes' ?>",
          data: { category_code : categoryCode.value },
          success: function(response) { 
            $('#program_type').empty();
            $.each(JSON.parse(response), function (index, category_types) {  
                $('#program_type').append(`<option value="${category_types.name_code}"> ${category_types.name} </option>`);
            });
          }
    });
    saveData.error(function() { alert("Something went wrong"); });
}    
function getStates(countryId){
    var saveData = $.ajax({
          type: 'POST',
          url: "<?php echo base_url().'events/getStates' ?>",
          data: { countryId : countryId.value },
          success: function(response) { 
            $('#state').empty();
            $.each(JSON.parse(response), function (index, states) {  
                $('#state').append(`<option value="${states.iso2}"> ${states.name} </option>`);
            });
          }
    });
    saveData.error(function() { alert("Something went wrong"); });
}     
function getCities(stateId){
    var saveData = $.ajax({
          type: 'POST',
          url: "<?php echo base_url().'events/getCities' ?>",
          data: { stateId : stateId.value , countryId : jQuery("#country").val() },
          success: function(response) { 
            $('#city').empty();
            $.each(JSON.parse(response), function (index, cities) {  
                $('#city').append(`<option value="${cities.id}"> ${cities.name} </option>`);
            });
          }
    });
    saveData.error(function() { alert("Something went wrong"); });
}    
</script>



<script>
  $( function() {
    var symInfo = [
      <?php foreach (getSymposium() as $syskey => $symposium) { ?>
        "<?php echo $symposium->name ?>"
        //{label: "<?php //echo $symposium->name ?>", value: "<?php //echo $symposium->id ?>" },
      <?php } ?>
    ];
    $(".event_name").autocomplete({
      source: symInfo
    });
  });
</script>
<!-- Events load more-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/angular.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/ng-infinite-scroll.js"></script>
<script>
var myApp = angular.module('myApp', ['infinite-scroll']);

myApp.controller('DemoController', function($scope, Reddit) {
  $scope.reddit = new Reddit();
});


myApp.factory('Reddit', function($http) {
  var Reddit = function() {
    this.items = [];
    this.busy = false;
    this.loader = false;
    this.no_result = false;
    this.after = 0;
  };
  var searchtext = "false";
  var controller = '<?php echo $this->uri->segment(1); ?>';
  var method = '<?php echo $this->uri->segment(2); ?>';
  if(controller == 'events' && (method == 'browse' || method == 'category' || method == 'location')){
    searchtext = '<?php echo $this->uri->segment(3); ?>';    
  }
  if(searchtext == ''){
      searchtext = "false";
  }
  var limit = 10;
  Reddit.prototype.nextPage = function() {
    if (this.busy) return;
    this.busy = true;
    this.loader = true;    
    
    var url = "<?php echo base_url(); ?>"+"events/browse/"+searchtext+"/"+limit+"/"+ this.after+"/"+method;
    $http.post(url, { isAjax: true }).success(function(response) {
   // console.log(response);
    var items = response;
    for (var i = 0; i < items.length; i++) {
   
        this.items.push(response[i]);
      }
      this.after = this.items.length;    
      if(this.after == 0){
        this.no_result =true;
      }  
      if(response.length == 0){
        this.busy = true;
        this.loader =false;
      }else{
        this.busy = false;
        this.loader = false;
      }
  }.bind(this));

  };

  return Reddit;
});
</script>
<!-- Events load more-->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

<?php if($this->router->fetch_method() == 'createevent'){ ?> 
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/newevent.js"></script>
<?php } ?>

<script src="<?php echo base_url(); ?>assets/js/editor.js"></script>

<!-- Geolocation 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/json/geodata.json"></script>
-->
<!-- Notfication -->
<script src="<?php echo base_url(); ?>assets/js/jquery.growl.js" type="text/javascript"></script>
<script type="text/javascript">
  /*$.growl({ title: "Growl", message: "The kitten is awake!" });
  $.growl.error({ message: "The kitten is attacking!" });
  $.growl.notice({ message: "The kitten is cute!" });
  $.growl.warning({ message: "The kitten is ugly!" });*/
</script>
<!--  ShareThis BEGIN -->
<script async src="https://platform-api.sharethis.com/js/sharethis.js#property=5dd0d63912574600123b54c5&product=sticky-share-buttons"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158746983-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158746983-1');
</script>

</body>
</html>