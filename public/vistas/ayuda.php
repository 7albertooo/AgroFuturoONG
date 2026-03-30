<?php

session_start();


if (empty($_SESSION["usuario_id"])) {
    header("Location: login.php");
    exit();
}


include_once 'header.php';

$mensaje = $_SESSION['mensaje'] ?? [];
unset($_SESSION['mensaje']);
?>



<section class="w-full  mx-auto p-10 flex flex-col items-center lg:min-h-150  justify-center">

<?php if (!empty($mensaje)): ?>
    <div class="w-full max-w-2xl mb-6">
        <?php foreach ($mensaje as $msg): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-2" role="alert">
                <strong class="font-bold">¡Éxito!</strong>
                <span class="block sm:inline"><?= htmlspecialchars($msg) ?></span>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

  <div class="w-full max-w-2xl bg-white rounded-2xl shadow-2xl p-8 ">
    
      <div class="text-center mb-8">
        <h3 class="text-4xl font-extrabold text-green-900 mb-2">Solicitar Microcrédito</h3>
        <p class="text-gray-600">Completa los datos para procesar tu solicitud de apoyo agrícola.</p>
    </div>

    <form action="../../app/controladores/adminC.php" method="post" class="space-y-6">
      <input type="hidden" name="accion" value="crearSolicitud">
      <input type="hidden" name="tipo" value="credito">

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="flex flex-col gap-2">
            <label for="cantidad" class="text-sm font-bold text-green-800 uppercase tracking-wider">Cantidad Solicitada</label>
            <div class="relative">
                <span class="absolute left-3 top-3 text-green-600 font-bold">€</span>
                <input type="number" name="cantidad" id="cantidad" placeholder="0" class="w-full p-3 pl-8 border-2 border-green-100 rounded-xl focus:border-green-500 focus:outline-none transition-all" required>
            </div>
        </div>
        <div class="flex flex-col gap-2">
            <label for="edad" class="text-sm font-bold text-green-800 uppercase tracking-wider">Edad del Solicitante</label>
            <input type="number" name="edad" id="edad" placeholder="18" class="w-full p-3 border-2 border-green-100 rounded-xl focus:border-green-500 focus:outline-none transition-all" required>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-4 py-2">
        <label class="flex items-center gap-3 p-4 border-2 border-green-50 rounded-xl cursor-pointer hover:bg-green-50 transition-all group">
            <input type="checkbox" name="experiencia" class="w-6 h-6 rounded border-green-300 text-green-600 focus:ring-green-500">
            <div class="flex flex-col">
                <span class="text-green-900 font-bold">¿Tiene experiencia?</span>
                <span class="text-xs text-gray-500">Experiencia previa en el sector.</span>
            </div>
        </label>
        <label class="flex items-center gap-3 p-4 border-2 border-green-50 rounded-xl cursor-pointer hover:bg-green-50 transition-all group">
            <input type="checkbox" name="tiene_tierra" class="w-6 h-6 rounded border-green-300 text-green-600 focus:ring-green-500">
            <div class="flex flex-col">
                <span class="text-green-900 font-bold">¿Tiene tierra?</span>
                <span class="text-xs text-gray-500">Propiedad o arrendamiento.</span>
            </div>
        </label>
      </div>

      <div class="flex flex-col gap-2">
        <label for="textoSolicitud" class="text-sm font-bold text-green-800 uppercase tracking-wider">Descripción de la Solicitud</label>
        <textarea name="textoSolicitud" id="textoSolicitud" placeholder="Cuéntanos más sobre tu proyecto... (Mínimo 30 caracteres)" 
                  class="w-full h-32 p-4 border-2 border-green-100 rounded-xl focus:border-green-500 focus:outline-none transition-all resize-none" required></textarea>
      </div>

      <button type="submit" class="w-full bg-gradient-to-r from-green-600 to-green-800 hover:from-green-700 hover:to-green-900 text-white font-bold py-4 rounded-xl shadow-lg transform hover:-translate-y-1 transition-all duration-200 uppercase tracking-widest">
        Enviar Solicitud
      </button>

    </form>
  </div>
</section>