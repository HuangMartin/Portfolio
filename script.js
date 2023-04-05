let MenuBtn = document.getElementById('MenuBtn')

MenuBtn.addEventListener('click', function(e){
    document.querySelector('body').classList.toggle('mobile-nav-active');
    this.classList.toggle('fa-xmark')
})

let typed = new Typed('.auto-input', {
    strings:['部落客', '探險家', '軟體工程師'],
    typeSpeed:100,
    backSpeed:100,
    backDelay:3000,
    loop:true,
})