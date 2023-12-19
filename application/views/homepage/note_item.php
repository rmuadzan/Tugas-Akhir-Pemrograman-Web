<div class="note-item">
    <div class="note-item__content">
        <h4 class="note-item__title"><?php echo $title; ?></h4>
        <p class="note-item__date"><?php echo $created_at; ?></p>
        <p class="note-item__body"><?php echo $body; ?></p>
    </div>
    <div class="note-item__action">
        <a class="note-item__delete-button" href="<?php echo site_url('NoteController/deleteNote/' . $id); ?>">Hapus</a>
        <a class="note-item__edit-button" href="<?php echo site_url('NoteController/editNote/' . $id); ?>">Edit</a>
        <a class="note-item__archive-button" href="<?php echo site_url('NoteController/updateArchiveStatus/' . $id); ?>"><?php echo $is_archived == 0 ? "Arsipkan" : "Aktifkan" ?></a>
    </div>
</div>
