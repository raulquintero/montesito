<?php

function layout($login,$serial="Sin Configurar"){
$name =$login->getName();
$loadscript="bottom_ticket()";
 $loadscript="onload=\"$loadscript\"";
$script_ticket = "
<script language=\"javascript\" type=\"text/javascript\">
function bottom_ticket(){
 var objDiv = document.getElementById(\"ticket\");
objDiv.scrollTop = objDiv.scrollHeight;
        $('#codigo').focus();
}


   
</script> 



    ";
$layout['top'] ="
<!doctype html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <!-- Apple devices fullscreen -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <!-- Apple devices fullscreen -->
    <meta names=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\" />

    <title>cibercomm.com</title>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <!-- jQuery UI -->
    <link rel=\"stylesheet\" href=\"css/plugins/jquery-ui/jquery-ui.min.css\">
    <!-- Notify -->
    <link rel=\"stylesheet\" href=\"css/plugins/gritter/jquery.gritter.css\">
    <!-- PageGuide -->
    <link rel=\"stylesheet\" href=\"css/plugins/pageguide/pageguide.css\">
    <!-- Fullcalendar -->
    <link rel=\"stylesheet\" href=\"css/plugins/fullcalendar/fullcalendar.css\">
    <link rel=\"stylesheet\" href=\"css/plugins/fullcalendar/fullcalendar.print.css\" media=\"print\">
    <!-- Tagsinput -->
    <link rel=\"stylesheet\" href=\"css/plugins/tagsinput/jquery.tagsinput.css\">
    <!-- chosen -->
    <link rel=\"stylesheet\" href=\"css/plugins/chosen/chosen.css\">
    <link rel=\"stylesheet\" href=\"css/plugins/chosen/chosen.css\">
    <!-- multi select -->
    <link rel=\"stylesheet\" href=\"css/plugins/multiselect/multi-select.css\">
    <!-- timepicker -->
    <link rel=\"stylesheet\" href=\"css/plugins/timepicker/bootstrap-timepicker.min.css\">
    <!-- colorpicker -->
    <link rel=\"stylesheet\" href=\"css/plugins/colorpicker/colorpicker.css\">
    <!-- Datepicker -->
    <link rel=\"stylesheet\" href=\"css/plugins/datepicker/datepicker.css\">
    <!-- Daterangepicker -->
    <link rel=\"stylesheet\" href=\"css/plugins/daterangepicker/daterangepicker.css\">
    <!-- Plupload -->
    <link rel=\"stylesheet\" href=\"css/plugins/plupload/jquery.plupload.queue.css\">
    <!-- select2 -->
    <link rel=\"stylesheet\" href=\"css/plugins/select2/select2.css\">
    <!-- icheck -->
    <link rel=\"stylesheet\" href=\"css/plugins/icheck/all.css\">
    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <!-- Color CSS -->
    <link rel=\"stylesheet\" href=\"css/themes.css\">

    <!-- jQuery -->
    <script src=\"js/jquery.min.js\"></script>


    <!-- Nice Scroll -->
    <script src=\"js/plugins/nicescroll/jquery.nicescroll.min.js\"></script>
    <!-- jQuery UI -->
    <script src=\"js/plugins/jquery-ui/jquery-ui.js\"></script>
    <!-- Touch enable for jquery UI -->
    <script src=\"js/plugins/touch-punch/jquery.touch-punch.min.js\"></script>
    <!-- slimScroll -->
    <script src=\"js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- vmap -->
    <script src=\"js/plugins/vmap/jquery.vmap.min.js\"></script>
    <script src=\"js/plugins/vmap/jquery.vmap.world.js\"></script>
    <script src=\"js/plugins/vmap/jquery.vmap.sampledata.js\"></script>
    <!-- Bootbox -->


    <!-- Masked inputs -->
    <script src=\"js/plugins/maskedinput/jquery.maskedinput.min.js\"></script>
    <!-- TagsInput -->
    <script src=\"js/plugins/tagsinput/jquery.tagsinput.min.js\"></script>
    <!-- Datepicker -->
    <script src=\"js/plugins/datepicker/bootstrap-datepicker.js\"></script>
    <!-- Daterangepicker -->
    <script src=\"js/plugins/daterangepicker/moment.min.js\"></script>
    <script src=\"js/plugins/daterangepicker/daterangepicker.js\"></script>
    <!-- Timepicker -->
    <script src=\"js/plugins/timepicker/bootstrap-timepicker.min.js\"></script>
    <!-- Colorpicker -->
    <script src=\"js/plugins/colorpicker/bootstrap-colorpicker.js\"></script>
    <!-- Chosen -->
    <script src=\"js/plugins/chosen/chosen.jquery.min.js\"></script>
    <!-- MultiSelect -->
    <script src=\"js/plugins/multiselect/jquery.multi-select.js\"></script>
    <!-- CKEditor -->
    <script src=\"js/plugins/ckeditor/ckeditor.js\"></script>
    <!-- PLUpload -->
    <script src=\"js/plugins/plupload/plupload.full.min.js\"></script>
    <script src=\"js/plugins/plupload/jquery.plupload.queue/jquery.plupload.queue.min.js\"></script>
    <!-- Custom file upload -->
    <script src=\"js/plugins/fileupload/bootstrap-fileupload.min.js\"></script>
    <script src=\"js/plugins/mockjax/jquery.mockjax.js\"></script>
    <!-- select2 -->
    <script src=\"js/plugins/select2/select2.min.js\"></script>
    <!-- icheck -->
    <script src=\"js/plugins/icheck/jquery.icheck.min.js\"></script>
    <!-- complexify -->
    <script src=\"js/plugins/complexify/jquery.complexify-banlist.min.js\"></script>
    <script src=\"js/plugins/complexify/jquery.complexify.min.js\"></script>
    <!-- Mockjax -->
    <script src=\"js/plugins/mockjax/jquery.mockjax.js\"></script>
     
<!-- Sparkline -->
    <script src=\"js/plugins/sparklines/jquery.sparklines.min.js\"></script>
<!-- Bootbox -->
    <script src=\"js/plugins/bootbox/jquery.bootbox.js\"></script>
    <!-- Bootbox -->
    <script src=\"js/plugins/form/jquery.form.min.js\"></script>
    

    <script src=\"js/plugins/bootbox/jquery.bootbox.js\"></script>
    <!-- Flot -->
    <script src=\"js/plugins/flot/jquery.flot.min.js\"></script>
    <script src=\"js/plugins/flot/jquery.flot.bar.order.min.js\"></script>
    <script src=\"js/plugins/flot/jquery.flot.pie.min.js\"></script>
    <script src=\"js/plugins/flot/jquery.flot.resize.min.js\"></script>
    <!-- imagesLoaded -->
    <script src=\"js/plugins/imagesLoaded/jquery.imagesloaded.min.js\"></script>
    <!-- PageGuide -->
    <script src=\"js/plugins/pageguide/jquery.pageguide.js\"></script>
    <!-- FullCalendar -->
    <script src=\"js/plugins/fullcalendar/moment.min.js\"></script>
    <script src=\"js/plugins/fullcalendar/fullcalendar.min.js\"></script>
    <!-- Chosen -->
    <script src=\"js/plugins/chosen/chosen.jquery.min.js\"></script>
    <!-- select2 -->
    <script src=\"js/plugins/select2/select2.min.js\"></script>
    <!-- icheck -->
    <script src=\"js/plugins/icheck/jquery.icheck.min.js\"></script>

    <!-- Theme framework -->
    <script src=\"js/eakroko.min.js\"></script>
    <!-- Theme scripts -->
    <script src=\"js/application.min.js\"></script>
    <!-- Just for demonstration -->
    <script src=\"js/demonstration.min.js\"></script>

<script src=\"assets/js/ajax.js\"></script>


    <!--[if lte IE 9]>
        <script src=\"js/plugins/placeholder/jquery.placeholder.min.js\"></script>
        <script>
            $(document).ready(function() {
                $('input, textarea').placeholder();
            });
        </script>
        <![endif]-->

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\" />
    <!-- Apple devices Homescreen icon -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"img/apple-touch-icon-precomposed.png\" />
</head>

<script>
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
h=checkTime(h);
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+\":\"+m+\":\"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i=\"0\" + i;
  }
return i;
}
</script>

