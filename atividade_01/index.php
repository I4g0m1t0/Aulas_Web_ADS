<?php 
$title = "Elenco";
include 'includes/header.php';
include 'includes/menu.php';
?>

<main>
    <div class="elenco">
        <h1>Elenco Atual Temporada 24/25</h1>
        <h2>Goleiros</h2>
        <div class="elenco-container" id="goleiros">
            <!-- Goleiros adicionados dinamicamente -->
        </div>

        <h2>Defensores</h2>
        <div class="elenco-container" id="defensores">
            <!-- Defensores adicionados dinamicamente -->
        </div>

        <h2>Meio-campistas</h2>
        <div class="elenco-container" id="meioCampistas">
            <!-- Meio-campistas adicionados dinamicamente -->
        </div>

        <h2>Atacantes</h2>
        <div class="elenco-container" id="atacantes">
            <!-- Atacantes adicionados dinamicamente -->
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const jogadores = {
            goleiros: [
                { img: 'courtois.webp', alt: 'Courtois', nome: 'Courtois', posicao: 'Goleiro', numero: '1' },
                { img: 'lunin.webp', alt: 'Lunin', nome: 'Lunin', posicao: 'Goleiro', numero: '13' }
            ],
            defensores: [
                { img: 'carvajal.webp', alt: 'carvajal', nome: 'Carvajal', posicao: 'Defesa', numero: '2' },
                { img: 'militao.webp', alt: 'militao', nome: 'E.Militão', posicao: 'Defesa', numero: '3' },
                { img: 'alaba.webp', alt: 'alaba', nome: 'Alaba', posicao: 'Defesa', numero: '4' },
                { img: 'lucas_vasquez.webp', alt: 'lucas_vazques', nome: 'Lucas V.', posicao: 'Defesa', numero: '17' },
                { img: 'vallejo.webp', alt: 'vallejo', nome: 'Vallejo', posicao: 'Defesa', numero: '18' },
                { img: 'fran_garcia.webp', alt: 'fran_garcia', nome: 'Fran García', posicao: 'Defesa', numero: '20' },
                { img: 'rudiger.webp', alt: 'rudiger', nome: 'Rüdiger', posicao: 'Defesa', numero: '22' },
                { img: 'mendy.webp', alt: 'mendy', nome: 'F. Mendy', posicao: 'Defesa', numero: '23' }
            ],
            meioCampistas: [
                { img: 'bellingham.webp', alt: 'bellingham', nome: 'Bellingham', posicao: 'Meio-campista', numero: '5' },
                { img: 'camavinga.webp', alt: 'camavinga', nome: 'Camavinga', posicao: 'Meio-campista', numero: '6' },
                { img: 'valverde.webp', alt: 'valverde', nome: 'Valverde', posicao: 'Meio-campista', numero: '8' },
                { img: 'modric.webp', alt: 'modric', nome: 'Modrić', posicao: 'Meio-campista', numero: '10' },
                { img: 'tchouameni.webp', alt: 'tchouameni', nome: 'Tchouaméni', posicao: 'Meio-campista', numero: '14' },
                { img: 'guler.webp', alt: 'guler', nome: 'Arda Güler', posicao: 'Meio-campista', numero: '15' },
                { img: 'ceballos.webp', alt: 'ceballos', nome: 'D. Ceballos', posicao: 'Meio-campista', numero: '19' }
            ],
            atacantes: [
                { img: 'vini.webp', alt: 'vini', nome: 'Vini Jr.', posicao: 'Atacante', numero: '7' },
                { img: 'mbappe.webp', alt: 'mbappe', nome: 'Mbappé', posicao: 'Atacante', numero: '9' },
                { img: 'rodrygo.webp', alt: 'rodrygo', nome: 'Rodrygo', posicao: 'Atacante', numero: '11' },
                { img: 'endrick.webp', alt: 'endrick', nome: 'Endrick', posicao: 'Atacante', numero: '16' },
                { img: 'brahim.webp', alt: 'brahim', nome: 'Brahim', posicao: 'Atacante', numero: '21' }
            ]
        };

        Object.keys(jogadores).forEach(categoria => {
            const container = document.getElementById(categoria);
            if (container) {
                jogadores[categoria].forEach(jogador => {
                    const jogadorDiv = document.createElement('div');
                    jogadorDiv.className = 'jogador';

                    jogadorDiv.innerHTML = `
                        <img src="assets/images/${jogador.img}" alt="${jogador.alt}">
                        <div class="card">
                            <h3>${jogador.nome}</h3>
                            <p>${jogador.posicao}</p>
                            ${jogador.numero ? `<a><i class="fa-solid fa-arrow-up-right-from-square">${jogador.numero}</i></a>` : ''}
                        </div>
                    `;

                    container.appendChild(jogadorDiv);
                });
            }
        });
    });
</script>

<?php 
include 'includes/footer.php';
?>
