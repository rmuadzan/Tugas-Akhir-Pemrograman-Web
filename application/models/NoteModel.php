<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NoteModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getActiveNotes() {
        $this->db->where('is_archived', 0);
        $query = $this->db->get('notes');
        return $query->result_array();
    }

    public function getArchivedNotes() {
        $this->db->where('is_archived', 1);
        $query = $this->db->get('notes');
        return $query->result_array();
    }

    public function getNoteById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('notes');
        return $query->row();
    }

    public function addNote($data) {
        $this->db->insert('notes', $data);
    }

    public function updateNoteById($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('notes', $data);
    }

    public function deleteNoteById($id) {
        $this->db->where('id', $id);
        $this->db->delete('notes');
    }

    public function updateArchiveStatusById($id) {
        $currentValue = $this->db->get_where('notes', ['id' => $id])->row()->is_archived;
        $newValue = $currentValue == 0 ? 1 : 0;
        $this->db->set('is_archived', $newValue);
        $this->db->where('id', $id);
        $this->db->update('notes');
    }
}
