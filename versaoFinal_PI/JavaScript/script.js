// Abre o SideNav
document.addEventListener('DOMContentLoaded', function() {
    var menuLateral = document.getElementById('nav-mobile');
    var instances = M.Sidenav.init(menuLateral, {
        draggable: true
    })
})


// Pesquisa de produto numa Lista
document.addEventListener('DOMContentLoaded',function(){
    for(i of document.querySelectorAll('[search]')){
        try{
            busca(i,document.querySelector("#"+i.getAttribute('search')))
        }catch(e){}
    }

    function busca(input_field,div){
        input_field.onkeyup=function(e){
            for(di of div.children){
                r  = new RegExp(this.value,"g")
                if(di.getAttribute("nome").toLowerCase().match(r) != null)
                    di.style.removeProperty('display')
                else
                    di.style.display = "none"
            }
        }
    }
})
// Apaga o texto escrito no inpCPF
function limpaInp(){
    var inp = document.querySelector('#search')
    inp.value = '';
}

// Ativa Dropdown
document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, {
        coverTrigger: false
    });
});

// Vizualizar a imagem antes de fazer o upload
let btnIMG = document.getElementById('btnCarregaIMG');
let photo = document.getElementById('imgCarrega');
let file = document.getElementById('inpIMG');

if(btnIMG){
    btnIMG.addEventListener('click', clickFile);
}
function clickFile(){
    file.click();
    if(file.click){
        file.addEventListener('change', () => {
    
            if (file.files.length <= 0) {
                return;
            }
        
            let reader = new FileReader();
        
            reader.onload = () => {
                photo.src = reader.result;
            }
        
            reader.readAsDataURL(file.files[0]);
        });
    }
}

// Formatação CPF

const inputCPF = document.getElementById('inpCPF')

if(inputCPF){
    inputCPF.addEventListener('keypress', () => {
        let inputLengthCPF = inputCPF.value.length

        // MAX LENGHT 14  CPF
        if (inputLengthCPF == 3 || inputLengthCPF == 7) {
            inputCPF.value += '.'
        }else if (inputLengthCPF == 11) {
            inputCPF.value += '-'
        }
    })
}

function convertCPF(){ 
    let valCPF = document.getElementById('valCPF')
    let textCPF = inputCPF.value
    let intCPF = '';
    intCPF += textCPF.substr(0,3)
    intCPF += textCPF.substr(4,3)
    intCPF += textCPF.substr(8,3)
    intCPF += textCPF.substr(12)
    
    valCPF.value = parseInt(intCPF)
}




// CEP
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('ender').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('ender').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        // document.getElementById('ender').value="...";
        // document.getElementById('bairro').value="...";
        // document.getElementById('cidade').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};

// Modal
document.addEventListener('DOMContentLoaded',function(){
    const elemsModal = document.querySelectorAll(".modal");
    const instancesModal = M.Modal.init(elemsModal)
})

// Pesquisa de usuario em TABELA
const INPUT_BUSCA = document.getElementById('pesquisaTabela');
const TABELA_BEBIDAS = document.getElementById('tabelaUsuarios');

if(INPUT_BUSCA){
    INPUT_BUSCA.addEventListener('keyup', buscaTabela)
}

function buscaTabela(){
    let expressao = INPUT_BUSCA.value.toLowerCase();

    if (expressao.length === 1) {
        return;
    }

    let linhas = TABELA_BEBIDAS.getElementsByTagName('tr');

    for (let posicao in linhas) {
        if (true === isNaN(posicao)) {
            continue;
        }

        let conteudoDaLinha = linhas[posicao].innerHTML.toLowerCase();

        if (true === conteudoDaLinha.includes(expressao)) {
            linhas[posicao].style.display = '';
        }else {
            linhas[posicao].style.display = 'none';
        }
    }
}
