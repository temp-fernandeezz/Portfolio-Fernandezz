<x-layouts.base-layout>
    <section class="relative pt-20 pb-12">
        <div class="max-w-6xl lg:mx-auto mx-4">
            <div class="flex flex-col md:flex-row items-center gap-8 border-l-[0.5px] border-white p-6">
                <!-- GIF do Coragem -->
                <div class="w-full md:w-1/2 flex justify-center md:justify-start">
                    <img class="w-68" src="{{ Vite::asset('resources/images/coragem-digitando.gif') }}"
                        alt="Coragem digitando" class="w-64 h-auto rounded-xl shadow-lg">
                </div>

                <!-- Texto animado -->
                <div class="w-full md:w-1/2">
                    <h2 x-data="{ text: '', fullText: 'Bem-vindo(a)', i: 0 }" x-init="() => {
                        let interval = setInterval(() => {
                            text += fullText[i++];
                            if (i >= fullText.length) clearInterval(interval);
                        }, 100);
                    }"
                        class="font-bold ibm-plex-mono-semibold text-white text-4xl mb-6 font-mono" x-text="text">
                    </h2>
                    <p class="text-white font-light text-2xl pb-4">
                        Olá! É um prazer tê-lo(a) aqui.
                        <br>
                        Este é o meu espaço criativo, onde compartilho meus projetos, ideias e conquistas.
                        <br><br>
                        Cada trabalho representa um pouco da minha paixão pelo desenvolvimento e a dedicação que
                        coloco em tudo o que faço.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="backdrop-blur-md pt-12 pb-20">
        <div class="text-center">
            <h2 class="font-bold ibm-plex-mono-semibold text-white text-4xl mb-8">Sobre</h2>
        </div>

        <div class="max-w-7xl mx-auto px-4">
            <!-- Texto + Foto -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center mb-12">
                <div>
                    <p class="text-lg mb-6 text-white leading-relaxed">
                        Olá! Meu nome é <strong>Fernanda Fernandes</strong>, sou desenvolvedora full stack com formação
                        em Análise e Desenvolvimento de Sistemas e atualmente curso um MBA em Engenharia de Software na
                        USP/ESALQ. Tenho uma paixão profunda por resolver problemas reais com tecnologia, transformando
                        ideias em produtos digitais que geram impacto positivo.
                    </p>
                    <p class="text-lg mb-6 text-white leading-relaxed">
                        Tenho experiência com uma ampla gama de linguagens e frameworks — como PHP, Laravel, WordPress,
                        JavaScript, Alpine.js, React Native e APIs REST — sempre com foco em código limpo, escalável e
                        acessível. Ao longo da minha jornada, atuei em projetos que vão desde sistemas administrativos
                        completos até experiências digitais personalizadas para empresas e clientes finais.
                    </p>
                    <p class="text-lg text-white leading-relaxed">
                        Além do desenvolvimento técnico, valorizo muito o design centrado no usuário e a boa comunicação
                        entre equipes. Neste espaço, compartilho um pouco da minha história, meus aprendizados, projetos
                        e certificações — que representam não apenas conhecimento técnico, mas também dedicação,
                        curiosidade e evolução constante.
                    </p>
                </div>

                <div class="flex flex-col items-center space-y-6">
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/p/DHycEJeAC2M/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"
                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                    </blockquote>
                </div>
            </div>

            <!-- Swiper de certificados -->
            <div class="mb-16">
                <div class="swiper mySwiperCertificados max-w-xl mx-auto">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://hermes.dio.me/certificates/cover/RCWZCEZR.jpg" alt="Certificado 1"
                                class="rounded shadow-white shadow-md">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://hermes.dio.me/certificates/cover/PUPRM7UV.jpg" alt="Certificado 2"
                                class="rounded shadow-white shadow-md">
                        </div>
                        <div class="swiper-slide">
                            <img src="https://hermes.dio.me/certificates/cover/UTA6YJOF.jpg" alt="Certificado 2"
                                class="rounded shadow-white shadow-md">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Competências -->
            <div class="text-center mb-8">
                <h3 class="text-3xl text-white font-semibold mb-6">Competências Técnicas</h3>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 max-w-7xl mx-auto text-white">
                @foreach ($skills as $skill)
                    <div
                        class="bg-white/10 backdrop-blur rounded-xl p-4 shadow text-center 
            transition-transform duration-300 transform hover:scale-105 hover:bg-white/20 hover:shadow-lg">
                        <i class="{{ $skill['icon_class'] }} text-4xl mb-2"></i>
                        <h4 class="font-semibold text-lg">{{ $skill['title'] }}</h4>
                        <p class="text-sm">{{ $skill['subtitle'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="pt-12 pb-20">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl text-white font-semibold font-['IBM Plex Mono'] mb-4">
                    Meus Projetos
                </h2>
                <p class="text-white text-xl max-w-2xl mx-auto">
                    Explore meus projetos para saber mais sobre <i class="italic">o que faço</i>.
                </p>
            </div>

            <div>
                <div class="swiper myWorks">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="bg-white/80 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl">
                                <img class="w-full h-48 object-cover"
                                    src="{{ Vite::asset('resources/images/gif-urban.gif') }}"
                                    alt="Logo do Projeto Urbaneye" />
                                <div class="p-6">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-3">UrbanEye - Web</h3>
                                    <p class="text-gray-700">
                                        Painel em PHP com Laravel e Filament para monitoramento e controle de áreas de
                                        enchente,
                                        incluindo gestão de ocorrências, mapas interativos e análise de dados.
                                    </p>
                                </div>
                                <div class="p-6 pt-0">
                                    <a href="#">
                                        <button
                                            class="w-full rounded-xl text-base text-white px-6 py-3 bg-rose-500 hover:bg-rose-600 transition-all duration-200"
                                            aria-label="Saiba mais sobre o projeto UrbanEye Web">
                                            Saiba Mais
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="bg-white/80 backdrop-blur-sm rounded-2xl overflow-hidden shadow-xl">
                                <img class="w-full h-48 object-cover"
                                    src="{{ Vite::asset('resources/images/gif-urban.gif') }}"
                                    alt="Logo do Projeto Urbaneye" />
                                <div class="p-6">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-3">UrbanEye - Aplicativo</h3>
                                    <p class="text-gray-700">
                                        Aplicativo com mapa interativo que se atualiza em tempo real conforme sua
                                        localização,
                                        exibindo dados sobre áreas de enchente via API.
                                    </p>
                                </div>
                                <div class="p-6 pt-0">
                                    <a href="#">
                                        <button
                                            class="w-full rounded-xl text-base text-white px-6 py-3 bg-rose-500 hover:bg-rose-600 transition-all duration-200"
                                            aria-label="Saiba mais sobre o projeto UrbanEye App">
                                            Saiba Mais
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.base-layout>
