<div class="fixed inset-0 w-full h-full pointer-events-none z-[-1] overflow-hidden">
    
    {{-- ============================================================ --}}
    {{-- VERSIÓN ANTERIOR: Imagen Difuminada (Comentada)              --}}
    {{-- ============================================================ --}}
    <!--
    <div aria-hidden="true" 
         class="absolute inset-0 bg-cover bg-center opacity-50 blur-2xl transform-gpu transition-opacity duration-1000" 
         style="background-image: url('{{ asset('images/fondo.jpg') }}');">
    </div>
    
    <div aria-hidden="true" 
         class="absolute inset-0 bg-gradient-to-b from-stone-900 via-red-600 to-orange-600 opacity-50 transition-opacity duration-1000">
    </div>
    -->

    {{-- ============================================================ --}}
    {{-- NUEVO DISEÑO: Gris premium con capa transparente             --}}
    {{-- ============================================================ --}}
    
    {{-- Capa 1: Base oscura elegante (degradado diagonal alternado) --}}
    <div aria-hidden="true" 
         class="absolute inset-0 bg-[linear-gradient(to_bottom_right,theme(colors.stone.950)_12%,theme(colors.stone.800)_30%,theme(colors.stone.950)_66%,theme(colors.stone.800))] ">
    </div>

</div>