let anexoIdx = document.querySelectorAll('.anexo-item').length;

document.getElementById('add-paragrafo').addEventListener('click', () => {
    let div = document.createElement('div');
    div.classList.add('input-group', 'p-3', 'mb-2', 'paragrafo-item');

    div.innerHTML = `
        <textarea name="paragrafos[]" class="form-control" rows="3" required></textarea>
        <button type="button" class="btn btn-danger btn-sm remove-paragrafo">X</button>
    `;

    document.getElementById('paragrafos').appendChild(div);
});

document.addEventListener('click', e => {
    if (e.target.classList.contains('remove-paragrafo')) {
        e.target.closest('.paragrafo-item').remove();
    }
});

document.getElementById('add-anexo').addEventListener('click', () => {
    let div = document.createElement('div');
    div.classList.add('p-3', 'mb-2', 'anexo-item');

    div.innerHTML = `
        <label class="form-label">Título do Anexo</label>
        <input type="text" name="anexos[${anexoIdx}][titulo]" class="form-control" required>

        <label class="mt-2">Tipo</label>
        <select name="anexos[${anexoIdx}][tipo]" class="form-select tipo-selector" required>
            <option value="link">Link</option>
            <option value="arquivo">Arquivo</option>
        </select>

        <input type="text" name="anexos[${anexoIdx}][valor]" class="form-control mt-2 input-link" placeholder="URL">

        <input type="file" accept="image/*, .pdf, video/*" name="anexos[${anexoIdx}][valor]" class="form-control mt-2 input-file d-none">

        <button type="button" class="btn btn-danger btn-sm mt-2 remove-anexo">
            Remover Anexo
        </button>
    `;

    document.getElementById('anexos').appendChild(div);
    anexoIdx++;
});

// Alternância entre link <-> arquivo
document.addEventListener('change', e => {
    if (e.target.classList.contains('tipo-selector')) {
        const item = e.target.closest('.anexo-item');
        const linkInput = item.querySelector('.input-link');
        const fileInput = item.querySelector('.input-file');

        if (e.target.value === 'link') {
            linkInput.classList.remove('d-none');
            fileInput.classList.add('d-none');
        } else {
            linkInput.classList.add('d-none');
            fileInput.classList.remove('d-none');
        }
    }
});

// Remoção
document.addEventListener('click', e => {
    if (e.target.classList.contains('remove-anexo')) {
        e.target.closest('.anexo-item').remove();
    }
});
