console.log(logoData);

document.querySelector('.l__header__hamburger').addEventListener('click',function(){
    this.classList.toggle('open');
    
    var header = document.querySelector('.l__header');
    var inner = document.querySelector('.header__inner');
    var menu = document.querySelector('.header__menu');
    var logo = document.querySelector('.header__logo');

    header.classList.toggle('open');
    inner.classList.toggle('open');
    menu.classList.toggle('open');
    logo.classList.toggle('open');

    if (this.classList.contains('open')) {
        this.classList.remove('close');
    } else {
        this.classList.add('close');
    }

    if (logo){
        if (logo.src.includes('progeec_logo-mini.png')){
            logo.src = logoData.newSrc;
        } else {
            logo.src = logoData.originalSrc;
        }
    }

});