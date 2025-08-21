<?php

namespace Deepak\LaravelSwal;

class Swal
{
    public function success($message, $title = 'Success')
    {
        session()->flash('swal', [
            'type' => 'success',
            'title' => $title,
            'message' => $message,
        ]);
    }

    public function error($message, $title = 'Error')
    {
        session()->flash('swal', [
            'type' => 'error',
            'title' => $title,
            'message' => $message,
        ]);
    }

    public function info($message, $title = 'Info')
    {
        session()->flash('swal', [
            'type' => 'info',
            'title' => $title,
            'message' => $message,
        ]);
    }
}
