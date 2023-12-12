<Style>

.banner #slider {
    width: 100%;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.4);
    ;
}

.banner .slide {
    width: 100%;

    display: none;
    animation-name: fade;
    animation-duration: 1s;

}
 
.banner img {
    width: 100%;
}

@keyframes fade {
    from {
        opacity: 0.5;
    }

    to {
        opacity: 1;
    }
}

.banner .controls {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 1.5em;
    padding: 15px 10px;
    border-radius: 5px;

}

.banner .controls:hover {
    background: white;
    transition: 0.3s;
}

.banner .controls:active {
    color: grey;
}

.banner #left-arrow {
    left: 10px;
}

.banner #right-arrow {
    right: 10px;
}

.banner #dots-con {

    text-align: center;
}

.banner .dot {
    display: inline-block;
    background: grey;
    padding: 8px;
    border-radius: 50%;
    margin: 10px 5px;
}

.banner .active {
    background: crimson;
}

@media (max-width:576px) {
    #slider {
        width: 100%;

    }

    .controls {
        font-size: 1em;
    }

    #dots-con {
        display: none;
    }
}
</Style>
<!--Slider-->
<div class="banner">
    <div id="slider">
        <div class="slide" style="background:dodgerBlue;">
            <img src=".\public\images\banner\banner1.jpeg">
        </div>

        <div class="slide" style="background:coral;">
            <img
                src="./public\images\banner\banner2.jpg">
        </div>

        <div class="slide" style="background:crimson;">
            <img
                src="./public\images\banner\banner3.jpg">
        </div>

        <div class="slide" style="background: #6edf10;">
            <img src="./public\images\banner\banner4.cms">
        </div>

        <!--Controlling arrows-->
        <span class="controls" onclick="prevSlide(-1)" id="left-arrow"><i class="fa fa-arrow-left"
                aria-hidden="true"></i>
        </span>
        <span class="controls" id="right-arrow" onclick="nextSlide(1)"><i class="fa fa-arrow-right"
                aria-hidden="true"></i>
        </span>
    </div>
    <div id="dots-con">
        <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
    </div>
</div>
<script>
var slides = document.querySelectorAll(".slide");
var dots = document.querySelectorAll(".dot");
var index = 0;


function prevSlide(n) {
    index += n;
    console.log("prevSlide is called");
    changeSlide();
}

function nextSlide(n) {
    index += n;
    changeSlide();
}

changeSlide();

function changeSlide() {

    if (index > slides.length - 1)
        index = 0;

    if (index < 0)
        index = slides.length - 1;



    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";

        dots[i].classList.remove("active");


    }

    slides[index].style.display = "block";
    dots[index].classList.add("active");
}
// auto slide
setInterval(function() {
    nextSlide(1);
}, 5000);
</script>