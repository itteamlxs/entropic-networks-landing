<!-- ******ALERT BAR****** -->
<?php if (isset($dict['alert_bar_active']) && $dict['alert_bar_active']): ?>
<div class="alert-bar" id="alert-bar">
    <div class="container">
        <div class="alert-content">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-exclamation-circle-fill alert-icon" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4m.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
            </svg>
            <span class="alert-text">
                <strong><?=t('alert_bar_title',$dict)?></strong> <?=t('alert_bar_message',$dict)?>
            </span>
            <?php if (isset($dict['alert_bar_link']) && !empty($dict['alert_bar_link'])): ?>
                <a href="#" class="alert-link" data-bs-toggle="modal" data-bs-target="#alert-info-modal">
                    <?=t('alert_bar_link_text',$dict)?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>

<style>
.alert-bar {
    background: linear-gradient(135deg, #0047AB 0%, #003380 100%);
    color: #fff;
    padding: 12px 0;
    position: relative;
    z-index: 999;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.alert-bar .container {
    position: relative;
}

.alert-bar .alert-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    flex-wrap: wrap;
    padding: 0 15px;
}

.alert-bar .alert-icon {
    color: #ffd700;
    flex-shrink: 0;
}

.alert-bar .alert-text {
    font-size: 14px;
    line-height: 1.4;
    flex: 1;
    min-width: 250px;
}

.alert-bar .alert-text strong {
    font-weight: 700;
    text-transform: uppercase;
    margin-right: 8px;
}

.alert-bar .alert-link {
    color: #fff;
    text-decoration: underline;
    font-weight: 600;
    white-space: nowrap;
    transition: opacity 0.3s;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.alert-bar .alert-link:hover {
    opacity: 0.8;
    color: #fff;
}

@media (max-width: 768px) {
    .alert-bar .alert-content {
        padding: 0 15px;
        justify-content: flex-start;
    }
    
    .alert-bar .alert-text {
        font-size: 13px;
        min-width: 200px;
    }
    
    .alert-bar .alert-link {
        width: 100%;
        text-align: center;
        margin-top: 5px;
    }
}
</style>
<?php include __DIR__.'/alert-modal.php'; ?>
<?php endif; ?>
