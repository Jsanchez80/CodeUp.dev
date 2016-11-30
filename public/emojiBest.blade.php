
<!DOCTYPE HTML>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0">

  <script src="https://cdn.jsdelivr.net/emojione/2.2.6/lib/js/emojione.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/emojione/2.2.6/assets/css/emojione.min.css">

    <style type="text/css">
        img.wp-smiley,
        img.emoji {
          display: inline !important;
          border: none !important;
          box-shadow: none !important;
          height: 1em !important;
          width: 1em !important;
          margin: 0 .07em !important;
          vertical-align: -0.1em !important;
          background: none !important;
          padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='e1_theme-css'  href='http://emojione.com/wp-content/themes/emojione.v2/css/site.min.css?ver=1.36' type='text/css' media='all' />
    <link rel='stylesheet' id='emojione-css-css'  href='http://emojione.com/wp-content/themes/emojione.v2/css/emojione.min.css?ver=0.1' type='text/css' media='all' />
    <link rel='stylesheet' id='e1-sprites-css-css'  href='http://emojione.com/wp-content/themes/emojione.v2/css/emojione.sprites.css?ver=all' type='text/css' media='all' />
    <link rel='stylesheet' id='textcomplete-css-css'  href='http://emojione.com/wp-content/themes/emojione.v2/css/textcomplete.css?ver=all' type='text/css' media='all' />
    <script type='text/javascript' src='http://emojione.com/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
    <script type='text/javascript' src='http://emojione.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
    <link rel='https://api.w.org/' href='http://emojione.com/wp-json/' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://emojione.com/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://emojione.com/wp-includes/wlwmanifest.xml" /> 
    <link rel='shortlink' href='http://emojione.com/?p=35' />
    <link rel="alternate" type="application/json+oembed" href="http://emojione.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Femojione.com%2Fdemo%2F" />
    <link rel="alternate" type="text/xml+oembed" href="http://emojione.com/wp-json/oembed/1.0/embed?url=http%3A%2F%2Femojione.com%2Fdemo%2F&#038;format=xml" />

    <style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 5px;
    background-color: #000080;
    color: white;
    font-family: 'Yanone Kaffeesatz', sans-serif;
}

.modal-body {
    padding: 2px 16px;
       
  }
/*ul {
  display: flex;
  flex-direction: column;
  flex-wrap: wrap;
  height: 4em;
  list-style-type: none;
}*/


</style>


</head>


{{-- <body class=" "><div class="site-container"> --}}



  <!--============================= SANDBOX ===============================-->
  <section class="demo-sandbox">
  <div class="centerizer">

     
<button id="myBtn" type="">+</button>

