<?php
// src/components/Modal.php

function renderModal($title, $content, $closeButtonText = 'Close') {
    ?>
    <div class="modal">
        <div class="modal-content">
            <h2><?php echo htmlspecialchars($title); ?></h2>
            <p><?php echo htmlspecialchars($content); ?></p>
            <button onclick="closeModal()"><?php echo htmlspecialchars($closeButtonText); ?></button>
        </div>
    </div>
    <script>
        function closeModal() {
            document.querySelector('.modal').style.display = 'none';
        }
    </script>
    <?php
}
?>
