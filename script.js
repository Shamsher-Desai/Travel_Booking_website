const showBtn = document.querySelector('.navbtn');
const topNav = document.querySelector('.top-nav');
showBtn.addEventListener('click', function(){
    if(topNav.classList.contains('shownav')){
        topNav.classList.remove('shownav');
        showBtn.innerHTML = '<i class = "fas fa-bars"></i>';
    }else{
        topNav.classList.add('shownav');
        showBtn.innerHTML = '<i class = "fas fa-times"></i>';
    }
});
