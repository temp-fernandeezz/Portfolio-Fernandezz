<footer class="bg-gradient-to-t from-black to-transparent text-white py-10 mt-20">
    <div class="max-w-7xl mx-auto px-6 md:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 items-center">
            
            <!-- Logo / Nome -->
            <div class="text-center md:text-left">
                <h2 class="text-2xl font-bold tracking-wide">Fernanda Fernandes</h2>
                <p class="text-sm mt-2 text-gray-200">
                    Desenvolvedora Full Stack apaixonada por tecnologia e inovação.
                </p>
            </div>

            <div></div>

            <!-- Redes Sociais -->
            <div class="flex justify-center md:justify-end space-x-5 text-2xl">
                <a href="https://github.com" target="_blank" class="hover:text-pink-200 transition">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://linkedin.com" target="_blank" class="hover:text-pink-200 transition">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="https://instagram.com" target="_blank" class="hover:text-pink-200 transition">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

        <!-- Linha divisória -->
        <div class="border-t border-white/20 my-6"></div>

        <!-- Direitos autorais -->
        <div class="text-center text-sm text-gray-200">
            © <span id="year"></span> Fernanda Fernandes. Todos os direitos reservados.
        </div>
    </div>
</footer>

<script>
    // Define automaticamente o ano atual
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
