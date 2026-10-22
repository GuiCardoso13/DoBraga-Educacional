let skip = 3;

document.getElementById('btn-load-more').addEventListener('click', function() {
    fetch(`/mural-dos-aprovados/load?skip=${skip}`)
        .then(res => res.text())
        .then(html => {
            if (html.trim() === '') {
                document.getElementById('btn-load-more').classList.add('d-none');
                return;
            }

            document.querySelector('#aprovados-container .row').insertAdjacentHTML('beforeend', html);

            skip += 3;
        });
});
