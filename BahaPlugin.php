<?php
/*
Plugin Name: Go to the Top
Description: This is a new plugin that gives you a button of your choice that goes to the top of the page . Go to the settings page 
Author: Baha Eddine Manai
Version: 1.0
Author URI: http://bahamanai.tn/
*/
?>
<?php
function myplugin_register_settings() {
   add_option( 'myplugin_option_name', 'This is my option value.');
   add_option( 'myplugin_option_name2', 'This is my option value.');
   add_option( 'myplugin_option_name3', 'This is my option value.');
   add_option( 'myplugin_option_name4', 'This is my option value.');
   add_option( 'myplugin_option_name5', 'This is my option value.');
   add_option( 'myplugin_option_name6', 'This is my option value.');
   add_option( 'myplugin_option_name7', '30');
   register_setting( 'myplugin_options_group', 'myplugin_option_name', 'myplugin_callback' );
   register_setting( 'myplugin_options_group', 'myplugin_option_name2', 'myplugin_callback' );
   register_setting( 'myplugin_options_group', 'myplugin_option_name3', 'myplugin_callback' );
   register_setting( 'myplugin_options_group', 'myplugin_option_name4', 'myplugin_callback' );
   register_setting( 'myplugin_options_group', 'myplugin_option_name5', 'myplugin_callback' );
   register_setting( 'myplugin_options_group', 'myplugin_option_name6', 'myplugin_callback' );
   register_setting( 'myplugin_options_group', 'myplugin_option_name7', 'myplugin_callback' );

}
add_action( 'admin_init', 'myplugin_register_settings' );
?>
<!-- ******************************************************************* -->
<?php
function myplugin_register_options_page() {
  add_options_page('Go to the Top Settings', 'Go to the Top Settings', 'manage_options', 'myplugin', 'myplugin_options_page');
}
add_action('admin_menu', 'myplugin_register_options_page');
?>

