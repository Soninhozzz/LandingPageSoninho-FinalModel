@extends('layouts.app')

@section('title', 'Soninho - A Jornada do Herói do Descanso')

@section('content')

    <div class="hero-section">
        <img src="{{ asset('images/hero.png') }}" alt="Herói do Soninho" style="width: 150px;
         margin-bottom: 20px;">

         <h1><b>Toda grande jornada tem seus desafios</b></h1>
         <p>A ansiedade e as noites em claro não precisam ser seus inimigos. </p>

        <a href="{{ route('interest.create') }}" class="cta-button">Iniciar minha jornada!</a>
    </div>

    @if(session('success'))
    <div class="container pt-4">
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    </div>
    @endif

    <div class="container text-center py-5" id="problema">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4"><b> O desafio do descanso na vida acadêmica</b></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="lead mb-4">
                    A rotina intensa de estudos mantém a mente constantemente ativa, dificultando
                    o relaxamento e a transição para o sono. Muitas vezes, a tentativa de relaxar
                    na cama com o celular tem o efeito contrário e acaba por estimular ainda mais 
                    o cérebro.
                </p>
                <p>
                    Como resultado, a rotina de sontos fica completamente comprometida, gerando cansaço e 
                    dificuldade de concentração durante o dia seguinte. O estudante fica impossibilitado de 
                    enxergar a relação entre seus hábitos diários e a qualidade do sono, perpetuando um 
                    ciclo vicioso de estresse e baixo rendimento por causa da rotina pesada.
                </p>
            </div>
        </div>
    </div>

    <div  id="solucao">
        <div class="container text-center py-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-5" style="color:333;">
                        A nossa solução: <b>SONINHO</b>!
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="p-4" style="background-color: var(--foco-do-heroi); border-radius: 15px; height: 100%;">
                        <h4 class="mb-3" style="color: #fff;"><b>Jornada do herói</b></h4>
                        <p style="color: var(--luz-estelar);">
                            Transformamos a busca por uma melhor rotina de sono em uma jornada épica
                            onde você é o herói. Usamos a gamificação com metas e recompensas para manter você
                            motivado e engajado em sua jornada rumo ao descanso ideal.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="p-4" style="background-color: var(--foco-do-heroi); border-radius: 15px; height: 100%;">
                        <h4 class="mb-3" style="color: #fff;"><b>Recursos práticos</b></h4>
                        <p style="color: var(--luz-estelar);">
                            O aplicativo oferece guia de meditações, sons para relaxamento, além de 
                            oferecer dicas especiais para reduzir sua ansiedade diária e melhorar a
                            qualidade do seu sono. Tudo isso pensado para um descanso reparador e eficaz.
                        </p>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="p-4" style="background-color: var(--foco-do-heroi); border-radius: 15px; height: 100%;">
                        <h4 class="mb-3" style="color: #fff;"><b>Experiência interativa</b></h4>
                        <p style="color: var(--luz-estelar);">
                            A união da gamificação com os recursos práticos e uma interface amigável cria uma
                            experiência totalmente única, transformando você no herói do seu próprio descanso
                            e bem-estar.
                        </p>
                    </div>
                </div>
                
            </div>  
    </div>
    
    <div class="container text-center py-5" id="galeria">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-5"><b>O Aplicativo em Ação</b></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3 mb-4">
                <img src="{{ asset('images/coelho.jpeg') }}" alt="Herói do Soninho" style="width: 150px;
         margin-bottom: 20px;">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--sussuro)">Diário do descanso</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <img src="{{ asset('images/coelho.jpeg') }}" alt="Herói do Soninho" style="width: 150px;
         margin-bottom: 20px;">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--sussuro)">Registro da noite</h5>
                </div>
            </div>

            <div class="col-md-3 mb-4">
                <img src="{{ asset('images/coelho.jpeg') }}" alt="Herói do Soninho" style="width: 150px;
         margin-bottom: 20px;">
                <div class="card-body">
                    <h5 class="card-title" style="color: var(--sussuro)">Biblioteca de Morfeu</h5>
                </div>
            </div>
    </div>

    <div class="container text-center-py-5" id="FAQ"> 
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2 class="mb-5"><b>Perguntas Frequentes</b></h2>
            </div>
            <div class="col-md-8">
                <div class="mb-4">
                    <h5 style="color: #8a2be2;">Um aplicativo para as pessoas mexerem
                    menos no celular antes de dormir?</h5>
                    <p>
                        Sim! O uso do app é intencional e limitado. A ideia é que você utilize
                        o Soninho para iniciar sua atividade de relaxamento (como uma meditação guiada)
                        e, em seguida, deixar o celular de lado para dormir. 
                    </p>
                    <p>
                        Acreditamos que o app será benéfico pois não contará com a hiperestimulação presente
                        nas redes sociais e sim com atividades que refletem o oposto disso.
                    </p>

                    <div class="mb-4">
                    <h5 style="color: #8a2be2;">As técnicas têm base científica?</h5>
                    <p>
                        Sim. Usamos apenas práticas comprovadas, como respiração controlada e 
                        frequências baixas, todas apresentadas e aprovadas pela Roselene, 
                        psicóloga do CEFET.
                    </p>

                    <div class="mb-4">
                    <h5 style="color: #8a2be2;">É complicado de usar todo dia?</h5>
                    <p>
                        Não. O registro diário pretende ser rápido e visual,
                         feito com ícones para não se tornar uma tarefa cansativa, mas sim
                         algo divertido e que instigue o usuário a permanecer usando o app.
                    </p>
                </div>
    </div>

    <footer class="site-footer text-center py-4 mt-5">
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} Soninho. Todos os direitos reservados.</p>
            <p class="mb-0">
                Desenvolvido por: Carlos Alexandre, Miguel Sousa, Otávio Cabral, Samuel Maimone e Thiago Lucas.
            </p>
        </div>

    </footer>
@endsection