<body data-layout-topbar=\"fixed\" onload=\"startTime()\" class=\"theme-blue\">

<div id=\"modal-1\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Modal title</h4>
                </div>
                <!-- /.modal-header -->
                <div class=\"modal-body\">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, laudantium, inventore, impedit, excepturi odio quia aut sapiente delectus velit quaerat nesciunt ipsa laboriosam quam placeat ad atque hic vel quibusdam nisi reprehenderit numquam voluptatum
                        consectetur modi sint saepe totam tenetur necessitatibus minima provident cumque rem aliquid cupiditate libero omnis tempora.
                    </p>
                </div>
                <!-- /.modal-body -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
                </div>
                <!-- /.modal-footer -->
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div id=\"new-task\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Add new task</h4>
                </div>
                <form action=\"#\" class='new-task-form form-horizontal form-bordered'>
                    <div class=\"modal-body nopadding\">
                        <div class=\"form-group\">
                            <label for=\"tasktitel\" class=\"col-sm-3 control-label\">Icon</label>
                            <div class=\"col-sm-9\">
                                <select name=\"icons\" id=\"icons\" class='select2-me input-xlarge'>
                                    <option value=\"adjust\">icon-adjust</option>
                                    <option value=\"asterisk\">icon-asterisk</option>
                                    <option value=\"ban-circle\">icon-ban-circle</option>
                                    <option value=\"bar-chart\">icon-bar-chart</option>
                                    <option value=\"barcode\">icon-barcode</option>
                                    <option value=\"beaker\">icon-beaker</option>
                                    <option value=\"beer\">icon-beer</option>
                                    <option value=\"bell\">icon-bell</option>
                                    <option value=\"bell-alt\">icon-bell-alt</option>
                                    <option value=\"bolt\">icon-bolt</option>
                                    <option value=\"book\">icon-book</option>
                                    <option value=\"bookmark\">icon-bookmark</option>
                                    <option value=\"bookmark-empty\">icon-bookmark-empty</option>
                                    <option value=\"briefcase\">icon-briefcase</option>
                                    <option value=\"bullhorn\">icon-bullhorn</option>
                                    <option value=\"calendar\">icon-calendar</option>
                                    <option value=\"camera\">icon-camera</option>
                                    <option value=\"camera-retro\">icon-camera-retro</option>
                                    <option value=\"certificate\">icon-certificate</option>
                                    <option value=\"check\">icon-check</option>
                                    <option value=\"check-empty\">icon-check-empty</option>
                                    <option value=\"circle\">icon-circle</option>
                                    <option value=\"circle-blank\">icon-circle-blank</option>
                                    <option value=\"cloud\">icon-cloud</option>
                                    <option value=\"cloud-download\">icon-cloud-download</option>
                                    <option value=\"cloud-upload\">icon-cloud-upload</option>
                                    <option value=\"coffee\">icon-coffee</option>
                                    <option value=\"cog\">icon-cog</option>
                                    <option value=\"cogs\">icon-cogs</option>
                                    <option value=\"comment\">icon-comment</option>
                                    <option value=\"comment-alt\">icon-comment-alt</option>
                                    <option value=\"comments\">icon-comments</option>
                                    <option value=\"comments-alt\">icon-comments-alt</option>
                                    <option value=\"credit-card\">icon-credit-card</option>
                                    <option value=\"dashboard\">icon-dashboard</option>
                                    <option value=\"desktop\">icon-desktop</option>
                                    <option value=\"download\">icon-download</option>
                                    <option value=\"download-alt\">icon-download-alt</option>
                                    <option value=\"edit\">icon-edit</option>
                                    <option value=\"envelope\">icon-envelope</option>
                                    <option value=\"envelope-alt\">icon-envelope-alt</option>
                                    <option value=\"exchange\">icon-exchange</option>
                                    <option value=\"exclamation-sign\">icon-exclamation-sign</option>
                                    <option value=\"external-link\">icon-external-link</option>
                                    <option value=\"eye-close\">icon-eye-close</option>
                                    <option value=\"eye-open\">icon-eye-open</option>
                                    <option value=\"facetime-video\">icon-facetime-video</option>
                                    <option value=\"fighter-jet\">icon-fighter-jet</option>
                                    <option value=\"film\">icon-film</option>
                                    <option value=\"filter\">icon-filter</option>
                                    <option value=\"fire\">icon-fire</option>
                                    <option value=\"flag\">icon-flag</option>
                                    <option value=\"folder-close\">icon-folder-close</option>
                                    <option value=\"folder-open\">icon-folder-open</option>
                                    <option value=\"folder-close-alt\">icon-folder-close-alt</option>
                                    <option value=\"folder-open-alt\">icon-folder-open-alt</option>
                                    <option value=\"food\">icon-food</option>
                                    <option value=\"gift\">icon-gift</option>
                                    <option value=\"glass\">icon-glass</option>
                                    <option value=\"globe\">icon-globe</option>
                                    <option value=\"group\">icon-group</option>
                                    <option value=\"hdd\">icon-hdd</option>
                                    <option value=\"headphones\">icon-headphones</option>
                                    <option value=\"heart\">icon-heart</option>
                                    <option value=\"heart-empty\">icon-heart-empty</option>
                                    <option value=\"home\">icon-home</option>
                                    <option value=\"inbox\">icon-inbox</option>
                                    <option value=\"info-sign\">icon-info-sign</option>
                                    <option value=\"key\">icon-key</option>
                                    <option value=\"leaf\">icon-leaf</option>
                                    <option value=\"laptop\">icon-laptop</option>
                                    <option value=\"legal\">icon-legal</option>
                                    <option value=\"lemon\">icon-lemon</option>
                                    <option value=\"lightbulb\">icon-lightbulb</option>
                                    <option value=\"lock\">icon-lock</option>
                                    <option value=\"unlock\">icon-unlock</option>
                                    <option value=\"magic\">icon-magic</option>
                                    <option value=\"magnet\">icon-magnet</option>
                                    <option value=\"map-marker\">icon-map-marker</option>
                                    <option value=\"minus\">icon-minus</option>
                                    <option value=\"minus-sign\">icon-minus-sign</option>
                                    <option value=\"mobile-phone\">icon-mobile-phone</option>
                                    <option value=\"money\">icon-money</option>
                                    <option value=\"move\">icon-move</option>
                                    <option value=\"music\">icon-music</option>
                                    <option value=\"off\">icon-off</option>
                                    <option value=\"ok\">icon-ok</option>
                                    <option value=\"ok-circle\">icon-ok-circle</option>
                                    <option value=\"ok-sign\">icon-ok-sign</option>
                                    <option value=\"pencil\">icon-pencil</option>
                                    <option value=\"picture\">icon-picture</option>
                                    <option value=\"plane\">icon-plane</option>
                                    <option value=\"plus\">icon-plus</option>
                                    <option value=\"plus-sign\">icon-plus-sign</option>
                                    <option value=\"print\">icon-print</option>
                                    <option value=\"pushpin\">icon-pushpin</option>
                                    <option value=\"qrcode\">icon-qrcode</option>
                                    <option value=\"question-sign\">icon-question-sign</option>
                                    <option value=\"quote-left\">icon-quote-left</option>
                                    <option value=\"quote-right\">icon-quote-right</option>
                                    <option value=\"random\">icon-random</option>
                                    <option value=\"refresh\">icon-refresh</option>
                                    <option value=\"remove\">icon-remove</option>
                                    <option value=\"remove-circle\">icon-remove-circle</option>
                                    <option value=\"remove-sign\">icon-remove-sign</option>
                                    <option value=\"reorder\">icon-reorder</option>
                                    <option value=\"reply\">icon-reply</option>
                                    <option value=\"resize-horizontal\">icon-resize-horizontal</option>
                                    <option value=\"resize-vertical\">icon-resize-vertical</option>
                                    <option value=\"retweet\">icon-retweet</option>
                                    <option value=\"road\">icon-road</option>
                                    <option value=\"rss\">icon-rss</option>
                                    <option value=\"screenshot\">icon-screenshot</option>
                                    <option value=\"search\">icon-search</option>
                                    <option value=\"share\">icon-share</option>
                                    <option value=\"share-alt\">icon-share-alt</option>
                                    <option value=\"shopping-cart\">icon-shopping-cart</option>
                                    <option value=\"signal\">icon-signal</option>
                                    <option value=\"signin\">icon-signin</option>
                                    <option value=\"signout\">icon-signout</option>
                                    <option value=\"sitemap\">icon-sitemap</option>
                                    <option value=\"sort\">icon-sort</option>
                                    <option value=\"sort-down\">icon-sort-down</option>
                                    <option value=\"sort-up\">icon-sort-up</option>
                                    <option value=\"spinner\">icon-spinner</option>
                                    <option value=\"star\">icon-star</option>
                                    <option value=\"star-empty\">icon-star-empty</option>
                                    <option value=\"star-half\">icon-star-half</option>
                                    <option value=\"tablet\">icon-tablet</option>
                                    <option value=\"tag\">icon-tag</option>
                                    <option value=\"tags\">icon-tags</option>
                                    <option value=\"tasks\">icon-tasks</option>
                                    <option value=\"thumbs-down\">icon-thumbs-down</option>
                                    <option value=\"thumbs-up\">icon-thumbs-up</option>
                                    <option value=\"time\">icon-time</option>
                                    <option value=\"tint\">icon-tint</option>
                                    <option value=\"trash\">icon-trash</option>
                                    <option value=\"trophy\">icon-trophy</option>
                                    <option value=\"truck\">icon-truck</option>
                                    <option value=\"umbrella\">icon-umbrella</option>
                                    <option value=\"upload\">icon-upload</option>
                                    <option value=\"upload-alt\">icon-upload-alt</option>
                                    <option value=\"user\">icon-user</option>
                                    <option value=\"user-md\">icon-user-md</option>
                                    <option value=\"volume-off\">icon-volume-off</option>
                                    <option value=\"volume-down\">icon-volume-down</option>
                                    <option value=\"volume-up\">icon-volume-up</option>
                                    <option value=\"warning-sign\">icon-warning-sign</option>
                                    <option value=\"wrench\">icon-wrench</option>
                                    <option value=\"zoom-in\">icon-zoom-in</option>
                                    <option value=\"zoom-out\">icon-zoom-out</option>
                                    <option value=\"file\">icon-file</option>
                                    <option value=\"file-alt\">icon-file-alt</option>
                                    <option value=\"cut\">icon-cut</option>
                                    <option value=\"copy\">icon-copy</option>
                                    <option value=\"paste\">icon-paste</option>
                                    <option value=\"save\">icon-save</option>
                                    <option value=\"undo\">icon-undo</option>
                                    <option value=\"repeat\">icon-repeat</option>
                                    <option value=\"text-height\">icon-text-height</option>
                                    <option value=\"text-width\">icon-text-width</option>
                                    <option value=\"align-left\">icon-align-left</option>
                                    <option value=\"align-center\">icon-align-center</option>
                                    <option value=\"align-right\">icon-align-right</option>
                                    <option value=\"align-justify\">icon-align-justify</option>
                                    <option value=\"indent-left\">icon-indent-left</option>
                                    <option value=\"indent-right\">icon-indent-right</option>
                                    <option value=\"font\">icon-font</option>
                                    <option value=\"bold\">icon-bold</option>
                                    <option value=\"italic\">icon-italic</option>
                                    <option value=\"strikethrough\">icon-strikethrough</option>
                                    <option value=\"underline\">icon-underline</option>
                                    <option value=\"link\">icon-link</option>
                                    <option value=\"paper-clip\">icon-paper-clip</option>
                                    <option value=\"columns\">icon-columns</option>
                                    <option value=\"table\">icon-table</option>
                                    <option value=\"th-large\">icon-th-large</option>
                                    <option value=\"th\">icon-th</option>
                                    <option value=\"th-list\">icon-th-list</option>
                                    <option value=\"list\">icon-list</option>
                                    <option value=\"list-ol\">icon-list-ol</option>
                                    <option value=\"list-ul\">icon-list-ul</option>
                                    <option value=\"list-alt\">icon-list-alt</option>
                                    <option value=\"angle-left\">icon-angle-left</option>
                                    <option value=\"angle-right\">icon-angle-right</option>
                                    <option value=\"angle-up\">icon-angle-up</option>
                                    <option value=\"angle-down\">icon-angle-down</option>
                                    <option value=\"arrow-down\">icon-arrow-down</option>
                                    <option value=\"arrow-left\">icon-arrow-left</option>
                                    <option value=\"arrow-right\">icon-arrow-right</option>
                                    <option value=\"arrow-up\">icon-arrow-up</option>
                                    <option value=\"caret-down\">icon-caret-down</option>
                                    <option value=\"caret-left\">icon-caret-left</option>
                                    <option value=\"caret-right\">icon-caret-right</option>
                                    <option value=\"caret-up\">icon-caret-up</option>
                                    <option value=\"chevron-down\">icon-chevron-down</option>
                                    <option value=\"chevron-left\">icon-chevron-left</option>
                                    <option value=\"chevron-right\">icon-chevron-right</option>
                                    <option value=\"chevron-up\">icon-chevron-up</option>
                                    <option value=\"circle-arrow-down\">icon-circle-arrow-down</option>
                                    <option value=\"circle-arrow-left\">icon-circle-arrow-left</option>
                                    <option value=\"circle-arrow-right\">icon-circle-arrow-right</option>
                                    <option value=\"circle-arrow-up\">icon-circle-arrow-up</option>
                                    <option value=\"double-angle-left\">icon-double-angle-left</option>
                                    <option value=\"double-angle-right\">icon-double-angle-right</option>
                                    <option value=\"double-angle-up\">icon-double-angle-up</option>
                                    <option value=\"double-angle-down\">icon-double-angle-down</option>
                                    <option value=\"hand-down\">icon-hand-down</option>
                                    <option value=\"hand-left\">icon-hand-left</option>
                                    <option value=\"hand-right\">icon-hand-right</option>
                                    <option value=\"hand-up\">icon-hand-up</option>
                                    <option value=\"circle\">icon-circle</option>
                                    <option value=\"circle-blank\">icon-circle-blank</option>
                                    <option value=\"play-circle\">icon-play-circle</option>
                                    <option value=\"play\">icon-play</option>
                                    <option value=\"pause\">icon-pause</option>
                                    <option value=\"stop\">icon-stop</option>
                                    <option value=\"step-backward\">icon-step-backward</option>
                                    <option value=\"fast-backward\">icon-fast-backward</option>
                                    <option value=\"backward\">icon-backward</option>
                                    <option value=\"forward\">icon-forward</option>
                                    <option value=\"fast-forward\">icon-fast-forward</option>
                                    <option value=\"step-forward\">icon-step-forward</option>
                                    <option value=\"eject\">icon-eject</option>
                                    <option value=\"fullscreen\">icon-fullscreen</option>
                                    <option value=\"resize-full\">icon-resize-full</option>
                                    <option value=\"resize-small\">icon-resize-small</option>
                                    <option value=\"phone\">icon-phone</option>
                                    <option value=\"phone-sign\">icon-phone-sign</option>
                                    <option value=\"facebook\">icon-facebook</option>
                                    <option value=\"facebook-sign\">icon-facebook-sign</option>
                                    <option value=\"twitter\">icon-twitter</option>
                                    <option value=\"twitter-sign\">icon-twitter-sign</option>
                                    <option value=\"github\">icon-github</option>
                                    <option value=\"github-alt\">icon-github-alt</option>
                                    <option value=\"github-sign\">icon-github-sign</option>
                                    <option value=\"linkedin\">icon-linkedin</option>
                                    <option value=\"linkedin-sign\">icon-linkedin-sign</option>
                                    <option value=\"pinterest\">icon-pinterest</option>
                                    <option value=\"pinterest-sign\">icon-pinterest-sign</option>
                                    <option value=\"google-plus\">icon-google-plus</option>
                                    <option value=\"google-plus-sign\">icon-google-plus-sign</option>
                                    <option value=\"sign-blank\">icon-sign-blank</option>
                                    <option value=\"ambulance\">icon-ambulance</option>
                                    <option value=\"beaker\">icon-beaker</option>
                                    <option value=\"h-sign\">icon-h-sign</option>
                                    <option value=\"hospital\">icon-hospital</option>
                                    <option value=\"medkit\">icon-medkit</option>
                                    <option value=\"plus-sign-alt\">icon-plus-sign-alt</option>
                                    <option value=\"stethoscope\">icon-stethoscope</option>
                                    <option value=\"user-md\">icon-user-md</option>
                                </select>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"task-name\" class=\"col-sm-3 control-label\">Task</label>
                            <div class=\"col-sm-9\">
                                <input type=\"text\" name=\"task-name\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"tasktitel\" class=\"col-sm-3 control-label\"></label>
                            <div class=\"col-sm-9\">
                                <label class=\"checkbox\">
                                    <input type=\"checkbox\" name=\"task-bookmarked\" value=\"yep\">Mark as important</label>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"submit\" class=\"btn btn-primary\" value=\"Add task\">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id=\"modal-user\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Jane Doe</h4>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col-sm-2\">
                            <img src=\"img/demo/user-1.jpg\" alt=\"\">
                        </div>
                        <div class=\"col-sm-10\">
                            <dl class=\"dl-horizontal\" style=\"margin-top:0;\">
                                <dt>Full name:</dt>
                                <dd>Jane Doe</dd>
                                <dt>Email:</dt>
                                <dd>jane.doe@janedoesemail.com</dd>
                                <dt>Address:</dt>
                                <dd>
                                    <address>
                                        <strong>John Doe, Inc.</strong>
                                        <br>7195 JohnsonDoes Ave, Suite 320
                                        <br>San Francisco, CA 881234
                                        <br>
                                        <abbr title=\"Phone\">P:</abbr>
                                        (123) 456-7890
                                    </address>
                                </dd>
                                <dt>Social:</dt>
                                <dd>
                                    <a href=\"#\" class='btn'>
                                        <i class=\"fa fa-facebook\"></i>
                                    </a>
                                    <a href=\"#\" class='btn'>
                                        <i class=\"fa fa-twitter\"></i>
                                    </a>
                                    <a href=\"#\" class='btn'>
                                        <i class=\"fa fa-linkedin\"></i>
                                    </a>
                                    <a href=\"#\" class='btn'>
                                        <i class=\"fa fa-envelope\"></i>
                                    </a>
                                    <a href=\"#\" class='btn'>
                                        <i class=\"fa fa-rss\"></i>
                                    </a>
                                    <a href=\"#\" class='btn'>
                                        <i class=\"fa fa-github\"></i>
                                    </a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button class=\"btn\" data-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div id=\"navigation\">
        <div class=\"container-fluid\">
            <a href=\"#\" id=\"brand\">Boutique Esmeralda</a>
            <a href=\"#\" class=\"toggle-nav\" rel=\"tooltip\" data-placement=\"bottom\" title=\"Toggle navigation\">
                <i class=\"fa fa-bars\"></i>
            </a>

            <!--inicio menu superior -->
             <ul class='main-nav'>
                        ";

