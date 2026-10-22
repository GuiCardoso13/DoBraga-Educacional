let skip = 9;

document.getElementById('btn-load-more').addEventListener('click', function() {
    fetch(`/mural-de-noticias/load?skip=${skip}`)
        .then(res => res.text())
        .then(html => {
            if (html.trim() === '') {
                document.getElementById('btn-load-more').classList.add('d-none');
                return;
            }
            document.getElementById('noticias-container').insertAdjacentHTML('beforeend', html);
            skip += 6;
        });
});