//#region Create Notícia - Adicionar/Remover Parágrafos e Anexos

document.getElementById('add-paragrafo').addEventListener('click', function() {
    let container = document.getElementById('paragrafos-container');
    let div = document.createElement('div');
    div.classList.add('paragrafo-item', 'mb-3');
    div.innerHTML = `
        <label class="form-label">Parágrafo</label>
        <textarea name="paragrafos[]" class="form-control" required></textarea>
        <button type="button" class="btn btn-danger btn-sm mt-1 remove-paragrafo">Remover Parágrafo</button>
    `;
    container.appendChild(div);
});

document.addEventListener('click', function(e) {
    if (e.target && e.target.classList.contains('remove-paragrafo')) {
        e.target.parentElement.remove();
    }
    if (e.target && e.target.classList.contains('remove-anexo')) {
        e.target.parentElement.remove();
    }
});

let anexoIdx = 1;

document.getElementById('add-anexo').addEventListener('click', function() {
    let container = document.getElementById('anexos-container');
    let div = document.createElement('div');
    div.classList.add('anexo-item', 'mb-3');

    div.innerHTML = `
        <label class="form-label">Titulo do Anexo</label>
        <input type="text" name="anexos[${anexoIdx}][titulo]" class="form-control" required>

        <label class="mt-2">Tipo</label>
        <select name="anexos[${anexoIdx}][tipo]" class="form-select anexo-tipo" required>
            <option value="link">Link</option>
            <option value="arquivo">Arquivo</option>
        </select>

        <label class="mt-2">Conteúdo</label>
        <input type="text" name="anexos[${anexoIdx}][valor]" class="form-control anexo-input-link" required>
        <input type="file" name="anexos[${anexoIdx}][valor]" class="form-control anexo-input-arquivo d-none">
        
        <button type="button" class="btn btn-danger btn-sm mt-1 remove-anexo">Remover Anexo</button>
    `;

    container.appendChild(div);
    anexoIdx++;
});

document.addEventListener('change', function(e) {
    if (e.target.classList.contains('anexo-tipo')) {
        let item = e.target.closest('.anexo-item');
        let linkInput = item.querySelector('.anexo-input-link');
        let fileInput = item.querySelector('.anexo-input-arquivo');
        if (e.target.value === 'arquivo') {
            linkInput.classList.add('d-none');
            linkInput.removeAttribute('required');
            fileInput.classList.remove('d-none');
            fileInput.setAttribute('required', 'required');
        }
        else {
            fileInput.classList.add('d-none');
            fileInput.removeAttribute('required');
            linkInput.classList.remove('d-none');
            linkInput.setAttribute('required', 'required');
        }
    }
});

//#endregion