$layout['down_menu'] = " 

                </ul>
            <!-- fin menu superior-->


            <div class=\"user\">
                <ul class=\"icon-nav\">
                <li><span style=\"background:black;display:block;border-right:1px solid white;border-left:1px solid white; color:white; text-align:center;padding:2px\">&nbsp; <b>89092</b> &nbsp;<br> <b>01</b></span>
                </li>
                    <!--<li class='dropdown'>
                        <a href=\"#\" class='dropdown-toggle' data-toggle=\"dropdown\">
                            <i class=\"fa fa-envelope\"></i>
                            <span class=\"label label-lightred\">4</span>
                        </a>
                        <ul class=\"dropdown-menu pull-right message-ul\">
                            <li>
                                <a href=\"#\">
                                    <img src=\"img/demo/user-1.jpg\" alt=\"\">
                                    <div class=\"details\">
                                        <div class=\"name\">Jane Doe</div>
                                        <div class=\"message\">
                                            Lorem ipsum Commodo quis nisi ...
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"img/demo/user-2.jpg\" alt=\"\">
                                    <div class=\"details\">
                                        <div class=\"name\">John Doedoe</div>
                                        <div class=\"message\">
                                            Ut ad laboris est anim ut ...
                                        </div>
                                    </div>
                                    <div class=\"count\">
                                        <i class=\"fa fa-comment\"></i>
                                        <span>3</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"img/demo/user-3.jpg\" alt=\"\">
                                    <div class=\"details\">
                                        <div class=\"name\">Bob Doe</div>
                                        <div class=\"message\">
                                            Excepteur Duis magna dolor!
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href=\"components-messages.html\" class='more-messages'>Go to Message center
                                    <i class=\"fa fa-arrow-right\"></i>
                                </a>
                            </li>
                        </ul>
                    </li>-->
                    <!--<li class=\"dropdown sett\">
                        <a href=\"#\" class='dropdown-toggle' data-toggle=\"dropdown\">
                            <i class=\"fa fa-cog\"></i>
                        </a>
                        <ul class=\"dropdown-menu pull-right theme-settings\">
                            <li>
                                <span>Layout-width</span>
                                <div class=\"version-toggle\">
                                    <a href=\"#\" class='set-fixed'>Fixed</a>
                                    <a href=\"#\" class=\"active set-fluid\">Fluid</a>
                                </div>
                            </li>
                            <li>
                                <span>Topbar</span>
                                <div class=\"topbar-toggle\">
                                    <a href=\"#\" class='set-topbar-fixed'>Fixed</a>
                                    <a href=\"#\" class=\"active set-topbar-default\">Default</a>
                                </div>
                            </li>
                            <li>
                                <span>Sidebar</span>
                                <div class=\"sidebar-toggle\">
                                    <a href=\"#\" class='set-sidebar-fixed'>Fixed</a>
                                    <a href=\"#\" class=\"active set-sidebar-default\">Default</a>
                                </div>
                            </li>
                        </ul>
                    </li>-->
                    <li class='dropdown colo'>
                        <a href=\"#\" class='dropdown-toggle' data-toggle=\"dropdown\">
                            <i class=\"fa fa-tint\"></i>
                        </a>
                        <ul class=\"dropdown-menu pull-right theme-colors\">
                            <li class=\"subtitle\">
                                Predefined colors
                            </li>
                            <li>
                                <span class='red'></span>
                                <span class='orange'></span>
                                <span class='green'></span>
                                <span class=\"brown\"></span>
                                <span class=\"blue\"></span>
                                <span class='lime'></span>
                                <span class=\"teal\"></span>
                                <span class=\"purple\"></span>
                                <span class=\"pink\"></span>
                                <span class=\"magenta\"></span>
                                <span class=\"grey\"></span>
                                <span class=\"darkblue\"></span>
                                <span class=\"lightred\"></span>
                                <span class=\"lightgrey\"></span>
                                <span class=\"satblue\"></span>
                                <span class=\"satgreen\"></span>
                            </li>
                        </ul>
                    </li>
                    <!--<li class='dropdown language-select'>
                        <a href=\"#\" class='dropdown-toggle' data-toggle=\"dropdown\">
                            <img src=\"img/demo/flags/us.gif\" alt=\"\">
                            <span>US</span>
                        </a>
                        <ul class=\"dropdown-menu pull-right\">
                            <li>
                                <a href=\"#\">
                                    <img src=\"img/demo/flags/br.gif\" alt=\"\">
                                    <span>Brasil</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"img/demo/flags/de.gif\" alt=\"\">
                                    <span>Deutschland</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"img/demo/flags/es.gif\" alt=\"\">
                                    <span>España</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <img src=\"img/demo/flags/fr.gif\" alt=\"\">
                                    <span>France</span>
                                </a>
                            </li>
                        </ul>
                    </li>-->
                </ul>
                <div class=\"dropdown\">
                    <a href=\"#\" class='dropdown-toggle' data-toggle=\"dropdown\">$name
                        <img src=\"img/demo/user-avatar.jpg\" alt=\"\">
                    </a>
                    <ul class=\"dropdown-menu pull-right\">
                        <li>
                            <a href=\"/ofimatica?sub=calendario\">Calendario</a>
                        </li>
                        <li>
                            <a href=\"/usuarios?sub=profile\">Mostrar Perfil</a>
                        </li>
                        <li>
                            <a href=\"/usuarios?sub=checador\">Checador</a>
                        </li>
                        <li>
                            <a href=\"/usuarios?sub=cortedecaja\">Corte de Caja</a>
                        </li>
                        <li>
                            <a href=\"logout\">Sign out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>";