<!--Modal -->
<div id="myModal" class="modal">

  <!-- Modal: displays the emoji's -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
        <h5>Select An Emoji</h5>
  </div>
  <div class="modal-body">
 <ul class="demo-emoji-list" id="emoji-gallery">
        <li><a class="e1" id="1f600" data-shortname=":grinning:" tabindex="1" title="grinning face" data-eid="735">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f600.svg" alt="grinning face" style="font-size: 0.625em;  width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f62c" data-shortname=":grimacing:" tabindex="2" title="grimacing face" data-eid="748">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f62c.svg" alt="grimacing face" style="font-size: 0.625em;  width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f601" data-shortname=":grin:" tabindex="3" title="grinning face with smiling eyes" data-eid="621">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f601.svg" alt="grinning face with smiling eyes" style="font-size: 0.625em;  width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f602" data-shortname=":joy:" tabindex="4" title="face with tears of joy" data-eid="622">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f602.svg" alt="face with tears of joy" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f605" data-shortname=":sweat_smile:" tabindex="7" title="smiling face with open mouth and cold sweat" data-eid="626">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f605.svg" alt="smiling face with open mouth and cold sweat" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f606" data-shortname=":laughing:" tabindex="8" title="smiling face with open mouth and tightly-closed eyes" data-eid="628">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f606.svg" alt="smiling face with open mouth and tightly-closed eyes" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f607" data-shortname=":innocent:" tabindex="9" title="smiling face with halo" data-eid="736">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f607.svg" alt="smiling face with halo" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f609" data-shortname=":wink:" tabindex="10" title="winking face" data-eid="629">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f609.svg" alt="winking face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f60a" data-shortname=":blush:" tabindex="11" title="smiling face with smiling eyes" data-eid="631">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f60a.svg" alt="smiling face with smiling eyes" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f642" data-shortname=":slight_smile:" tabindex="12" title="slightly smiling face" data-eid="1233">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f642.svg" alt="slightly smiling face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f643" data-shortname=":upside_down:" tabindex="13" title="upside-down face" data-eid="2075">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f643.svg" alt="upside-down face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="263a" data-shortname=":relaxed:" tabindex="14" title="white smiling face" data-eid="53">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/263a.svg" alt="white smiling face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f60b" data-shortname=":yum:" tabindex="15" title="face savouring delicious food" data-eid="632">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f60b.svg" alt="face savouring delicious food" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f60c" data-shortname=":relieved:" tabindex="16" title="relieved face" data-eid="634">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f60c.svg" alt="relieved face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f60d" data-shortname=":heart_eyes:" tabindex="17" title="smiling face with heart-shaped eyes" data-eid="635">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f60d.svg" alt="smiling face with heart-shaped eyes" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f618" data-shortname=":kissing_heart:" tabindex="18" title="face throwing a kiss" data-eid="644">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f618.svg" alt="face throwing a kiss" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f617" data-shortname=":kissing:" tabindex="19" title="kissing face" data-eid="742">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f617.svg" alt="kissing face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f619" data-shortname=":kissing_smiling_eyes:" tabindex="20" title="kissing face with smiling eyes" data-eid="743">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f619.svg" alt="kissing face with smiling eyes" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f61a" data-shortname=":kissing_closed_eyes:" tabindex="21" title="kissing face with closed eyes" data-eid="646">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f61a.svg" alt="kissing face with closed eyes" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f61c" data-shortname=":stuck_out_tongue_winking_eye:" tabindex="22" title="face with stuck-out tongue and winking eye" data-eid="647">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f61c.svg" alt="face with stuck-out tongue and winking eye" style="font-size: 0.625em width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f61d" data-shortname=":stuck_out_tongue_closed_eyes:" tabindex="23" title="face with stuck-out tongue and tightly-closed eyes" data-eid="649">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f61d.svg" alt="face with stuck-out tongue and tightly-closed eyes" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f61b" data-shortname=":stuck_out_tongue:" tabindex="24" title="face with stuck-out tongue" data-eid="744">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f61b.svg" alt="face with stuck-out tongue" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f911" data-shortname=":money_mouth:" tabindex="25" title="money-mouth face" data-eid="2077">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f911.svg" alt="money-mouth face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f913" data-shortname=":nerd:" tabindex="26" title="nerd face" data-eid="2078">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f913.svg" alt="nerd face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f60e" data-shortname=":sunglasses:" tabindex="27" title="smiling face with sunglasses" data-eid="738">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f60e.svg" alt="smiling face with sunglasses" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f917" data-shortname=":hugging:" tabindex="28" title="hugging face" data-eid="2079">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f917.svg" alt="hugging face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f60f" data-shortname=":smirk:" tabindex="29" title="smirking face" data-eid="637">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f60f.svg" alt="smirking face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f636" data-shortname=":no_mouth:" tabindex="30" title="face without mouth" data-eid="752">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f636.svg" alt="face without mouth" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f610" data-shortname=":neutral_face:" tabindex="31" title="neutral face" data-eid="739">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f610.svg" alt="neutral face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f611" data-shortname=":expressionless:" tabindex="32" title="expressionless face" data-eid="740">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f611.svg" alt="expressionless face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f612" data-shortname=":unamused:" tabindex="33" title="unamused face" data-eid="638">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f612.svg" alt="unamused face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f644" data-shortname=":rolling_eyes:" tabindex="34" title="face with rolling eyes" data-eid="2080">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f644.svg" alt="face with rolling eyes" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f914" data-shortname=":thinking:" tabindex="35" title="thinking face" data-eid="2081">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f914.svg" alt="thinking face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f633" data-shortname=":flushed:" tabindex="36" title="flushed face" data-eid="666">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f633.svg" alt="flushed face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f61e" data-shortname=":disappointed:" tabindex="37" title="disappointed face" data-eid="650">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f61e.svg" alt="disappointed face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f61f" data-shortname=":worried:" tabindex="38" title="worried face" data-eid="745">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f61f.svg" alt="worried face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f620" data-shortname=":angry:" tabindex="39" title="angry face" data-eid="652">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f620.svg" alt="angry face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f621" data-shortname=":rage:" tabindex="40" title="pouting face" data-eid="653">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f621.svg" alt="pouting face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f614" data-shortname=":pensive:" tabindex="41" title="pensive face" data-eid="641">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f614.svg" alt="pensive face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f615" data-shortname=":confused:" tabindex="42" title="confused face" data-eid="741">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f615.svg" alt="confused face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f641" data-shortname=":slight_frown:" tabindex="43" title="slightly frowning face" data-eid="1232">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f641.svg" alt="slightly frowning face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="2639" data-shortname=":frowning2:" tabindex="44" title="white frowning face" data-eid="1670">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/2639.svg" alt="white frowning face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f623" data-shortname=":persevere:" tabindex="45" title="persevering face" data-eid="655">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f623.svg" alt="persevering face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f616" data-shortname=":confounded:" tabindex="46" title="confounded face" data-eid="643">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f616.svg" alt="confounded face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f62b" data-shortname=":tired_face:" tabindex="47" title="tired face" data-eid="661">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f62b.svg" alt="tired face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f629" data-shortname=":weary:" tabindex="48" title="weary face" data-eid="659">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f629.svg" alt="weary face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f624" data-shortname=":triumph:" tabindex="49" title="face with look of triumph" data-eid="656">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f624.svg" alt="face with look of triumph" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f62e" data-shortname=":open_mouth:" tabindex="50" title="face with open mouth" data-eid="749">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f62e.svg" alt="face with open mouth" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f631" data-shortname=":scream:" tabindex="51" title="face screaming in fear" data-eid="664">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f631.svg" alt="face screaming in fear" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f628" data-shortname=":fearful:" tabindex="52" title="fearful face" data-eid="658">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f628.svg" alt="fearful face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f630" data-shortname=":cold_sweat:" tabindex="53" title="face with open mouth and cold sweat" data-eid="663">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f630.svg" alt="face with open mouth and cold sweat" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f62f" data-shortname=":hushed:" tabindex="54" title="hushed face" data-eid="750">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f62f.svg" alt="hushed face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f626" data-shortname=":frowning:" tabindex="55" title="frowning face with open mouth" data-eid="746">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f626.svg" alt="frowning face with open mouth" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f627" data-shortname=":anguished:" tabindex="56" title="anguished face" data-eid="747">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f627.svg" alt="anguished face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f622" data-shortname=":cry:" tabindex="57" title="crying face" data-eid="654">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f622.svg" alt="crying face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f625" data-shortname=":disappointed_relieved:" tabindex="58" title="disappointed but relieved face" data-eid="657">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f625.svg" alt="disappointed but relieved face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f62a" data-shortname=":sleepy:" tabindex="59" title="sleepy face" data-eid="660">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f62a.svg" alt="sleepy face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f613" data-shortname=":sweat:" tabindex="60" title="face with cold sweat" data-eid="640">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f613.svg" alt="face with cold sweat" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f62d" data-shortname=":sob:" tabindex="61" title="loudly crying face" data-eid="662">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f62d.svg" alt="loudly crying face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f635" data-shortname=":dizzy_face:" tabindex="62" title="dizzy face" data-eid="667">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f635.svg" alt="dizzy face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f632" data-shortname=":astonished:" tabindex="63" title="astonished face" data-eid="665">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f632.svg" alt="astonished face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f910" data-shortname=":zipper_mouth:" tabindex="64" title="zipper-mouth face" data-eid="2082">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f910.svg" alt="zipper-mouth face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f637" data-shortname=":mask:" tabindex="65" title="face with medical mask" data-eid="668">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f637.svg" alt="face with medical mask" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f912" data-shortname=":thermometer_face:" tabindex="66" title="face with thermometer" data-eid="2083">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f912.svg" alt="face with thermometer" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f915" data-shortname=":head_bandage:" tabindex="67" title="face with head-bandage" data-eid="2084">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f915.svg" alt="face with head-bandage" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
        <li><a class="e1" id="1f634" data-shortname=":sleeping:" tabindex="68" title="sleeping face" data-eid="751">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f634.svg" alt="sleeping face" style="font-size: 0.625em; width: 40px; height:40px;"></a>
        </li>
         <li><a class="e1" id="1f63a" data-shortname=":smiley_cat:" tabindex="79" title="smiling cat face with open mouth" data-eid="671">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f63a.svg" alt="smiling cat face with open mouth" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
        <li><a class="e1" id="1f638" data-shortname=":smile_cat:" tabindex="80" title="grinning cat face with smiling eyes" data-eid="669">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f638.svg" alt="grinning cat face with smiling eyes" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
        <li><a class="e1" id="1f639" data-shortname=":joy_cat:" tabindex="81" title="cat face with tears of joy" data-eid="670">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f639.svg" alt="cat face with tears of joy" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
        <li><a class="e1" id="1f63b" data-shortname=":heart_eyes_cat:" tabindex="82" title="smiling cat face with heart-shaped eyes" data-eid="672">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f63b.svg" alt="smiling cat face with heart-shaped eyes" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
        <li><a class="e1" id="1f63c" data-shortname=":smirk_cat:" tabindex="83" title="cat face with wry smile" data-eid="673">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f63c.svg" alt="cat face with wry smile" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
        <li><a class="e1" id="1f63d" data-shortname=":kissing_cat:" tabindex="84" title="kissing cat face with closed eyes" data-eid="674">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f63d.svg" alt="kissing cat face with closed eyes" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
        <li><a class="e1" id="1f640" data-shortname=":scream_cat:" tabindex="85" title="weary cat face" data-eid="677">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f640.svg" alt="weary cat face" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
        <li><a class="e1" id="1f63f" data-shortname=":crying_cat_face:" tabindex="86" title="crying cat face" data-eid="676">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f63f.svg" alt="crying cat face" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
        <li><a class="e1" id="1f63e" data-shortname=":pouting_cat:" tabindex="87" title="pouting cat face" data-eid="675">
              <img src="http://emojione.com/wp-content/uploads/assets/emojis/1f63e.svg" alt="pouting cat face" style="font-size: 0.625em; max-width: 40px; max-height:40px;"></a>
        </li>
  </ul>