<!-- ********************************************************************* -->
<?php
function myplugin_option_page()
{
  //content on page goes here
}
?>
<!-- ******************************************************************** -->
<?php function myplugin_options_page()
{
?>
  <div style="margin-left:60px">
  <?php screen_icon(); ?>
  <h1 id="ech1" style="text-align:center;font-family:cursive;font-size:3em;text-decoration:underline;" class="lineUp"><img id="TOPlogo" width="80px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/TOPlogo.png"></img>Go to the Top</h1>
  <h2 id="ech2" class="lineUp2" style="text-align:center;font-family:cursive;font-size:1.3em">Plugin by Baha Manai</h2>
  <form method="post" action="options.php" id="settingsForm">
  <?php settings_fields( 'myplugin_options_group' ); ?>
<fieldset class="fieldsets"><legend class="legends" >Settings for SVG icons </legend>
<label for="clr" style="padding-right:23px;">Color :</label><input type="color" id="clr" name="myplugin_option_name" value="<?php echo get_option('myplugin_option_name'); ?>" /><br>
  <label for="frm" style="padding-right:23px;">Form :</label><select id="frm" name="myplugin_option_name3" >
          <option value="SQ" <?php if( get_option('myplugin_option_name3')== "SQ"){echo 'selected';}?>>Square</option>
          <option value="CI" <?php if( get_option('myplugin_option_name3')== "CI"){echo 'selected';}?>>Circle</option></select><br>
<label style="padding-right:35px;" for="fill">Fill :</label>
  <select id="fill" name="myplugin_option_name4" >
          <option value="N" <?php if( get_option('myplugin_option_name4')== "N"){echo 'selected';}?>>Not filled</option>
          <option value="Y" <?php if( get_option('myplugin_option_name4')== "Y"){echo 'selected';}?>>filled</option></select><br>
<label for="pst">Position :</label>
  <select id="pst" name="myplugin_option_name2">
          <option value="TL" <?php if( get_option('myplugin_option_name2')== "TL"){echo 'selected';}?>>Top Left</option>
          <option value="TR" <?php if( get_option('myplugin_option_name2')== "TR"){echo 'selected';}?>>Top Right</option>
          <option value="BR" <?php if( get_option('myplugin_option_name2')== "BR"){echo 'selected';}?>>Bottom Right</option>
          <option value="BL" <?php if( get_option('myplugin_option_name2')== "BL"){echo 'selected';}?>>Bottom Left</option> </select></fieldset>
<fieldset class="fieldsets"><legend class="legends">Switch to icon images  </legend><div style="margin-bottom:20px;"><label>Choose an image :</label><br>
<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon1.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon1.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:3px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon1.png">

<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon2.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon2.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:5px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon2.png">

<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon3.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon3.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:5px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon3.png"><br>

<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon4.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon4.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:5px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon4.png">

<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon5.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon5.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:5px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon5.png">

<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon6.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon6.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:5px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon6.png"><br>

<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon7.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon7.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:5px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon7.png">

<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon8.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon8.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:5px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon8.png">

<input type="radio" name="myplugin_option_name5" value="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon9.png" <?php if( get_option('myplugin_option_name5')== "<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon9.png"){echo 'checked';}?>><img style="position:relative;top:18px;left:5px;" width="40px" src="<?php echo plugin_dir_url(__FILE__); ?>assets/images/icon9.png">
<button class="BT" type="button" onclick="removechecked()" >Remove</button><br></div>
<label>Add an image by URL :</label><br>
<input style="margin-top:10px;margin-bottom:10px;margin-right:20px;" id="myInput" size="25" type="url" placeholder="Enter the URL of the image" Name="myplugin_option_name6" value="<?php echo get_option('myplugin_option_name6') ?>"><button class="BT" type="button" onclick="resetInput()">Remove</button>
<br>
<script>
function resetInput() {
    document.getElementById('myInput').value = '';
}
function removechecked() {
  var radioButtons = document.getElementsByName('myplugin_option_name5');

      for (var i = 0; i < radioButtons.length; i++) {
        radioButtons[i].checked = false;
      }
}
</script>
<label>Change image width :</label><br><input style="margin-top:10px;" type="number" value="30" min="20" max="60" name="myplugin_option_name7"></fieldset>
    <?php submit_button(); ?>
  </form>
  </div>

<?php } ?>
<?php if (get_option('myplugin_option_name2')=="TR"){
   echo '<style type="text/css">
   #GoToTheTop1,#GoToTheTop3,#imageinserted,#imagemediaUrl,#GoToTheTop2,#GoToTheTop4{
    top:3px;
    bottom: none;
    right:3px;
    left:none;
   }
   </style>';
}
if (get_option('myplugin_option_name2')=="BR"){
  echo '<style type="text/css">
  #GoToTheTop1 ,#GoToTheTop3,#imageinserted,#imagemediaUrl,#GoToTheTop2,#GoToTheTop4{
   top:none;
   bottom: 3px;
   right:3px;
   left:none;
  }
  </style>';
}
if (get_option('myplugin_option_name2')=="TL"){
  echo '<style type="text/css">
  #GoToTheTop1 ,#GoToTheTop3,#imageinserted,#imagemediaUrl,#GoToTheTop2,#GoToTheTop4{
   top:3px;
   bottom: none;
   right:none;
   left:3px;
  }
  </style>';
}
if (get_option('myplugin_option_name2')=="BL"){
  echo '<style type="text/css">
  #GoToTheTop1 ,#GoToTheTop3,#imageinserted,#imagemediaUrl,#GoToTheTop2,#GoToTheTop4{
   top:none;
   bottom: 3px;
   right:none;
   left:3px;
  }
  </style>';
}
if (get_option('myplugin_option_name3')=="SQ"){
  echo '<style type="text/css">
  #GoToTheTop1,#GoToTheTop3 {
   display:none !important;
  }
  #GoToTheTop2,#GoToTheTop4 {
    display:inline !important;
   }
  </style>';
}
if (get_option('myplugin_option_name3')=="CI"){
  echo '<style type="text/css">
  #GoToTheTop2,#GoToTheTop4 {
   display:none !important;
  }
  #GoToTheTop1,#GoToTheTop3 {
    display:inline !important;
   }
  </style>';
}
?>
<!-- ****************************** Button of the plugin ************************************* -->
<?php
header("Content-type: text/css; charset: UTF-8");
$icon_color = get_option('myplugin_option_name');
function To_the_top() {
  echo '<a id="imageinserted" href=""><img width="' . esc_attr(get_option('myplugin_option_name7')) . '" src="' . esc_url(get_option('myplugin_option_name5')) . '" alt="Selected image"></a>';
echo '<a id="imagemediaUrl" href=""><img width="' . esc_attr(get_option('myplugin_option_name7')) . '" src="' . esc_url(get_option('myplugin_option_name6')) . '" alt="Chosen image"></a>';
  if (get_option('myplugin_option_name4')=="Y"){
echo '<a id="GoToTheTop1" href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
<path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
</svg></a>';
echo '<a id="GoToTheTop2" href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-square-fill" viewBox="0 0 16 16">
<path d="M2 16a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2zm6.5-4.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 1 0"/>
</svg></a>';}else {
  echo '<a id="GoToTheTop3" href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
</svg></a>';
echo '<a id="GoToTheTop4" href=""><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-square" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z"/>
</svg></a>';
}
if ((!empty(get_option('myplugin_option_name5')))||(!empty(get_option('myplugin_option_name6')))) {
  echo '<style type="text/css">
  #GoToTheTop2,#GoToTheTop4,#GoToTheTop1,#GoToTheTop3 {
   display:none !important;
  }
  </style>';} if((empty(get_option('myplugin_option_name5')))&&(!empty(get_option('myplugin_option_name6')))){
    echo '<style type="text/css">
  #imageinserted {
   display:none !important;
  }
  </style>';} if((empty(get_option('myplugin_option_name6')))&&(!empty(get_option('myplugin_option_name5')))){
    echo '<style type="text/css">
  #imagemediaUrl {
   display:none !important;
  }
  </style>';} if((empty(get_option('myplugin_option_name6')))&&(empty(get_option('myplugin_option_name5')))){
    echo '<style type="text/css">
  #imagemediaUrl {
   display:none !important;
  }
  #imageinserted {
    display:none !important;
   }
  </style>';} if((!empty(get_option('myplugin_option_name6')))&&(!empty(get_option('myplugin_option_name5')))){
    echo '<style type="text/css">
  #imageinserted {
    display:none !important;
   }
  </style>';}
  
}
add_action( 'wp_enqueue_scripts', 'To_the_top' );
?>
<style>
  .BT{
    border-color:#0551af;
    color:#0551af;
    border-radius:10px;
    font-family:cursive;
  }
  .BT:active{
    background-color:#bbf7f9 !important;
  }
  .BT:hover{
    background-color:#E1F2F5;
  }