$layout['bottom']="  

    <div id=\"modal-alert\" class=\"modal fade\">
        <div class=\"modal-dialog\">
            <div  class=\"modal-content\">
                <div id=\"modal-contenido\">
                </div>
                <div class=\"modal-header\">
                
            </div>
        </div>
    </div>





</body>

</html>
";


$script_google= "
    <script type=\"text/javascript\">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-38620714-4']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
    </script>
";


$layout['top_form'] = "

<!doctype html>
<html>

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <!-- Apple devices fullscreen -->
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
    <!-- Apple devices fullscreen -->
    <meta names=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\" />

    <title>FLAT - Dashboard</title>

    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <!-- jQuery UI -->
    <link rel=\"stylesheet\" href=\"css/plugins/jquery-ui/jquery-ui.min.css\">
    <!-- PageGuide -->
    <link rel=\"stylesheet\" href=\"css/plugins/pageguide/pageguide.css\">
    <!-- Fullcalendar -->
    <link rel=\"stylesheet\" href=\"css/plugins/fullcalendar/fullcalendar.css\">
    <link rel=\"stylesheet\" href=\"css/plugins/fullcalendar/fullcalendar.print.css\" media=\"print\">
    <!-- chosen -->
    <link rel=\"stylesheet\" href=\"css/plugins/chosen/chosen.css\">
    <!-- select2 -->
    <link rel=\"stylesheet\" href=\"css/plugins/select2/select2.css\">
    <!-- icheck -->
    <link rel=\"stylesheet\" href=\"css/plugins/icheck/all.css\">
    <!-- Theme CSS -->
    <link rel=\"stylesheet\" href=\"css/style.css\">
    <!-- Color CSS -->
    <link rel=\"stylesheet\" href=\"css/themes.css\">

    <!-- jQuery -->
    <script src=\"js/jquery.min.js\"></script>


    <!-- Nice Scroll -->
    <script src=\"js/plugins/nicescroll/jquery.nicescroll.min.js\"></script>
    <!-- jQuery UI -->
    <script src=\"js/plugins/jquery-ui/jquery-ui.js\"></script>
    <!-- Touch enable for jquery UI -->
    <script src=\"js/plugins/touch-punch/jquery.touch-punch.min.js\"></script>
    <!-- slimScroll -->
    <script src=\"js/plugins/slimscroll/jquery.slimscroll.min.js\"></script>
    <!-- Bootstrap -->
    <script src=\"js/bootstrap.min.js\"></script>
    <!-- vmap -->
    <script src=\"js/plugins/vmap/jquery.vmap.min.js\"></script>
    <script src=\"js/plugins/vmap/jquery.vmap.world.js\"></script>
    <script src=\"js/plugins/vmap/jquery.vmap.sampledata.js\"></script>
    <!-- Bootbox -->
    <script src=\"js/plugins/bootbox/jquery.bootbox.js\"></script>
    <!-- Flot -->
    <script src=\"js/plugins/flot/jquery.flot.min.js\"></script>
    <script src=\"js/plugins/flot/jquery.flot.bar.order.min.js\"></script>
    <script src=\"js/plugins/flot/jquery.flot.pie.min.js\"></script>
    <script src=\"js/plugins/flot/jquery.flot.resize.min.js\"></script>
    <!-- imagesLoaded -->
    <script src=\"js/plugins/imagesLoaded/jquery.imagesloaded.min.js\"></script>
    <!-- PageGuide -->
    <script src=\"js/plugins/pageguide/jquery.pageguide.js\"></script>
    <!-- FullCalendar -->
    <script src=\"js/plugins/fullcalendar/moment.min.js\"></script>
    <script src=\"js/plugins/fullcalendar/fullcalendar.min.js\"></script>
    <!-- Chosen -->
    <script src=\"js/plugins/chosen/chosen.jquery.min.js\"></script>
    <!-- select2 -->
    <script src=\"js/plugins/select2/select2.min.js\"></script>
    <!-- icheck -->
    <script src=\"js/plugins/icheck/jquery.icheck.min.js\"></script>

    <!-- Theme framework -->
    <script src=\"js/eakroko.min.js\"></script>
    <!-- Theme scripts -->
    <script src=\"js/application.min.js\"></script>
    <!-- Just for demonstration -->
    <script src=\"js/demonstration.min.js\"></script>

<script src=\"assets/js/ajax.js\"></script>


    <!--[if lte IE 9]>
        <script src=\"js/plugins/placeholder/jquery.placeholder.min.js\"></script>
        <script>
            $(document).ready(function() {
                $('input, textarea').placeholder();
            });
        </script>
        <![endif]-->

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"img/favicon.ico\" />
    <!-- Apple devices Homescreen icon -->
    <link rel=\"apple-touch-icon-precomposed\" href=\"img/apple-touch-icon-precomposed.png\" />
</head>

<body>
";

        return $layout;
};
?>