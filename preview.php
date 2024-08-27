<a id="imageinserted" href=""><img width="<?php echo get_option('myplugin_option_name7'); ?>" src="<?php echo get_option('myplugin_option_name5'); ?>" alt="Selected image"></a>
<a id="imagemediaUrl" href=""><img width="<?php echo get_option('myplugin_option_name7'); ?>" src="<?php echo get_option('myplugin_option_name6'); ?>" alt="Chosen image"></a>
<!-- ******************************** P R E V I E W *********************************** -->
<?php
header("Content-type: text/css; charset: UTF-8");
$icon_color = get_option('myplugin_option_name');
function To_the_top2() {
  if (get_option('myplugin_option_name4')=="Y"){
echo '<a id="GoToTheTop01" href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
</svg></a>';
echo '<a id="GoToTheTop02" href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
<path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
</svg></a>';}else {
  echo '<a id="GoToTheTop03" href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
</svg></a>';
echo '<a id="GoToTheTop04" href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-square" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
</svg></a>';
}
if ((!empty(get_option('myplugin_option_name5')))||(!empty(get_option('myplugin_option_name6')))) {
  echo '<style type="text/css">
  #GoToTheTop02,#GoToTheTop04,#GoToTheTop01,#GoToTheTop03 {
   display:none !important;
  }
  </style>';} if((empty(get_option('myplugin_option_name5')))&&(!empty(get_option('myplugin_option_name6')))){
    echo '<style type="text/css">
  #imageinserted0 {
   display:none !important;
  }
  </style>';} if((empty(get_option('myplugin_option_name6')))&&(!empty(get_option('myplugin_option_name5')))){
    echo '<style type="text/css">
  #imagemediaUrl0 {
   display:none !important;
  }
  </style>';} if((empty(get_option('myplugin_option_name6')))&&(empty(get_option('myplugin_option_name5')))){
    echo '<style type="text/css">
  #imagemediaUrl0 {
   display:none !important;
  }
  #imageinserted0 {
    display:none !important;
   }
  </style>';} if((!empty(get_option('myplugin_option_name6')))&&(!empty(get_option('myplugin_option_name5')))){
    echo '<style type="text/css">
  #imageinserted0 {
    display:none !important;
   }
  </style>';}
}
add_action( 'admin_init', 'To_the_top2' );
?>
<?php
if (get_option('myplugin_option_name3')=="SQ"){
  echo '<style type="text/css">
  #GoToTheTop01,#GoToTheTop03 {
   display:none !important;
  }
  #GoToTheTop02,#GoToTheTop04 {
    display:inline !important;
   }
  </style>';
}
if (get_option('myplugin_option_name3')=="CI"){
  echo '<style type="text/css">
  #GoToTheTop02,#GoToTheTop04 {
   display:none !important;
  }
  #GoToTheTop01,#GoToTheTop03 {
    display:inline !important;
   }
  </style>';
}
?>
<style>
#imagemediaUrl0,#imageinserted0,#GoToTheTop03,#GoToTheTop04,#GoToTheTop02,#GoToTheTop01{
  top:900px;
  left: 100px;
}
#imagemediaUrl0{
  position: relative;
  z-index: 9999;
}
#imageinserted0{
  position: relative;
  z-index: 9999;
}
  #GoToTheTop04{
color: <?php echo $icon_color ; ?> !important;
z-index: 9999;
position: relative;
width: 30px;
height: 30px;
display:none;
}
  #GoToTheTop03{
color: <?php echo $icon_color ; ?> !important;
z-index: 9999;
position: relative;
width: 30px;
height: 30px;
display:none;
}
#GoToTheTop02{
color: <?php echo $icon_color ; ?> !important;
z-index: 9999;
position: relative;
width: 30px;
height: 30px;
display:none;
}
#GoToTheTop01{
color: <?php echo $icon_color ; ?> !important;
z-index: 9999;
position: relative;
top:none;
bottom: 3px;
right:3px;
left:none;
width: 30px;
height: 30px;
}
</style>
