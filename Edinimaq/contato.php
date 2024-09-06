<?php include './includes/header.php'?>
<div class="container mx-auto py-16">
    <h2 class="text-4xl font-bold text-gray-800 text-center">Entre em Contato</h2>
    <form action="./pages//enviar_contatos.php" method="POST" class="mt-8 max-w-xl mx-auto">
        <div class="mb-4">
            <label for="name" class="block text-gray-600">Nome:</label>
            <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-600">Email:</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-600">Mensagem:</label>
            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border rounded-lg" required></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white py-2 px-6 rounded-lg">Enviar</button>
    </form>
</div>

<?php include './includes/footer.php'?>


