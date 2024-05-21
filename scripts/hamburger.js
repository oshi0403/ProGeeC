console.log(logoData);

document.querySelector('.l__header__hamburger').addEventListener('click',function(){
    this.classList.toggle('open');

    var open = document.querySelector('.header__inner');
    var logo = document.querySelector('.header__logo');

    open.classList.toggle('open');

    if (this.classList.contains('open')) {
        this.classList.remove('close');
    } else {
        this.classList.add('close');
    }

    if (logo){
        if (logo.src.includes('logo_ProGeeC_1.jpg')){
            logo.src = logoData.newSrc;
        } else {
            logo.src = logoData.originalSrc;
        }
    }

});