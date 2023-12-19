<?php $this->load->view('homepage/header'); ?>

<div class="note-app__edit_body">
    <div class="note-input">
        <h2>Edit Catatan</h2>
        <?= form_open("NoteController/editNote/{$id}") ?>
            <input
                value="<?php echo $title ?>"
                id="title"
                name="title"
                type="text"
                placeholder="Judul"
                class="note-input__title"
            />
            <input
                value="<?php echo $body ?>"
                id="body"
                name="body"
                type="textarea"
                placeholder="Isi"
                class="note-input__body"
            />
        <button type="submit" id="submit">Edit</button>
        <?= form_close(); ?>
    </div>
</div>

<?php $this->load->view('homepage/footer'); ?>
