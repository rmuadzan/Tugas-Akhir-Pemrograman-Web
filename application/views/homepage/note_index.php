<?php $this->load->view('homepage/header'); ?>

<div class="note-app__body">
    <?php $this->load->view('homepage/note_input'); ?>
    <div class="notes-box">
        <div class="note-active">
            <h2>Catatan Aktif</h2>
            <?php if (!empty($activeNotes)) : ?>
                <?php
                // Load the NoteList view to display active notes
                $this->load->view('homepage/note_list', array(
                    'notes' => $activeNotes,
                ));
                ?>
            <?php else : ?>
                <p class="notes-list__empty-message">Tidak Ada Catatan Aktif</p>
            <?php endif; ?>
        </div>

        <div class="note-archived">
            <h2>Arsip</h2>
            <?php if (!empty($archivedNotes)) : ?>
                <?php
                // Load the NoteList view to display archived notes
                $this->load->view('homepage/note_list', array(
                    'notes' => $archivedNotes,
                ));
                ?>
            <?php else : ?>
                <p class="notes-list__empty-message">Tidak Ada Catatan Arsip</p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php $this->load->view('homepage/footer'); ?>
