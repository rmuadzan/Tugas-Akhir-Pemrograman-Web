<div class="notes-list">
    <?php foreach ($notes as $note) : ?>
        <?php
            $this->load->view('homepage/note_item', array(
                'id' => $note['id'],
                'title' => $note['title'],
                'created_at' => $note['created_at'],
                'body' => $note['body'],
                'is_archived' => $note['is_archived'],
            ));
        ?>
    <?php endforeach; ?>
</div>
