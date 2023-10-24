function anterior() {
    document.querySelector('#siguiente').removeAttribute('disabled');
    let imgs = document.querySelectorAll('#galeria img');
    for (var i = 0; i < imgs.length - 1; i++)
        if (imgs[i + 1].classList.contains('visible'))
            imgs[i + 1].classList.replace('visible', 'invisible'),
            imgs[i].classList.replace('invisible', 'visible'),
            (i == 0)
            ? document.querySelector('#anterior').setAttribute('disabled', null) : null,
            i = imgs.length;
}

function siguiente() {
    document.querySelector('#anterior').removeAttribute('disabled');
    let imgs = document.querySelectorAll('#galeria img');
    for (var i = 0; i < imgs.length - 1; i++)
        if (imgs[i].classList.contains('visible'))
            imgs[i].classList.replace('visible', 'invisible'),
            imgs[i + 1].classList.replace('invisible', 'visible'),
            (i + 1 == imgs.length - 1)
            ? document.querySelector('#siguiente').setAttribute('disabled', null) : null,
            i = imgs.length;
}