</div>
</div>
</div>
<!-- Modal Scripts !-->
<script>
      // Get the modal
      var modal = document.getElementById('myModal');
      // Get the button that opens the modal
      var btn = document.getElementById("myBtn");
      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];
      // When the user clicks the button, open the modal
      btn.onclick = function() {
          
          modal.style.display = "block";
      }
      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
          modal.style.display = "none";
      }
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
</script>

 {{--  <ul class="demo-emoji-list" id="emoji-gallery">
  </ul>
      <input name="emojiDemoMessage" id="emojiDemoMessage" class="e1-sandbox__textarea" placeholder="Click Emoji Above to Insert Code" maxlength="1000"></input >
                  <div class="e1-sandbox__fauxtarea" id="emojiDemoPreview"></div>

                  <div class="e1-sandbox__bottom">
                    <span class="e1-sandbox__bottom__h5"></span>
                    <!-- <p>From a mobile phone or tablet, insert emoji from your mobile keyboard.</p>
                    <p>From a desktop browser, click the icons above to insert a shortcut.</p> -->
                      
                    </div>
                    <button class="btn-pill e1-sandbox__submit" id="demo-submit" style="background-color: red;">Submit</button>
          
      </div> --}}
  </section>
  <!--============================= /SANDBOX ==============================-->



  <!--============================= GUESTBOOK =============================-->
  {{-- <section class="guestbook">
    <div class="centerizer">

      <div class="guestbook__header" id="guestbook-header">
        <figure class="guestbook__header__icon">
          <img src="http://emojione.com/wp-content/themes/emojione.v2/images/vectors/guestbook.svg" alt="Guestbook" />
        </figure>
        <h2 class="guestbook__header__h2 h2"></h2>
        <p>Displaying the most recent 100 submissions.</p>
      </div>

      <div class="guestbook__entries" id="guestbook">
      </div>
    </div>
  </section> --}}
  <!--============================ /GUESTBOOK =============================-->


  <script type="text/javascript">

    // var e1 = function() {

      //global vars
      // var $ = jQuery,
      //   ajax_url = 'http://emojione.com/wp-admin/admin-ajax.php',
      //   button = $('.emoji-picker li a'),
      //   _this;

      // return{

        // init: function(){

        //   _this = this;

        //   button.on('click', function(){
           
            // var catType = $(this).data('category');

            // button.removeClass('active');
            // $(this).addClass('active');
            // $(".color-option.active").removeClass("active");
            //             $('.color-option[data-tone="0"]').addClass("active");
            // if ($('#clearButton').hasClass('active'))
            //   $('#clearButton').removeClass('active');
            // _this.getCategory(catType);
          // });

                    // on page load fetch emojis
