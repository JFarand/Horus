<style>
    #header {
        display: block;
        position: relative;
        width: 100%;
        background-color: #333333;
    }

    #menu {
        display: block;
        position: relative;
        width: 800px;
        height: 45px;
        margin: 0 auto;
    }


    section#branding, span#donatebtn, span#subscribebtn {
        display: inline-block;
        position: relative;
        cursor: pointer;
    }

    section#branding {
        vertical-align: top;
    }

    section#branding > div#site-title {
        display: block;
        position: relative;
        width: 54px;
    }

    span#donatebtn, span#subscribebtn {
        width: 201px;
        top: -12px;
    }

    span#donatebtn {
        margin-left: 48px;
    }

    span#subscribebtn {
        margin-left: -48px;

    }

@media screen and (max-width: 800px){
        #menu {
            width: 100%;
            height: auto;
        }
    }

@media screen and (max-width: 360px){
    #menu {
        height: 45px;
    }

    span#donatebtn {
        margin-left: -36px;
    }

    span#subscribebtn {
        margin-left: -49px;
    }

    span#donatebtn, span#subscribebtn {
        width: 191px;
        top: -12px;
    }
}
</style>
<?php get_template_part('hel','header'); ?>
<header id="header" role="banner">

    <nav id="menu" role="navigation">
        <section id="branding">
            <div id="site-title"><?php get_template_part('ghosthoruslogo'); ?></div>
        </section>
        <span id="donatebtn"><?php get_template_part('donatebtn'); ?></span>
        <span id="subscribebtn" class="md-trigger" data-modal="modal-7"><?php get_template_part('subscribebtn'); ?></span>
        <?php get_template_part('modal','subscribe'); ?>
    </nav>
</header>

<script>
    var h = document.getElementById("site-title"),
        d = document.getElementById("donatebtn"),
        s = document.getElementById("subscribebtn");

    h.onclick = function(){
        window.location.href = "https://www.owlasylum.net";
    };

    d.onclick = function (){
        window.location.href = "https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=K8WX2CXNLHJYG";
    }
</script>
