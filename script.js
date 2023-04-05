let MenuBtn = document.getElementById('MenuBtn')

MenuBtn.addEventListener('click', function(e){
    document.querySelector('body').classList.toggle('mobile-nav-active');
    this.classList.toggle('fa-xmark')
})

let typed = new Typed('.auto-input', {
    strings:['軟體工程師', '部落客', '探險家'],
    typespeed:100,
    backspeed:100,
    backDelay:3000,
    loop:true,
})