// _this.getCategory('people');

//           // on page load grab guestbook
//           _this.guestbookFetch();

//         },

//         getCategory: function(catType){

//           var my_data = {
//             action: 'get_emojis',
//             cat_type: catType,
//             nonce: 'cbf34a0743',
//             page: 'demo'
//           };

          // $.post(ajax_url, my_data, function(response){

          //   $('#emoji-gallery').html(response);
          //   $('#demoSearch').val('');

          //   _this.colorOptionReset(my_data.cat_type);

          // });
// },
        

        // guestbookInsert: function(){

        //   var my_data = {
        //     action: 'add_guestbook_entry',
        //                 message: emojione.toShort($('#emojiDemoMessage').val()),
        //     nonce: 'cbf34a0743'
        //   };

        //   $.post(ajax_url, my_data, function(response){
        //                 $('#guestbook').prepend(response);
        //                 location.href = '#guestbook-header';

        //                 $('#emojiDemoMessage').val('');
        //                 $('#emojiDemoPreview').html('');
        //     $('#demoSearch').val('');

        //   }, 'html');

        // },

        // guestbookFetch: function(){

        //   var my_data = {
        //     action: 'get_guestbook_entries',
        //     nonce: 'cbf34a0743'
        //   };

        //   $.post(ajax_url, my_data, function(response){

        //                 $('#guestbook').html(response);

        //   }, 'html');

        // },


        //       colorOptionReset: function(category) {
        //   if (category != 'people' && category != 'activity' && $("ul.color-category").hasClass("active")) {
        //     $("ul.color-category").off('click', '.color-option', changeTones);
        //     $("ul.color-category").css('opacity', '.2');
        //     $("ul.color-category").toggleClass("active")
        //   }
        //   else if ((category == 'people' || category == 'activity' ) && !$("ul.color-category").hasClass("active")) {
        //     $("ul.color-category").on('click', '.color-option', changeTones);
        //     $("ul.color-category").css('opacity', '');
        //     $("ul.color-category").toggleClass("active")
        //   }
        // },

        // demoSearch: function() {

        //   var my_data = {
        //     action: 'search',
        //     input: $('#demoSearch').val(),nonce: 'cbf34a0743'         };

        //   $.post(ajax_url, my_data, function(response){

        //     $('#emoji-gallery').html(response);
        //     $('.emoji-picker a.active').removeClass('active');
        //     $(".color-option.active").removeClass("active");
        //                 $('.color-option[data-tone="0"]').addClass("active");
        //                 _this.colorOptionReset('off');

        //   }, 'html');
        // }

    //   };
    // }();

    // load on document ready
    // jQuery(function() {
    //   e1.init();
    // });

    // var waitForFinalEvent = (function () {
    //         var timers = {};
    //         return function (callback, ms, uniqueId) {
    //             if (!uniqueId) {
    //                 uniqueId = "Don't call this twice without a uniqueId";
    //             }
    //             if (timers[uniqueId]) {
    //                 clearTimeout (timers[uniqueId]);
    //             }
    //             timers[uniqueId] = setTimeout(callback, ms);
    //         };
    // })();

  // jQuery('#demoSearch').on('keyup input', function () {
  //   if (jQuery('#demoSearch').val() != '') {
  //     if (!jQuery('#clearButton').hasClass('active'))
  //       jQuery('#clearButton').addClass('active');

  //     waitForFinalEvent(function() {
  //       if (jQuery('#demoSearch').val().length > 1)
  //                e1.demoSearch();
  //           }, 200, "search");
  //   }
  //   else if (jQuery('#demoSearch').val() == '')
  //     jQuery('#clearButton').removeClass('active');
  // });

  // jQuery('#searchButton').on('click', function (e) {
  //   e.preventDefault();
  //   if (jQuery('#demoSearch').val() != '')
  //     e1.demoSearch();
  // });

  // jQuery('#clearButton').on('click', function (e) {
  //   e.preventDefault();
  //   jQuery('#demoSearch').val('');
  //   jQuery('#clearButton').removeClass('active');

  // });
  <!--</script>



