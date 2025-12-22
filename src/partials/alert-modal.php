<!-- Alert Info Modal -->
<div class="modal fade" id="alert-info-modal" tabindex="-1" aria-labelledby="alertInfoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(135deg, #0047AB 0%, #003380 100%); color: #fff; border-bottom: none;">
                <h5 class="modal-title" id="alertInfoModalLabel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-circle-fill me-2" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
                        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2"/>
                    </svg>
                    <?=t('alert_modal_title',$dict)?>
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="padding: 30px;">
                <div class="alert-modal-content">
                    <?php if (isset($dict['alert_modal_content'])): ?>
                        <?=nl2br(t('alert_modal_content',$dict))?>
                    <?php else: ?>
                        <p><?=t('alert_bar_message',$dict)?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="modal-footer" style="border-top: 1px solid #e6e6e6;">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?=t('close',$dict)?></button>
            </div>
        </div>
    </div>
</div>

<style>
#alert-info-modal .alert-modal-content {
    font-size: 15px;
    line-height: 1.7;
    color: #444;
}

#alert-info-modal .alert-modal-content p {
    margin-bottom: 15px;
}

#alert-info-modal .alert-modal-content strong {
    color: #0047AB;
    font-weight: 600;
}

#alert-info-modal .modal-header .modal-title {
    font-weight: 600;
    font-size: 18px;
}
</style>