.fieldsets label{
  color:#0551af;
  font-family:cursive;
  font-size: 16px;
  margin-right:20px;
  }
#settingsForm{
  margin-bottom: 30px;
  margin-right: auto;
  margin-left:auto;
  width:40%;
}
fieldset img{
  margin-right: 30px;
  margin-bottom:5px;
}
.fieldsets{
  border:2px solid #0551af;
  margin-top: 30px;
  padding:20px 30px;
  background-color:#E1F2F5;
}
.legends{
  color:#0551af;
  font-weight:bold;
  font-size:1.5em;
  font-family:cursive;
}
#imagemediaUrl{
  position: fixed;
  z-index: 9999;
}
#imageinserted{
  position: fixed;
  z-index: 9999;
}
#spancolor{
  background-color:<?php echo $icon_color ; ?>;
  width:70px;
  }
#TOPlogo{
  position:relative;
  top:  37px;
  right:10px;
}
#ech1{
  text-align:center;
  font-family:cursive;
  font-size:3em;
  text-decoration:underline;
  color:#0551af;
  }
  #GoToTheTop4{
color: <?php echo $icon_color ; ?> !important;
z-index: 9999;
position: fixed;
width: 30px;
height: 30px;
display:none;
}
  #GoToTheTop3{
color: <?php echo $icon_color ; ?> !important;
z-index: 9999;
position: fixed;
width: 30px;
height: 30px;
display:none;
}
#GoToTheTop2{
color: <?php echo $icon_color ; ?> !important;
z-index: 9999;
position: fixed;
width: 30px;
height: 30px;
display:none;
}
#GoToTheTop1{
color: <?php echo $icon_color ; ?> !important;
z-index: 9999;
position: fixed;
top:none;
bottom: 3px;
right:3px;
left:none;
width: 30px;
height: 30px;
}
#ech2{
  position: relative ;
  bottom:15px;
  left:643px;
color: #0551af !important;
width:230px;
}
.lineUp{
  text-decoration-color: #4ac9dc !important;
}
</style>

