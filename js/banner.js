
var d=1; var da=0;var currIndex=1;var interval;
var dotlist = document.querySelectorAll('.sidebar-1 div[class^="pure-round-button"]');
var slidelist = document.querySelectorAll('.section-1 div.banner-slide');
var time = 4000;
// jQuery replacement
// Show an element
var show = function(elem) {
    elem.style.display = "block";
};
// Hide an element
var hide = function(elem) {
    elem.style.display = "none";
};

document.addEventListener('DOMContentLoaded', function(){
var roundButton = document.querySelector('.sidebar-1 div:first-child');
    if(!roundButton.classList.contains('pure-round-buttons-select')){
        //dotnet(roundButton);
        for(i = 0; i < dotlist.length; ++i){
        dotlist[i].classList.remove('pure-round-buttons-select');dotlist[i].classList.add('pure-round-buttons');
    }
    roundButton.classList.remove('pure-round-buttons');roundButton.classList.add('pure-round-buttons-select');
    show(document.querySelector('.section-1 a.overlay:nth-child('+currIndex+')'));

    };

var timer = function(){
    interval = setInterval(function(){
        initial();
    }, time);

};

function initial(){
    next();
}

function h(){
    hide(document.querySelector('.section-1 a.overlay:nth-child('+currIndex+')'));}
function s(){
    var roundButton = document.querySelector('.sidebar-1 div[class^="pure-round-buttons"]:nth-child('+currIndex+')');
        if(!roundButton.classList.contains('pure-round-buttons-select')){
            for(i = 0; i < dotlist.length; ++i){
                dotlist[i].classList.remove('pure-round-buttons-select');dotlist[i].classList.add('pure-round-buttons');
            }
            roundButton.classList.remove('pure-round-buttons');roundButton.classList.add('pure-round-buttons-select');
        }else{}
    show(document.querySelector('.section-1 a.overlay:nth-child('+currIndex+')'));
}

function next(){
    h();
    currIndex += 1;
    if(currIndex > dotlist.length){currIndex = 1;}
    s();
}

function pos(x){
    h();
    currIndex = x;
    s();
    clearInterval(interval);
    interval = setInterval(function(){initial();},time);
}

botones = document.querySelectorAll('div[class^=pure-round-buttons]');
for (var i = 0; i < botones.length; ++i){
    botones[i].id = "btn"+i;
    botones[i].onclick = doSomething;
}

function doSomething() {
    h();
    var num = this.id.substr(3);
    var num = parseInt(num, 10) + 1;
//    alert(num);
    num;
    pos(num);
}
/*
function dotnet(dots){
    for(i = 0; i < dotlist.length; ++i){
        dotlist[i].classList.remove('pure-round-buttons-select');dotlist[i].classList.add('pure-round-buttons');
    }
    dots.classList.remove('pure-round-buttons');dots.classList.add('pure-round-buttons-select');
    show(document.querySelector('.header div.banner-slide:nth-child('+currIndex+')'));
}

function dotchanger(changer){
    var roundButton = document.querySelector('.sidebar-1 div:nth-child('+changer+')');
    if(!roundButton.classList.contains('pure-round-buttons-select')){
        dotnet(roundButton);
    };
}

botones = document.querySelectorAll('div[class^=pure-round-buttons]');
for (var i = 0; i < botones.length; ++i){
    botones[i].id = "btn"+i;
    botones[i].onclick = doSomething(i);
}

function doSomething(i){
    var num = botones[i].id.substr(3);
    alert(num);

    clearInterval(interval);
    interval = setInterval(dotfresh(num), 5000);
}

function dotfresh(p){
    hide(document.querySelector('.header div.banner-slide:nth-child('+p+')'));
    currIndex = p;
    if (currIndex < dotlist.length) {
        currIndex += 1;
    } else {
        currIndex = 1;
    }
    dotchanger(currIndex);
}
*/
timer();

}, false);

var aupAnimation = anime({
    targets: ['.float-aup'],
    transformOrigin: ['30px 0px', '30px 0px'],
    rotate: [
        {value: [10, -10], duration: 2000},
        {value: 10, duration: 2000}],
    opacity:1,
    duration: 2000,
    easing: "easeInOutQuad",
    loop: true,
    direction: 'alternate'
});
var adownAnimation = anime({
    targets: ['.ball'],
    translateX: [
        {value: [4.75, 1800], duration: 6000, easing: "easeInQuint"},
        {value: 4.75, duration: 6000, easing: "easeOutQuad", delay: 500}],
    rotate: [
        {value: ['0 turn', '6turn'], duration: 6000, easing: "easeInQuint"},
        {value: ['6turn', '0turn'], duration: 6000, easing: "easeOutQuad", delay: 500}
    ],
    duration: 8000,
    elasticity: 2,
    easing: "easeInOutBack",
    loop: true,
    direciton: 'alternate'
});

var basicTimeline = anime.timeline();
basicTimeline
.add({
targets: "#basicTimeline .circle.el",
rotate: "1turn",
easing: "easeInOutQuad",
duration: 2000
})
.add({
targets: "#basicTimeline .triangle.el",
translateY: 250,
delay: 1,
easing: "easeInOutQuad"
})
.add({
targets: "#basicTimeline",
opacity: 0,
duration: 500,
easing: "easeOutQuad"
});

basicTimeline.begin = function() {
show(document.querySelector("#basicTimeline"));
};
basicTimeline.complete = function() {
hide(document.querySelector("#basicTimeline"));
};

var el = document.querySelector(".app-menu");

var animationBl = anime({
targets: el,
translateX: [-280, 0],
duration: 500,
easing: "easeInQuad",
autoplay: false
});

var back = document.querySelector(".section-4 > .grid");

var animationA = anime({
    targets: back,
    backgroundPositionX: ['346px', '0px'],
    duration: 12000,
    easing: 'linear',
    loop: true,
    autoplay: true
});

function toggleClassMenu() {
myMenu.classList.add("menu--animatable");
    if(!myMenu.classList.contains("menu--visible")) {
    myMenu.classList.add("menu--visible");
    animationBl.restart();
    } else {
    myMenu.classList.remove("menu--visible");
    animationBl.play();
    animationBl.reverse();
    }
}
function OnTransitionEnd() {
myMenu.classList.remove("menu--animatable");
}

var myMenu = document.querySelector(".menu");
var oppMenu = document.querySelector(".menu-icon");
myMenu.addEventListener("transitionend", OnTransitionEnd, false);
oppMenu.addEventListener("click", toggleClassMenu, false);
myMenu.addEventListener("click", toggleClassMenu, false);

document.querySelector('.pure-landing-down-button').addEventListener('click', () => {
    scrollIt(document.querySelector('.section-2'), 800,'easeOutQuad', () => console.log('termine'));});

