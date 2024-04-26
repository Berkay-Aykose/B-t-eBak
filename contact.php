<!--iletişim-->
<style>
    #contact a{
    color: #fff;
}

.social-medya{
    position: absolute;
    left: 50%;
    transform: translate(-50%);
}

.social-medya div{
    color: #fff;
    display: inline;
}

.social-medya div a{
    display: inline-flex;
    width: 60px;
    height: 60px;
    background: #2c3e50;
    font-size: 30px;
    margin: 6px;
    border-radius: 50%;
    justify-content: center;
    align-items: center;

}

.social-medya a i{
    transition: 0.5s all;
}

.social-medya a:hover > i{
    transform: scale(1.6) rotate(360deg);
}

.social-medya .GitHub a:hover{
    background: #171717;
}

.social-medya .instagram a:hover{
    background:	#A94CAA; 
}

.social-medya .twitter a:hover{
    background: #1da1f2;
}

.social-medya .reddit a:hover{
    background: #FF4300;
}

.social-medya .mail a:hover{
    background: #34A853;
}

.social-medya .linkedin a:hover{
    background: #0866C4;
}

a{
    text-decoration: none; /*linklerin altı çizilmemesi için*/
}
</style>

<section id="contact">

<div class="social-medya">

    <div class="GitHub">
        <a href="https://github.com/Berkay-Aykose" target="_blank"><i class="fa-brands fa-github"></i></a>
    </div>

    <div class="mail">
        <a href="mailto:berkay_ayk@hotmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
    </div>

    <div class="linkedin">
        <a href="https://www.linkedin.com/in/berkay-veysel-ayk%C3%B6se-84bb4a249/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
    </div>

</div>
</section>