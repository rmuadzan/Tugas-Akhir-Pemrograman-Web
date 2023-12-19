<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NoteController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('NoteModel');
    }

    public function index() {
        $data['activeNotes'] = $this->NoteModel->getActiveNotes();
        $data['archivedNotes'] = $this->NoteModel->getArchivedNotes();
        $this->load->view('homepage/note_index', $data);
        $this->load->helper('form');
    }

    public function addNote() {
        $title = $this->input->post('title');
        $body = $this->input->post('body');

        $data = array(
            'title' => $title,
            'body' => $body
        );

        $this->NoteModel->addNote($data);

        redirect(base_url(''));
    }

    public function editNote($id) {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $title = $this->input->post('title');
            $body = $this->input->post('body');

            $data = array(
                'title' => $title,
                'body' => $body,
            );

            $this->NoteModel->updateNoteById($id, $data);
            redirect('');
        } else {
            $data = $this->NoteModel->getNoteById($id);
            $this->load->view('homepage/note_edit', $data);
            $this->load->helper('form');
        }
    }


    public function deleteNote($id) {
        $this->load->model('NoteModel');
        $this->NoteModel->deleteNoteById($id);
        redirect('');
    }

    public function updateArchiveStatus($id) {
        $this->load->model('NoteModel');
        $this->NoteModel->updateArchiveStatusById($id);
        redirect('');
    }
}
