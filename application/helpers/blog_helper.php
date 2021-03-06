<?php

function safeUrl($sentence) {
    return url_title(convert_accented_characters($sentence), "dash", TRUE);
}

function blogImageUpload($image) {
    $ci = get_instance();
    $config = Array(
        'upload_path' => 'uploads/blog',
        'file_name' => 'blog' . rand(),
        'allowed_types' => 'gif|jpg|png|jpeg',
        'max_size' => 5120,
        'remove_spaces' => true
    );
    $ci->load->library('upload', $config);
    if ($ci->upload->do_upload($image)) {
        $image = $ci->upload->data();
        $result['result'] = 1;
        $result['fileName'] = $image['file_name'];
    } else {
        $result['result'] = 0;
        $result['hata'] = $ci->upload->display_errors();
    }
    return (object) $result;
}
