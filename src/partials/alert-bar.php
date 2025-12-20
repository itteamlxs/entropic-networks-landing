<!-- ******ALERT BAR - Versión Mejorada****** -->
<?php 
// Seguridad: Validación estricta de entrada
if (isset($dict['alert_bar_active']) && filter_var($dict['alert_bar_active'], FILTER_VALIDATE_BOOLEAN)):
    
    // Sanitización de datos con validación de longitud
    $alert_title = isset($dict['alert_bar_title']) ? trim(strip_tags($dict['alert_bar_title'])) : '';
    $alert_message = isset($dict['alert_bar_message']) ? trim(strip_tags($dict['alert_bar_message'])) : '';
    $alert_link = isset($dict['alert_bar_link']) ? filter_var($dict['alert_bar_link'], FILTER_VALIDATE_URL) : false;
    $alert_link_text = isset($dict['alert_bar_link_text']) ? trim(strip_tags($dict['alert_bar_link_text'])) : '';
    
    // Solo mostrar si hay contenido válido
    if (!empty($alert_title) || !empty($alert_message)):
        
        // ID único para persistencia de cierre
        $alert_id = 'alert_' . md5($alert_title . $alert_message);
        $is_dismissed = isset($_COOKIE[$alert_id]) && $_COOKIE[$alert_id] === 'dismissed';
        
        if (!$is_dismissed):
?>
<div class="alert-bar" role="alert" aria-live="polite" data-alert-id="<?=$alert_id?>">
    <div class="container">
        <div class="alert-content">
            <div class="alert-main">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-circle-fill alert-icon" viewBox="0 0 16 16" aria-hidden="true">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4m.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
                </svg>
                <div class="alert-text-wrapper">
                    <?php if (!empty($alert_title)): ?>
                        <strong class="alert-title"><?=htmlspecialchars($alert_title, ENT_QUOTES, 'UTF-8')?></strong>
                    <?php endif; ?>
                    <?php if (!empty($alert_message)): ?>
                        <span class="alert-message"><?=htmlspecialchars($alert_message, ENT_QUOTES, 'UTF-8')?></span>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="alert-actions">
                <?php if ($alert_link && !empty($alert_link_text)): ?>
                    <a href="<?=htmlspecialchars($alert_link, ENT_QUOTES, 'UTF-8')?>" 
                       class="alert-link" 
                       target="_blank" 
                       rel="noopener noreferrer"
                       aria-label="<?=htmlspecialchars($alert_link_text, ENT_QUOTES, 'UTF-8')?>">
                        <?=htmlspecialchars($alert_link_text, ENT_QUOTES, 'UTF-8')?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16" aria-hidden="true">
                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                        </svg>
                    </a>
                <?php endif; ?>
                
                <button type="button" 
                        class="alert-close" 
                        aria-label="Cerrar aviso"
                        onclick="dismissAlert('<?=$alert_id?>')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" aria-hidden="true">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
// Función mejorada para cerrar el aviso con persistencia
function dismissAlert(alertId) {
    const alertBar = document.querySelector(`[data-alert-id="${alertId}"]`);
    if (alertBar) {
        // Animación de cierre suave
        alertBar.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
        alertBar.style.opacity = '0';
        alertBar.style.transform = 'translateY(-100%)';
        
        setTimeout(() => {
            alertBar.style.display = 'none';
        }, 300);
        
        // Guardar preferencia en cookie segura
        const expires = new Date();
        expires.setDate(expires.getDate() + 7); // Recordar por 7 días
        document.cookie = `${alertId}=dismissed; expires=${expires.toUTCString()}; path=/; SameSite=Strict`;
    }
}

// Verificar y restaurar alertas no vistas
document.addEventListener('DOMContentLoaded', function() {
    const alertBars = document.querySelectorAll('.alert-bar');
    alertBars.forEach(bar => {
        const alertId = bar.getAttribute('data-alert-id');
        if (document.cookie.includes(`${alertId}=dismissed`)) {
            bar.style.display = 'none';
        }
    });
});
</script>

<style>
/* Variables CSS para personalización fácil */
:root {
    --alert-bg-primary: #0047AB;
    --alert-bg-secondary: #003380;
    --alert-text-color: #ffffff;
    --alert-icon-color: #ffd700;
    --alert-link-color: #ffffff;
    --alert-close-hover: #ff6b6b;
    --alert-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    --alert-transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* Mejoras de accesibilidad y UX */
.alert-bar {
    background: linear-gradient(135deg, var(--alert-bg-primary) 0%, var(--alert-bg-secondary) 100%);
    color: var(--alert-text-color);
    padding: 16px 0;
    position: relative;
    z-index: 1050;
    box-shadow: var(--alert-shadow);
    transition: var(--alert-transition);
}

.alert-bar:hover {
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.alert-bar .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.alert-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 20px;
    flex-wrap: wrap;
    position: relative;
}

.alert-main {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    flex: 1;
    min-width: 0;
}

.alert-icon {
    color: var(--alert-icon-color);
    flex-shrink: 0;
    margin-top: 2px;
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.alert-text-wrapper {
    flex: 1;
    min-width: 0;
}

.alert-title {
    font-weight: 700;
    text-transform: uppercase;
    margin-right: 8px;
    font-size: 14px;
    letter-spacing: 0.5px;
}

.alert-message {
    font-size: 14px;
    line-height: 1.5;
    opacity: 0.95;
}

.alert-actions {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-shrink: 0;
}

.alert-link {
    color: var(--alert-link-color);
    text-decoration: none;
    font-weight: 600;
    white-space: nowrap;
    transition: var(--alert-transition);
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 12px;
    border-radius: 6px;
    background: rgba(255, 255, 255, 0.1);
}

.alert-link:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateX(2px);
}

.alert-link:focus {
    outline: 2px solid var(--alert-icon-color);
    outline-offset: 2px;
}

.alert-close {
    background: none;
    border: none;
    color: var(--alert-text-color);
    cursor: pointer;
    padding: 8px;
    border-radius: 50%;
    transition: var(--alert-transition);
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
}

.alert-close:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: rotate(90deg);
}

.alert-close:focus {
    outline: 2px solid var(--alert-icon-color);
    outline-offset: 2px;
}

.alert-close:active {
    transform: scale(0.9);
}

/* Responsive mejorado */
@media (max-width: 768px) {
    .alert-content {
        flex-direction: column;
        align-items: stretch;
        text-align: center;
    }
    
    .alert-main {
        justify-content: center;
        text-align: left;
    }
    
    .alert-actions {
        justify-content: center;
        width: 100%;
        margin-top: 12px;
    }
    
    .alert-link {
        flex: 1;
        justify-content: center;
    }
    
    .alert-close {
        position: absolute;
        top: 8px;
        right: 8px;
    }
}

/* Modo oscuro */
@media (prefers-color-scheme: dark) {
    :root {
        --alert-bg-primary: #002d73;
        --alert-bg-secondary: #001a4d;
        --alert-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }
}

/* Animación de entrada */
.alert-bar {
    animation: slideDown 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes slideDown {
    from {
        opacity: 0;
        transform: translateY(-100%);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
<?php 
        endif; // Fin validación de contenido
    endif; // Fin validación de cookie
endif; // Fin validación principal
?>
