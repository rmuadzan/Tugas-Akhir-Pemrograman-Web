<!-- application/views/note_input.php -->

<div class="note-input">
    <h2>Buat Catatan</h2>
    <?= form_open('NoteController/addNote') ?>
        <input
            id="title"
            name="title"
            type="text"
            placeholder="Judul"
            class="note-input__title"
        />
        <input
            id="body"
            name="body"
            type="textarea"
            placeholder="Isi"
            class="note-input__body"
        />
    <button type="submit" id="submit">Tambah</button>
    <?= form_close(); ?>
</div>
