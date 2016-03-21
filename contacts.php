<?php //首页
require 'header.php'; ?>

<div id="contacts" class="template-contacts">
    <div class="contacts-content">
        <span class="contacts-title hidden">OUR ADDRESS</span>
        <span class="contacts-info hidden">9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45.</span>
        <div class="contacts-content-top hidden">
            <span>Telephone: <a href="">+1 800 603 6035<br></a> </span>
            <span>E-mail: <a class="e-mail" href="">mail@demolink.org</a> </span>
        </div>
    </div>
    <div class="contacts-item">
        <span class="contacts-title hidden">FEEDBACK</span>
        <form method="post" action="">
            <input type="text" class="" name="" placeholder="Your Name:*">
            <input type="text" class="" name="" placeholder="E-mail:*">
            <input type="text" class="" name="" placeholder="Telephone:*">
            <input  class="text-area" name="" placeholder="Message:*">
        </form>
<!--        <img src="images/submit.png">-->
        <i class="fa fa-arrow-circle-right"></i>
        <div class="submit-from">SUBMIT FORM</div>
    </div>
</div>
<div class="point-up">
    <a href="contacts.php"><i class="fa fa-angle-up"></i></a>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("span,.contacts-content-top").hide("slow");
        $(window).bind("scroll",function(){
            $("span,.contacts-content-top").slideDown("slow");
        });
    })
</script>
<?php require 'footer.php'; ?>
