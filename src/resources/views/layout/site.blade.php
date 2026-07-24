<!DOCTYPE html>
<html lang="pt-br">

<head>
   // Aqui entra o partial de head
   @include('partials.head')

</head>


   // Header
   @include('partials.topo')

<body>
      
   // Main 
   <main>
      // Área de conteúdo
      @yield('content')
   </main>

   // Footer
   @include('partials.rodape')

   // Scripts 
   @include('partials.script')
    
</body>

</html>