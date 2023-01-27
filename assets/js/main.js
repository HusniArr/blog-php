let backTotop = document.getElementById('back-to-top');
function toggleMenu(){
    let menu = document.getElementById('menu');
    if(menu.style.display == 'block'){
        menu.style.display = 'none';
    }else{
        menu.style.display = 'block';
    }
    
}
function show(){
   
    if(window.pageYOffset >= 400){
        backTotop.classList.add('backTotop');
        backTotop.style.display='block';
        // console.log('muncul...');
    } else if(window.pageYOffset < 400){
        backTotop.style.display='none';
        // console.log('hidden...');
    }
}
window.addEventListener('scroll',show);

backTotop.addEventListener('click',function(){
    document.body.scrollTop = 0;//for safari
    document.documentElement.scrollTop = 0;//for chrome, firefox, ie and opera
})