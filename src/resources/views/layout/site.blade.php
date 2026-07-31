<!DOCTYPE html>
<html lang="pt-br">

<head>
   
   @include('partials.head')

</head>


   
   @include('partials.topo')

<body>
      

   <main>
  
      @yield('content')
   </main>


   @include('partials.rodape')


   @include('partials.script')
    
</body>

</html>