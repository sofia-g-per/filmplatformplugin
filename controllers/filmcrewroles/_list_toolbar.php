<div data-control="toolbar">
    <a
        href="<?= Backend::url('sofyaper/filmplatform/filmcrewroles/create') ?>"
        class="btn btn-primary oc-icon-plus">
        <?= e(trans('backend::lang.list.create_button', ['name'=>'Film Crew Role'])) ?>
    </a>

    <button
        class="btn btn-danger oc-icon-trash-o"
        data-request="onDelete"
        data-list-checked-trigger
        data-list-checked-request
        data-stripe-load-indicator
        disabled>
        <?= e(trans('backend::lang.list.delete_selected')) ?>
    </button>
</div>
