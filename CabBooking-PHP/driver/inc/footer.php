<script>
  $(document).ready(function(){
    $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large")
    })
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
<!-- Footer-->

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

.container{
   max-width: 1170px;
   margin:auto;
 }
 .row{
   display: flex;
   flex-wrap: wrap;
 }
 ul{
   list-style: none;
 }
 .footer{
   background-color: #24262b;
     padding: 70px 0;
 }
 .footer-col{
    width: 25%;
    padding: 0 15px;
 }
 .footer-col h4{
   font-size: 18px;
   color: #ffffff;
   text-transform: capitalize;
   margin-bottom: 35px;
   font-weight: 500;
   position: relative;
 }
 .footer-col h4::before{
   content: '';
   position: absolute;
   left:0;
   bottom: -10px;
   background-color: #e91e63;
   height: 2px;
   box-sizing: border-box;
   width: 50px;
 }
 .footer-col ul li:not(:last-child){
   margin-bottom: 10px;
 }
 .footer-col ul li{
   color: #ffffff ;
 }
 .footer-col ul li a{
   font-size: 16px;
   text-transform: capitalize;
   color: #ffffff;
   text-decoration: none;
   font-weight: 300;
   color: #bbbbbb;
   display: block;
   transition: all 0.3s ease;
 }
 .footer-col ul li a:hover{
   color: #ffffff;
   padding-left: 8px;
 }
 .footer-col .social-links a{
   display: inline-block;
   height: 40px;
   width: 40px;
   background-color: rgba(255,255,255,0.2);
   margin:0 10px 10px 0;
   text-align: center;
   line-height: 40px;
   border-radius: 50%;
   color: #ffffff;
   transition: all 0.5s ease;
 }
 .footer-col .social-links a:hover{
   color: #24262b;
   background-color: #ffffff;
 }
 
 /*responsive*/
 @media(max-width: 767px){
   .footer-col{
     width: 50%;
     margin-bottom: 30px;
 }
 }
 @media(max-width: 574px){
   .footer-col{
     width: 100%;
 }
 }
</style>
<footer class="footer">
     <div class="container">
      <div class="row">
      <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            
            
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Privacy policy</a></li>
            
          </ul>
        </div>
        <div class="footer-col" id="footer-col">
          <h4>Contact US</h4>
          <ul>
            <li>Waghodia, Vadodara, Gujarat 390019</li>
            <li>Phone No: 6355700938</li>
            <li>carrentral@gmail.com</li>
            
          </ul>
        </div>
        
      </div>
     </div>
  </footer>
<footer class="py-4 bg-dark">
            <div class="container">
            
          </div>
        </footer>

   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
