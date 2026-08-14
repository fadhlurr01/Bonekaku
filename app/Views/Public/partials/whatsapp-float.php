<?php
// app/Views/Public/partials/whatsapp-float.php
?>
<div style="position: fixed; bottom: 28px; right: 28px; z-index: 999; display: flex; align-items: center;">
  <span class="whatsapp-chip-label" id="waChipLabel">Order? Chat Kami Aja 👋</span>
  <a href="https://wa.me/<?= $config['hotline_wa'] ?>?text=Halo%20Admin%20Bonekaku,%20saya%20ingin%20tanya%20mengenai%20pembuatan%20boneka/bantal%20custom" 
     target="_blank" 
     class="whatsapp-float-btn" 
     aria-label="Chat WhatsApp Admin Bonekaku">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>
