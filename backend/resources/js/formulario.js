// Expor funções globais para o HTML (window)

window.Revisao = function() {
  const form = document.getElementById("cadastroForm");

  // Read by IDs to match the blade inputs (ids: nome, email, idade, telefone, endereco)
  const nome = document.getElementById('nome')?.value || '';
  const email = document.getElementById('email')?.value || '';
  const idade = document.getElementById('idade')?.value || '';
  const telefone = document.getElementById('telefone')?.value || '';
  const endereco = document.getElementById('endereco')?.value || '';

  const genero = document.getElementById('genero')?.value || '';
  const interesse = document.getElementById('interesse')?.value || '';

  const nomeRespo = document.getElementById('nomeResponsavel')?.value || '';
  const telefoneResp = document.getElementById('telefoneResponsavel')?.value || '';

  // Populate review UI
  document.getElementById("revNome").innerText = nome;
  document.getElementById("revEmail").innerText = email;
  document.getElementById("revGenero").innerText = genero;
  document.getElementById("revIdade").innerText = idade;
  document.getElementById("revTelefone").innerText = telefone;
  document.getElementById("revEndereco").innerText = endereco;
  document.getElementById("revInteresse").innerText = interesse;
  document.getElementById("revNomeResponsavel").innerText = nomeRespo;
  document.getElementById("revTelefoneResponsavel").innerText = telefoneResp;

  // Guarda no localStorage (só pra teste) using the Portuguese keys expected by enviarFormulario()
  localStorage.setItem(
    "formData",
    JSON.stringify({
      nome,
      email,
      genero,
      idade,
      telefone,
      endereco,
      nomeRespo,
      telefoneResp,
      interesse,
    })
  );

  form.style.display = "none";
  document.getElementById("revisao").style.display = "block";

  const btn_confirmar = document.getElementById("btn-form");
  const container_remove = document.getElementById("container-remove");
  const container_select_remove = document.getElementById("container-select");
  btn_confirmar.classList.add("d-none");
  container_remove.classList.add("d-none");
  container_select_remove.classList.add("d-none");

  atualizarProgresso(2); // vai para a segunda etapa
};

window.voltarEdicao = function() {
  document.getElementById("cadastroForm").style.display = "block";
  document.getElementById("revisao").style.display = "none";

  const btn_confirmar = document.getElementById("btn-form");
  const container_remove = document.getElementById("container-remove");
  const container_select_remove = document.getElementById("container-select");

  btn_confirmar.classList.remove("d-none");
  container_remove.classList.remove("d-none");
  container_select_remove.classList.remove("d-none");

  atualizarProgresso(1); // volta para a primeira etapa
};

window.enviarFormulario = async function () {
  const dados = JSON.parse(localStorage.getItem("formData") || '{}');
  // Try to get CSRF token either from hidden input or meta tag
  const tokenInput = document.querySelector('input[name="_token"]');
  const token = tokenInput ? tokenInput.value : document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
  const payload = {
    name: dados.nome || '',
    email: dados.email || '',
    gender: dados.genero || '',
    age: dados.idade ? parseInt(dados.idade, 10) : null,
    phone: dados.telefone || '',
    address: dados.endereco || '',
    interest: dados.interesse || '',
    resp_name: dados.nomeRespo || null,
    resp_phone: dados.telefoneResp || null,
  };

  try {
    const resposta = await fetch("/formulario/store", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "X-CSRF-TOKEN": token,
        "Accept": "application/json",
      },
      body: JSON.stringify(payload),
    });

    const json = await resposta.json().catch(() => ({}));

    if (!resposta.ok) {
      console.error('Server response:', json);
      throw new Error(json.message || "Erro ao enviar dados para o servidor.");
    }

    // Sucesso: mostrar tela "concluído"
    document.getElementById("revisao").style.display = "none";
    const concluido = document.getElementById("concluido");
    concluido.classList.remove("d-none");
    concluido.classList.add("d-block");
    atualizarProgresso(3);

    // Limpar dados
    localStorage.removeItem("formData");
  } catch (erro) {
    console.error(erro);
    alert("Não foi possível enviar o formulário. Tente novamente mais tarde.");
  }
};

window.voltarInicio = function() {
  document.getElementById("cadastroForm").style.display = "block";
  document.getElementById("revisao").style.display = "none";

  // Esconde concluído novamente
  const concluido = document.getElementById("concluido");
  concluido.classList.add("d-none");
  concluido.classList.remove("d-block");

  const btn_confirmar = document.getElementById("btn-form");
  const container_remove = document.getElementById("container-remove");

  btn_confirmar.classList.remove("d-none");
  container_remove.classList.remove("d-none");

  atualizarProgresso(1);
};

// Função auxiliar interna (não precisa expor)
function atualizarProgresso(etapa) {
  const steps = document.querySelectorAll(".barra-progresso .step .circle");

  steps.forEach((circle, index) => {
    if (index < etapa) {
      circle.classList.add("bg-white");
      circle.classList.remove("bg-custom");
    } else {
      circle.classList.add("bg-custom");
      circle.classList.remove("bg-white");
    }
  });
}
