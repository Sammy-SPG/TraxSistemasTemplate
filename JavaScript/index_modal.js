document.querySelector('.container-aspel').addEventListener('click', (e) => {
    if (e.target.classList.contains('btn')) {
        const img = document.createElement('img');
        img.setAttribute('src', e.target.dataset.img);
        document.querySelector('.modal-title').textContent = e.target.textContent;
        document.querySelector('.modal-body').appendChild(img);
    }
    e.stopPropagation();
});

document.querySelector('.btn-close').addEventListener('click', (e) => {
    document.querySelector('.modal-body').innerHTML = '';
});