<!--============================== MODAL ==============================-->
   <!--  <div class="modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal__content">
        <button role="button" type="button" class="e1js-close-modal modal__close">
          <i class="icon-close"></i>
        </button>
        <div class="modal__video e1js-video-cont">
          <div id="ytplayer"></div>
        </div>
      </div>
      <div class="modal__sheet e1js-close-modal"></div>
    </div> -->
<!--============================= /MODAL ==============================-->
  

<!--=========================== LIGHTBOX ===========================-->
<!--========================== /LIGHTBOX ===========================--><!--//////////////////////////////// LOAD JS ////////////////////////////////-->


    <script type='text/javascript' src='http://emojione.com/wp-content/themes/emojione.v2/js/vendor/swiper.min.js?ver=3.2.0'></script>
    <script type='text/javascript' src='http://emojione.com/wp-content/themes/emojione.v2/js/site.js?ver=1.0'></script>
    <script type='text/javascript' src='http://emojione.com/wp-content/themes/emojione.v2/js/vendor/rangyinputs-jquery-src.js?ver=1.0'></script>
    <script type='text/javascript' src='http://emojione.com/wp-content/themes/emojione.v2/js/vendor/emojione.js?ver=1.0'></script>
    <script type='text/javascript' src='http://emojione.com/wp-content/themes/emojione.v2/js/e1-demo.js?ver=1.0'></script>
    <script type='text/javascript' src='http://emojione.com/wp-content/themes/emojione.v2/js/vendor/jquery.textcomplete.min.js?ver=0.8.1'></script>
    <script type='text/javascript' src='http://emojione.com/wp-content/themes/emojione.v2/js/e1-demo-tc.js?ver=1.0'></script>
    <script type='text/javascript' src='http://emojione.com/wp-includes/js/wp-embed.min.js?ver=4.4.2'></script>



  <!-- Google Analytics -->
     <!--  <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-90637-11', 'auto');
      ga('send', 'pageview');
      </script> -->
  <!-- End Google Analytics --> 


</body>
</html>