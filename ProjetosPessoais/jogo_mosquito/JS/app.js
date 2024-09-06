let altura = 0
let largura = 0
var vidas = 1
var tempo = 15

var criaMoscaTempo = 1500

var nivel = window.location.search
nivel = nivel.replace('?', '')

if (nivel === 'normal') {
    criaMoscaTempo = 1500
} else if (nivel === 'dificil') {
    criaMoscaTempo = 1000
} else if (nivel === 'chucknorris') {
    criaMoscaTempo = 750
}

function tamanhoTela() {
    altura = window.innerHeight
    largura = window.innerWidth
}
tamanhoTela()

var cronometro = setInterval(function () {
    tempo -= 1
    if (tempo < 0) {
        clearInterval(cronometro)
        clearInterval(criaMosca)
        window.location.href = "vitoria.html"
    } else {
        document.getElementById('cronometro').innerHTML = tempo
    }
}, 1000)

function posicaRadomica() {
    if (document.getElementById('mosquito')) {
        document.getElementById('mosquito').remove()

        if (vidas > 3) {
            window.location.href = "fim_de_jogo.html"
        } else {
            document.getElementById('v' + vidas).src = "assets/imagens/coracao_vazio.png"
            vidas++
        }
    }

    let posicaoX = Math.floor(Math.random() * largura) - 100;
    let posicaoY = Math.floor(Math.random() * altura) - 100;

    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    let mosquito = document.createElement('img')
    mosquito.src = 'assets/imagens/mosca.png'
    mosquito.className = tamanhoaleatório() + ' ' + ladoAleatorio();
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosquito'
    mosquito.onclick = function () {
        this.remove()
    }

    document.body.appendChild(mosquito)
}

function tamanhoaleatório() {
    var classe = Math.floor(Math.random() * 3)

    switch (classe) {
        case 0:
            return 'mosquito1'
        case 1:
            return 'mosquito2'
        case 2:
            return 'mosquito3'
    }
}

function ladoAleatorio() {
    var classe = Math.floor(Math.random() * 2)
    switch (classe) {
        case 0:
            return 'ladoA'
        case 1:
            return 'ladoB'
    }
}
